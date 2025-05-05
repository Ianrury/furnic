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
            header("Location: /keranjang"); // Redirect to keranjang if no products found
            exit;
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

        // Validasi sesi pengguna
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

        // Ambil data inputan pengiriman dan toko
        $id_toko = isset($_POST['id_toko']) && $_POST['id_toko'] !== '' ? (int) $_POST['id_toko'] : null;
        $id_pengiriman = isset($_POST['id_pengiriman']) && $_POST['id_pengiriman'] !== '' ? (int) $_POST['id_pengiriman'] : null;

        if ($id_toko === null && $id_pengiriman === null) {
            echo json_encode(['status' => 'error', 'message' => 'Data pengiriman atau toko belum lengkap']);
            return;
        }

        $in = str_repeat('?,', count($selectedCartIds) - 1) . '?';

        // Ambil data cart beserta promo
        $stmt = $this->connection->prepare("
            SELECT c.*, p.harga, p.nama_product as nama_produk, p.id_promo, pr.total_promo, pr.jenis_promo,
                   mp.qty AS motif_qty, mp.id AS id_motif_produk, dp.id AS id_detail_product
            FROM cart c
            JOIN product p ON c.id_product = p.id_product
            LEFT JOIN promo pr ON p.id_promo = pr.id_promo
            LEFT JOIN detail_product dp ON c.id_detail_product = dp.id
            LEFT JOIN motif_produk mp ON c.id_motif_produk = mp.id
            WHERE c.id_cart IN ($in)
        ");
        $stmt->execute($selectedCartIds);
        $carts = $stmt->fetchAll(\PDO::FETCH_ASSOC);

        // Ambil data customer
        $stmtCustomer = $this->connection->prepare("
            SELECT nama, email, alamat, no_hp FROM customer WHERE id_customer = ?
        ");
        $stmtCustomer->execute([$id_customer]);
        $customer = $stmtCustomer->fetch(\PDO::FETCH_ASSOC);

        date_default_timezone_set('Asia/Jakarta');
        $now = date('Y-m-d H:i:s');
        $limitPayment = date('Y-m-d H:i:s', strtotime('+2 hours'));
        // var_dump($now, $limitPayment);
        // exit;
        $nomorPesanan = 'INV-' . date('Ymd') . '-' . rand(1000, 9999);

        $totalAllOrders = 0;
        $detailPesanan = [];
        $productItems = [];
        $totalDiskon = 0;
        $subtotalProduk = 0;
        $biayaPengirimanTotal = 0;
        $diskonPengirimanTotal = 0;

        // Pengiriman
        $pengirima = $this->connection->prepare("SELECT nama, harga, diskon FROM jenis_pengiriman WHERE id = ?");
        $pengirima->execute([$id_pengiriman]);
        $pengirima = $pengirima->fetch(\PDO::FETCH_ASSOC);
        $nama_pengiriman = $pengirima['nama'] ?? 'Ambil di Toko';

        if ($pengirima) {
            $hargaAsli = (float) $pengirima['harga'];
            $diskonNominal = (float) $pengirima['diskon']; // langsung nominal

            // Pastikan diskon tidak lebih besar dari harga
            $diskonNominal = min($diskonNominal, $hargaAsli);

            // Hitung biaya pengiriman akhir setelah diskon
            $biayaPengiriman = $hargaAsli - $diskonNominal;

            // Simpan untuk total
            $biayaPengirimanTotal = $biayaPengiriman;
            $diskonPengirimanTotal = $diskonNominal;
        } else {
            $biayaPengiriman = 0;
            $diskonNominal = 0;
            $biayaPengirimanTotal = 0;
            $diskonPengirimanTotal = 0;
        }


        foreach ($carts as $cart) {
            $qty = (int) $cart['qty'];
            $harga = (int) $cart['harga'];
            $diskon = 0;

            if (!empty($cart['id_promo']) && !empty($cart['total_promo'])) {
                $diskon = $harga * ((float) $cart['total_promo'] / 100);
            }

            $hargaSetelahDiskon = $harga - $diskon;
            $totalHarga = $hargaSetelahDiskon * $qty;
            $subtotalProduk += $totalHarga;
            $totalDiskon += $diskon * $qty;

            $productItems[] = [
                'nama_produk' => $cart['nama_produk'],
                'qty' => $qty,
                'harga' => $harga,
                'diskon' => $diskon,
                'total' => $totalHarga
            ];

            $detailPesanan[] = [
                'biasa_pengiriman' => [''],
                'qty' => $qty,
                'nama_pengiriman' => $nama_pengiriman,
                'harga' => $harga,
                'diskon' => $diskon,
                'diskonPengiriman' => $diskonNominal,
                'biayaPengiriman' => $biayaPengiriman,
                'totalHarga' => $totalHarga,
            ];

            // Generate token pembayaran unik
            $tokenPembayaran = bin2hex(random_bytes(16)); // 32 karakter acak
            $pembayaranLink = "http://localhost:8080/pembayaran?token=" . $tokenPembayaran;
            // Simpan token ke dalam pesanan saat insert
            $stmtInsert = $this->connection->prepare("
    INSERT INTO pesanan (
        id_customer, id_product, id_pricelist, id_promo, qty, total_harga,
        tanggal_pesanan, done_payment, limit_payment, status_pembayaran,
        foto_pembayaran, id_jenis_pengiriman, id_toko, id_detail_product, id_motif_produk,
        nomor_pesanan, payment_token
    )
    VALUES (?, ?, NULL, ?, ?, ?, ?, NULL, ?, 'menunggu pembayaran', NULL, ?, ?, ?, ?, ?, ?)
");
            $stmtInsert->execute([
                $id_customer,
                $cart['id_product'],
                $cart['id_promo'],
                $qty,
                $totalHarga,
                $now,
                $limitPayment,
                $id_pengiriman,
                $id_toko,
                $cart['id_detail_product'],
                $cart['id_motif_produk'],
                $nomorPesanan,
                $tokenPembayaran
            ]);


            $createdId = $this->connection->lastInsertId();

            // Ambil created_at dari pesanan
            $stmtCreated = $this->connection->prepare("SELECT created_at FROM pesanan WHERE id_pesanan = ?");
            $stmtCreated->execute([$createdId]);
            $created_at = $stmtCreated->fetchColumn();

            // Update limit pembayaran
            $limitPayment = date('Y-m-d H:i:s', strtotime($created_at . ' +2 hours'));

            // Update stok
            $stmtUpdateProduct = $this->connection->prepare("UPDATE product SET qty = qty - ? WHERE id_product = ?");
            $stmtUpdateProduct->execute([$qty, $cart['id_product']]);

            if (!empty($cart['id_motif_produk'])) {
                $stmtUpdateMotif = $this->connection->prepare("UPDATE motif_produk SET qty = qty - ? WHERE id = ?");
                $stmtUpdateMotif->execute([$qty, $cart['id_motif_produk']]);
            }
        }

        // Total keseluruhan pesanan
        $totalAllOrders = $subtotalProduk + $biayaPengirimanTotal;

        // Hapus cart
        $stmtDeleteCart = $this->connection->prepare("DELETE FROM cart WHERE id_cart IN ($in)");
        $stmtDeleteCart->execute($selectedCartIds);

        // Membuat HTML untuk setiap produk
        $productItemsHtml = '';
        foreach ($productItems as $item) {
            $productItemsHtml .= '
            <div class="product-item">
                <div>
                    <strong>' . htmlspecialchars($item['nama_produk']) . '</strong> x ' . $item['qty'] . '
                </div>
                <div>
                    <div>Harga: Rp ' . number_format($item['harga'], 0, ',', '.') . '</div>
                    ' . ($item['diskon'] > 0 ? '<div>Diskon: Rp ' . number_format($item['diskon'] * $item['qty'], 0, ',', '.') . '</div>' : '') . '
                    <div><strong>Total: Rp ' . number_format($item['total'], 0, ',', '.') . '</strong></div>
                </div>
            </div>';
        }

        // Template email
        $emailTemplate = '<!DOCTYPE html>
    <html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Konfirmasi Pesanan</title>
        <style>
            body {
                font-family: \'Segoe UI\', Tahoma, Geneva, Verdana, sans-serif;
                line-height: 1.6;
                color: #333;
                background-color: #f9f9f9;
                margin: 0;
                padding: 0;
            }
            .container {
                max-width: 600px;
                margin: 0 auto;
                padding: 20px;
                background-color: #ffffff;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }
            .header {
                text-align: center;
                padding: 20px 0;
                border-bottom: 1px solid #eaeaea;
            }
            .logo {
                max-width: 150px;
                height: auto;
            }
            .content {
                padding: 20px 0;
            }
            h1 {
                color: #4CAF50;
                margin-bottom: 20px;
            }
            h2 {
                color: #2E7D32;
                border-bottom: 1px solid #eaeaea;
                padding-bottom: 10px;
                margin-top: 30px;
            }
            .order-details {
                background-color: #f9f9f9;
                padding: 15px;
                border-radius: 5px;
                margin: 20px 0;
            }
            .product-item {
                border-bottom: 1px dashed #eaeaea;
                padding: 10px 0;
                display: flex;
                justify-content: space-between;
            }
            .product-item:last-child {
                border-bottom: none;
            }
            .summary {
                margin-top: 20px;
                background-color: #e8f5e9;
                padding: 15px;
                border-radius: 5px;
            }
            .total-row {
                display: flex;
                justify-content: space-between;
                padding: 8px 0;
                font-weight: bold;
            }
            .total-price {
                color: #2E7D32;
                font-size: 20px;
            }
            .shipping-info {
                margin: 20px 0;
                padding: 15px;
                background-color: #e3f2fd;
                border-radius: 5px;
            }
            .footer {
                text-align: center;
                padding: 20px;
                border-top: 1px solid #eaeaea;
                color: #757575;
                font-size: 14px;
            }
            .button {
                display: inline-block;
                background-color: #4CAF50;
                color: white;
                padding: 10px 20px;
                text-decoration: none;
                border-radius: 5px;
                margin-top: 20px;
            }
            .contact {
                margin-top: 20px;
                text-align: center;
            }
            @media only screen and (max-width: 600px) {
                .container {
                    width: 100%;
                    padding: 10px;
                }
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="header">
                <h1>Konfirmasi Pesanan</h1>
                <p>Terima kasih telah berbelanja di toko kami!</p>
            </div>
            
            <div class="content">
                <p>Halo <strong>' . htmlspecialchars($customer['nama'] ?? 'Pelanggan') . '</strong>,</p>
                <p>Pesanan Anda telah kami terima dan sedang diproses. Berikut adalah detail pesanan Anda:</p>
                
                <h2>Detail Pesanan</h2>
                <div class="order-details">
                    <p><strong>Nomor Pesanan:</strong> ' . $nomorPesanan . '</p>
                    <p><strong>Tanggal Pesanan:</strong> ' . date('d F Y H:i', strtotime($now)) . '</p>
                    <p><strong>Batas Waktu Pembayaran:</strong> ' . date('d F Y H:i', strtotime($limitPayment)) . '</p>
                </div>
                
                <h2>Produk yang Dipesan</h2>
                <div class="product-items">
                    ' . $productItemsHtml . '
                </div>
                
                <div class="shipping-info">
                    <h2>Informasi Pengiriman</h2>
                    <p><strong>Metode Pengiriman:</strong> ' . htmlspecialchars($nama_pengiriman) . '</p>
                    <p><strong>Biaya Pengiriman:</strong> Rp ' . number_format($biayaPengirimanTotal + $diskonPengirimanTotal, 0, ',', '.') . '</p>
                    ' . ($diskonPengirimanTotal > 0 ? '<p><strong>Diskon Pengiriman:</strong> Rp ' . number_format($diskonPengirimanTotal, 0, ',', '.') . '</p>' : '') . '
                    <p><strong>Alamat Pengiriman:</strong> ' . htmlspecialchars($customer['alamat'] ?? '-') . '</p>
                </div>
                
                <div class="summary">
                    <h2>Ringkasan Pembayaran</h2>
                    <div class="total-row">
                        <span>Subtotal Produk:</span>
                        <span>Rp ' . number_format($subtotalProduk + $totalDiskon, 0, ',', '.') . '</span>
                    </div>
                    ' . ($totalDiskon > 0 ? '<div class="total-row">
                        <span>Diskon Produk:</span>
                        <span>Rp ' . number_format($totalDiskon, 0, ',', '.') . '</span>
                    </div>' : '') . '
                    <div class="total-row">
                        <span>Biaya Pengiriman:</span>
                        <span>Rp ' . number_format($biayaPengirimanTotal, 0, ',', '.') . '</span>
                    </div>
                    <div class="total-row">
                        <span>Total Pembayaran:</span>
                        <span class="total-price">Rp ' . number_format($totalAllOrders, 0, ',', '.') . '</span>
                    </div>
                </div>
                
                <p style="text-align: center; margin-top: 30px;">
                    <a href="' . $pembayaranLink . '" class="button">Lakukan Pembayaran</a>
                </p>
                
                <p>Harap melakukan pembayaran sebelum <strong>' . date('d F Y H:i', strtotime($limitPayment)) . '</strong> untuk menghindari pembatalan otomatis.</p>
                
                <div class="contact">
                    <p>Jika Anda memiliki pertanyaan, silakan hubungi kami di:</p>
                    <p>Email: cs@tokoanda.com | Telepon: (021) 1234-5678</p>
                </div>
            </div>
            
            <div class="footer">
                <p>&copy; 2025 Toko Anda. Semua hak dilindungi.</p>
                <p>Ini adalah email otomatis, mohon tidak membalas email ini.</p>
            </div>
        </div>
    </body>
    </html>';

        // Kirim email
        $emailTujuan = $customer['email'] ?? "ianroeri@gmail.com";
        $judulEmail = "Konfirmasi Pesanan #" . $nomorPesanan;

        // Plain text version sebagai fallback
        $isiEmailPlain = "Terima kasih telah memesan di toko kami.\n\n";
        $isiEmailPlain .= "Detail Pesanan Anda:\n";
        $isiEmailPlain .= "Nomor Pesanan: " . $nomorPesanan . "\n";
        $isiEmailPlain .= "Tanggal Pesanan: " . date('d F Y H:i', strtotime($now)) . "\n";
        $isiEmailPlain .= "Total Pembayaran: Rp " . number_format($totalAllOrders, 0, ',', '.') . "\n";
        $isiEmailPlain .= "Batas Waktu Pembayaran: " . date('d F Y H:i', strtotime($limitPayment)) . "\n\n";
        $isiEmailPlain .= "Harap segera lakukan pembayaran untuk memproses pesanan Anda.";

        // Set email header untuk HTML
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= "From: Toko Anda <noreply@tokoanda.com>" . "\r\n";

        // Kirim email dengan HTML template
        $emailSent = Email::send($emailTujuan, $judulEmail, $emailTemplate);

        unset($_SESSION['selected_cart_ids']);

        echo json_encode([
            'status' => $emailSent ? 'success' : 'warning',
            'message' => $emailSent
                ? 'Pesanan berhasil dibuat dan dikirim ke email: ' . $emailTujuan
                : 'Pesanan berhasil dibuat, namun gagal mengirim email ke: ' . $emailTujuan,
            'nomor_pesanan' => $nomorPesanan,
            'redirect_url' => '/pembayaran?token=' . $tokenPembayaran
        ]);
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
