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

    public function cekQuantity()
    {
        // Start the session if not already started
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        header('Content-Type: application/json');
        $sessionId = $_COOKIE[self::$COOKIE_NAME] ?? null;

        if (!$sessionId) {
            echo json_encode(['status' => 'error', 'message' => 'Silakan login terlebih dahulu']);
            return;
        }

        if (empty($_POST['product_ids'])) {
            echo json_encode(['status' => 'error', 'message' => 'Tidak ada produk yang dipilih']);
            return;
        }

        $cartIds = json_decode($_POST['product_ids'], true); // array of id_cart
        $notAvailable = [];

        foreach ($cartIds as $idCart) {
            // Ambil data cart: id_product, id_detail_product, id_motif_produk, qty
            $stmt = $this->connection->prepare("
                SELECT 
                    c.qty AS qty_cart,
                    c.id_product,
                    c.id_detail_product,
                    c.id_motif_produk,
                    p.nama_product,
                    m.qty AS qty_motif
                FROM cart c
                JOIN product p ON c.id_product = p.id_product
                JOIN motif_produk m ON m.id = c.id_motif_produk
                WHERE c.id_cart = ?
            ");
            $stmt->execute([$idCart]);
            $row = $stmt->fetch(\PDO::FETCH_ASSOC);

            if (!$row) {
                $notAvailable[] = "Data keranjang ID $idCart tidak ditemukan";
                continue;
            }

            $qtyCart = (int) $row['qty_cart'];
            $qtyMotif = (int) $row['qty_motif'];

            if ($qtyCart > $qtyMotif) {
                $notAvailable[] = $row['nama_product'] . ' (Stok tidak cukup)';
            }
        }

        if (!empty($notAvailable)) {
            echo json_encode([
                'status' => 'error',
                'message' => 'Produk gagal diproses: ' . implode(', ', $notAvailable)
            ]);
            return;
        }

        // Cek dan hapus session sebelumnya jika ada
        if (isset($_SESSION['selected_cart_ids'])) {
            // Log data session lama sebelum dihapus (untuk debugging)
            error_log('Session lama dihapus: ' . json_encode($_SESSION['selected_cart_ids']));

            // Hapus session selected_cart_ids yang lama
            unset($_SESSION['selected_cart_ids']);
        }

        // Cek dan hapus session sebelumnya jika ada
        if (isset($_SESSION['product'])) {
            // Log data session lama sebelum dihapus (untuk debugging)
            error_log('Session lama dihapus: ' . json_encode($_SESSION['product']));

            // Hapus session product yang lama
            unset($_SESSION['product']);
        }

        // Simpan ke session jika semua valid
        $_SESSION['selected_cart_ids'] = $cartIds;

        // Log data session baru yang disimpan
        error_log('Session baru disimpan: ' . json_encode($_SESSION['selected_cart_ids']));

        echo json_encode([
            'status' => 'success',
            'message' => 'Produk berhasil dipilih'
        ]);
    }

    public function createPesanan()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        header('Content-Type: application/json');

        $id_product = $_POST["id"] ?? null;
        $qty = isset($_POST["qty"]) ? (int) $_POST["qty"] : 1;
        $sessionId = $_COOKIE[self::$COOKIE_NAME] ?? null;
        $id_detail_product = $_POST["id_detail_product"] ?? null;
        $id_motif_produk = $_POST["id_motif_produk"] ?? null;

        // var_dump($id_product, $qty, $sessionId, $id_detail_product, $id_motif_produk);

        if (!$sessionId || !$id_product || !$id_detail_product || !$id_motif_produk) {
            echo json_encode(['status' => 'error', 'message' => 'Data tidak lengkap atau belum login']);
            return;
        }

        // Ambil data user dari sesi
        $statement = $this->connection->prepare("SELECT id_user FROM session WHERE id_session = ? LIMIT 1");
        $statement->execute([$sessionId]);
        $session = $statement->fetch(\PDO::FETCH_ASSOC);

        if (!$session || !isset($session['id_user'])) {
            echo json_encode(['status' => 'error', 'message' => 'Sesi tidak valid, silakan login ulang']);
            return;
        }

        $id_customer = $session['id_user'];

        // 1. Cek stok motif awal
        $cekMotif = $this->connection->prepare("SELECT * FROM motif_produk WHERE id = ? AND qty >= ?");
        $cekMotif->execute([$id_motif_produk, $qty]);
        $rowMotif = $cekMotif->fetch(\PDO::FETCH_ASSOC);

        // Jika stok motif tidak cukup, cari alternatif motif
        if (!$rowMotif) {
            $getWarna = $this->connection->prepare("SELECT warna FROM detail_product WHERE id = ?");
            $getWarna->execute([$id_detail_product]);
            $detail = $getWarna->fetch(\PDO::FETCH_ASSOC);

            if (!$detail) {
                echo json_encode(['status' => 'error', 'message' => 'Detail produk tidak ditemukan']);
                return;
            }

            $warna = $detail['warna'];

            // a. Cek motif lain dengan detail_product sama
            $stmt1 = $this->connection->prepare("SELECT * FROM motif_produk WHERE id_detail_product = ? AND qty >= ? LIMIT 1");
            $stmt1->execute([$id_detail_product, $qty]);
            $rowMotif = $stmt1->fetch(\PDO::FETCH_ASSOC);

            // b. Cek motif lain dengan warna yang sama
            if (!$rowMotif) {
                $stmt2 = $this->connection->prepare("
                    SELECT mp.* FROM motif_produk mp
                    JOIN detail_product dp ON mp.id_detail_product = dp.id
                    WHERE dp.id_product = ? AND dp.warna = ? AND mp.qty >= ? LIMIT 1
                ");
                $stmt2->execute([$id_product, $warna, $qty]);
                $rowMotif = $stmt2->fetch(\PDO::FETCH_ASSOC);
            }

            // c. Cek semua motif lain dalam produk
            if (!$rowMotif) {
                $stmt3 = $this->connection->prepare("
                    SELECT mp.* FROM motif_produk mp
                    JOIN detail_product dp ON mp.id_detail_product = dp.id
                    WHERE dp.id_product = ? AND mp.qty >= ? LIMIT 1
                ");
                $stmt3->execute([$id_product, $qty]);
                $rowMotif = $stmt3->fetch(\PDO::FETCH_ASSOC);
            }

            // d. Jika semua gagal
            if (!$rowMotif) {
                echo json_encode(['status' => 'error', 'message' => 'Stok pada produk ini kosong']);
                return;
            }

            // Update dengan motif alternatif
            $id_detail_product = $rowMotif['id_detail_product'];
            $id_motif_produk = $rowMotif['id'];
        }

        // Cek ulang detail_product
        $cekDetailProduct = $this->connection->prepare("SELECT * FROM detail_product WHERE id = ?");
        $cekDetailProduct->execute([$id_detail_product]);
        $row = $cekDetailProduct->fetch(\PDO::FETCH_ASSOC);

        if (!$row) {
            echo json_encode(['status' => 'error', 'message' => 'Barang tidak ada di produk']);
            return;
        }

        // Validasi stok utama
        $cekQty = $this->connection->prepare("SELECT * FROM product WHERE id_product = ? AND qty >= ?");
        $cekQty->execute([$id_product, $qty]);
        $row = $cekQty->fetch(\PDO::FETCH_ASSOC);

        if (!$row) {
            echo json_encode(['status' => 'error', 'message' => 'Stok tidak cukup']);
            return;
        }


        // Cek dan hapus session sebelumnya jika ada
        if (isset($_SESSION['selected_cart_ids'])) {
            // Log data session lama sebelum dihapus (untuk debugging)
            error_log('Session lama dihapus: ' . json_encode($_SESSION['selected_cart_ids']));

            // Hapus session selected_cart_ids yang lama
            unset($_SESSION['selected_cart_ids']);
        }

        // Simpan ke tabel cart
        $insert = $this->connection->prepare("
                INSERT INTO cart (id_customer, id_product, id_detail_product, id_motif_produk, qty)
                VALUES (?, ?, ?, ?, ?)
            ");
        $insert->execute([$id_customer, $id_product, $id_detail_product, $id_motif_produk, $qty]);

        $id_cart = $this->connection->lastInsertId();

        // Simpan ID cart ke session
        $_SESSION['selected_cart_ids'] = [
            $id_cart
        ];

        // Output sukses
        echo json_encode([
            'status' => 'success',
            'message' => 'Produk berhasil dipilih untuk checkout',
            'id_cart' => $id_cart
        ]);
    }


    public function PlesQtyKeranjang()
    {
        header('Content-Type: application/json');

        $sessionId = $_COOKIE[self::$COOKIE_NAME] ?? null;
        $cartIds = json_decode($_POST['product_ids'], true); // array of id_cart

        if (!$sessionId) {
            echo json_encode(['status' => 'error', 'message' => 'Silakan login terlebih dahulu']);
            return;
        }

        if (empty($cartIds)) {
            echo json_encode(['status' => 'error', 'message' => 'Tidak ada produk yang dipilih']);
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

        // Loop dan update setiap item berdasarkan id_cart
        foreach ($cartIds as $id_cart) {
            if (!is_numeric($id_cart)) {
                echo json_encode(['status' => 'error', 'message' => 'ID cart tidak valid']);
                return;
            }

            // Update berdasarkan id_cart dan id_customer untuk keamanan
            $update = $this->connection->prepare("UPDATE cart SET qty = qty + 1 WHERE id_cart = ? AND id_customer = ?");
            $success = $update->execute([$id_cart, $id_customer]);

            if (!$success) {
                $error = $update->errorInfo();
                echo json_encode(['status' => 'error', 'message' => 'Gagal mengupdate item', 'error' => $error]);
                return;
            }
        }

        echo json_encode(['success' => true, 'message' => 'Item berhasil diperbarui di keranjang']);
    }

    public function MinusQtyKeranjang()
    {
        header('Content-Type: application/json');

        $sessionId = $_COOKIE[self::$COOKIE_NAME] ?? null;
        $cartIds = json_decode($_POST['product_ids'], true); // array of id_cart

        if (!$sessionId) {
            echo json_encode(['status' => 'error', 'message' => 'Silakan login terlebih dahulu']);
            return;
        }

        if (empty($cartIds)) {
            echo json_encode(['status' => 'error', 'message' => 'Tidak ada produk yang dipilih']);
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

        // Loop dan update setiap item berdasarkan id_cart
        foreach ($cartIds as $id_cart) {
            if (!is_numeric($id_cart)) {
                echo json_encode(['status' => 'error', 'message' => 'ID cart tidak valid']);
                return;
            }

            // Update berdasarkan id_cart dan id_customer untuk keamanan
            $update = $this->connection->prepare("UPDATE cart SET qty = qty - 1 WHERE id_cart = ? AND id_customer = ?");
            $success = $update->execute([$id_cart, $id_customer]);

            if (!$success) {
                $error = $update->errorInfo();
                echo json_encode(['status' => 'error', 'message' => 'Gagal mengupdate item', 'error' => $error]);
                return;
            }
        }

        echo json_encode(['success' => true, 'message' => 'Item berhasil diperbarui di keranjang']);
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
