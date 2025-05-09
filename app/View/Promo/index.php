<?php
require_once __DIR__ . '/../../app/env.php';
$apiBaseUrl = env('API_BASE_URL');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- title -->
    <title><?php echo $model['title']; ?> - PT Furnice Furnishing Indonesia</title>

    <!-- favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/logo/favicon.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <!-- css -->
    <!-- <link rel="stylesheet" href="/app/App/assets/css/bootstrap"> -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all-fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/jquery-ui.min.css">
    <link rel="stylesheet" href="assets/css/nice-select.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto';
        }

        .product-area-new {
            font-family: 'inter';
        }
    </style>

</head>

<body>

    <a href="https://wa.me/628119018800" class="floating" target="_blank">
        <i class="fab fa-whatsapp"></i>
    </a>

    <!-- preloader -->
    <div class="preloader">
        <div class="loader-ripple">
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- preloader end -->

    <!-- header area -->
    <?php include __DIR__ . '/../templates/header.php'; ?>
    <!-- header area end -->

    <!-- popup search -->
    <div class="search-popup">
        <button class="close-search"><span class="far fa-times"></span></button>
        <form action="#">
            <div class="form-group">
                <input type="search" name="search-field" class="form-control" placeholder="Search Here..." required="">
                <button type="submit"><i class="far fa-search"></i></button>
            </div>
        </form>
    </div>
    <!-- popup search end -->


    <main class="main">

        <!-- hero slider -->
        <div class="hero-section mt-3 hs-1">
            <div class="container">
                <div class="hero-slider owl-carousel owl-theme">
                    <div class="hero-single" style="padding: 0;">
                        <img src="assets/img/hero/slider1.jpg" alt="">
                    </div>
                    <div class="hero-single" style="padding: 0;">
                        <img src="assets/img/hero/slider2.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- hero slider end -->
        <div class="product-area product-area-new">
            <div class="container">
                <div class="row">
                    <div class="col-12 wow fadeInDown mb-0 d-flex justify-content-between" data-wow-delay=".25s">
                        <div class="site-heading-inline">
                            <h2 class="site-title">Promo Terbaru</h2>
                        </div>
                        <a href="#" class="small view-more">View More <i class="fas fa-angle-double-right"></i></a>
                    </div>
                </div>
                <div class="tab-content wow fadeInUp" data-wow-delay=".25s" id="item-tabContent">
                    <div class="container">
                        <div class="row row-cols-2 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 new-product" id="product-terbaru">
                            <?php if (!empty($model['product'])): ?>
                                <?php foreach ($model['product'] as $product): ?>
                                    <div class="col-6 col-md-4 col-lg-3">
                                        <div class="card shadow position-relative rounded-4 p-2 product-card"
                                            data-id="<?= ($product['id_product']) ?>" style="cursor:pointer;">
                                            <?php
                                            $ribbon = null;
                                            $bgColor = '';
                                            $textColor = '';

                                            $qty = $product['qty'];
                                            $promoPersen = (float) ($product['total_promo'] ?? 0);
                                            $createdAt = new DateTime($product['created_at']);
                                            $today = new DateTime();
                                            $diffDays = $createdAt->diff($today)->days;

                                            // Logika ribbon
                                            if ($qty <= 0) {
                                                $ribbon = 'Out of Stock';
                                                $bgColor = '#FF0000';
                                                $textColor = '#FFFFFF';
                                            } elseif (!empty($topBestSellerIds) && in_array($product['id_product'], $topBestSellerIds)) {
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
                                            ?>

                                            <!-- Corner Ribbon -->
                                            <?php if ($ribbon): ?>
                                                <div class="position-absolute ribbon-wrapper">
                                                    <div class="ribbon text-uppercase fw-bold text-center"
                                                        style="background-color: <?= $bgColor ?>; color: <?= $textColor ?>;">
                                                        <?= htmlspecialchars($ribbon) ?>
                                                    </div>
                                                </div>
                                            <?php endif; ?>


                                            <!-- Product Image -->
                                            <div class="text-center pt-3">
                                                <img src="assets/img/product/<?= htmlspecialchars($product['foto'] ?? '') ?>"
                                                    class="img-fluid product-image" alt="Product Image">
                                            </div>
                                            <div class="bodykartu">
                                                <div class="d-flex flex-column">
                                                    <div class="">
                                                        <p class="card-title text-truncate product-title">
                                                            <?= htmlspecialchars($product['nama_product'] ?? 'Nama produk tidak tersedia') ?>
                                                        </p>
                                                        <p class="card-text text-truncate product-desc">
                                                            <?= htmlspecialchars($product['deskripsi'] ?? 'Deskripsi tidak tersedia') ?>
                                                        </p>
                                                        <div class="d-flex gap-1 align-items-center">
                                                            <i class="bi bi-star-fill text-warning small-icon"></i>
                                                            <i class="bi bi-star-fill text-warning small-icon"></i>
                                                            <i class="bi bi-star-fill text-warning small-icon"></i>
                                                            <i class="bi bi-star-fill text-warning small-icon"></i>
                                                            <i class="bi bi-star-fill text-warning small-icon"></i>
                                                            <small
                                                                class="text-muted fst-italic ms-1 sold-text"><?= $product['beli'] ?? 0 ?>
                                                                terjual</small>
                                                        </div>
                                                    </div>

                                                    <div class="mt-auto">
                                                        <?php
                                                        // Harga produk dan total_promo (diskon) yang ada di data produk
                                                        $harga = $product['harga']; // Harga produk
                                                        $total_promo = $product['total_promo']; // Diskon dalam persen

                                                        // Hitung diskon nominal
                                                        $diskon_nominal = ($total_promo > 0) ? ($harga * ($total_promo / 100)) : 0;
                                                        $harga_setelah_diskon = $harga - $diskon_nominal; // Harga setelah diskon
                                                        ?>

                                                        <div class="d-flex flex-wrap align-items-baseline">
                                                            <div class="me-2">
                                                                <!-- Menampilkan harga setelah diskon -->
                                                                <span class="fw-bold price">
                                                                    <sup class="fw-normal">Rp</sup>
                                                                    <?= number_format($harga_setelah_diskon, 0, ',', '.') ?>
                                                                </span>
                                                            </div>

                                                            <!-- Jika ada diskon, tampilkan harga lama yang digariskan -->
                                                            <?php if ($diskon_nominal > 0): ?>
                                                                <div>
                                                                    <span class="fw-normal text-danger old-price">
                                                                        <sup>Rp</sup>
                                                                        <span
                                                                            class="text-decoration-line-through"><?= number_format($harga, 0, ',', '.') ?></span>
                                                                    </span>
                                                                </div>
                                                            <?php endif; ?>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <p>Tidak ada produk terbaru yang tersedia.</p>
                            <?php endif; ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="newsletter-area pt-40">
            <div>
                <div class="container wow fadeInUp rounded-4" data-wow-delay=".25s">
                    <img src="assets/img/gallery/promo-bca.jpg" width="100%" alt="">
                </div>
            </div>
        </div>

        <!-- popular item -->
        <div class="product-area product-area-new">
            <div class="container">
                <div class="row">
                    <div class="col-12 wow fadeInDown mb-0" data-wow-delay=".25s">
                        <div class="site-heading-inline">
                            <h2 class="site-title">Promo Furnice</h2>
                        </div>
                    </div>
                </div>
                <div class="tab-content wow fadeInUp" data-wow-delay=".25s" id="item-tabContent">
                    <div class="container" id="product-pagination-container">
                        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 g-4  ">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- popular item end -->

        <!-- newsletter area -->
        <div class="newsletter-area pt-40">
            <div>
                <div class="container wow fadeInUp rounded-4" data-wow-delay=".25s">
                    <div class="newsletter-wrap" style="background-color: #2B4779;">
                        <div class="row">
                            <div class="col-lg-6 mx-auto">
                                <div class="newsletter-content">
                                    <h3>Get <span>20%</span> Off Discount Coupon</h3>
                                    <p>By Subscribe Our Newsletter</p>
                                    <div class="subscribe-form">
                                        <form action="#">
                                            <input type="email" class="form-control" placeholder="Your Email Address">
                                            <button class="theme-btn" type="submit">
                                                Klaim Voucher <i class="far fa-paper-plane"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>


    <!-- footer area -->
    <?php include __DIR__ . '/../templates/footer.php'; ?>
    <!-- footer area end -->


    <!-- modal quick shop-->
    <div class="modal quickview fade" id="quickview" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="quickview" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                        class="far fa-xmark"></i></button>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <img src="assets/img/product/04.png" alt="#">
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="quickview-content">
                                <h4 class="quickview-title">Simple Denim Chair</h4>
                                <div class="quickview-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                    <i class="far fa-star"></i>
                                    <span class="rating-count"> (4 Customer Reviews)</span>
                                </div>
                                <div class="quickview-price">
                                    <h5><del>$860</del><span>$740</span></h5>
                                </div>
                                <ul class="quickview-list">
                                    <li>Brand:<span>Ricordi</span></li>
                                    <li>Category:<span>Living Room</span></li>
                                    <li>Stock:<span class="stock">Available</span></li>
                                    <li>Code:<span>789FGSA</span></li>
                                </ul>
                                <div class="quickview-cart">
                                    <a href="#" class="theme-btn">Add to cart</a>
                                </div>
                                <div class="quickview-social">
                                    <span>Share:</span>
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a target="_blank" href="https://www.instagram.com/furnicefurnishing/"><i
                                            class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- modal quick shop end -->


    <!-- js -->
    <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/js/jquery-3.7.1.min.js"></script>
    <script src="assets/js/modernizr.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/jquery.appear.min.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/counter-up.js"></script>
    <script src="assets/js/jquery-ui.min.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/countdown.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/main.js"></script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const offcanvasToggler = document.getElementById('offcanvasToggler');
            const offcanvasNavbar = document.getElementById('offcanvasNavbar');

            // Mencegah pembuatan backdrop
            offcanvasNavbar.addEventListener('show.bs.offcanvas', function() {
                document.querySelectorAll('.offcanvas-backdrop').forEach(el => el.remove());
            });

            // Alternatif: nonaktifkan backdrop sepenuhnya
            offcanvasNavbar.addEventListener('shown.bs.offcanvas', function() {
                const backdrops = document.querySelectorAll('.offcanvas-backdrop');
                backdrops.forEach(backdrop => {
                    backdrop.classList.remove('show');
                    backdrop.style.display = 'none';
                });
            });

            // Pastikan backdrop dihapus saat menutup
            offcanvasNavbar.addEventListener('hidden.bs.offcanvas', function() {
                document.querySelectorAll('.offcanvas-backdrop').forEach(el => el.remove());
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            const hotspots = document.querySelectorAll('.hotspot-dot');

            hotspots.forEach(hotspot => {
                hotspot.addEventListener('mouseenter', function() {
                    // Store the tooltip element
                    const tooltip = this.querySelector('.hotspot-tooltip');

                    // Clear any existing timeout
                    if (this.tooltipTimeout) {
                        clearTimeout(this.tooltipTimeout);
                    }

                    // Make tooltip visible
                    tooltip.style.opacity = '1';
                    tooltip.style.visibility = 'visible';

                    // Set timeout to hide tooltip after 5 seconds
                    this.tooltipTimeout = setTimeout(() => {
                        tooltip.style.opacity = '0';
                        tooltip.style.visibility = 'hidden';
                    }, 5000);
                });
            });
        });

        // Add focus event to automatically open modal when clicking the search field
        document.addEventListener('DOMContentLoaded', function() {
            const searchModal = document.getElementById('searchModal');
            searchModal.addEventListener('shown.bs.modal', function() {
                searchModal.querySelector('input').focus();
            });
        });
        const API_BASE_URL = "<?= $apiBaseUrl ?>";

        $.ajax({
            url: API_BASE_URL + '/get-promo',
            type: 'GET', // Sesuai dengan route kamu
            dataType: 'json',
            success: function(response) {
                if (response.status === 'success') {
                    const produk = response.data;
                    console.log("terbaru", produk);
                    // Kosongkan isi sebelumnya
                    $('#product-terbaru').html('');

                    if (produk.length > 0) {
                        produk.forEach(function(product) {
                            const harga = product.harga;
                            const totalPromo = product.total_promo;
                            const diskonNominal = totalPromo > 0 ? (harga * (totalPromo / 100)) : 0;
                            const hargaSetelahDiskon = harga - diskonNominal;

                            const html = `
                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="card shadow position-relative rounded-4 p-2 product-card" data-id="${product.id_product}"      data-slug="${product.slug}" 
     data-token="${product.token}" style="cursor:pointer;">
                                <div class="position-absolute ribbon-wrapper">
                                    <div class="ribbon text-white text-uppercase fw-bold text-center">New Product</div>
                                </div>
                                <div class="text-center pt-3">
                                    <img src="${product.url_foto ?? ''}" class="img-fluid product-image" alt="Product Image">
                                </div>
                                <div class="bodykartu">
                                    <div class="d-flex flex-column">
                                        <p class="card-title text-truncate product-title">${product.nama_product ?? 'Nama produk tidak tersedia'}</p>
                                        <p class="card-text text-truncate product-desc">${product.deskripsi ?? 'Deskripsi tidak tersedia'}</p>
                                        <div class="d-flex gap-1 align-items-center">
                                            <i class="bi bi-star-fill text-warning small-icon"></i>
                                            <i class="bi bi-star-fill text-warning small-icon"></i>
                                            <i class="bi bi-star-fill text-warning small-icon"></i>
                                            <i class="bi bi-star-fill text-warning small-icon"></i>
                                            <i class="bi bi-star-fill text-warning small-icon"></i>
                                            <small class="text-muted fst-italic ms-1 sold-text">${product.beli ?? 0} terjual</small>
                                        </div>
                                        <div class="mt-auto">
                                            <div class="d-flex flex-wrap align-items-baseline">
                                                <div class="me-2">
                                                    <span class="fw-bold price">
                                                        <sup class="fw-normal">Rp</sup>${Number(hargaSetelahDiskon).toLocaleString('id-ID')}
                                                    </span>
                                                </div>
                                                ${diskonNominal > 0 ? `
                                                    <div>
                                                        <span class="fw-normal text-danger old-price">
                                                            <sup>Rp</sup><span class="text-decoration-line-through">${Number(harga).toLocaleString('id-ID')}</span>
                                                        </span>
                                                    </div>
                                                ` : ''}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>`;
                            $('#product-terbaru').append(html);
                        });
                    } else {
                        $('#product-terbaru').html('<p>Tidak ada produk terbaru yang tersedia.</p>');
                    }
                } else {
                    showToast('Gagal memuat produk terbaru', 'danger');
                }
            },
            error: function() {
                showToast('Terjadi kesalahan saat mengambil data produk.', 'danger');
            }
        });
        //categoty product
    </script>

    <script>
        document.addEventListener('click', function(e) {
            const card = e.target.closest('.product-card');
            if (card) {
                const slug = card.getAttribute('data-slug');
                const token = card.getAttribute('data-token');
                if (slug && token) {
                    window.location.href =  `/product/${slug}/${token}`;
                }
            }
        });
    </script>

</body>

</html>