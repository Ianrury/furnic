<?php

namespace Importa\Furnic\PHP\FFI\Controller;

use Importa\Furnic\PHP\FFI\App\View;
use Importa\Furnic\PHP\FFI\Config\Database;
use Importa\Furnic\PHP\FFI\Repository\ProductRepository;
use Importa\Furnic\PHP\FFI\Repository\SessionRepository;
use Importa\Furnic\PHP\FFI\Repository\UserRepository;
use Importa\Furnic\PHP\FFI\Service\ProductServis;
use Importa\Furnic\PHP\FFI\Service\WislistServis;

class KeranjangController
{

    public ProductServis $productServiser;
    public WislistServis $wishlistServiser;
    public static string $COOKIE_NAME = 'X-FURNIC-SESSION';
    private \PDO $connection;


    public function __construct()
    {
        $connection = Database::getConnection();

        $productRepository = new ProductRepository($connection);
        $sessionRepository = new SessionRepository($connection);
        $userRepository = new UserRepository($connection);
        $this->connection = $connection;

        $this->productServiser = new ProductServis($productRepository);
        $this->wishlistServiser = new WislistServis(
            $sessionRepository,
            $userRepository,
            $productRepository // ← Tambahkan ini juga
        );
    }

    public function index()
    {

        // query mendapatkan produk yang ada di keranjang untuk user ini
        $sessionId = $_COOKIE[self::$COOKIE_NAME] ?? null;

        $expensif = $this->productServiser->GetProductExpensif();
        if (!$sessionId) {
            echo json_encode(['status' => 'error', 'message' => 'Silakan login terlebih dahulu']);
            return;
        }

        $statement = $this->connection->prepare("SELECT id_user FROM session WHERE id_session = ? LIMIT 1");
        $statement->execute([$sessionId]);
        $session = $statement->fetch(\PDO::FETCH_ASSOC);
        if (!$session || !isset($session['id_user'])) {
            echo json_encode(['status' => 'error', 'message' => 'Sesi tidak valid, silakan login ulang']);
            return;
        }
        $id_customer = $session['id_user'];

        $statement = $this->connection->prepare("
    SELECT 
        cart.id_cart,
        cart.qty AS qty_cart,
        cart.id_detail_product,
        cart.id_motif_produk,
        
        detail_product.warna,
        motif_produk.motif,
        motif_produk.qty AS qty_motif,

        product.id_product,
        product.nama_product,
        product.deskripsi,
        product.harga,
        
        -- Jika promo aktif, gunakan promo.total_promo sebagai diskon, kalau tidak, 0
        CASE 
            WHEN promo.id_promo IS NOT NULL 
                THEN promo.total_promo 
            ELSE 0 
        END AS diskon,
        
        product.spesifikasi,
        product.foto,
        product.qty AS stok,
        product.uom,
        product.nama_vendor

    FROM cart
    INNER JOIN product ON cart.id_product = product.id_product
    LEFT JOIN promo ON product.id_promo = promo.id_promo 
        AND promo.start_date <= CURDATE() 
        AND promo.end_date >= CURDATE()
    LEFT JOIN detail_product ON cart.id_detail_product = detail_product.id
    LEFT JOIN motif_produk ON cart.id_motif_produk = motif_produk.id
    WHERE cart.id_customer = ?
");




        $statement->execute([$id_customer]);
        $productsInCart = $statement->fetchAll(\PDO::FETCH_ASSOC);


        // mecari isi 

        // echo '<pre>';
        // var_dump($productsInCart);
        // echo '</pre>';
        // exit;

        $model = [
            "title" => "Keranjang",
            "expensif" => $expensif,
            "data" => $productsInCart,
            "content" => "Welcome to the keranjang page!",
        ];
        View::render('Keranjang/index', $model);
    }

    public function createKeranjang()
    {
        header('Content-Type: application/json');

        $id_product = $_POST["id"] ?? null;
        $qty = $_POST["qty"] ?? 1;
        $sessionId = $_COOKIE[self::$COOKIE_NAME] ?? null;
        $id_detail_product = $_POST["id_detail_product"] ?? 1;
        $id_motif_produk = $_POST["id_motif_produk"] ?? 1;

        if (!$sessionId) {
            echo json_encode(['status' => 'error', 'message' => 'Silakan login terlebih dahulu']);
            return;
        }

        $statement = $this->connection->prepare("SELECT id_user FROM session WHERE id_session = ? LIMIT 1");
        $statement->execute([$sessionId]);
        $session = $statement->fetch(\PDO::FETCH_ASSOC);

        if (!$session || !isset($session['id_user'])) {
            echo json_encode(['status' => 'error', 'message' => 'Sesi tidak valid, silakan login ulang']);
            return;
        }

        $id_customer = $session['id_user'];

        // Cek apakah produk dengan kombinasi warna dan motif sudah ada di keranjang
        $checkCart = $this->connection->prepare("SELECT * FROM cart WHERE id_customer = ? AND id_product = ? AND id_detail_product = ? AND id_motif_produk = ?");
        $checkCart->execute([$id_customer, $id_product, $id_detail_product, $id_motif_produk]);
        $existing = $checkCart->fetch(\PDO::FETCH_ASSOC);

        if ($existing) {
            // Jika kombinasi warna dan motif sama, update qty
            $update = $this->connection->prepare("UPDATE cart SET qty = qty + ? WHERE id_customer = ? AND id_product = ? AND id_detail_product = ? AND id_motif_produk = ?");
            $update->execute([$qty, $id_customer, $id_product, $id_detail_product, $id_motif_produk]);
        } else {
            // Jika kombinasi berbeda, insert baru
            $insert = $this->connection->prepare("INSERT INTO cart (id_customer, id_product, qty, id_detail_product, id_motif_produk) VALUES (?, ?, ?, ?, ?)");
            $success = $insert->execute([$id_customer, $id_product, $qty, $id_detail_product, $id_motif_produk]);

            if (!$success) {
                $error = $insert->errorInfo();
                echo json_encode([
                    'status' => 'error',
                    'message' => 'Gagal insert ke cart',
                    'error' => $error
                ]);
                return;
            }
        }

        echo json_encode(['status' => 'success', 'message' => 'Produk berhasil ditambahkan ke keranjang']);
    }


    public function deleteKeranjang()
    {
        header('Content-Type: application/json');

        // Ambil dan decode id_cart dari POST
        $idsRaw = $_POST["product_ids"] ?? '[]';
        $ids = json_decode($idsRaw, true); // Decode dari JSON string ke array PHP

        // Debug (opsional)
        // error_log(print_r($ids, true)); 
        // var_dump($ids);

        // Ambil session ID dari cookie
        $sessionId = $_COOKIE[self::$COOKIE_NAME] ?? null;

        // Validasi awal
        if (!$sessionId || !is_array($ids) || empty($ids)) {
            echo json_encode(['status' => 'error', 'message' => 'Permintaan tidak valid']);
            return;
        }

        // Ambil id_user dari session
        $statement = $this->connection->prepare("SELECT id_user FROM session WHERE id_session = ? LIMIT 1");
        $statement->execute([$sessionId]);
        $session = $statement->fetch(\PDO::FETCH_ASSOC);

        if (!$session || !isset($session['id_user'])) {
            echo json_encode(['status' => 'error', 'message' => 'Sesi tidak valid']);
            return;
        }

        $id_customer = $session['id_user'];

        // Loop dan hapus setiap item berdasarkan id_cart
        foreach ($ids as $id_cart) {
            if (!is_numeric($id_cart)) {
                echo json_encode(['status' => 'error', 'message' => 'ID cart tidak valid']);
                return;
            }

            // Hapus berdasarkan id_cart dan id_customer untuk keamanan
            $delete = $this->connection->prepare("DELETE FROM cart WHERE id_cart = ? AND id_customer = ?");
            $success = $delete->execute([$id_cart, $id_customer]);

            if (!$success) {
                $error = $delete->errorInfo();
                echo json_encode(['status' => 'error', 'message' => 'Gagal menghapus item', 'error' => $error]);
                return;
            }
        }

        echo json_encode(['success' => true, 'message' => 'Item berhasil dihapus dari keranjang']);
    }


}
