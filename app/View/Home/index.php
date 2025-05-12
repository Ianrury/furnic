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
    <title>Home - PT Furnice Furnishing Indonesia</title>

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
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
        <div class="hero-section hs-1 mt-3">
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
                            <h2 class="site-title">Produk Terbaru</h2>
                        </div>
                        <a href="#" class="small view-more">View More <i class="fas fa-angle-double-right"></i></a>
                    </div>
                </div>
                <div class="tab-content wow fadeInUp" data-wow-delay=".25s" id="item-tabContent">
                    <div class="container">
                        <div class="row g-4" id="product-terbaru">

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="product-area product-area-new">
            <div class="container">
                <div class="row">
                    <div class="col-12 wow fadeInDown mb-0 d-flex justify-content-between" data-wow-delay=".25s">
                        <div class="site-heading-inline">
                            <h2 class="site-title">Decorasi Terbaru</h2>
                        </div>
                        <a href="#" class="small view-more">View More <i class="fas fa-angle-double-right"></i></a>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="tab-content wow fadeInUp" data-wow-delay=".25s" id="item-tabContent">
                        <div class="row g-3">
                            <!-- Large image on the left -->
                            <div class="col-md-6">
                                <div class="card h-100 border-0 overflow-hidden position-relative">
                                    <img src="assets/img/product/decorasi/ruang-kerja.jpg"
                                        class="card-img h-100 object-fit-cover" alt="Ruang Kerja">

                                    <!-- Category Badge -->
                                    <div class="position-absolute top-3 start-3 pt-2 ps-2">
                                        <span
                                            class="badge bg-white text-dark py-2 px-3 fw-medium rounded-2 shadow-sm">Ruang
                                            Kerja</span>
                                    </div>

                                    <!-- Interactive Dots -->
                                    <!-- Chair Dot -->
                                    <a href="/product?item=chair" class="product-link">
                                        <div class="hotspot-dot" style="left: 32%; top: 70%;">
                                            <div class="pulse-dot"></div>
                                            <div class="hotspot-tooltip">
                                                <button class="btn btn-warning btn-sm rounded-pill px-3 fw-medium">
                                                    <i class="bi bi-cart-plus me-1"></i>Beli Sekarang
                                                </button>
                                            </div>
                                        </div>
                                    </a>

                                    <!-- Left Bookshelf Dot -->
                                    <a href="/product?item=bookshelf" class="product-link">
                                        <div class="hotspot-dot" style="left: 15%; top: 42%;">
                                            <div class="pulse-dot"></div>
                                            <div class="hotspot-tooltip">
                                                <button class="btn btn-warning btn-sm rounded-pill px-3 fw-medium">
                                                    <i class="bi bi-cart-plus me-1"></i>Beli Sekarang
                                                </button>
                                            </div>
                                        </div>
                                    </a>

                                    <!-- Desk Dot -->
                                    <a href="/product?item=desk" class="product-link">
                                        <div class="hotspot-dot" style="left: 50%; top: 60%;">
                                            <div class="pulse-dot"></div>
                                            <div class="hotspot-tooltip">
                                                <button class="btn btn-warning btn-sm rounded-pill px-3 fw-medium">
                                                    <i class="bi bi-cart-plus me-1"></i>Beli Sekarang
                                                </button>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <!-- Right side with 4 smaller images in a grid -->
                            <div class="col-md-6 d-flex flex-column">
                                <!-- Top row - two images -->
                                <div class="row g-3 flex-grow-1 mb-3" style="height: 48%;">
                                    <div class="col-6">
                                        <div class="card h-100 border-0 overflow-hidden">
                                            <img src="assets/img/product/decorasi/kamar-tidur.jpg"
                                                class="card-img h-100 object-fit-cover" alt="Kamar Tidur">
                                            <div class="position-absolute top-3 start-3 pt-2 ps-2">
                                                <span
                                                    class="badge bg-white text-dark py-2 px-3 fw-medium rounded-2 shadow-sm">Kamar
                                                    Tidur</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="card h-100 border-0 overflow-hidden">
                                            <img src="assets/img/product/decorasi/kantor.jpg"
                                                class="card-img h-100 object-fit-cover" alt="Kantor">
                                            <div class="position-absolute top-3 start-3 pt-2 ps-2">
                                                <span
                                                    class="badge bg-white text-dark py-2 px-3 fw-medium rounded-2 shadow-sm">Kantor</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Bottom row - two images -->
                                <div class="row g-3 flex-grow-1" style="height: 48%;">
                                    <div class="col-6">
                                        <div class="card h-100 border-0 overflow-hidden">
                                            <img src="assets/img/product/decorasi/ruang-tamu.jpg"
                                                class="card-img h-100 object-fit-cover" alt="Ruang Tamu">
                                            <div class="position-absolute top-3 start-3 pt-2 ps-2">
                                                <span
                                                    class="badge bg-white text-dark py-2 px-3 fw-medium rounded-2 shadow-sm">Ruang
                                                    Tamu</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="card h-100 border-0 overflow-hidden">
                                            <img src="assets/img/product/decorasi/ruang-santai.jpg"
                                                class="card-img h-100 object-fit-cover" alt="Ruang Santai">
                                            <div class="position-absolute top-3 start-3 pt-2 ps-2">
                                                <span
                                                    class="badge bg-white text-dark py-2 px-3 fw-medium rounded-2 shadow-sm">Ruang
                                                    Santai</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- popular item -->
        <div class="product-area product-area-new">
            <div class="container">
                <div class="row">
                    <div class="col-12 wow fadeInDown mb-0 d-flex justify-content-between" data-wow-delay=".25s">
                        <div class="site-heading-inline">
                            <h2 class="site-title">Produk</h2>
                        </div>
                        <a href="#" class="small view-more">View More <i class="fas fa-angle-double-right"></i></a>
                    </div>
                </div>
                <div class="tab-content wow fadeInUp" data-wow-delay=".25s" id="item-tabContent">
                    <div class="container" id="product-pagination-container">
                        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 g-4  justify-content-start">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- popular item end -->

        <!-- <div class="product-area product-area-new">
            <div class="container">
                <div class="row">
                    <div class="col-12 wow fadeInDown mb-0" data-wow-delay=".25s">
                        <div class="site-heading-inline">
                            <h2 class="site-title">Kategory Product</h2>
                        </div>
                    </div>
                </div>
                <div class="tab-content wow fadeInUp" data-wow-delay=".25s" id="item-tabContent">
                    <div class="container">
                        <div class="row align-items-center mb-2">
                            <div class="col d-flex justify-content-between align-items-center ps-0">
                                <div class="category-pilihan">
                                    <ul class="d-flex mb-0">
                                        <?php if (!empty($model['category'])): ?>
                                            <?php foreach ($model['category'] as $product): ?>
                                                <li class="nav-item">
                                                    <a class="d-flex justify-content-center align-items-center custom-nav-link-product"
                                                        data-category="<?= strtolower($product['nama']) ?>"
                                                        href="javascript:void(0)">
                                                        <?= ucfirst($product['nama']) ?>
                                                    </a>
                                                </li>
                                            <?php endforeach; ?>
                                        <?php else: ?>
                                            <li>
                                                <p class="text-muted">Tidak ada category yang tersedia.</p>
                                            </li>
                                        <?php endif; ?>
                                    </ul>
                                </div>

                                <a href="#" class="small view-more">View More <i
                                        class="fas fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-content wow fadeInUp" data-wow-delay=".25s" id="item-tabContent">
                    <div class="container category-product">
                        <div id="product-container"
                            class="row row-cols-2 row-cols-md-3 row-cols-lg-4 g-4  justify-content-start">

                        </div>
                    </div>
                </div>
            </div>
        </div> -->


        <!-- choose-area -->
        <div class="product-area product-area-new">
            <div class="container">
                <div class="row">
                    <div class="col-12 wow fadeInDown" data-wow-delay=".25s">
                        <div class="site-heading-inline m-0">
                            <h2 class="site-title">Layanan Furnice</h2>
                        </div>
                    </div>
                </div>
                <div class="choose-area">
                    <div class="container">
                        <div class="choose-content wow fadeInUp mt-5" data-wow-delay=".25s">
                            <div class="row g-4">
                                <div class="col-lg-4">
                                    <div class="choose-item">
                                        <div class="choose-icon">
                                            <img src="assets/img/icon/warranty.svg" alt="">
                                        </div>
                                        <div class="choose-info">
                                            <h4>Free Ongkir</h4>
                                            <p>Gratis biaya kirim dengan pembelian di atas 1 juta dan jarak maksimal
                                                20km</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="choose-item">
                                        <div class="choose-icon">
                                            <img src="assets/img/icon/price.svg" alt="">
                                        </div>
                                        <div class="choose-info">
                                            <h4>Free Konsultasi Produk</h4>
                                            <p>Kami menawarkan konsultasi gratis untuk membantu Anda memilih furnitur
                                                yang tepat
                                                sesuai kebutuhan ruang Anda.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="choose-item">
                                        <div class="choose-icon">
                                            <img src="assets/img/icon/delivery.svg" alt="">
                                        </div>
                                        <div class="choose-info">
                                            <h4>Furnitur Trendy & Minimalis</h4>
                                            <p>Beragam furnitur dengan desain trendy dan minimalis untuk ruangan Anda
                                                dapat
                                                ditemukan di sini.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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
        <!-- about area -->
        <div class="about-area mt-60 pb-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-left wow fadeInLeft" data-wow-delay=".25s">
                            <div class="about-img">
                                <img class="img-1" src="assets/img/about/01.jpg" alt="">
                                <img class="img-2" src="assets/img/about/02.jpg" alt="">
                                <img class="img-3" src="assets/img/about/03.jpg" alt="">
                            </div>
                            <div class="about-experience" hidden>
                                <div class="about-experience-icon">
                                    <img src="assets/img/icon/experience.svg" alt="">
                                </div>
                                <b>30 Years Of <br> Experience</b>
                            </div>
                            <div class="about-shape">
                                <img src="assets/img/shape/01.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-right wow fadeInRight" data-wow-delay=".25s">
                            <div class="site-heading mb-3">
                                <span class="site-title-tagline justify-content-start">
                                    <i class="flaticon-drive"></i> About Us
                                </span>
                                <h2 class="site-title">
                                    Furnice Furnishing
                                </h2>
                            </div>
                            <p class="paragraf-tagline">
                                Furnice Furnishing merupakan perusahaan yang bergerak dalam bisnis untuk memenuhi
                                kebutuhan Furniture dan Home Accesories modern yang dinamis dan terus berkembang.
                                Mengusung tagline “Always Nice”, Furnice berkembang dengan mengutamakan pelayanan
                                yang
                                hangat dan pengalaman belanja yang bersahabat. Melalui Furnice, customer dapat
                                merasakan
                                kemudahan berbelanja secara online dari mana saja dan kapan saja.
                                <br></br>
                                Saat ini sudah lebih dari 10.000 cutomer sejak terbuka nya store Furnice pada tahun
                                2021
                                dan saat ini Frunice telah memiliki beberapa cabang yang tersebar di Pulau Jawa
                                seperti
                                di Yogyakarta, Alam Sutera, Cibubur serta akan terus ber-ekspansi kedepannya.

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- about area end -->
        <div class="product-area product-area-new">
            <div class="container">
                <div class="row">
                    <div class="col-12 wow fadeInDown mb-0" data-wow-delay=".25s">
                        <div class="site-heading-inline">
                            <h2 class="site-title">Sosial Media</h2>
                        </div>
                    </div>
                </div>
                <div class="instagram-area pb-50">
                    <div class="container wow fadeInUp" data-wow-delay=".25s">
                        <div class="instagram-slider owl-carousel owl-theme">
                            <div class="instagram-item">
                                <div class="instagram-img">
                                    <img src="assets/img/instagram/instagram1.jpg" alt="Thumb">
                                    <a href="https://www.instagram.com/p/DGNHp7GSDmX/?img_index=1" target="_blank"><i
                                            class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="instagram-item">
                                <div class="instagram-img">
                                    <img src="assets/img/instagram/instagram2.jpg" alt="Thumb">
                                    <a href="https://www.instagram.com/p/DGNHp7GSDmX/?img_index=1" target="_blank"><i
                                            class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="instagram-item">
                                <div class="instagram-img">
                                    <img src="assets/img/instagram/instagram3.jpg" alt="Thumb">
                                    <a href="https://www.instagram.com/p/DF4oK6gt0KS/?img_index=1" target="_blank"><i
                                            class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="instagram-item">
                                <div class="instagram-img">
                                    <img src="assets/img/instagram/instagram4.jpg" alt="Thumb">
                                    <a href="https://www.instagram.com/p/DF4oK6gt0KS/?img_index=1" target="_blank"><i
                                            class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="instagram-item">
                                <div class="instagram-img">
                                    <img src="assets/img/instagram/instagram5.jpg" alt="Thumb">
                                    <a href="https://www.instagram.com/p/DCgPVDStVwt/?img_index=1" target="_blank"><i
                                            class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="instagram-item">
                                <div class="instagram-img">
                                    <img src="assets/img/instagram/instagram6.jpg" alt="Thumb">
                                    <a href="https://www.instagram.com/p/DCgPVDStVwt/?img_index=1" target="_blank"><i
                                            class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="instagram-item">
                                <div class="instagram-img">
                                    <img src="assets/img/instagram/instagram7.jpg" alt="Thumb">
                                    <a href="https://www.instagram.com/p/DBqQu7Btrjq/?img_index=1" target="_blank"><i
                                            class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="instagram-item">
                                <div class="instagram-img">
                                    <img src="assets/img/instagram/instagram8.jpg" alt="Thumb">
                                    <a href="https://www.instagram.com/p/DEwUM5Lh7DN/?img_index=1" target="_blank"><i
                                            class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- instagram-area end -->

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

        document.addEventListener('DOMContentLoaded', function() {
            // Define variables for pagination
            let currentPage = 1;
            const productsPerPage = 8; // 8 products per page for laptop size
            let totalPages = 0;
            let products = [];

            // Initialize - fetch products from API
            loadProducts();

            // Function to load products from API
            function loadProducts() {
                $.ajax({
                    url: API_BASE_URL + '/full-product',
                    type: 'GET',
                    dataType: 'json',
                    success: function(response) {
                        if (response.status === 'success') {
                            const allProductsRaw = response.FullProduck; // Get product array from response
                            console.log('Data produk:', allProductsRaw);

                            // Process the raw products
                            processProducts(allProductsRaw);

                            // Display the products
                            displayProducts();
                        } else {
                            console.error('Terjadi kesalahan:', response.message);
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error('Terjadi kesalahan:', error);
                    }
                });
            }

            // Process raw product data
            function processProducts(allProductsRaw) {
                // Get 3 best seller product IDs
                const topBestSellerIds = allProductsRaw
                    .filter(p => p.qty > 0) // only products with stock
                    .sort((a, b) => b.beli - a.beli)
                    .slice(0, 3)
                    .map(p => p.id_product);

                // Process products
                products = allProductsRaw.map(product => {
                    const harga = Number(product.harga) || 0;
                    const promoPersen = Number(product.total_promo) || 0;

                    const potongan = Math.round(harga * (promoPersen / 100));
                    const hargaSetelahDiskon = harga - potongan;

                    const createdDate = new Date(product.created_at);
                    const today = new Date();
                    const diffTime = Math.abs(today - createdDate);
                    const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24));

                    let ribbon = null;

                    if (product.qty <= 0) {
                        ribbon = {
                            text: 'Out of Stock',
                            bg: '#FF0000',
                            color: '#FFFFFF'
                        };
                    } else if (promoPersen > 0) {
                        ribbon = {
                            text: 'Sale',
                            bg: '#FFFB2D',
                            color: '#FF0000'
                        };
                    } else if (diffDays <= 7) {
                        ribbon = {
                            text: 'New Product',
                            bg: '#2B4779',
                            color: '#FFFFFF'
                        };
                    }

                    // Debug the image URL
                    console.log(`Product ${product.id_product} image URL:`, product.url_foto);

                    return {
                        id: product.id_product,
                        title: product.nama_product,
                        description: product.deskripsi ?? "Deskripsi tidak tersedia",
                        price: hargaSetelahDiskon.toLocaleString('id-ID'),
                        oldPrice: harga.toLocaleString('id-ID'),
                        potongan: potongan.toLocaleString('id-ID'),
                        promo: promoPersen,
                        rating: product.rating ?? 4,
                        sold: product.beli ?? 0,
                        slug: product.slug,
                        token: product.token,
                        stock: product.qty,
                        image: product.url_foto,
                        created_at: product.created_at,
                        ribbon
                    };
                });

                // Update total pages based on processed products
                totalPages = Math.ceil(products.length / productsPerPage);
            }

            // Function to create product card
            function createProductCard(product) {
                return `
                <div class="col">
                    <div class="card shadow position-relative rounded-4 p-2 product-card" data-id="${product.id}" data-slug="${product.slug}" 
     data-token="${product.token}" style="cursor:pointer;">

                        ${product.ribbon ? `
                            <div class="position-absolute ribbon-wrapper">
                                <div class="ribbon text-uppercase fw-bold text-center"
                                    style="background-color: ${product.ribbon.bg}; color: ${product.ribbon.color};">
                                    ${product.ribbon.text}
                                </div>
                            </div>` : ''
                        }

                        <div class="text-center pt-3">
                            <img src="${product.image}" class="img-fluid product-image" alt="${product.title}" onerror="this.src='assets/img/no-image.png'; this.onerror='';">
                        </div>

                        <div class="bodykartu">
                            <div class="d-flex flex-column">
                                <p class="card-title text-truncate product-title">${product.title}</p>
                                <p class="card-text text-truncate product-desc">${product.description}</p>
                                <div class="d-flex gap-1 align-items-center">
                                    ${createStarRating(product.rating)}
                                    <small class="text-muted fst-italic ms-1 sold-text">${product.sold} terjual</small>
                                </div>

                                <div class="mt-auto">
                                    <div class="d-flex flex-wrap align-items-baseline">
                                        <div class="me-2">
                                            <span class="fw-bold price">
                                                <sup class="fw-normal">Rp</sup> ${product.price}
                                            </span>
                                        </div>
                                        ${product.promo > 0 ? `
                                        <div>
                                            <span class="fw-normal text-danger old-price">
                                                <sup>Rp</sup>
                                                <span class="text-decoration-line-through">${product.oldPrice}</span>
                                            </span>
                                        </div>` : ''}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                `;
            }

            // Function to create star rating
            function createStarRating(rating) {
                let stars = '';
                for (let i = 0; i < 5; i++) {
                    if (i < rating) {
                        stars += '<i class="bi bi-star-fill text-warning small-icon"></i>';
                    } else {
                        stars += '<i class="bi bi-star text-warning small-icon"></i>';
                    }
                }
                return stars;
            }

            // Function to create pagination
            function createPagination() {
                let paginationHTML = `
        <nav aria-label="Page navigation">
        <ul class="pagination">
            <li class="page-item ${currentPage === 1 ? 'disabled' : ''}">
            <a class="page-link" href="#" aria-label="Previous" data-page="prev">
                <span class="double-arrow">&laquo;</span>
            </a>
            </li>
        `;

                for (let i = 1; i <= totalPages; i++) {
                    paginationHTML += `
            <li class="page-item ${currentPage === i ? 'active' : ''}">
                <a class="page-link" href="#" data-page="${i}">${i}</a>
            </li>
            `;
                }

                paginationHTML += `
            <li class="page-item ${currentPage === totalPages ? 'disabled' : ''}">
            <a class="page-link" href="#" aria-label="Next" data-page="next">
                <span class="double-arrow-right">&raquo;</span>
            </a>
            </li>
        </ul>
        </nav>
        `;

                return paginationHTML;
            }

            // Function to display products on the current page
            function displayProducts() {
                const productContainer = document.querySelector('#product-pagination-container .row');
                const paginationContainer = document.getElementById('pagination-container');

                if (!productContainer) {
                    console.error('Product container not found!');
                    return;
                }

                // Create pagination container if it doesn't exist
                if (!paginationContainer) {
                    const newPaginationContainer = document.createElement('div');
                    newPaginationContainer.id = 'pagination-container';
                    newPaginationContainer.className = 'mt-4 d-flex justify-content-center';
                    productContainer.parentElement.appendChild(newPaginationContainer);
                }

                // Calculate products for current page
                const startIndex = (currentPage - 1) * productsPerPage;
                const endIndex = Math.min(startIndex + productsPerPage, products.length);
                const currentProducts = products.slice(startIndex, endIndex);

                // Create HTML for products
                let productsHTML = '';
                if (currentProducts.length === 0) {
                    productsHTML = '<div class="col-12 text-center"><p>Tidak ada produk yang tersedia.</p></div>';
                } else {
                    currentProducts.forEach(product => {
                        productsHTML += createProductCard(product);
                    });
                }

                // Display products
                productContainer.innerHTML = productsHTML;

                // Display pagination if needed
                const actualPaginationContainer = document.getElementById('pagination-container');
                if (actualPaginationContainer) {
                    actualPaginationContainer.innerHTML = totalPages > 1 ? createPagination() : '';

                    // Add event listeners for pagination
                    const pageLinks = actualPaginationContainer.querySelectorAll('.page-link');
                    pageLinks.forEach(link => {
                        link.addEventListener('click', function(e) {
                            e.preventDefault();
                            const pageData = this.getAttribute('data-page');

                            if (pageData === 'prev') {
                                if (currentPage > 1) currentPage--;
                            } else if (pageData === 'next') {
                                if (currentPage < totalPages) currentPage++;
                            } else {
                                currentPage = parseInt(pageData);
                            }

                            displayProducts();

                            // Smooth scroll to top of product section
                            productContainer.scrollIntoView({
                                behavior: 'smooth'
                            });
                        });
                    });
                }

                // Add click event to product cards
                const productCards = document.querySelectorAll('.product-card');
                productCards.forEach(card => {
                    card.addEventListener('click', function() {
                        const productId = this.getAttribute('data-id');
                        window.location.href = `product-detail.php?id=${productId}`;
                    });
                });
            }
        });

        //categoty produc
    </script>

    <!-- JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Data produk dari PHP (contoh)
            const productkategori = <?= json_encode($model["kategori"]); ?>;

            // Mapping kategori berdasarkan nama_kategori
            function mapCategory(name) {
                const lowercaseName = name.toLowerCase();
                if (lowercaseName.includes('living')) return 'living';
                if (lowercaseName.includes('dinning')) return 'dinning';
                if (lowercaseName.includes('bedroom')) return 'bedroom';
                if (lowercaseName.includes('kitchen')) return 'kitchen';
                return 'other';
            }

            // Fungsi membuat rating dummy
            function createStarRating(rating) {
                let stars = '';
                for (let i = 0; i < 5; i++) {
                    stars += `<i class="bi ${i < rating ? 'bi-star-fill' : 'bi-star'} text-warning"></i>`;
                }
                return stars;
            }
            // animate__animated animate__fadeInRight
            // Fungsi men-generate card produk
            function createProductCard(product) {
                const harga = Number(product.harga) || 0;
                const oldPrice = harga; // Didefinisikan untuk menghindari error
                const promoPersen = Number(product.total_promo) || 0;

                const potongan = Math.round(harga * (promoPersen / 100));
                const hargaSetelahDiskon = harga - potongan;

                const createdDate = new Date(product.created_at);
                const today = new Date();
                const diffTime = Math.abs(today - createdDate);
                const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24));

                let ribbon = null;

                if (product.qty <= 0) {
                    ribbon = {
                        text: 'Out of Stock',
                        bg: '#FF0000',
                        color: '#FFFFFF'
                    };
                } else if (promoPersen > 0) {
                    ribbon = {
                        text: 'Sale',
                        bg: '#FFFB2D',
                        color: '#FF0000'
                    };
                } else if (diffDays <= 7) {
                    ribbon = {
                        text: 'New Product',
                        bg: '#2B4779',
                        color: '#FFFFFF'
                    };
                }

                // Menambahkan titik pemisah ribuan pada harga
                const formattedHargaSetelahDiskon = hargaSetelahDiskon.toLocaleString('id-ID');
                const formattedOldPrice = oldPrice.toLocaleString('id-ID');

                return `
                        <div class="col animate__animated animate__fadeInRight">
                            <div class="card shadow position-relative rounded-4 p-2 product-card" data-id="${product.id_product}" data-slug="${product.slug}" 
     data-token="${product.token}" style="cursor:pointer;">
                                ${ribbon ? `
                                <div class="position-absolute ribbon-wrapper">
                                    <div class="ribbon text-uppercase fw-bold text-center"
                                        style="background-color: ${ribbon.bg}; color: ${ribbon.color};">
                                        ${ribbon.text}
                                    </div>
                                </div>` : ''
                    }

                                <div class="text-center pt-3">
                                    <img src="assets/img/product/${product.foto}" class="img-fluid product-image" alt="${product.nama_product}">
                                </div>

                                <div class="bodykartu">
                                    <div class="d-flex flex-column">
                                        <div class="">
                                            <p class="card-title text-truncate product-title">${product.nama_product}</p>
                                            <p class="card-text text-truncate product-desc">${product.deskripsi ?? 'Deskripsi tidak tersedia'}</p>
                                            <div class="d-flex gap-1 align-items-center">
                                                ${createStarRating(product.rating || 4)}
                                                <small class="text-muted fst-italic ms-1 sold-text">${product.beli || 50} terjual</small>
                                            </div>
                                        </div>

                                        <div class="mt-auto">
                                            <div class="d-flex flex-wrap align-items-baseline">
                                                <div class="me-2">
                                                    <span class="fw-bold price">
                                                        <sup class="fw-normal">Rp</sup> ${formattedHargaSetelahDiskon}
                                                    </span>
                                                </div>
                                                <div>
                                                    <span class="fw-normal text-danger old-price">
                                                        <sup>Rp</sup>
                                                        <span class="text-decoration-line-through">${formattedOldPrice}</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        `;
            }

            // Fungsi render produk
            function renderProducts(category) {
                const container = document.getElementById('product-container');
                container.classList.remove('animate__fadeInRight');
                container.classList.add('animate__fadeOutLeft');

                setTimeout(() => {
                    container.innerHTML = '';

                    const filtered = productkategori.filter(p => p.nama_kategori.toLowerCase() === category);

                    if (filtered.length === 0) {
                        container.innerHTML = '<div class="col-12 text-center">Tidak ada produk.</div>';
                    } else {
                        filtered.forEach(product => {
                            container.innerHTML += createProductCard(product);
                        });
                    }

                    container.classList.remove('animate__fadeOutLeft');
                    container.classList.add('animate__fadeInRight');
                }, 400);
            }

            // Gunakan kategori pertama secara default jika ada
            if (productkategori.length > 0) {
                const firstCategory = productkategori[0].nama_kategori.toLowerCase();
                renderProducts(firstCategory);
                setActiveCategory(firstCategory);
            }

            // Menambahkan kelas 'active' ke kategori yang diklik
            function setActiveCategory(category) {
                document.querySelectorAll('.custom-nav-link-product').forEach(link => {
                    if (link.dataset.category === category) {
                        link.classList.add('active');
                    } else {
                        link.classList.remove('active');
                    }
                });
            }

            // Menampilkan produk kategori 'living' secara default
            renderProducts('living');
            setActiveCategory('living'); // Menandai kategori 'living' sebagai aktif secara default

            // Event klik kategori
            document.querySelectorAll('.custom-nav-link-product').forEach(link => {
                link.addEventListener('click', function() {
                    const category = this.dataset.category;
                    renderProducts(category);
                    setActiveCategory(category); // Menandai kategori yang diklik sebagai aktif
                });
            });
        });

        // const API_BASE_URL = "<?= $apiBaseUrl ?>";

        $.ajax({
            url: API_BASE_URL + '/product-terbaru',
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
                            <div class="card shadow position-relative rounded-4 p-2 product-card" data-id="${product.id_product}" data-slug="${product.slug}" 
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
    </script>

    <script>
        document.addEventListener('click', function(e) {
            const card = e.target.closest('.product-card');
            if (card) {
                const slug = card.getAttribute('data-slug');
                const token = card.getAttribute('data-token');
                console.log(slug, token);
                if (slug && token) {
                    window.location.href = `/product/${slug}/${token}`;
                }
            }
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const categoryContainer = document.querySelector('.category-pilihan');

            if (categoryContainer) {
                // Check if scrolled to show left gradient
                function checkScroll() {
                    if (categoryContainer.scrollLeft > 10) {
                        categoryContainer.classList.add('scrolled-right');
                    } else {
                        categoryContainer.classList.remove('scrolled-right');
                    }
                }

                // Listen for scroll events
                categoryContainer.addEventListener('scroll', checkScroll);

                // Enable touch scrolling with momentum for mobile (already built into browsers)

                // Enable horizontal scrolling with mouse wheel for desktop
                categoryContainer.addEventListener('wheel', function(e) {
                    if (e.deltaY !== 0) {
                        e.preventDefault();
                        this.scrollLeft += e.deltaY;
                        checkScroll();
                    }
                });

                // Add active state toggle for categories
                const categoryLinks = categoryContainer.querySelectorAll('.custom-nav-link-product');
                categoryLinks.forEach(link => {
                    link.addEventListener('click', function() {
                        categoryLinks.forEach(l => l.classList.remove('active'));
                        this.classList.add('active');

                        // Get category value for filtering
                        const category = this.getAttribute('data-category');
                        console.log('Selected category:', category);
                        // Add your filtering logic here
                    });
                });

                // Initial check for scroll position
                checkScroll();
            }
        });
    </script>

</body>

</html>