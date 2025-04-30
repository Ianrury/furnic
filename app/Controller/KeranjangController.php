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
            product.diskon,
            product.spesifikasi,
            product.foto,
            product.qty AS stok,
            product.uom,
            product.nama_vendor
        FROM cart
        INNER JOIN product ON cart.id_product = product.id_product
        LEFT JOIN detail_product ON cart.id_detail_product = detail_product.id
        LEFT JOIN motif_produk ON cart.id_motif_produk = motif_produk.id
        WHERE cart.id_customer = ?
    ");



        $statement->execute([$id_customer]);
        $productsInCart = $statement->fetchAll(\PDO::FETCH_ASSOC);

        // echo '<pre>';
        // var_dump($productsInCart);
        // echo '</pre>';
        // exit;

        $model = [
            "title" => "Keranjang",
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
        // var_dump($session);
        // exit;
        if (!$session || !isset($session['id_user'])) {
            echo json_encode(['status' => 'error', 'message' => 'Sesi tidak valid, silakan login ulang']);
            return;
        }

        $id_customer = $session['id_user'];

        // Cek apakah produk sudah ada di keranjang
        $checkCart = $this->connection->prepare("SELECT * FROM cart WHERE id_customer = ? AND id_product = ?");
        $checkCart->execute([$id_customer, $id_product]);
        $existing = $checkCart->fetch(\PDO::FETCH_ASSOC);

        if ($existing) {
            // Jika ada, update qty
            $update = $this->connection->prepare("UPDATE cart SET qty = qty + ? WHERE id_customer = ? AND id_product = ?");
            $update->execute([$qty, $id_customer, $id_product]);
        } else {
            // Jika tidak ada, insert baru
            // var_dump($id_detail_product);
            // var_dump($id_motif_produk);
            // exit;
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

        $ids = $_POST["id"] ?? [];
        $sessionId = $_COOKIE[self::$COOKIE_NAME] ?? null;

        if (!$sessionId || !is_array($ids) || empty($ids)) {
            echo json_encode(['status' => 'error', 'message' => 'Permintaan tidak valid']);
            return;
        }

        $statement = $this->connection->prepare("SELECT id_user FROM session WHERE id_session = ? LIMIT 1");
        $statement->execute([$sessionId]);
        $session = $statement->fetch(\PDO::FETCH_ASSOC);

        if (!$session || !isset($session['id_user'])) {
            echo json_encode(['status' => 'error', 'message' => 'Sesi tidak valid']);
            return;
        }

        $id_customer = $session['id_user'];

        $placeholders = implode(',', array_fill(0, count($ids), '?'));
        $params = array_merge([$id_customer], $ids);

        $sql = "DELETE FROM cart WHERE id_customer = ? AND id_product IN ($placeholders)";
        $delete = $this->connection->prepare($sql);
        $success = $delete->execute($params);

        if (!$success) {
            $error = $delete->errorInfo();
            echo json_encode(['status' => 'error', 'message' => 'Gagal menghapus', 'error' => $error]);
            return;
        }

        echo json_encode(['status' => 'success', 'message' => 'Produk berhasil dihapus']);
    }
}
