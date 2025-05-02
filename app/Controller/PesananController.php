<?php

namespace Importa\Furnic\PHP\FFI\Controller;

use Importa\Furnic\PHP\FFI\App\View;
use Importa\Furnic\PHP\FFI\Config\Database;
use Importa\Furnic\PHP\FFI\Repository\ProductRepository;
use Importa\Furnic\PHP\FFI\Repository\SessionRepository;
use Importa\Furnic\PHP\FFI\Repository\UserRepository;
use Importa\Furnic\PHP\FFI\Service\ProductServis;
use Importa\Furnic\PHP\FFI\Service\WislistServis;

class PesananController
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

        $jenisPengiriman = $this->productServiser->GetPengiriman();
        $toko = $this->productServiser->getAllToko();

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
        $id_customer = $session['id_user']; // Ambil dari session

        $userQuery = $this->connection->prepare("SELECT id_customer, nama, email, no_hp, alamat, kode_pos, detail FROM customer WHERE id_customer = ?");
        $userQuery->execute([$id_customer]);
        $user = $userQuery->fetch(\PDO::FETCH_ASSOC);

        // Hapus awalan +62 dari no_hp jika ada
        if ($user && isset($user['no_hp'])) {
            $user['no_hp'] = preg_replace('/^\+62/', '', $user['no_hp']);
        }
        if (!$user) {
            echo json_encode(['status' => 'error', 'message' => 'User tidak ditemukan']);
            return;
        }

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


        $subtotal = 0;
        $totalDiskon = 0;

        foreach ($productsInCart as $item) {
            $harga = $item['harga'];
            $qty = $item['qty_cart'];
            $diskonPersen = floatval($item['diskon']);

            $itemSubtotal = $harga * $qty;
            $itemDiskon = $itemSubtotal * ($diskonPersen / 100);

            $subtotal += $itemSubtotal;
            $totalDiskon += $itemDiskon;
        }

        $totalPembayaran = $subtotal - $totalDiskon;
        $totalOngkir = 0;

        // echo '<pre>';
        // var_dump($user);
        // echo '</pre>';
        // exit;
        $model = [
            "title" => "Pesanan",
            "jenisPengiriman" => $jenisPengiriman,
            "subtotal" => $subtotal,
            'user' => $user,
            'total_diskon' => $totalDiskon,
            'total_pembayaran' => $totalPembayaran,
            'total_ongkir' => $totalOngkir,
            "toko" => $toko,
            "data" => $productsInCart,
            "content" => "Welcome to the Pesanan page!",
        ];
        View::render('Pesanan/pesanan', $model);
    }
}
