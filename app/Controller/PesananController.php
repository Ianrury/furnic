<?php

namespace Importa\Furnic\PHP\FFI\Controller;

use Importa\Furnic\PHP\FFI\App\View;
use Importa\Furnic\PHP\FFI\Config\Database;
use Importa\Furnic\PHP\FFI\Repository\ProductRepository;
use Importa\Furnic\PHP\FFI\Repository\SessionRepository;
use Importa\Furnic\PHP\FFI\Repository\UserRepository;
use Importa\Furnic\PHP\FFI\Service\ProductServis;
use Importa\Furnic\PHP\FFI\Service\WislistServis;
use Importa\Furnic\PHP\FFI\App\Email;

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
        // Start the session if not already started
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

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

        // Check if we have selected cart IDs in the session
        $selectedCartIds = $_SESSION['selected_cart_ids'] ?? [];
        // var_dump($selectedCartIds); // Debugging line to check the selected cart IDs
        // exit;

        if (empty($selectedCartIds)) {

            header("Location: /keranjang"); // Redirect to keranjang if no cart IDs are selected
            exit;
        }

        // Convert cart IDs to a format suitable for SQL IN clause
        $placeholders = implode(',', array_fill(0, count($selectedCartIds), '?'));

        // Modify the query to include the cart ID filter
        $query = "
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
            AND cart.id_cart IN ($placeholders)
        ";

        // Prepare the query parameters: first is the customer ID, then all cart IDs
        $queryParams = array_merge([$id_customer], $selectedCartIds);

        $statement = $this->connection->prepare($query);
        $statement->execute($queryParams);
        $productsInCart = $statement->fetchAll(\PDO::FETCH_ASSOC);

        // If no products found with the given IDs, handle the error
        if (empty($productsInCart)) {
            echo json_encode(['status' => 'error', 'message' => 'Selected products not found in your cart']);
            return;
        }

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


    public function createPesanan()
    {


        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        $sessionId = $_COOKIE[self::$COOKIE_NAME] ?? null;
        if (!$sessionId) {
            echo json_encode(['status' => 'error', 'message' => 'Silakan login terlebih dahulu']);
            return;
        }

        // Validasi session
        $stmt = $this->connection->prepare("SELECT id_user FROM session WHERE id_session = ? LIMIT 1");
        $stmt->execute([$sessionId]);
        $session = $stmt->fetch(\PDO::FETCH_ASSOC);
        if (!$session || !isset($session['id_user'])) {
            echo json_encode(['status' => 'error', 'message' => 'Sesi tidak valid, silakan login ulang']);
            return;
        }

        $id_customer = $session['id_user'];
        $selectedCartIds = $_SESSION['selected_cart_ids'] ?? [];

        if (empty($selectedCartIds)) {
            echo json_encode(['status' => 'error', 'message' => 'Kembali ke keranjang untuk memilih produk']);
            return;
        }

        // Ambil dari POST dan pastikan id_toko dan id_pengiriman bisa null
        $id_toko = isset($_POST['id_toko']) && $_POST['id_toko'] !== '' ? (int) $_POST['id_toko'] : null;
        $id_pengiriman = isset($_POST['id_pengiriman']) && $_POST['id_pengiriman'] !== '' ? (int) $_POST['id_pengiriman'] : null;

        // Validasi apakah data pengiriman dan toko kosong
        if ($id_toko === null && $id_pengiriman === null) {
            echo json_encode(['status' => 'error', 'message' => 'Data pengiriman atau toko belum lengkap']);
            return;
        }

        // Membuat query untuk cart yang terpilih
        $in = str_repeat('?,', count($selectedCartIds) - 1) . '?';

        // Ambil semua cart terpilih
        $stmt = $this->connection->prepare("SELECT c.*, p.harga, p.id_promo, pr.total_promo,
                                                   mp.qty AS motif_qty, mp.id AS id_motif_produk, dp.id AS id_detail_product
                                            FROM cart c
                                            JOIN product p ON c.id_product = p.id_product
                                            LEFT JOIN promo pr ON p.id_promo = pr.id_promo
                                            LEFT JOIN detail_product dp ON c.id_detail_product = dp.id
                                            LEFT JOIN motif_produk mp ON c.id_motif_produk = mp.id
                                            WHERE c.id_cart IN ($in)");
        $stmt->execute($selectedCartIds);
        $carts = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        date_default_timezone_set('Asia/Jakarta');
        $now = date('Y-m-d H:i:s');

        $limitPayment = date('Y-m-d H:i:s', strtotime('+2 hours'));

        foreach ($carts as $cart) {
            $qty = (int) $cart['qty'];
            $harga = (int) $cart['harga'];
            $diskon = (float) ($cart['total_promo'] ?? 0);
            $totalHarga = ($harga - $diskon) * $qty;

            // Masukkan data pesanan ke tabel pesanan
            $stmtInsert = $this->connection->prepare("INSERT INTO pesanan 
                (id_customer, id_product, id_pricelist, id_promo, qty, total_harga, 
                tanggal_pesanan, done_payment, limit_payment, status_pembayaran, 
                foto_pembayaran, id_jenis_pengiriman, id_toko, id_detail_product, id_motif_produk)
                VALUES (?, ?, NULL, ?, ?, ?, ?, NULL, ?, 'menunggu pembayaran', NULL, ?, ?, ?, ?)");

            $stmtInsert->execute([
                $id_customer,
                $cart['id_product'],
                $cart['id_promo'],
                $qty,
                $totalHarga,
                $now,  // Menggunakan waktu yang sudah diformat
                $limitPayment,
                $id_pengiriman,
                $id_toko,
                $cart['id_detail_product'],
                $cart['id_motif_produk']
            ]);

            // Ambil created_at yang baru saja dimasukkan
            $created_at = $this->connection->lastInsertId();  // Ambil ID terakhir yang dimasukkan

            // Jika ingin menyesuaikan dengan limitPayment, Anda bisa melakukan query untuk mengambil waktu created_at
            $stmtGetCreatedAt = $this->connection->prepare("SELECT created_at FROM pesanan WHERE id_pesanan = ?");
            $stmtGetCreatedAt->execute([$created_at]);
            $created_atResult = $stmtGetCreatedAt->fetch(\PDO::FETCH_ASSOC);
            $created_at = $created_atResult['created_at'] ?? null;

            // Gunakan $created_at untuk menentukan limitPayment, jika diinginkan
            $limitPayment = date('Y-m-d H:i:s', strtotime($created_at . ' +2 hours'));


            // Update stok produk
            $stmtUpdateProduct = $this->connection->prepare("UPDATE product SET qty = qty - ? WHERE id_product = ?");
            $stmtUpdateProduct->execute([$qty, $cart['id_product']]);

            // Update stok motif produk
            $stmtUpdateMotif = $this->connection->prepare("UPDATE motif_produk SET qty = qty - ? WHERE id = ?");
            $stmtUpdateMotif->execute([$qty, $cart['id_motif_produk']]);
        }

        // Hapus cart yang sudah dipesan
        $stmtDeleteCart = $this->connection->prepare("DELETE FROM cart WHERE id_cart IN ($in)");
        $stmtDeleteCart->execute($selectedCartIds);

        // Menyiapkan pesan email dengan informasi lebih lengkap
        $emailTujuan = "ianroeri@gmail.com";
        $judulEmail = "Konfirmasi Pesanan Berhasil";

        // Menyusun pesan email dengan informasi yang lebih detail
        $isiEmail = "Terima kasih telah memesan di toko kami.\n\n";
        $isiEmail .= "Detail Pesanan Anda:\n";

        // Menambahkan informasi produk yang dipesan
        foreach ($carts as $cart) {
            $qty = (int) $cart['qty'];
            $harga = (int) $cart['harga'];
            $diskon = (float) ($cart['total_promo'] ?? 0);
            $totalHarga = ($harga - $diskon) * $qty;

            $isiEmail .= "Produk: " . $cart['id_product'] . "\n";
            $isiEmail .= "Jumlah: " . $qty . "\n";
            $isiEmail .= "Harga: " . number_format($harga, 0, ',', '.') . "\n";
            $isiEmail .= "Diskon: " . number_format($diskon, 0, ',', '.') . "\n";
            $isiEmail .= "Total Harga: " . number_format($totalHarga, 0, ',', '.') . "\n\n";
        }

        $isiEmail .= "Total Pembayaran: " . number_format($totalHarga, 0, ',', '.') . "\n";
        $isiEmail .= "Harap melakukan pembayaran sebelum " . $limitPayment . ".\n\n";
        $isiEmail .= "Terima kasih atas kepercayaan Anda berbelanja di toko kami!";

        // Mengirim email konfirmasi pesanan
        $emailSent = Email::send($emailTujuan, $judulEmail, $isiEmail);

        unset($_SESSION['selected_cart_ids']);

        if ($emailSent) {
            echo json_encode([
                'status' => 'success',
                'message' => 'Pesanan berhasil dibuat dan dikirim ke email: ' . $emailTujuan
            ]);
        } else {
            echo json_encode([
                'status' => 'warning',
                'message' => 'Pesanan berhasil dibuat, namun gagal mengirim email ke: ' . $emailTujuan
            ]);
        }

    }

    public function pembayaran()
    {
        $model = [
            "title" => "Pembayaran",
            "content" => "Welcome to the Pembayaran page!",
        ];
        View::render('Pesanan/pembayaran', $model);
    }


}
