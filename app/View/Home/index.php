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
        <div class="hero-section hs-1">
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
        <div class="product-area product-area-new pt-40">
            <div class="container">
                <div class="row">
                    <div class="col-12 wow fadeInDown mb-0" data-wow-delay=".25s">
                        <div class="site-heading-inline">
                            <h2 class="site-title">Produk Terbaru</h2>
                            <a href="#" class="small">View More <i class="fas fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="tab-content wow fadeInUp" data-wow-delay=".25s" id="item-tabContent">
                    <div class="container">
                        <div
                            class="row row-cols-2 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 justify-content-center new-product">
                            <div class="col">
                                <div class="card shadow position-relative rounded-4 p-2">
                                    <!-- Corner Ribbon -->
                                    <div class="position-absolute ribbon-wrapper">
                                        <div class="ribbon text-white text-uppercase fw-bold text-center">
                                            New Product
                                        </div>
                                    </div>

                                    <!-- Product Image -->
                                    <div class="text-center pt-3">
                                        <img src="assets/img/product/kursi/ZULU CHAIR WHITE.png"
                                            class="img-fluid product-image" alt="Product Image">
                                    </div>
                                    <div class="bodykartu">
                                        <div class="d-flex flex-column ">
                                            <!-- Product Details -->
                                            <div class="">
                                                <!-- <h5 class="">
                                                CT-IMP Matto Light Brown
                                            </h5> -->
                                                <p class="card-title text-truncate fw-medium product-title">CT-IMP Matto
                                                    Light Brown
                                                </p>

                                                <p class="card-text text-truncate product-desc">Meja ruang tamu
                                                    aesthetic.</p>
                                                <div class="d-flex gap-1 align-items-center">
                                                    <i class="bi bi-star-fill text-warning small-icon"></i>
                                                    <i class="bi bi-star-fill text-warning small-icon"></i>
                                                    <i class="bi bi-star-fill text-warning small-icon"></i>
                                                    <i class="bi bi-star-fill text-warning small-icon"></i>
                                                    <i class="bi bi-star-fill text-warning small-icon"></i>
                                                    <small class="text-muted fst-italic ms-1 sold-text">300
                                                        terjual</small>
                                                </div>
                                            </div>

                                            <!-- Price Section -->
                                            <div class="mt-auto">
                                                <div class="d-flex flex-wrap align-items-baseline">
                                                    <div class="me-2">
                                                        <span class="fw-bold price">
                                                            <sup class="fw-normal">Rp</sup> 500.000
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <span class="fw-normal text-danger old-price">
                                                            <sup>Rp</sup>
                                                            <span class="text-decoration-line-through">600.000</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card shadow position-relative rounded-4 p-2">
                                    <!-- Corner Ribbon -->
                                    <div class="position-absolute ribbon-wrapper">
                                        <div class="ribbon text-white text-uppercase fw-bold text-center">
                                            New Product
                                        </div>
                                    </div>

                                    <!-- Product Image -->
                                    <div class="text-center pt-3">
                                        <img src="assets/img/product/kursi/ZULU CHAIR WHITE.png"
                                            class="img-fluid product-image" alt="Product Image">
                                    </div>
                                    <div class="bodykartu">
                                        <div class="d-flex flex-column ">
                                            <!-- Product Details -->
                                            <div class="">
                                                <!-- <h5 class="">
                                                CT-IMP Matto Light Brown
                                            </h5> -->
                                                <p class="card-title text-truncate fw-medium product-title">CT-IMP Matto
                                                    Light Brown
                                                </p>

                                                <p class="card-text text-truncate product-desc">Meja ruang tamu
                                                    aesthetic.</p>
                                                <div class="d-flex gap-1 align-items-center">
                                                    <i class="bi bi-star-fill text-warning small-icon"></i>
                                                    <i class="bi bi-star-fill text-warning small-icon"></i>
                                                    <i class="bi bi-star-fill text-warning small-icon"></i>
                                                    <i class="bi bi-star-fill text-warning small-icon"></i>
                                                    <i class="bi bi-star-fill text-warning small-icon"></i>
                                                    <small class="text-muted fst-italic ms-1 sold-text">300
                                                        terjual</small>
                                                </div>
                                            </div>

                                            <!-- Price Section -->
                                            <div class="mt-auto">
                                                <div class="d-flex flex-wrap align-items-baseline">
                                                    <div class="me-2">
                                                        <span class="fw-bold price">
                                                            <sup class="fw-normal">Rp</sup> 500.000
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <span class="fw-normal text-danger old-price">
                                                            <sup>Rp</sup>
                                                            <span class="text-decoration-line-through">600.000</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card shadow position-relative rounded-4 p-2">
                                    <!-- Corner Ribbon -->
                                    <div class="position-absolute ribbon-wrapper">
                                        <div class="ribbon text-white text-uppercase fw-bold text-center">
                                            New Product
                                        </div>
                                    </div>

                                    <!-- Product Image -->
                                    <div class="text-center pt-3">
                                        <img src="assets/img/product/kursi/ZULU CHAIR WHITE.png"
                                            class="img-fluid product-image" alt="Product Image">
                                    </div>
                                    <div class="bodykartu">
                                        <div class="d-flex flex-column ">
                                            <!-- Product Details -->
                                            <div class="">
                                                <!-- <h5 class="">
                                                CT-IMP Matto Light Brown
                                            </h5> -->
                                                <p class="card-title text-truncate fw-medium product-title">CT-IMP Matto
                                                    Light Brown
                                                </p>

                                                <p class="card-text text-truncate product-desc">Meja ruang tamu
                                                    aesthetic.</p>
                                                <div class="d-flex gap-1 align-items-center">
                                                    <i class="bi bi-star-fill text-warning small-icon"></i>
                                                    <i class="bi bi-star-fill text-warning small-icon"></i>
                                                    <i class="bi bi-star-fill text-warning small-icon"></i>
                                                    <i class="bi bi-star-fill text-warning small-icon"></i>
                                                    <i class="bi bi-star-fill text-warning small-icon"></i>
                                                    <small class="text-muted fst-italic ms-1 sold-text">300
                                                        terjual</small>
                                                </div>
                                            </div>

                                            <!-- Price Section -->
                                            <div class="mt-auto">
                                                <div class="d-flex flex-wrap align-items-baseline">
                                                    <div class="me-2">
                                                        <span class="fw-bold price">
                                                            <sup class="fw-normal">Rp</sup> 500.000
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <span class="fw-normal text-danger old-price">
                                                            <sup>Rp</sup>
                                                            <span class="text-decoration-line-through">600.000</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card shadow position-relative rounded-4 p-2">
                                    <!-- Corner Ribbon -->
                                    <div class="position-absolute ribbon-wrapper">
                                        <div class="ribbon text-white text-uppercase fw-bold text-center">
                                            New Product
                                        </div>
                                    </div>

                                    <!-- Product Image -->
                                    <div class="text-center pt-3">
                                        <img src="assets/img/product/kursi/ZULU CHAIR WHITE.png"
                                            class="img-fluid product-image" alt="Product Image">
                                    </div>
                                    <div class="bodykartu">
                                        <div class="d-flex flex-column ">
                                            <!-- Product Details -->
                                            <div class="">
                                                <!-- <h5 class="">
                                                CT-IMP Matto Light Brown
                                            </h5> -->
                                                <p class="card-title text-truncate fw-medium product-title">CT-IMP Matto
                                                    Light Brown
                                                </p>

                                                <p class="card-text text-truncate product-desc">Meja ruang tamu
                                                    aesthetic.</p>
                                                <div class="d-flex gap-1 align-items-center">
                                                    <i class="bi bi-star-fill text-warning small-icon"></i>
                                                    <i class="bi bi-star-fill text-warning small-icon"></i>
                                                    <i class="bi bi-star-fill text-warning small-icon"></i>
                                                    <i class="bi bi-star-fill text-warning small-icon"></i>
                                                    <i class="bi bi-star-fill text-warning small-icon"></i>
                                                    <small class="text-muted fst-italic ms-1 sold-text">300
                                                        terjual</small>
                                                </div>
                                            </div>

                                            <!-- Price Section -->
                                            <div class="mt-auto">
                                                <div class="d-flex flex-wrap align-items-baseline">
                                                    <div class="me-2">
                                                        <span class="fw-bold price">
                                                            <sup class="fw-normal">Rp</sup> 500.000
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <span class="fw-normal text-danger old-price">
                                                            <sup>Rp</sup>
                                                            <span class="text-decoration-line-through">600.000</span>
                                                        </span>
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
            </div>
        </div>


        <div class="product-area product-area-new pt-40">
            <div class="container">
                <div class="row">
                    <div class="col-12 wow fadeInDown mb-0" data-wow-delay=".25s">
                        <div class="site-heading-inline">
                            <h2 class="site-title">Dekorasi Product</h2>
                            <a href="#" class="small">View More <i class="fas fa-angle-double-right"></i></a>
                        </div>
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
        <div class="product-area product-area-new pt-40">
            <div class="container">
                <div class="row">
                    <div class="col-12 wow fadeInDown mb-0" data-wow-delay=".25s">
                        <div class="site-heading-inline">
                            <h2 class="site-title">Product</h2>
                            <a href="#" class="small">View More <i class="fas fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="tab-content wow fadeInUp" data-wow-delay=".25s" id="item-tabContent">
                    <div class="container" id="product-pagination-container">
                        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 g-4  justify-content-center">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- popular item end -->

        <div class="product-area product-area-new pt-40">
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
                                <!-- <div style="overflow-x: auto; white-space: nowrap;"></div> -->
                                <div class="categories">
                                    <ul class="d-flex mb-0 ul-categories">
                                        <li class="nav-item">
                                            <a class="d-flex justify-content-center align-items-center custom-nav-link-product <?= is_active('/') ?>"
                                                href="/">Living</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="d-flex justify-content-center align-items-center custom-nav-link-product <?= is_active('product') ?>"
                                                href="/product">Dinning</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="d-flex justify-content-center align-items-center custom-nav-link-product<?= (basename($_SERVER['PHP_SELF']) == 'promo.php') ? ' active' : '' ?>"
                                                href="promo.php">Bedroom</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="d-flex justify-content-center align-items-center custom-nav-link-product<?= (basename($_SERVER['PHP_SELF']) == 'promo.php') ? ' active' : '' ?>"
                                                href="kitchen">Kitchen</a>
                                        </li>
                                    </ul>
                                </div>

                                <a href="#" class="small d-flex align-items-center"
                                    style="font-size: 14px; color: #757f95; font-weight: 500;">
                                    View More <i class="fas fa-angle-double-right ms-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-content wow fadeInUp" data-wow-delay=".25s" id="item-tabContent">
                    <div class="container category-product">
                        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 g-4  justify-content-center">

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- choose-area -->
        <div class="product-area product-area-new pt-40">
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

        <!-- choose-area end-->
        <!-- newsletter area -->
        <div class="newsletter-area pt-40">
            <div>
                <div class="container wow fadeInUp rounded-4" data-wow-delay=".25s" style="background-color: #2B4779;">
                    <div class="newsletter-wrap">
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
        <!-- newsletter area end -->
        <!-- contact us -->
        <!-- <div class="contact-area pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-12 wow fadeInDown" data-wow-delay=".25s">
                        <div class="site-heading-inline item-tab">
                            <h2 class="site-title">Contact</h2>
                        </div>
                    </div>
                </div>
                <div class="contact-wrapper">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="contact-content">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="contact-info">
                                            <div class="contact-info-icon">
                                                <i class="fal fa-map-location-dot"></i>
                                            </div>
                                            <div class="contact-info-content">
                                                <h5>Office Address</h5>
                                                <p>Alam Sutera, Jl. Lingkar arat No 15, Kel Panunggangan Timur, Kec
                                                    Pinang, Tangerang, banten</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="contact-info">
                                            <div class="contact-info-icon">
                                                <i class="fal fa-headset"></i>
                                            </div>
                                            <div class="contact-info-content">
                                                <h5>Call Us</h5>
                                                <p>0811-9018-800</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="contact-info">
                                            <div class="contact-info-icon">
                                                <i class="fal fa-envelopes"></i>
                                            </div>
                                            <div class="contact-info-content">
                                                <h5>Email Us</h5>
                                                <p><a href="#">furnicefurnishing.alamsutera@gmail.com</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="contact-form">
                                <div class="contact-form-header">
                                    <h2>Get In Touch</h2>
                                    <p>It is a long established fact that a reader will be distracted by the
                                        readable
                                        content of a page words which even slightly when looking at its layout. </p>
                                </div>
                                <form method="post" action="/fameo/assets/php/contact.php" id="contact-form">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="name"
                                                    placeholder="Your Name" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="email" class="form-control" name="email"
                                                    placeholder="Your Email" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="subject"
                                            placeholder="Your Subject" required="">
                                    </div>
                                    <div class="form-group">
                                        <textarea name="message" cols="30" rows="4" class="form-control"
                                            placeholder="Write Your Message"></textarea>
                                    </div>
                                    <button type="submit" class="theme-btn">Send
                                        Message <i class="far fa-paper-plane"></i></button>
                                    <div class="col-md-12 my-3">
                                        <div class="form-messege text-success"></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- contact us end -->

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
                            <div class="about-experience">
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
                            <p>
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
        <div class="product-area product-area-new pt-40">
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
        document.addEventListener('DOMContentLoaded', function () {
            const offcanvasToggler = document.getElementById('offcanvasToggler');
            const offcanvasNavbar = document.getElementById('offcanvasNavbar');

            // Mencegah pembuatan backdrop
            offcanvasNavbar.addEventListener('show.bs.offcanvas', function () {
                document.querySelectorAll('.offcanvas-backdrop').forEach(el => el.remove());
            });

            // Alternatif: nonaktifkan backdrop sepenuhnya
            offcanvasNavbar.addEventListener('shown.bs.offcanvas', function () {
                const backdrops = document.querySelectorAll('.offcanvas-backdrop');
                backdrops.forEach(backdrop => {
                    backdrop.classList.remove('show');
                    backdrop.style.display = 'none';
                });
            });

            // Pastikan backdrop dihapus saat menutup
            offcanvasNavbar.addEventListener('hidden.bs.offcanvas', function () {
                document.querySelectorAll('.offcanvas-backdrop').forEach(el => el.remove());
            });
        });

        document.addEventListener('DOMContentLoaded', function () {
            const hotspots = document.querySelectorAll('.hotspot-dot');

            hotspots.forEach(hotspot => {
                hotspot.addEventListener('mouseenter', function () {
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
        document.addEventListener('DOMContentLoaded', function () {
            const searchModal = document.getElementById('searchModal');
            searchModal.addEventListener('shown.bs.modal', function () {
                searchModal.querySelector('input').focus();
            });
        });

        // Data produk (untuk contoh)
        const products = [
            {
                title: "CT-IMP Matto Light Brown",
                description: "Meja ruang tamu aesthetic.",
                price: "500.000",
                oldPrice: "600.000",
                rating: 5,
                sold: 300,
                image: "assets/img/product/kursi/ZULU CHAIR WHITE.png",
                isNew: true
            },
            {
                title: "Scandinavian Coffee Table",
                description: "Meja kopi minimalis modern.",
                price: "450.000",
                oldPrice: "550.000",
                rating: 4,
                sold: 250,
                image: "assets/img/product/kursi/ZULU CHAIR WHITE.png",
                isNew: false
            },
            {
                title: "Woody Chair Classic",
                description: "Kursi kayu dengan bantalan nyaman.",
                price: "350.000",
                oldPrice: "400.000",
                rating: 5,
                sold: 420,
                image: "assets/img/product/kursi/ZULU CHAIR WHITE.png",
                isNew: true
            },
            {
                title: "Sofa Corner Premium",
                description: "Sofa sudut untuk ruang keluarga.",
                price: "2.500.000",
                oldPrice: "3.000.000",
                rating: 5,
                sold: 150,
                image: "assets/img/product/kursi/ZULU CHAIR WHITE.png",
                isNew: false
            },
            {
                title: "Minimalist Side Table",
                description: "Meja samping dengan laci.",
                price: "275.000",
                oldPrice: "325.000",
                rating: 4,
                sold: 180,
                image: "assets/img/product/kursi/ZULU CHAIR WHITE.png",
                isNew: false
            },
            {
                title: "Dining Chair White",
                description: "Kursi makan putih elegan.",
                price: "225.000",
                oldPrice: "300.000",
                rating: 4,
                sold: 320,
                image: "assets/img/product/kursi/ZULU CHAIR WHITE.png",
                isNew: true
            },
            {
                title: "Rattan Accent Chair",
                description: "Kursi rotan untuk ruang tamu.",
                price: "450.000",
                oldPrice: "550.000",
                rating: 5,
                sold: 200,
                image: "assets/img/product/kursi/ZULU CHAIR WHITE.png",
                isNew: false
            },
            {
                title: "Modern TV Cabinet",
                description: "Kabinet TV dengan penyimpanan.",
                price: "1.200.000",
                oldPrice: "1.500.000",
                rating: 5,
                sold: 120,
                image: "assets/img/product/kursi/ZULU CHAIR WHITE.png",
                isNew: true
            },
            {
                title: "Storage Ottoman",
                description: "Ottoman dengan penyimpanan.",
                price: "350.000",
                oldPrice: "400.000",
                rating: 4,
                sold: 180,
                image: "assets/img/product/kursi/ZULU CHAIR WHITE.png",
                isNew: false
            },
            {
                title: "Round Dining Table",
                description: "Meja makan bulat untuk 4 orang.",
                price: "750.000",
                oldPrice: "900.000",
                rating: 5,
                sold: 90,
                image: "assets/img/product/kursi/ZULU CHAIR WHITE.png",
                isNew: true
            },
            {
                title: "Bedside Table Oak",
                description: "Meja samping tempat tidur kayu oak.",
                price: "320.000",
                oldPrice: "380.000",
                rating: 4,
                sold: 220,
                image: "assets/img/product/kursi/ZULU CHAIR WHITE.png",
                isNew: false
            },
            {
                title: "Bar Stool Black",
                description: "Kursi bar hitam tinggi.",
                price: "280.000",
                oldPrice: "350.000",
                rating: 4,
                sold: 150,
                image: "assets/img/product/kursi/ZULU CHAIR WHITE.png",
                isNew: true
            },
            {
                title: "Office Desk White",
                description: "Meja kerja putih dengan laci.",
                price: "850.000",
                oldPrice: "950.000",
                rating: 5,
                sold: 80,
                image: "assets/img/product/kursi/ZULU CHAIR WHITE.png",
                isNew: false
            },
            {
                title: "Bathroom Cabinet",
                description: "Kabinet kamar mandi dengan cermin.",
                price: "420.000",
                oldPrice: "500.000",
                rating: 4,
                sold: 110,
                image: "assets/img/product/kursi/ZULU CHAIR WHITE.png",
                isNew: true
            },
            {
                title: "Bookshelf Modern",
                description: "Rak buku minimalis modern.",
                price: "650.000",
                oldPrice: "750.000",
                rating: 5,
                sold: 95,
                image: "assets/img/product/kursi/ZULU CHAIR WHITE.png",
                isNew: false
            },
            {
                title: "Kitchen Island Small",
                description: "Pulau dapur kecil dengan penyimpanan.",
                price: "900.000",
                oldPrice: "1.100.000",
                rating: 5,
                sold: 70,
                image: "assets/img/product/kursi/ZULU CHAIR WHITE.png",
                isNew: true
            }
        ];

        // Variabel untuk pagination
        let currentPage = 1;
        const productsPerPage = 8; // Menampilkan 8 produk per halaman untuk ukuran laptop
        const totalPages = Math.ceil(products.length / productsPerPage);

        // Fungsi untuk membuat card produk
        function createProductCard(product) {
            return `
                            <div class="col">
                                <div class="card shadow position-relative rounded-4 p-2">
                            ${product.isNew ? `
                            <!-- Corner Ribbon -->
                        <div class="position-absolute ribbon-wrapper">
                                                <div class="ribbon text-white text-uppercase fw-bold text-center">
                                                    New Product
                                                </div>
                                    </div>
                    ` : ''}

                    <!-- Product Image -->
                    <div class="text-center pt-3">
                    <img src="${product.image}" class="img-fluid product-image" alt="Product Image">
                    </div>

                    <div class="bodykartu">
                            <div class="d-flex flex-column ">
                                <!-- Product Details -->
                                <div class="">
                                    <!-- <h5 class="">
                                        ${product.title}
                                </h5> -->
                                    <p class="card-title text-truncate fw-medium product-title">${product.description}
                                    </p>

                                    <p class="card-text text-truncate product-desc">Meja ruang tamu
                                        aesthetic.</p>
                                    <div class="d-flex gap-1 align-items-center">
                                        ${createStarRating(product.rating)}
                                        <small class="text-muted fst-italic ms-1 sold-text">${product.sold} terjual</small>
                                    </div>
                                </div>

                                <!-- Price Section -->
                                <div class="mt-auto">
                                    <div class="d-flex flex-wrap align-items-baseline">
                                        <div class="me-2">
                                            <span class="fw-bold price">
                                                <sup class="fw-normal">Rp</sup> ${product.price}
                                            </span>
                                        </div>
                                        <div>
                                            <span class="fw-normal text-danger old-price">
                                                <sup>Rp</sup>
                                                <span class="text-decoration-line-through">${product.oldPrice}</span>
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

        // Fungsi untuk membuat rating bintang
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

        // Fungsi untuk membuat pagination
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

        // Fungsi untuk menampilkan produk pada halaman tertentu
        function displayProducts() {
            const productContainer = document.querySelector('#product-pagination-container .row');
            const paginationContainer = document.getElementById('pagination-container');

            if (!productContainer || !paginationContainer) return;

            // Hitung produk untuk halaman saat ini
            const startIndex = (currentPage - 1) * productsPerPage;
            const endIndex = Math.min(startIndex + productsPerPage, products.length);
            const currentProducts = products.slice(startIndex, endIndex);

            // Buat HTML untuk produk
            let productsHTML = '';
            currentProducts.forEach(product => {
                productsHTML += createProductCard(product);
            });

            // Tampilkan produk
            productContainer.innerHTML = productsHTML;

            // Tampilkan pagination
            paginationContainer.innerHTML = createPagination();

            // Tambahkan event listener untuk pagination
            const pageLinks = paginationContainer.querySelectorAll('.page-link');
            pageLinks.forEach(link => {
                link.addEventListener('click', function (e) {
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

                    // Scroll dengan smooth ke bagian atas produk
                    productContainer.scrollIntoView({ behavior: 'smooth' });
                });
            });
        }

        // Jalankan ketika DOM sudah siap
        document.addEventListener('DOMContentLoaded', function () {
            // Gunakan selector yang lebih spesifik
            const productContainer = document.querySelector('#product-pagination-container .row');

            if (!productContainer) return;

            const productSection = productContainer.parentElement;

            // Tambahkan container untuk pagination jika belum ada
            if (!document.getElementById('pagination-container')) {
                const paginationContainer = document.createElement('div');
                paginationContainer.id = 'pagination-container';
                paginationContainer.className = 'mt-4 d-flex justify-content-center';
                productSection.appendChild(paginationContainer);
            }

            // Tampilkan produk dan pagination
            displayProducts();
        });


        //categoty product

        // Data dummy untuk produk berdasarkan kategori
        const productsct = {
            'living': [
                {
                    id: 1,
                    title: 'CT-IMP Matto Light Brown',
                    description: 'Meja ruang tamu aesthetic.',
                    image: 'assets/img/product/kursi/ZULU CHAIR WHITE.png',
                    price: '500.000',
                    oldPrice: '600.000',
                    rating: 5,
                    sold: 300,
                    isNew: true
                },
                {
                    id: 2,
                    title: 'Sofa Minimalis Cream',
                    description: 'Sofa 3 seater untuk ruang tamu modern.',
                    image: 'assets/img/product/kursi/ZULU CHAIR WHITE.png',
                    price: '3.500.000',
                    oldPrice: '4.200.000',
                    rating: 4,
                    sold: 120,
                    isNew: false
                },
                {
                    id: 3,
                    title: 'Coffee Table Oak',
                    description: 'Meja kopi kayu oak premium.',
                    image: 'assets/img/product/kursi/ZULU CHAIR WHITE.png',
                    price: '1.200.000',
                    oldPrice: '1.500.000',
                    rating: 5,
                    sold: 210,
                    isNew: true
                },
                {
                    id: 4,
                    title: 'Floor Lamp Scandinavian',
                    description: 'Lampu lantai bergaya skandinavia.',
                    image: 'assets/img/product/kursi/ZULU CHAIR WHITE.png',
                    price: '750.000',
                    oldPrice: '900.000',
                    rating: 4,
                    sold: 85,
                    isNew: false
                },
            ],
            'dinning': [
                {
                    id: 5,
                    title: 'Dining Table Round Marble',
                    description: 'Meja makan bulat dengan top marmer.',
                    image: 'assets/img/product/kursi/ZULU CHAIR WHITE.png',
                    price: '4.500.000',
                    oldPrice: '5.200.000',
                    rating: 5,
                    sold: 75,
                    isNew: true
                },
                {
                    id: 6,
                    title: 'Dining Chair Velvet',
                    description: 'Kursi makan berbahan velvet mewah.',
                    image: 'assets/img/product/kursi/ZULU CHAIR WHITE.png',
                    price: '850.000',
                    oldPrice: '1.000.000',
                    rating: 4,
                    sold: 180,
                    isNew: false
                },
                {
                    id: 7,
                    title: 'Buffet Cabinet Wood',
                    description: 'Kabinet buffet untuk ruang makan.',
                    image: 'assets/img/product/kursi/ZULU CHAIR WHITE.png',
                    price: '3.200.000',
                    oldPrice: '3.800.000',
                    rating: 5,
                    sold: 45,
                    isNew: true
                },
                {
                    id: 8,
                    title: 'Pendant Lamp Dining',
                    description: 'Lampu gantung untuk ruang makan.',
                    image: 'assets/img/product/kursi/ZULU CHAIR WHITE.png',
                    price: '950.000',
                    oldPrice: '1.200.000',
                    rating: 4,
                    sold: 110,
                    isNew: false
                }
            ],
            'bedroom': [
                {
                    id: 9,
                    title: 'Bed Frame Queen Size',
                    description: 'Rangka tempat tidur queen size.',
                    image: 'assets/img/product/kursi/ZULU CHAIR WHITE.png',
                    price: '5.500.000',
                    oldPrice: '6.200.000',
                    rating: 5,
                    sold: 65,
                    isNew: true
                },
                {
                    id: 10,
                    title: 'Bedside Table Oak',
                    description: 'Meja samping tempat tidur dari kayu oak.',
                    image: 'assets/img/product/kursi/ZULU CHAIR WHITE.png',
                    price: '850.000',
                    oldPrice: '1.050.000',
                    rating: 5,
                    sold: 150,
                    isNew: false
                },
                {
                    id: 11,
                    title: 'Wardrobe Sliding Door',
                    description: 'Lemari pakaian dengan pintu geser.',
                    image: 'assets/img/product/kursi/ZULU CHAIR WHITE.png',
                    price: '4.200.000',
                    oldPrice: '5.000.000',
                    rating: 4,
                    sold: 40,
                    isNew: true
                },
                {
                    id: 12,
                    title: 'Vanity Table White',
                    description: 'Meja rias putih dengan cermin.',
                    image: 'assets/img/product/kursi/ZULU CHAIR WHITE.png',
                    price: '1.800.000',
                    oldPrice: '2.300.000',
                    rating: 5,
                    sold: 95,
                    isNew: false
                }
            ],
            'kitchen': [
                {
                    id: 13,
                    title: 'Kitchen Island Marble',
                    description: 'Pulau dapur dengan top marmer.',
                    image: 'assets/img/product/kursi/ZULU CHAIR WHITE.png',
                    price: '7.500.000',
                    oldPrice: '8.900.000',
                    rating: 5,
                    sold: 25,
                    isNew: true
                },
                {
                    id: 14,
                    title: 'Bar Stool Metal',
                    description: 'Kursi bar berbahan metal modern.',
                    image: 'assets/img/product/kursi/ZULU CHAIR WHITE.png',
                    price: '750.000',
                    oldPrice: '900.000',
                    rating: 4,
                    sold: 120,
                    isNew: false
                },
                {
                    id: 15,
                    title: 'Kitchen Cabinet Set',
                    description: 'Set kabinet dapur modular.',
                    image: 'assets/img/product/kursi/ZULU CHAIR WHITE.png',
                    price: '12.500.000',
                    oldPrice: '15.000.000',
                    rating: 5,
                    sold: 15,
                    isNew: true
                },
                {
                    id: 16,
                    title: 'Cooking Utensil Holder',
                    description: 'Tempat penyimpanan alat masak.',
                    image: 'assets/img/product/kursi/ZULU CHAIR WHITE.png',
                    price: '350.000',
                    oldPrice: '450.000',
                    rating: 4,
                    sold: 200,
                    isNew: false
                }
            ]
        };


        // Style untuk animasi dan transisi
        const styleCt = document.createElement('style');
        styleCt.textContent = `
    .category-product .row {
        transition: transform 0.5s ease, opacity 0.5s ease;
    }
    
    .slide-out-ct {
        transform: translateX(-30px);
        opacity: 0;
    }
    
    .slide-in-ct {
        animation: slideFromRightCt 0.5s ease-out forwards;
    }
    
    @keyframes slideFromRightCt {
        0% {
            transform: translateX(30px);
            opacity: 0;
        }
        100% {
            transform: translateX(0);
            opacity: 1;
        }
    }
`;
        document.head.appendChild(styleCt);

        // Fungsi untuk membuat kartu produk dengan desain yang sama
        function createProductCardCt(product) {
            const starIconsCt = Array(5).fill('').map((_, index) => {
                return `<i class="bi bi-star-fill text-warning small-icon"></i>`;
            }).join('');

            return `
                         <div class="card shadow position-relative rounded-4 p-2">
                            ${product.isNew ? `
                            <!-- Corner Ribbon -->
                        <div class="position-absolute ribbon-wrapper">
                                                <div class="ribbon text-white text-uppercase fw-bold text-center">
                                                    New Product
                                                </div>
                                    </div>
                    ` : ''}

                    <!-- Product Image -->
                    <div class="text-center pt-3">
                    <img src="${product.image}" class="img-fluid product-image" alt="Product Image">
                    </div>

                    <div class="bodykartu">
                            <div class="d-flex flex-column ">
                                <!-- Product Details -->
                                <div class="">
                                    <!-- <h5 class="">
                                        ${product.title}
                                </h5> -->
                                    <p class="card-title text-truncate fw-medium product-title">${product.description}
                                    </p>

                                    <p class="card-text text-truncate product-desc">Meja ruang tamu
                                        aesthetic.</p>
                                    <div class="d-flex gap-1 align-items-center">
                                        ${createStarRating(product.rating)}
                                        <small class="text-muted fst-italic ms-1 sold-text">${product.sold} terjual</small>
                                    </div>
                                </div>

                                <!-- Price Section -->
                                <div class="mt-auto">
                                    <div class="d-flex flex-wrap align-items-baseline">
                                        <div class="me-2">
                                            <span class="fw-bold price">
                                                <sup class="fw-normal">Rp</sup> ${product.price}
                                            </span>
                                        </div>
                                        <div>
                                            <span class="fw-normal text-danger old-price">
                                                <sup>Rp</sup>
                                                <span class="text-decoration-line-through">${product.oldPrice}</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    `;
        }

        // Fungsi untuk menampilkan produk dengan animasi
        function displayProductsCt(category) {
            const productContainerCt = document.querySelector('.category-product .row');
            const productDataCt = productsct[category.toLowerCase()] || productsct['living'];

            // Animasi slide out
            productContainerCt.classList.add('slide-out-ct');

            setTimeout(() => {
                // Bersihkan container
                productContainerCt.innerHTML = '';

                // Tambahkan produk-produk baru
                productDataCt.forEach(product => {
                    const colCt = document.createElement('div');
                    colCt.className = 'col';
                    colCt.innerHTML = createProductCardCt(product);
                    productContainerCt.appendChild(colCt);
                });

                // Animasi slide in
                productContainerCt.classList.remove('slide-out-ct');
                productContainerCt.classList.add('slide-in-ct');

                // Hapus kelas animasi setelah selesai
                setTimeout(() => {
                    productContainerCt.classList.remove('slide-in-ct');
                }, 500);
            }, 300); // Tunggu sebentar untuk efek slide out
        }

        // Fungsi untuk menginisialisasi navigasi kategori
        function initCategoryNavigationCt() {
            const navLinksCt = document.querySelectorAll('.custom-nav-link-product');
            let currentCategoryCt = 'living'; // Default kategori

            // Set kategori awal berdasarkan URL saat ini
            const pathCt = window.location.pathname;
            if (pathCt.includes('product')) {
                currentCategoryCt = 'dinning';
            } else if (pathCt.includes('promo.php')) {
                currentCategoryCt = 'bedroom';
            } else if (pathCt.includes('dekorasi.php')) {
                currentCategoryCt = 'kitchen';
            }

            // Tampilkan produk dari kategori awal
            displayProductsCt(currentCategoryCt);

            // Tambahkan event listener untuk setiap link kategori
            navLinksCt.forEach(link => {
                link.addEventListener('click', function (e) {
                    e.preventDefault(); // Cegah navigasi default

                    // Hapus kelas active dari semua link
                    navLinksCt.forEach(navLink => {
                        navLink.classList.remove('active');
                    });

                    // Tambahkan kelas active ke link yang diklik
                    this.classList.add('active');

                    // Dapatkan kategori dari teks link
                    const categoryCt = this.textContent.trim();

                    // Update tampilan produk hanya jika kategori berubah
                    if (categoryCt.toLowerCase() !== currentCategoryCt) {
                        currentCategoryCt = categoryCt.toLowerCase();
                        displayProductsCt(currentCategoryCt);
                    }
                });
            });

            // Set kelas active pada link kategori saat ini
            navLinksCt.forEach(link => {
                const linkCategoryCt = link.textContent.trim().toLowerCase();
                if (linkCategoryCt === currentCategoryCt) {
                    link.classList.add('active');
                }
            });
        }

        // Initialize when DOM is loaded
        document.addEventListener('DOMContentLoaded', function () {
            initCategoryNavigationCt();

            // Untuk keperluan demo di halaman statis
            const initialCategoryLinkCt = document.querySelector('.custom-nav-link-product');
            if (initialCategoryLinkCt) {
                initialCategoryLinkCt.classList.add('active');
                const initialCategoryCt = initialCategoryLinkCt.textContent.trim();
                displayProductsCt(initialCategoryCt.toLowerCase());
            }
        });
    </script>
</body>

</html>