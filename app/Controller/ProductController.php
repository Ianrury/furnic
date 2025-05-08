<?php


namespace Importa\Furnic\PHP\FFI\Controller;

use Exception;
use Importa\Furnic\PHP\FFI\App\View;
use Importa\Furnic\PHP\FFI\Config\Database;
use Importa\Furnic\PHP\FFI\Repository\ProductRepository;
use Importa\Furnic\PHP\FFI\Repository\SessionRepository;
use Importa\Furnic\PHP\FFI\Repository\UserRepository;
use Importa\Furnic\PHP\FFI\Service\ProductServis;
use Importa\Furnic\PHP\FFI\Service\SessionService;
use Importa\Furnic\PHP\FFI\Service\WislistServis;
use PDO;

class ProductController
{
    public ProductServis $productServiser;
    public WislistServis $wishlistServiser;
    public static string $COOKIE_NAME = 'X-FURNIC-SESSION';
    private PDO $connection;


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
            $productRepository
        );
    }



    public function index()
    {
        // $produk = $this->productServiser->ProductTerbaru();
        $produk = $this->productServiser->getProductsRekomendasi();
        $dummi = $this->productServiser->productdummi();
        $category = $this->productServiser->getCategory();



        // echo '<pre>';
        // var_dump($category);
        // echo '</pre>';
        // exit;

        $model = [
            // "terbaru" => $produk, // Menambahkan produk terbaru ke model
            "category" => $category,
            "title" => "Product",
            "produk" => $produk,
            "dummi" => $dummi,
            "content" => "Welcome to the product page!",
        ];
        View::render('Product/index', $model); // Menampilkan view dengan produk terbaru
    }


    public function detail($id)
    {

        $bestseller = $this->productServiser->bestSeller();
        $expensif = $this->productServiser->GetProductExpensif();
        $detail = $this->productServiser->getDetail($id);

        // echo '<pre>';
        // var_dump($detail);
        // echo '</pre>';
        // exit;
        $model = [
            "bestseller" => $bestseller,
            "detail" => $detail,
            "expensif" => $expensif,
            "title" => "Product Detail",
            "content" => "Welcome to the product detail page!",
        ];
        View::render('Product/detail', $model);
    }

    public function filterProduct()
    {
        try {
            $kategoriIds = $_POST['kategori'] ?? [];
            $filterPromo = isset($_POST['promo']);
            $productTerbaru = isset($_POST['productTerbaru']); // Cek jika request adalah productTerbaru
            $filterUnggulan = isset($_POST['unggulan']); // Cek jika request adalah produk unggulan
            $hargaMin = $_POST['harga_min'] ?? null;
            $hargaMax = $_POST['harga_max'] ?? null;


            // Query untuk mengambil 3 produk dengan penjualan terbanyak jika filter unggulan aktif
            $bestSellerQuery = "
                SELECT id_product
                FROM product
                ORDER BY beli DESC
                LIMIT 3
            ";


            $bestSellerStmt = $this->connection->prepare($bestSellerQuery);
            $bestSellerStmt->execute();
            $topBestSellerIds = $bestSellerStmt->fetchAll(PDO::FETCH_COLUMN);

            $query = "
                SELECT 
                    p.*, 
                    pr.nama_promo, 
                    pr.jenis_promo, 
                    pr.total_promo, 
                    pr.start_date, 
                    pr.end_date,
                    k.nama AS nama_kategori
                FROM product p
                LEFT JOIN promo pr 
                    ON p.id_promo = pr.id_promo 
                    AND pr.start_date <= CURDATE() 
                    AND pr.end_date >= CURDATE()
                LEFT JOIN kategori k 
                    ON p.id_kategori = k.id_kategori
                WHERE 1
            ";

            $params = [];

            // Filter kategori
            if (!empty($kategoriIds)) {
                $placeholders = implode(',', array_fill(0, count($kategoriIds), '?'));
                $query .= " AND p.id_kategori IN ($placeholders)";
                $params = array_merge($params, $kategoriIds);
            }

            // Filter promo
            if ($filterPromo) {
                $query .= " AND p.id_promo IS NOT NULL";
            }

            if ($hargaMin !== null && is_numeric($hargaMin)) {
                $query .= " AND p.harga >= ?";
                $params[] = $hargaMin;
            }

            if ($hargaMax !== null && is_numeric($hargaMax)) {
                $query .= " AND p.harga <= ?";
                $params[] = $hargaMax;
            }

            // Jika request adalah productTerbaru, hanya ambil produk yang baru (7 hari)
            // Cek jika request adalah productTerbaru
            if ($productTerbaru) {
                // Filter produk yang baru (7 hari) dan tidak ada promo
                $query .= " AND p.created_at >= CURDATE() - INTERVAL 7 DAY";
                $query .= " AND (p.id_promo IS NULL OR pr.start_date > CURDATE() OR pr.end_date < CURDATE())";
            }


            // Jika request adalah unggulan, tampilkan produk best seller
            if ($filterUnggulan) {
                // Memastikan hanya produk best seller yang ditampilkan
                $query .= " AND p.id_product IN (" . implode(',', $topBestSellerIds) . ")";
            }

            // Mengurutkan produk berdasarkan kriteria
            $query .= " ORDER BY p.created_at DESC";

            $statement = $this->connection->prepare($query);
            $statement->execute($params);
            $products = $statement->fetchAll(PDO::FETCH_ASSOC);

            ob_start();

            foreach ($products as $product) {
                $ribbon = null;
                $bgColor = '';
                $textColor = '';

                $qty = $product['qty'] ?? 0;
                $promoPersen = (float) ($product['total_promo'] ?? 0);
                $createdAt = new \DateTime($product['created_at'] ?? 'now');
                $today = new \DateTime();
                $diffDays = $createdAt->diff($today)->days;

                // Logika untuk ribbon/label
                if ($qty <= 0) {
                    $ribbon = 'Out of Stock';
                    $bgColor = '#FF0000';
                    $textColor = '#FFFFFF';
                } elseif (in_array($product['id_product'], $topBestSellerIds)) {
                    $ribbon = 'Best Seller';
                    $bgColor = '#FF8B2D';
                    $textColor = '#FFFFFF';
                } elseif ($promoPersen > 0) {
                    $ribbon = 'Sale';
                    $bgColor = '#FFFB2D';
                    $textColor = '#FF0000';
                } elseif ($diffDays <= 7) {
                    $ribbon = 'New Product';
                    $bgColor = '#2B4779';
                    $textColor = '#FFFFFF';
                }

                $harga = (float) ($product['harga'] ?? 0);
                $diskon = $promoPersen;
                $diskonNominal = ($diskon > 0) ? ($harga * ($diskon / 100)) : 0;
                $hargaAkhir = $harga - $diskonNominal;
?>
                <div class="col-6 col-md-4 col-lg-4">
                    <div class="card shadow position-relative rounded-4 p-2 product-card"
                        data-id="<?= htmlspecialchars($product['id_product']) ?>" style="cursor:pointer;">
                        <?php if ($ribbon): ?>
                            <div class="position-absolute ribbon-wrapper">
                                <div class="ribbon text-uppercase fw-bold text-center"
                                    style="background-color: <?= $bgColor ?>; color: <?= $textColor ?>;">
                                    <?= htmlspecialchars($ribbon) ?>
                                </div>
                            </div>
                        <?php endif; ?>

                        <div class="text-center pt-3">
                            <img src="assets/img/product/<?= htmlspecialchars($product['foto'] ?? '') ?>"
                                class="img-fluid product-image" alt="Product Image">
                        </div>

                        <div class="bodykartu">
                            <div class="d-flex flex-column">
                                <div>
                                    <p class="card-title text-truncate product-title">
                                        <?= htmlspecialchars($product['nama_product'] ?? '-') ?>
                                    </p>
                                    <p class="card-text text-truncate product-desc">
                                        <?= htmlspecialchars($product['deskripsi'] ?? '-') ?>
                                    </p>
                                    <div class="d-flex gap-1 align-items-center">
                                        <?php for ($i = 0; $i < 5; $i++): ?>
                                            <i class="bi bi-star-fill text-warning small-icon"></i>
                                        <?php endfor; ?>
                                        <small class="text-muted fst-italic ms-1 sold-text">
                                            <?= $product['beli'] ?? 0 ?> terjual
                                        </small>
                                    </div>
                                </div>

                                <div class="mt-auto">
                                    <div class="d-flex flex-wrap align-items-baseline">
                                        <div class="me-2">
                                            <span class="fw-bold price">
                                                <sup class="fw-normal">Rp</sup>
                                                <?= number_format($hargaAkhir, 0, ',', '.') ?>
                                            </span>
                                        </div>
                                        <?php if ($diskon > 0): ?>
                                            <div>
                                                <span class="fw-normal text-danger old-price">
                                                    <sup>Rp</sup>
                                                    <span class="text-decoration-line-through">
                                                        <?= number_format($harga, 0, ',', '.') ?>
                                                    </span>
                                                </span>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }

            $html = ob_get_clean();

            header('Content-Type: application/json');
            echo json_encode(['html' => $html]);
        } catch (Exception $e) {
            http_response_code(500);
            echo json_encode(['error' => 'Terjadi kesalahan pada server', 'debug' => $e->getMessage()]);
        }
    }

    public function filterProductWislist()
    {
        try {
            $kategoriIds = $_POST['kategori'] ?? [];
            $filterPromo = isset($_POST['promo']);
            $productTerbaru = isset($_POST['productTerbaru']); // Cek jika request adalah productTerbaru
            $filterUnggulan = isset($_POST['unggulan']); // Cek jika request adalah produk unggulan
            $hargaMin = $_POST['harga_min'] ?? null;
            $hargaMax = $_POST['harga_max'] ?? null;

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
            $id_cutomer = $session['id_user']; // Ambil dari session

            // Query untuk mengambil 3 produk dengan penjualan terbanyak jika filter unggulan aktif
            $bestSellerQuery = "
                SELECT id_product
                FROM product
                ORDER BY beli DESC
                LIMIT 3
            ";


            $bestSellerStmt = $this->connection->prepare($bestSellerQuery);
            $bestSellerStmt->execute();
            $topBestSellerIds = $bestSellerStmt->fetchAll(PDO::FETCH_COLUMN);

            $query = "
            SELECT 
                p.*, 
                pr.nama_promo, 
                pr.jenis_promo, 
                pr.total_promo, 
                pr.start_date, 
                pr.end_date,
                k.nama AS nama_kategori
            FROM product p
            LEFT JOIN promo pr 
                ON p.id_promo = pr.id_promo 
                AND pr.start_date <= CURDATE() 
                AND pr.end_date >= CURDATE()
            LEFT JOIN kategori k 
                ON p.id_kategori = k.id_kategori
            INNER JOIN wishlist w 
                ON p.id_product = w.id_product
            WHERE w.id_customer = ?
        ";
            $params = [$id_cutomer];


            // Filter kategori
            if (!empty($kategoriIds)) {
                $placeholders = implode(',', array_fill(0, count($kategoriIds), '?'));
                $query .= " AND p.id_kategori IN ($placeholders)";
                $params = array_merge($params, $kategoriIds);
            }

            // Filter promo
            if ($filterPromo) {
                $query .= " AND p.id_promo IS NOT NULL";
            }

            if ($hargaMin !== null && is_numeric($hargaMin)) {
                $query .= " AND p.harga >= ?";
                $params[] = $hargaMin;
            }

            if ($hargaMax !== null && is_numeric($hargaMax)) {
                $query .= " AND p.harga <= ?";
                $params[] = $hargaMax;
            }

            // Jika request adalah productTerbaru, hanya ambil produk yang baru (7 hari)
            // Cek jika request adalah productTerbaru
            if ($productTerbaru) {
                // Filter produk yang baru (7 hari) dan tidak ada promo
                $query .= " AND p.created_at >= CURDATE() - INTERVAL 7 DAY";
                $query .= " AND (p.id_promo IS NULL OR pr.start_date > CURDATE() OR pr.end_date < CURDATE())";
            }


            // Jika request adalah unggulan, tampilkan produk best seller
            if ($filterUnggulan) {
                // Memastikan hanya produk best seller yang ditampilkan
                $query .= " AND p.id_product IN (" . implode(',', $topBestSellerIds) . ")";
            }

            // Mengurutkan produk berdasarkan kriteria
            $query .= " ORDER BY p.created_at DESC";

            $statement = $this->connection->prepare($query);
            $statement->execute($params);
            $products = $statement->fetchAll(PDO::FETCH_ASSOC);

            ob_start();

            foreach ($products as $product) {
                $ribbon = null;
                $bgColor = '';
                $textColor = '';

                $qty = $product['qty'] ?? 0;
                $promoPersen = (float) ($product['total_promo'] ?? 0);
                $createdAt = new \DateTime($product['created_at'] ?? 'now');
                $today = new \DateTime();
                $diffDays = $createdAt->diff($today)->days;

                // Logika untuk ribbon/label
                if ($qty <= 0) {
                    $ribbon = 'Out of Stock';
                    $bgColor = '#FF0000';
                    $textColor = '#FFFFFF';
                } elseif (in_array($product['id_product'], $topBestSellerIds)) {
                    $ribbon = 'Best Seller';
                    $bgColor = '#FF8B2D';
                    $textColor = '#FFFFFF';
                } elseif ($promoPersen > 0) {
                    $ribbon = 'Sale';
                    $bgColor = '#FFFB2D';
                    $textColor = '#FF0000';
                } elseif ($diffDays <= 7) {
                    $ribbon = 'New Product';
                    $bgColor = '#2B4779';
                    $textColor = '#FFFFFF';
                }

                $harga = (float) ($product['harga'] ?? 0);
                $diskon = $promoPersen;
                $diskonNominal = ($diskon > 0) ? ($harga * ($diskon / 100)) : 0;
                $hargaAkhir = $harga - $diskonNominal;
            ?>
                <div class="col-6 col-md-4 col-lg-4">
                    <div class="card shadow position-relative rounded-4 p-2 product-card"
                        data-id="<?= htmlspecialchars($product['id_product']) ?>" style="cursor:pointer;">
                        <?php if ($ribbon): ?>
                            <div class="position-absolute ribbon-wrapper">
                                <div class="ribbon text-uppercase fw-bold text-center"
                                    style="background-color: <?= $bgColor ?>; color: <?= $textColor ?>;">
                                    <?= htmlspecialchars($ribbon) ?>
                                </div>
                            </div>
                        <?php endif; ?>

                        <div class="text-center pt-3">
                            <img src="assets/img/product/<?= htmlspecialchars($product['foto'] ?? '') ?>"
                                class="img-fluid product-image" alt="Product Image">
                        </div>

                        <div class="bodykartu">
                            <div class="d-flex flex-column">
                                <div>
                                    <p class="card-title text-truncate product-title">
                                        <?= htmlspecialchars($product['nama_product'] ?? '-') ?>
                                    </p>
                                    <p class="card-text text-truncate product-desc">
                                        <?= htmlspecialchars($product['deskripsi'] ?? '-') ?>
                                    </p>
                                    <div class="d-flex gap-1 align-items-center">
                                        <?php for ($i = 0; $i < 5; $i++): ?>
                                            <i class="bi bi-star-fill text-warning small-icon"></i>
                                        <?php endfor; ?>
                                        <small class="text-muted fst-italic ms-1 sold-text">
                                            <?= $product['beli'] ?? 0 ?> terjual
                                        </small>
                                    </div>
                                </div>

                                <div class="mt-auto">
                                    <div class="d-flex flex-wrap align-items-baseline">
                                        <div class="me-2">
                                            <span class="fw-bold price">
                                                <sup class="fw-normal">Rp</sup>
                                                <?= number_format($hargaAkhir, 0, ',', '.') ?>
                                            </span>
                                        </div>
                                        <?php if ($diskon > 0): ?>
                                            <div>
                                                <span class="fw-normal text-danger old-price">
                                                    <sup>Rp</sup>
                                                    <span class="text-decoration-line-through">
                                                        <?= number_format($harga, 0, ',', '.') ?>
                                                    </span>
                                                </span>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="row g-2">
                                    <div class="col-6">
                                        <button class="btn buy-btn w-100">Beli</button>
                                    </div>
                                    <div class="col-6">
                                        <button class="btn cart-btn w-100 product-card"
                                            data-id="<?= htmlspecialchars($product['id_product']) ?>" style="cursor:pointer;">+
                                            Keranjang</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<?php
            }

            $html = ob_get_clean();

            header('Content-Type: application/json');
            echo json_encode(['html' => $html]);
        } catch (Exception $e) {
            http_response_code(500);
            echo json_encode(['error' => 'Terjadi kesalahan pada server', 'debug' => $e->getMessage()]);
        }
    }

    public function filterProductPencaian()
    {
        try {
            // Ambil parameter dari request
            $kategoriIds = $_POST['kategori'] ?? [];
            $filterPromo = isset($_POST['promo']);
            $productTerbaru = isset($_POST['productTerbaru']); // Cek jika request adalah productTerbaru
            $filterUnggulan = isset($_POST['unggulan']); // Cek jika request adalah produk unggulan
            $hargaMin = $_POST['harga_min'] ?? null;
            $hargaMax = $_POST['harga_max'] ?? null;
            $search = isset($_POST['search']) ? $_POST['search'] : null;


            // Query untuk mengambil 3 produk dengan penjualan terbanyak jika filter unggulan aktif
            $bestSellerQuery = "
                SELECT id_product
                FROM product
                ORDER BY beli DESC
                LIMIT 3
            ";

            $bestSellerStmt = $this->connection->prepare($bestSellerQuery);
            $bestSellerStmt->execute();
            $topBestSellerIds = $bestSellerStmt->fetchAll(PDO::FETCH_COLUMN);

            // Query utama untuk mengambil produk berdasarkan filter
            $query = "
                SELECT 
                    p.*, 
                    pr.nama_promo, 
                    pr.jenis_promo, 
                    pr.total_promo, 
                    pr.start_date, 
                    pr.end_date,
                    k.nama AS nama_kategori
                FROM product p
                LEFT JOIN promo pr 
                    ON p.id_promo = pr.id_promo 
                    AND pr.start_date <= CURDATE() 
                    AND pr.end_date >= CURDATE()
                LEFT JOIN kategori k 
                    ON p.id_kategori = k.id_kategori
                WHERE 1
            ";

            // Menyimpan parameter untuk query yang disiapkan
            $params = [];

            // Filter berdasarkan pencarian (search)
            if ($search !== null && !empty(trim($search))) {
                $query .= " AND p.nama_product LIKE ?";
                $params[] = '%' . $search . '%';
            }

            // Filter berdasarkan kategori
            if (!empty($kategoriIds)) {
                $placeholders = implode(',', array_fill(0, count($kategoriIds), '?'));
                $query .= " AND p.id_kategori IN ($placeholders)";
                $params = array_merge($params, $kategoriIds);
            }

            // Filter berdasarkan promo
            if ($filterPromo) {
                $query .= " AND p.id_promo IS NOT NULL";
            }

            // Filter harga minimum
            if ($hargaMin !== null && is_numeric($hargaMin)) {
                $query .= " AND p.harga >= ?";
                $params[] = $hargaMin;
            }

            // Filter harga maksimum
            if ($hargaMax !== null && is_numeric($hargaMax)) {
                $query .= " AND p.harga <= ?";
                $params[] = $hargaMax;
            }

            // Filter untuk produk terbaru (7 hari terakhir)
            if ($productTerbaru) {
                $query .= " AND p.created_at >= CURDATE() - INTERVAL 7 DAY";
                $query .= " AND (p.id_promo IS NULL OR pr.start_date > CURDATE() OR pr.end_date < CURDATE())";
            }

            // Filter produk unggulan (best sellers)
            if ($filterUnggulan) {
                $query .= " AND p.id_product IN (" . implode(',', $topBestSellerIds) . ")";
            }

            // Mengurutkan produk berdasarkan tanggal dibuat
            $query .= " ORDER BY p.created_at DESC";

            // Menjalankan query dan menyiapkan parameter
            $statement = $this->connection->prepare($query);
            $statement->execute($params);

            // Ambil hasil query
            $rows = $statement->fetchAll(PDO::FETCH_ASSOC);

            // Mengembalikan hasil dalam format JSON
            echo json_encode([
                'status' => 'success',
                'message' => 'Data berhasil diambil',
                'data' => $rows,
            ]);
        } catch (Exception $e) {
            // Tangani kesalahan dan kembalikan respons error
            http_response_code(500);
            echo json_encode(['error' => 'Terjadi kesalahan pada server', 'debug' => $e->getMessage()]);
        }
    }



    public function pencarian()
    {
        $produk = $this->productServiser->getProductsRekomendasi();
        $dummi = $this->productServiser->productdummi();
        $category = $this->productServiser->getCategory();

        $model = [
            "title" => "Product Pencarian",
            "dummi" => $dummi,
            "category" => $category,
            "produk" => $produk,
            "content" => "Welcome to the product pencarian page!",
        ];
        View::render('Product/pencarian', $model);
    }

    public function wishlist()
    {
        $prduct = $this->wishlistServiser->productWislist();
        $category = $this->productServiser->getCategory();

        // echo '<pre>';
        // var_dump($prduct);
        // echo '</pre>';
        // exit;

        $model = [
            "title" => "Product Wishlist",
            "product" => $prduct,
            "category" => $category,
            "content" => "Welcome to the product wishlist page!",
        ];
        View::render('Product/wishlist', $model);
    }

    public function cekWishlist($id)
    {
        $alreadyWishlisted = $this->wishlistServiser->isWishliste($id);

        header('Content-Type: application/json');
        echo json_encode([
            'status' => 'success',
            'wishlisted' => $alreadyWishlisted,
        ]);
    }


    public function Createwishlist($id)
    {
        header('Content-Type: application/json');
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


        // Cek apakah produk sudah ada di wishlist
        $alreadyWishlisted = $this->wishlistServiser->isWishliste($id);

        if ($alreadyWishlisted) {
            // Jika sudah ada, hapus dari wishlist
            $this->wishlistServiser->removeWishlist($id);
            echo json_encode([
                'status' => 'success',
                'message' => 'Produk dihapus dari wishlist',
                'wishlisted' => false
            ]);
        } else {
            // Tambahkan ke wishlist
            $result = $this->wishlistServiser->createwislist($id);

            // echo '<pre>';
            // var_dump($result);
            // echo '</pre>';
            // exit;

            if ($result) {
                echo json_encode([
                    'status' => 'success',
                    'message' => 'Produk berhasil ditambahkan ke wishlist',
                    'wishlisted' => true
                ]);
            } else {
                echo json_encode([
                    'status' => 'error',
                    'message' => 'Gagal menambahkan produk ke wishlist',
                    'wishlisted' => false
                ]);
            }
        }
    }

    public function lokasi()
    {
        $model = [
            "title" => "Product Lokasi",
            "content" => "Welcome to the product lokasi page!",
        ];
        View::render('Lokasi/lokasi', $model);
    }

    public function card_pesanan()
    {
        $pesanan = $this->productServiser->getallPesanan();

        // echo '<pre>';
        // var_dump($pesanan);
        // echo '</pre>';
        // exit;
        $model = [
            "title" => "Product Card Pesanan",
            "pesanan" => $pesanan,
            "content" => "Welcome to the product card pesanan page!",
        ];
        View::render('Pesanan/record-pesanan', $model);
    }
}
