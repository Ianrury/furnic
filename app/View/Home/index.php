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
        /* WhatsApp Floating Button (versi lebih kecil & responsif) */
        .floating {
            position: fixed;
            width: 50px;
            height: 50px;
            bottom: 20px;
            right: 20px;
            background-color: #25d366;
            color: #fff;
            border-radius: 50%;
            display: flex;
            /* Flexbox aktif */
            justify-content: center;
            /* Tengah horizontal */
            align-items: center;
            /* Tengah vertikal */
            font-size: 26px;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
            z-index: 100;
            transition: all 0.3s ease;
            text-decoration: none;
        }

        .floating:hover {
            background-color: #1ebe5d;
            transform: scale(1.1);
        }



        .fab-icon {
            margin-top: 16px;
        }

        .img-responsive {
            width: 50%;
        }

        @media (min-width: 768px) {
            .img-responsive {
                width: 30%;
            }
        }

        .custom-search-input {
            border-right: 0;
        }

        .custom-search-input::placeholder {
            color: #5C86B8;
            font-size: 12px;
            /* Blue placeholder text */
        }

        .custom-search-input:focus {
            box-shadow: none;
            border-color: #ced4da;
        }

        .custom-search-button {
            background-color: white;
            border: 1px solid #ced4da;
            border-left: 0;
        }

        .custom-search-button:hover,
        .custom-search-button:focus,
        .custom-search-button:active {
            background-color: white !important;
            border-color: #ced4da !important;
            box-shadow: none !important;
        }

        /* Remove the outline when clicking the search button */
        .custom-search-button:focus-visible {
            outline: none;
        }

        .shadow-bottom-sm {
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            /* hanya bayangan bawah */
        }

        /* Link biasa */
        .custom-nav-link {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 10px 0;
            color: #000;
            /* default warna hitam */
            text-decoration: none;
            width: 100%;
            height: 100%;
            margin: 0 !important;
            transition: color 0.3s ease;
        }

        /* Saat aktif: tulisan jadi biru & garis bawah muncul */
        .custom-nav-link.active {
            color: #5C86B8;
            /* warna biru saat aktif */
        }

        /* Garis bawah saat aktif */
        .custom-nav-link.active::after {
            content: '';
            position: absolute;
            width: 90px;
            height: 2px;
            background-color: #5C86B8;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
        }

        /* Garis bawah hover (kalau belum aktif) */
        .custom-nav-link:not(.active)::after {
            content: '';
            position: absolute;
            width: 90px;
            height: 2px;
            background-color: #5C86B8;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%) scaleX(0);
            /* mulai tidak terlihat */
            transform-origin: center;
            transition: transform 0.3s ease-in-out;
        }

        /* Saat hover: garis muncul (animasi) */
        .custom-nav-link:not(.active):hover::after {
            transform: translateX(-50%) scaleX(1);
            /* munculkan garis */
        }

        /* Tambahan opsional: hover tulisan juga biru */
        .custom-nav-link:hover {
            color: #5C86B8;
        }

        body {
            font-family: 'Roboto';
        }

        .product-area-new {
            font-family: 'inter';
        }


        .shadow-right-bottom {
            box-shadow: 8px 8px 4px rgba(161, 163, 165, 0.25);
        }


        /* Link biasa */
        .custom-nav-link-product {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 0px 0;
            color: #000;
            /* default warna hitam */
            text-decoration: none;
            width: 90px;
            height: 2px;
            margin: 0 !important;
            transition: color 0.3s ease;
        }

        /* Saat aktif: tulisan jadi biru & garis bawah muncul */
        .custom-nav-link-product.active {
            color: #5C86B8;
            /* warna biru saat aktif */
        }

        /* Garis bawah saat aktif */
        .custom-nav-link-product.active::after {
            content: '';
            position: absolute;
            width: 120px;
            height: 2px;
            background-color: #5C86B8;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
        }

        /* Garis bawah hover (kalau belum aktif) */
        .custom-nav-link-product:not(.active)::after {
            content: '';
            position: absolute;
            width: 120px;
            height: 2px;
            background-color: #5C86B8;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%) scaleX(0);
            /* mulai tidak terlihat */
            transform-origin: center;
            transition: transform 0.3s ease-in-out;
        }

        /* Saat hover: garis muncul (animasi) */
        .custom-nav-link-product:not(.active):hover::after {
            transform: translateX(-50%) scaleX(1);
            /* munculkan garis */
        }

        /* Tambahan opsional: hover tulisan juga biru */
        .custom-nav-link-product:hover {
            color: #5C86B8;
        }




        /* Tambahkan media query untuk tampilan mobile */
        @media (max-width: 991.98px) {
            .main-navigation {
                padding-left: 15px;
                padding-right: 15px;
            }

            .navbar-brand {
                margin-left: 10px;
            }

            .mobile-menu-right {
                margin-right: 10px;
            }

            .custom-search-input {
                margin-left: 5px !important;
                margin-right: 5px !important;
            }
        }

        /* Untuk memastikan tidak ada backdrop yang muncul */
        .offcanvas-backdrop {
            display: none !important;
            opacity: 0 !important;
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
                        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 g-4  justify-content-center">
                            <div class="col">
                                <div class="card shadow-right-bottom position-relative h-100"
                                    style="border-radius: 15px;">
                                    <!-- Corner Ribbon -->
                                    <div class="position-absolute"
                                        style="top: 0; left: 0; width: 150px; height: 150px; overflow: hidden; z-index: 10;">
                                        <div class="position-absolute text-white text-uppercase fw-bold d-flex align-items-center justify-content-center"
                                            style="width: 200px; height: 20px; transform: rotate(-45deg) translateY(-20px) translateX(-70px); font-size: 10px; background-color: #2B4779;">
                                            New Product
                                        </div>
                                    </div>

                                    <!-- Product Image - Centered -->
                                    <div class="text-center pt-3">
                                        <img src="assets/img/product/kursi/ZULU CHAIR WHITE.png"
                                            class="img-fluid mx-auto" alt="Product Image"
                                            style="max-height: 180px; max-width: 80%;">
                                    </div>

                                    <div class="card-body d-flex flex-column pt-2">
                                        <!-- Product Details -->
                                        <div class="pb-2">
                                            <h5 class="card-title fw-medium" style="font-size: 14px;">CT-IMP Matto Light
                                                Brown</h5>
                                            <p class="card-text mb-1" style="font-size: 12px;">Meja ruang tamu
                                                aesthetic.</p>
                                            <div class="d-flex gap-1 align-items-center mb-2">
                                                <i class="bi bi-star-fill text-warning" style="font-size: 12px;"></i>
                                                <i class="bi bi-star-fill text-warning" style="font-size: 12px;"></i>
                                                <i class="bi bi-star-fill text-warning" style="font-size: 12px;"></i>
                                                <i class="bi bi-star-fill text-warning" style="font-size: 12px;"></i>
                                                <i class="bi bi-star-fill text-warning" style="font-size: 12px;"></i>
                                                <small class="text-muted fst-italic ms-1" style="font-size: 10px;">300
                                                    terjual</small>
                                            </div>
                                        </div>

                                        <!-- Price Section - Always at Bottom -->
                                        <div class="mt-auto d-flex align-items-center">
                                            <h5 class="card-title fw-bold mb-0 me-2" style="font-size: 15px;">
                                                <sup class="fw-normal" style="font-size: 12px;">Rp</sup> 500.000
                                            </h5>
                                            <span class="fw-normal" style="font-size: 10px;">
                                                <sup class="fw-normal text-danger" style="font-size: 10px;">Rp</sup>
                                                <span class="text-danger text-decoration-line-through">600.000</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card shadow-right-bottom position-relative h-100"
                                    style="border-radius: 15px;">
                                    <!-- Corner Ribbon -->
                                    <div class="position-absolute"
                                        style="top: 0; left: 0; width: 150px; height: 150px; overflow: hidden; z-index: 10;">
                                        <div class="position-absolute text-white text-uppercase fw-bold d-flex align-items-center justify-content-center"
                                            style="width: 200px; height: 20px; transform: rotate(-45deg) translateY(-20px) translateX(-70px); font-size: 10px; background-color: #2B4779;">
                                            New Product
                                        </div>
                                    </div>

                                    <!-- Product Image - Centered -->
                                    <div class="text-center pt-3">
                                        <img src="assets/img/product/kursi/ZULU CHAIR WHITE.png"
                                            class="img-fluid mx-auto" alt="Product Image"
                                            style="max-height: 180px; max-width: 80%;">
                                    </div>

                                    <div class="card-body d-flex flex-column pt-2">
                                        <!-- Product Details -->
                                        <div class="pb-2">
                                            <h5 class="card-title fw-medium" style="font-size: 14px;">CT-IMP Matto Light
                                                Brown</h5>
                                            <p class="card-text mb-1" style="font-size: 12px;">Meja ruang tamu
                                                aesthetic.</p>
                                            <div class="d-flex gap-1 align-items-center mb-2">
                                                <i class="bi bi-star-fill text-warning" style="font-size: 12px;"></i>
                                                <i class="bi bi-star-fill text-warning" style="font-size: 12px;"></i>
                                                <i class="bi bi-star-fill text-warning" style="font-size: 12px;"></i>
                                                <i class="bi bi-star-fill text-warning" style="font-size: 12px;"></i>
                                                <i class="bi bi-star-fill text-warning" style="font-size: 12px;"></i>
                                                <small class="text-muted fst-italic ms-1" style="font-size: 10px;">300
                                                    terjual</small>
                                            </div>
                                        </div>

                                        <!-- Price Section - Always at Bottom -->
                                        <div class="mt-auto d-flex align-items-center">
                                            <h5 class="card-title fw-bold mb-0 me-2" style="font-size: 15px;">
                                                <sup class="fw-normal" style="font-size: 12px;">Rp</sup> 500.000
                                            </h5>
                                            <span class="fw-normal" style="font-size: 10px;">
                                                <sup class="fw-normal text-danger" style="font-size: 10px;">Rp</sup>
                                                <span class="text-danger text-decoration-line-through">600.000</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card shadow-right-bottom position-relative h-100"
                                    style="border-radius: 15px;">
                                    <!-- Corner Ribbon -->
                                    <div class="position-absolute"
                                        style="top: 0; left: 0; width: 150px; height: 150px; overflow: hidden; z-index: 10;">
                                        <div class="position-absolute text-white text-uppercase fw-bold d-flex align-items-center justify-content-center"
                                            style="width: 200px; height: 20px; transform: rotate(-45deg) translateY(-20px) translateX(-70px); font-size: 10px; background-color: #2B4779;">
                                            New Product
                                        </div>
                                    </div>

                                    <!-- Product Image - Centered -->
                                    <div class="text-center pt-3">
                                        <img src="assets/img/product/kursi/ZULU CHAIR WHITE.png"
                                            class="img-fluid mx-auto" alt="Product Image"
                                            style="max-height: 180px; max-width: 80%;">
                                    </div>

                                    <div class="card-body d-flex flex-column pt-2">
                                        <!-- Product Details -->
                                        <div class="pb-2">
                                            <h5 class="card-title fw-medium" style="font-size: 14px;">CT-IMP Matto Light
                                                Brown</h5>
                                            <p class="card-text mb-1" style="font-size: 12px;">Meja ruang tamu
                                                aesthetic.</p>
                                            <div class="d-flex gap-1 align-items-center mb-2">
                                                <i class="bi bi-star-fill text-warning" style="font-size: 12px;"></i>
                                                <i class="bi bi-star-fill text-warning" style="font-size: 12px;"></i>
                                                <i class="bi bi-star-fill text-warning" style="font-size: 12px;"></i>
                                                <i class="bi bi-star-fill text-warning" style="font-size: 12px;"></i>
                                                <i class="bi bi-star-fill text-warning" style="font-size: 12px;"></i>
                                                <small class="text-muted fst-italic ms-1" style="font-size: 10px;">300
                                                    terjual</small>
                                            </div>
                                        </div>

                                        <!-- Price Section - Always at Bottom -->
                                        <div class="mt-auto d-flex align-items-center">
                                            <h5 class="card-title fw-bold mb-0 me-2" style="font-size: 15px;">
                                                <sup class="fw-normal" style="font-size: 12px;">Rp</sup> 500.000
                                            </h5>
                                            <span class="fw-normal" style="font-size: 10px;">
                                                <sup class="fw-normal text-danger" style="font-size: 10px;">Rp</sup>
                                                <span class="text-danger text-decoration-line-through">600.000</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card shadow-right-bottom position-relative h-100"
                                    style="border-radius: 15px;">
                                    <!-- Corner Ribbon -->
                                    <div class="position-absolute"
                                        style="top: 0; left: 0; width: 150px; height: 150px; overflow: hidden; z-index: 10;">
                                        <div class="position-absolute text-white text-uppercase fw-bold d-flex align-items-center justify-content-center"
                                            style="width: 200px; height: 20px; transform: rotate(-45deg) translateY(-20px) translateX(-70px); font-size: 10px; background-color: #2B4779;">
                                            New Product
                                        </div>
                                    </div>

                                    <!-- Product Image - Centered -->
                                    <div class="text-center pt-3">
                                        <img src="assets/img/product/kursi/ZULU CHAIR WHITE.png"
                                            class="img-fluid mx-auto" alt="Product Image"
                                            style="max-height: 180px; max-width: 80%;">
                                    </div>

                                    <div class="card-body d-flex flex-column pt-2">
                                        <!-- Product Details -->
                                        <div class="pb-2">
                                            <h5 class="card-title fw-medium" style="font-size: 14px;">CT-IMP Matto Light
                                                Brown</h5>
                                            <p class="card-text mb-1" style="font-size: 12px;">Meja ruang tamu
                                                aesthetic.</p>
                                            <div class="d-flex gap-1 align-items-center mb-2">
                                                <i class="bi bi-star-fill text-warning" style="font-size: 12px;"></i>
                                                <i class="bi bi-star-fill text-warning" style="font-size: 12px;"></i>
                                                <i class="bi bi-star-fill text-warning" style="font-size: 12px;"></i>
                                                <i class="bi bi-star-fill text-warning" style="font-size: 12px;"></i>
                                                <i class="bi bi-star-fill text-warning" style="font-size: 12px;"></i>
                                                <small class="text-muted fst-italic ms-1" style="font-size: 10px;">300
                                                    terjual</small>
                                            </div>
                                        </div>

                                        <!-- Price Section - Always at Bottom -->
                                        <div class="mt-auto d-flex align-items-center">
                                            <h5 class="card-title fw-bold mb-0 me-2" style="font-size: 15px;">
                                                <sup class="fw-normal" style="font-size: 12px;">Rp</sup> 500.000
                                            </h5>
                                            <span class="fw-normal" style="font-size: 10px;">
                                                <sup class="fw-normal text-danger" style="font-size: 10px;">Rp</sup>
                                                <span class="text-danger text-decoration-line-through">600.000</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card shadow-right-bottom position-relative h-100"
                                    style="border-radius: 15px;">
                                    <!-- Corner Ribbon -->
                                    <div class="position-absolute"
                                        style="top: 0; left: 0; width: 150px; height: 150px; overflow: hidden; z-index: 10;">
                                        <div class="position-absolute text-white text-uppercase fw-bold d-flex align-items-center justify-content-center"
                                            style="width: 200px; height: 20px; transform: rotate(-45deg) translateY(-20px) translateX(-70px); font-size: 10px; background-color: #2B4779;">
                                            New Product
                                        </div>
                                    </div>

                                    <!-- Product Image - Centered -->
                                    <div class="text-center pt-3">
                                        <img src="assets/img/product/kursi/ZULU CHAIR WHITE.png"
                                            class="img-fluid mx-auto" alt="Product Image"
                                            style="max-height: 180px; max-width: 80%;">
                                    </div>

                                    <div class="card-body d-flex flex-column pt-2">
                                        <!-- Product Details -->
                                        <div class="pb-2">
                                            <h5 class="card-title fw-medium" style="font-size: 14px;">CT-IMP Matto Light
                                                Brown</h5>
                                            <p class="card-text mb-1" style="font-size: 12px;">Meja ruang tamu
                                                aesthetic.</p>
                                            <div class="d-flex gap-1 align-items-center mb-2">
                                                <i class="bi bi-star-fill text-warning" style="font-size: 12px;"></i>
                                                <i class="bi bi-star-fill text-warning" style="font-size: 12px;"></i>
                                                <i class="bi bi-star-fill text-warning" style="font-size: 12px;"></i>
                                                <i class="bi bi-star-fill text-warning" style="font-size: 12px;"></i>
                                                <i class="bi bi-star-fill text-warning" style="font-size: 12px;"></i>
                                                <small class="text-muted fst-italic ms-1" style="font-size: 10px;">300
                                                    terjual</small>
                                            </div>
                                        </div>

                                        <!-- Price Section - Always at Bottom -->
                                        <div class="mt-auto d-flex align-items-center">
                                            <h5 class="card-title fw-bold mb-0 me-2" style="font-size: 15px;">
                                                <sup class="fw-normal" style="font-size: 12px;">Rp</sup> 500.000
                                            </h5>
                                            <span class="fw-normal" style="font-size: 10px;">
                                                <sup class="fw-normal text-danger" style="font-size: 10px;">Rp</sup>
                                                <span class="text-danger text-decoration-line-through">600.000</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card shadow-right-bottom position-relative h-100"
                                    style="border-radius: 15px;">
                                    <!-- Corner Ribbon -->
                                    <div class="position-absolute"
                                        style="top: 0; left: 0; width: 150px; height: 150px; overflow: hidden; z-index: 10;">
                                        <div class="position-absolute text-white text-uppercase fw-bold d-flex align-items-center justify-content-center"
                                            style="width: 200px; height: 20px; transform: rotate(-45deg) translateY(-20px) translateX(-70px); font-size: 10px; background-color: #2B4779;">
                                            New Product
                                        </div>
                                    </div>

                                    <!-- Product Image - Centered -->
                                    <div class="text-center pt-3">
                                        <img src="assets/img/product/kursi/ZULU CHAIR WHITE.png"
                                            class="img-fluid mx-auto" alt="Product Image"
                                            style="max-height: 180px; max-width: 80%;">
                                    </div>

                                    <div class="card-body d-flex flex-column pt-2">
                                        <!-- Product Details -->
                                        <div class="pb-2">
                                            <h5 class="card-title fw-medium" style="font-size: 14px;">CT-IMP Matto Light
                                                Brown</h5>
                                            <p class="card-text mb-1" style="font-size: 12px;">Meja ruang tamu
                                                aesthetic.</p>
                                            <div class="d-flex gap-1 align-items-center mb-2">
                                                <i class="bi bi-star-fill text-warning" style="font-size: 12px;"></i>
                                                <i class="bi bi-star-fill text-warning" style="font-size: 12px;"></i>
                                                <i class="bi bi-star-fill text-warning" style="font-size: 12px;"></i>
                                                <i class="bi bi-star-fill text-warning" style="font-size: 12px;"></i>
                                                <i class="bi bi-star-fill text-warning" style="font-size: 12px;"></i>
                                                <small class="text-muted fst-italic ms-1" style="font-size: 10px;">300
                                                    terjual</small>
                                            </div>
                                        </div>

                                        <!-- Price Section - Always at Bottom -->
                                        <div class="mt-auto d-flex align-items-center">
                                            <h5 class="card-title fw-bold mb-0 me-2" style="font-size: 15px;">
                                                <sup class="fw-normal" style="font-size: 12px;">Rp</sup> 500.000
                                            </h5>
                                            <span class="fw-normal" style="font-size: 10px;">
                                                <sup class="fw-normal text-danger" style="font-size: 10px;">Rp</sup>
                                                <span class="text-danger text-decoration-line-through">600.000</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card shadow-right-bottom position-relative h-100"
                                    style="border-radius: 15px;">
                                    <!-- Corner Ribbon -->
                                    <div class="position-absolute"
                                        style="top: 0; left: 0; width: 150px; height: 150px; overflow: hidden; z-index: 10;">
                                        <div class="position-absolute text-white text-uppercase fw-bold d-flex align-items-center justify-content-center"
                                            style="width: 200px; height: 20px; transform: rotate(-45deg) translateY(-20px) translateX(-70px); font-size: 10px; background-color: #2B4779;">
                                            New Product
                                        </div>
                                    </div>

                                    <!-- Product Image - Centered -->
                                    <div class="text-center pt-3">
                                        <img src="assets/img/product/kursi/ZULU CHAIR WHITE.png"
                                            class="img-fluid mx-auto" alt="Product Image"
                                            style="max-height: 180px; max-width: 80%;">
                                    </div>

                                    <div class="card-body d-flex flex-column pt-2">
                                        <!-- Product Details -->
                                        <div class="pb-2">
                                            <h5 class="card-title fw-medium" style="font-size: 14px;">CT-IMP Matto Light
                                                Brown</h5>
                                            <p class="card-text mb-1" style="font-size: 12px;">Meja ruang tamu
                                                aesthetic.</p>
                                            <div class="d-flex gap-1 align-items-center mb-2">
                                                <i class="bi bi-star-fill text-warning" style="font-size: 12px;"></i>
                                                <i class="bi bi-star-fill text-warning" style="font-size: 12px;"></i>
                                                <i class="bi bi-star-fill text-warning" style="font-size: 12px;"></i>
                                                <i class="bi bi-star-fill text-warning" style="font-size: 12px;"></i>
                                                <i class="bi bi-star-fill text-warning" style="font-size: 12px;"></i>
                                                <small class="text-muted fst-italic ms-1" style="font-size: 10px;">300
                                                    terjual</small>
                                            </div>
                                        </div>

                                        <!-- Price Section - Always at Bottom -->
                                        <div class="mt-auto d-flex align-items-center">
                                            <h5 class="card-title fw-bold mb-0 me-2" style="font-size: 15px;">
                                                <sup class="fw-normal" style="font-size: 12px;">Rp</sup> 500.000
                                            </h5>
                                            <span class="fw-normal" style="font-size: 10px;">
                                                <sup class="fw-normal text-danger" style="font-size: 10px;">Rp</sup>
                                                <span class="text-danger text-decoration-line-through">600.000</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card shadow-right-bottom position-relative h-100"
                                    style="border-radius: 15px;">
                                    <!-- Corner Ribbon -->
                                    <div class="position-absolute"
                                        style="top: 0; left: 0; width: 150px; height: 150px; overflow: hidden; z-index: 10;">
                                        <div class="position-absolute text-white text-uppercase fw-bold d-flex align-items-center justify-content-center"
                                            style="width: 200px; height: 20px; transform: rotate(-45deg) translateY(-20px) translateX(-70px); font-size: 10px; background-color: #2B4779;">
                                            New Product
                                        </div>
                                    </div>

                                    <!-- Product Image - Centered -->
                                    <div class="text-center pt-3">
                                        <img src="assets/img/product/kursi/ZULU CHAIR WHITE.png"
                                            class="img-fluid mx-auto" alt="Product Image"
                                            style="max-height: 180px; max-width: 80%;">
                                    </div>

                                    <div class="card-body d-flex flex-column pt-2">
                                        <!-- Product Details -->
                                        <div class="pb-2">
                                            <h5 class="card-title fw-medium" style="font-size: 14px;">CT-IMP Matto Light
                                                Brown</h5>
                                            <p class="card-text mb-1" style="font-size: 12px;">Meja ruang tamu
                                                aesthetic.</p>
                                            <div class="d-flex gap-1 align-items-center mb-2">
                                                <i class="bi bi-star-fill text-warning" style="font-size: 12px;"></i>
                                                <i class="bi bi-star-fill text-warning" style="font-size: 12px;"></i>
                                                <i class="bi bi-star-fill text-warning" style="font-size: 12px;"></i>
                                                <i class="bi bi-star-fill text-warning" style="font-size: 12px;"></i>
                                                <i class="bi bi-star-fill text-warning" style="font-size: 12px;"></i>
                                                <small class="text-muted fst-italic ms-1" style="font-size: 10px;">300
                                                    terjual</small>
                                            </div>
                                        </div>

                                        <!-- Price Section - Always at Bottom -->
                                        <div class="mt-auto d-flex align-items-center">
                                            <h5 class="card-title fw-bold mb-0 me-2" style="font-size: 15px;">
                                                <sup class="fw-normal" style="font-size: 12px;">Rp</sup> 500.000
                                            </h5>
                                            <span class="fw-normal" style="font-size: 10px;">
                                                <sup class="fw-normal text-danger" style="font-size: 10px;">Rp</sup>
                                                <span class="text-danger text-decoration-line-through">600.000</span>
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
        <!-- Kategori Pilihan -->
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
                                <div class="card h-100 border-0 overflow-hidden">
                                    <img src="assets/img/product/decorasi/ruang-kerja.jpg"
                                        class="card-img h-100 object-fit-cover" alt="Ruang Kerja">
                                    <div class="position-absolute top-3 start-3 pt-2 ps-2">
                                        <span
                                            class="badge bg-white text-dark py-2 px-3 fw-medium rounded-2 shadow-sm">Ruang
                                            Kerja</span>
                                    </div>
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
        <!-- Kategori Pilihan End -->

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
                    <div class="container">
                        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 g-4  justify-content-center">
                            <div class="col">
                                <div class="card shadow-right-bottom position-relative h-100"
                                    style="border-radius: 15px;">
                                    <!-- Corner Ribbon -->
                                    <div class="position-absolute"
                                        style="top: 0; left: 0; width: 150px; height: 150px; overflow: hidden; z-index: 10;">
                                        <div class="position-absolute text-white text-uppercase fw-bold d-flex align-items-center justify-content-center"
                                            style="width: 200px; height: 20px; transform: rotate(-45deg) translateY(-20px) translateX(-70px); font-size: 10px; background-color: #2B4779;">
                                            New Product
                                        </div>
                                    </div>

                                    <!-- Product Image - Centered -->
                                    <div class="text-center pt-3">
                                        <img src="assets/img/product/kursi/ZULU CHAIR WHITE.png"
                                            class="img-fluid mx-auto" alt="Product Image"
                                            style="max-height: 180px; max-width: 80%;">
                                    </div>

                                    <div class="card-body d-flex flex-column pt-2">
                                        <!-- Product Details -->
                                        <div class="pb-2">
                                            <h5 class="card-title fw-medium" style="font-size: 14px;">CT-IMP Matto Light
                                                Brown</h5>
                                            <p class="card-text mb-1" style="font-size: 12px;">Meja ruang tamu
                                                aesthetic.</p>
                                            <div class="d-flex gap-1 align-items-center mb-2">
                                                <i class="bi bi-star-fill text-warning" style="font-size: 12px;"></i>
                                                <i class="bi bi-star-fill text-warning" style="font-size: 12px;"></i>
                                                <i class="bi bi-star-fill text-warning" style="font-size: 12px;"></i>
                                                <i class="bi bi-star-fill text-warning" style="font-size: 12px;"></i>
                                                <i class="bi bi-star-fill text-warning" style="font-size: 12px;"></i>
                                                <small class="text-muted fst-italic ms-1" style="font-size: 10px;">300
                                                    terjual</small>
                                            </div>
                                        </div>

                                        <!-- Price Section - Always at Bottom -->
                                        <div class="mt-auto d-flex align-items-center">
                                            <h5 class="card-title fw-bold mb-0 me-2" style="font-size: 15px;">
                                                <sup class="fw-normal" style="font-size: 12px;">Rp</sup> 500.000
                                            </h5>
                                            <span class="fw-normal" style="font-size: 10px;">
                                                <sup class="fw-normal text-danger" style="font-size: 10px;">Rp</sup>
                                                <span class="text-danger text-decoration-line-through">600.000</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card shadow-right-bottom position-relative h-100"
                                    style="border-radius: 15px;">
                                    <!-- Corner Ribbon -->
                                    <div class="position-absolute"
                                        style="top: 0; left: 0; width: 150px; height: 150px; overflow: hidden; z-index: 10;">
                                        <div class="position-absolute text-white text-uppercase fw-bold d-flex align-items-center justify-content-center"
                                            style="width: 200px; height: 20px; transform: rotate(-45deg) translateY(-20px) translateX(-70px); font-size: 10px; background-color: #2B4779;">
                                            New Product
                                        </div>
                                    </div>

                                    <!-- Product Image - Centered -->
                                    <div class="text-center pt-3">
                                        <img src="assets/img/product/kursi/ZULU CHAIR WHITE.png"
                                            class="img-fluid mx-auto" alt="Product Image"
                                            style="max-height: 180px; max-width: 80%;">
                                    </div>

                                    <div class="card-body d-flex flex-column pt-2">
                                        <!-- Product Details -->
                                        <div class="pb-2">
                                            <h5 class="card-title fw-medium" style="font-size: 14px;">CT-IMP Matto Light
                                                Brown</h5>
                                            <p class="card-text mb-1" style="font-size: 12px;">Meja ruang tamu
                                                aesthetic.</p>
                                            <div class="d-flex gap-1 align-items-center mb-2">
                                                <i class="bi bi-star-fill text-warning" style="font-size: 12px;"></i>
                                                <i class="bi bi-star-fill text-warning" style="font-size: 12px;"></i>
                                                <i class="bi bi-star-fill text-warning" style="font-size: 12px;"></i>
                                                <i class="bi bi-star-fill text-warning" style="font-size: 12px;"></i>
                                                <i class="bi bi-star-fill text-warning" style="font-size: 12px;"></i>
                                                <small class="text-muted fst-italic ms-1" style="font-size: 10px;">300
                                                    terjual</small>
                                            </div>
                                        </div>

                                        <!-- Price Section - Always at Bottom -->
                                        <div class="mt-auto d-flex align-items-center">
                                            <h5 class="card-title fw-bold mb-0 me-2" style="font-size: 15px;">
                                                <sup class="fw-normal" style="font-size: 12px;">Rp</sup> 500.000
                                            </h5>
                                            <span class="fw-normal" style="font-size: 10px;">
                                                <sup class="fw-normal text-danger" style="font-size: 10px;">Rp</sup>
                                                <span class="text-danger text-decoration-line-through">600.000</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card shadow-right-bottom position-relative h-100"
                                    style="border-radius: 15px;">
                                    <!-- Corner Ribbon -->
                                    <div class="position-absolute"
                                        style="top: 0; left: 0; width: 150px; height: 150px; overflow: hidden; z-index: 10;">
                                        <div class="position-absolute text-white text-uppercase fw-bold d-flex align-items-center justify-content-center"
                                            style="width: 200px; height: 20px; transform: rotate(-45deg) translateY(-20px) translateX(-70px); font-size: 10px; background-color: #2B4779;">
                                            New Product
                                        </div>
                                    </div>

                                    <!-- Product Image - Centered -->
                                    <div class="text-center pt-3">
                                        <img src="assets/img/product/kursi/ZULU CHAIR WHITE.png"
                                            class="img-fluid mx-auto" alt="Product Image"
                                            style="max-height: 180px; max-width: 80%;">
                                    </div>

                                    <div class="card-body d-flex flex-column pt-2">
                                        <!-- Product Details -->
                                        <div class="pb-2">
                                            <h5 class="card-title fw-medium" style="font-size: 14px;">CT-IMP Matto Light
                                                Brown</h5>
                                            <p class="card-text mb-1" style="font-size: 12px;">Meja ruang tamu
                                                aesthetic.</p>
                                            <div class="d-flex gap-1 align-items-center mb-2">
                                                <i class="bi bi-star-fill text-warning" style="font-size: 12px;"></i>
                                                <i class="bi bi-star-fill text-warning" style="font-size: 12px;"></i>
                                                <i class="bi bi-star-fill text-warning" style="font-size: 12px;"></i>
                                                <i class="bi bi-star-fill text-warning" style="font-size: 12px;"></i>
                                                <i class="bi bi-star-fill text-warning" style="font-size: 12px;"></i>
                                                <small class="text-muted fst-italic ms-1" style="font-size: 10px;">300
                                                    terjual</small>
                                            </div>
                                        </div>

                                        <!-- Price Section - Always at Bottom -->
                                        <div class="mt-auto d-flex align-items-center">
                                            <h5 class="card-title fw-bold mb-0 me-2" style="font-size: 15px;">
                                                <sup class="fw-normal" style="font-size: 12px;">Rp</sup> 500.000
                                            </h5>
                                            <span class="fw-normal" style="font-size: 10px;">
                                                <sup class="fw-normal text-danger" style="font-size: 10px;">Rp</sup>
                                                <span class="text-danger text-decoration-line-through">600.000</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card shadow-right-bottom position-relative h-100"
                                    style="border-radius: 15px;">
                                    <!-- Corner Ribbon -->
                                    <div class="position-absolute"
                                        style="top: 0; left: 0; width: 150px; height: 150px; overflow: hidden; z-index: 10;">
                                        <div class="position-absolute text-white text-uppercase fw-bold d-flex align-items-center justify-content-center"
                                            style="width: 200px; height: 20px; transform: rotate(-45deg) translateY(-20px) translateX(-70px); font-size: 10px; background-color: #2B4779;">
                                            New Product
                                        </div>
                                    </div>

                                    <!-- Product Image - Centered -->
                                    <div class="text-center pt-3">
                                        <img src="assets/img/product/kursi/ZULU CHAIR WHITE.png"
                                            class="img-fluid mx-auto" alt="Product Image"
                                            style="max-height: 180px; max-width: 80%;">
                                    </div>

                                    <div class="card-body d-flex flex-column pt-2">
                                        <!-- Product Details -->
                                        <div class="pb-2">
                                            <h5 class="card-title fw-medium" style="font-size: 14px;">CT-IMP Matto Light
                                                Brown</h5>
                                            <p class="card-text mb-1" style="font-size: 12px;">Meja ruang tamu
                                                aesthetic.</p>
                                            <div class="d-flex gap-1 align-items-center mb-2">
                                                <i class="bi bi-star-fill text-warning" style="font-size: 12px;"></i>
                                                <i class="bi bi-star-fill text-warning" style="font-size: 12px;"></i>
                                                <i class="bi bi-star-fill text-warning" style="font-size: 12px;"></i>
                                                <i class="bi bi-star-fill text-warning" style="font-size: 12px;"></i>
                                                <i class="bi bi-star-fill text-warning" style="font-size: 12px;"></i>
                                                <small class="text-muted fst-italic ms-1" style="font-size: 10px;">300
                                                    terjual</small>
                                            </div>
                                        </div>

                                        <!-- Price Section - Always at Bottom -->
                                        <div class="mt-auto d-flex align-items-center">
                                            <h5 class="card-title fw-bold mb-0 me-2" style="font-size: 15px;">
                                                <sup class="fw-normal" style="font-size: 12px;">Rp</sup> 500.000
                                            </h5>
                                            <span class="fw-normal" style="font-size: 10px;">
                                                <sup class="fw-normal text-danger" style="font-size: 10px;">Rp</sup>
                                                <span class="text-danger text-decoration-line-through">600.000</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card shadow-right-bottom position-relative h-100"
                                    style="border-radius: 15px;">
                                    <!-- Corner Ribbon -->
                                    <div class="position-absolute"
                                        style="top: 0; left: 0; width: 150px; height: 150px; overflow: hidden; z-index: 10;">
                                        <div class="position-absolute text-white text-uppercase fw-bold d-flex align-items-center justify-content-center"
                                            style="width: 200px; height: 20px; transform: rotate(-45deg) translateY(-20px) translateX(-70px); font-size: 10px; background-color: #2B4779;">
                                            New Product
                                        </div>
                                    </div>

                                    <!-- Product Image - Centered -->
                                    <div class="text-center pt-3">
                                        <img src="assets/img/product/kursi/ZULU CHAIR WHITE.png"
                                            class="img-fluid mx-auto" alt="Product Image"
                                            style="max-height: 180px; max-width: 80%;">
                                    </div>

                                    <div class="card-body d-flex flex-column pt-2">
                                        <!-- Product Details -->
                                        <div class="pb-2">
                                            <h5 class="card-title fw-medium" style="font-size: 14px;">CT-IMP Matto Light
                                                Brown</h5>
                                            <p class="card-text mb-1" style="font-size: 12px;">Meja ruang tamu
                                                aesthetic.</p>
                                            <div class="d-flex gap-1 align-items-center mb-2">
                                                <i class="bi bi-star-fill text-warning" style="font-size: 12px;"></i>
                                                <i class="bi bi-star-fill text-warning" style="font-size: 12px;"></i>
                                                <i class="bi bi-star-fill text-warning" style="font-size: 12px;"></i>
                                                <i class="bi bi-star-fill text-warning" style="font-size: 12px;"></i>
                                                <i class="bi bi-star-fill text-warning" style="font-size: 12px;"></i>
                                                <small class="text-muted fst-italic ms-1" style="font-size: 10px;">300
                                                    terjual</small>
                                            </div>
                                        </div>

                                        <!-- Price Section - Always at Bottom -->
                                        <div class="mt-auto d-flex align-items-center">
                                            <h5 class="card-title fw-bold mb-0 me-2" style="font-size: 15px;">
                                                <sup class="fw-normal" style="font-size: 12px;">Rp</sup> 500.000
                                            </h5>
                                            <span class="fw-normal" style="font-size: 10px;">
                                                <sup class="fw-normal text-danger" style="font-size: 10px;">Rp</sup>
                                                <span class="text-danger text-decoration-line-through">600.000</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card shadow-right-bottom position-relative h-100"
                                    style="border-radius: 15px;">
                                    <!-- Corner Ribbon -->
                                    <div class="position-absolute"
                                        style="top: 0; left: 0; width: 150px; height: 150px; overflow: hidden; z-index: 10;">
                                        <div class="position-absolute text-white text-uppercase fw-bold d-flex align-items-center justify-content-center"
                                            style="width: 200px; height: 20px; transform: rotate(-45deg) translateY(-20px) translateX(-70px); font-size: 10px; background-color: #2B4779;">
                                            New Product
                                        </div>
                                    </div>

                                    <!-- Product Image - Centered -->
                                    <div class="text-center pt-3">
                                        <img src="assets/img/product/kursi/ZULU CHAIR WHITE.png"
                                            class="img-fluid mx-auto" alt="Product Image"
                                            style="max-height: 180px; max-width: 80%;">
                                    </div>

                                    <div class="card-body d-flex flex-column pt-2">
                                        <!-- Product Details -->
                                        <div class="pb-2">
                                            <h5 class="card-title fw-medium" style="font-size: 14px;">CT-IMP Matto Light
                                                Brown</h5>
                                            <p class="card-text mb-1" style="font-size: 12px;">Meja ruang tamu
                                                aesthetic.</p>
                                            <div class="d-flex gap-1 align-items-center mb-2">
                                                <i class="bi bi-star-fill text-warning" style="font-size: 12px;"></i>
                                                <i class="bi bi-star-fill text-warning" style="font-size: 12px;"></i>
                                                <i class="bi bi-star-fill text-warning" style="font-size: 12px;"></i>
                                                <i class="bi bi-star-fill text-warning" style="font-size: 12px;"></i>
                                                <i class="bi bi-star-fill text-warning" style="font-size: 12px;"></i>
                                                <small class="text-muted fst-italic ms-1" style="font-size: 10px;">300
                                                    terjual</small>
                                            </div>
                                        </div>

                                        <!-- Price Section - Always at Bottom -->
                                        <div class="mt-auto d-flex align-items-center">
                                            <h5 class="card-title fw-bold mb-0 me-2" style="font-size: 15px;">
                                                <sup class="fw-normal" style="font-size: 12px;">Rp</sup> 500.000
                                            </h5>
                                            <span class="fw-normal" style="font-size: 10px;">
                                                <sup class="fw-normal text-danger" style="font-size: 10px;">Rp</sup>
                                                <span class="text-danger text-decoration-line-through">600.000</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card shadow-right-bottom position-relative h-100"
                                    style="border-radius: 15px;">
                                    <!-- Corner Ribbon -->
                                    <div class="position-absolute"
                                        style="top: 0; left: 0; width: 150px; height: 150px; overflow: hidden; z-index: 10;">
                                        <div class="position-absolute text-white text-uppercase fw-bold d-flex align-items-center justify-content-center"
                                            style="width: 200px; height: 20px; transform: rotate(-45deg) translateY(-20px) translateX(-70px); font-size: 10px; background-color: #2B4779;">
                                            New Product
                                        </div>
                                    </div>

                                    <!-- Product Image - Centered -->
                                    <div class="text-center pt-3">
                                        <img src="assets/img/product/kursi/ZULU CHAIR WHITE.png"
                                            class="img-fluid mx-auto" alt="Product Image"
                                            style="max-height: 180px; max-width: 80%;">
                                    </div>

                                    <div class="card-body d-flex flex-column pt-2">
                                        <!-- Product Details -->
                                        <div class="pb-2">
                                            <h5 class="card-title fw-medium" style="font-size: 14px;">CT-IMP Matto Light
                                                Brown</h5>
                                            <p class="card-text mb-1" style="font-size: 12px;">Meja ruang tamu
                                                aesthetic.</p>
                                            <div class="d-flex gap-1 align-items-center mb-2">
                                                <i class="bi bi-star-fill text-warning" style="font-size: 12px;"></i>
                                                <i class="bi bi-star-fill text-warning" style="font-size: 12px;"></i>
                                                <i class="bi bi-star-fill text-warning" style="font-size: 12px;"></i>
                                                <i class="bi bi-star-fill text-warning" style="font-size: 12px;"></i>
                                                <i class="bi bi-star-fill text-warning" style="font-size: 12px;"></i>
                                                <small class="text-muted fst-italic ms-1" style="font-size: 10px;">300
                                                    terjual</small>
                                            </div>
                                        </div>

                                        <!-- Price Section - Always at Bottom -->
                                        <div class="mt-auto d-flex align-items-center">
                                            <h5 class="card-title fw-bold mb-0 me-2" style="font-size: 15px;">
                                                <sup class="fw-normal" style="font-size: 12px;">Rp</sup> 500.000
                                            </h5>
                                            <span class="fw-normal" style="font-size: 10px;">
                                                <sup class="fw-normal text-danger" style="font-size: 10px;">Rp</sup>
                                                <span class="text-danger text-decoration-line-through">600.000</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card shadow-right-bottom position-relative h-100"
                                    style="border-radius: 15px;">
                                    <!-- Corner Ribbon -->
                                    <div class="position-absolute"
                                        style="top: 0; left: 0; width: 150px; height: 150px; overflow: hidden; z-index: 10;">
                                        <div class="position-absolute text-white text-uppercase fw-bold d-flex align-items-center justify-content-center"
                                            style="width: 200px; height: 20px; transform: rotate(-45deg) translateY(-20px) translateX(-70px); font-size: 10px; background-color: #2B4779;">
                                            New Product
                                        </div>
                                    </div>

                                    <!-- Product Image - Centered -->
                                    <div class="text-center pt-3">
                                        <img src="assets/img/product/kursi/ZULU CHAIR WHITE.png"
                                            class="img-fluid mx-auto" alt="Product Image"
                                            style="max-height: 180px; max-width: 80%;">
                                    </div>

                                    <div class="card-body d-flex flex-column pt-2">
                                        <!-- Product Details -->
                                        <div class="pb-2">
                                            <h5 class="card-title fw-medium" style="font-size: 14px;">CT-IMP Matto Light
                                                Brown</h5>
                                            <p class="card-text mb-1" style="font-size: 12px;">Meja ruang tamu
                                                aesthetic.</p>
                                            <div class="d-flex gap-1 align-items-center mb-2">
                                                <i class="bi bi-star-fill text-warning" style="font-size: 12px;"></i>
                                                <i class="bi bi-star-fill text-warning" style="font-size: 12px;"></i>
                                                <i class="bi bi-star-fill text-warning" style="font-size: 12px;"></i>
                                                <i class="bi bi-star-fill text-warning" style="font-size: 12px;"></i>
                                                <i class="bi bi-star-fill text-warning" style="font-size: 12px;"></i>
                                                <small class="text-muted fst-italic ms-1" style="font-size: 10px;">300
                                                    terjual</small>
                                            </div>
                                        </div>

                                        <!-- Price Section - Always at Bottom -->
                                        <div class="mt-auto d-flex align-items-center">
                                            <h5 class="card-title fw-bold mb-0 me-2" style="font-size: 15px;">
                                                <sup class="fw-normal" style="font-size: 12px;">Rp</sup> 500.000
                                            </h5>
                                            <span class="fw-normal" style="font-size: 10px;">
                                                <sup class="fw-normal text-danger" style="font-size: 10px;">Rp</sup>
                                                <span class="text-danger text-decoration-line-through">600.000</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container mt-4">
                        <div class="d-flex justify-content-center">
                            <nav aria-label="Page navigation">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span class="double-arrow">&laquo;</span>
                                        </a>
                                    </li>
                                    <li class="page-item active">
                                        <a class="page-link" href="#">1</a>
                                    </li>
                                    <li class="page-item ">
                                        <a class="page-link" href="#">2</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span class="double-arrow-right">&raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
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
                            <h2 class="site-title">Kategori Product</h2>
                            <a href="#" class="small">View More <i class="fas fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="tab-content wow fadeInUp" data-wow-delay=".25s" id="item-tabContent">
                    <div style="margin-left: 40px;">
                        <ul class="d-flex justify-content-start align-items-center mb-2" style="gap: 100px;">
                            <li class="nav-item">
                                <a class="d-flex justify-content-center align-items-center w-100 h-100 custom-nav-link-product <?php echo (basename($_SERVER['PHP_SELF']) == 'index.php') ? 'active' : ''; ?>"
                                    href="index.php" style="font-size: 14px;"> Living</a>
                            </li>
                            <li class="nav-item">
                                <a class="d-flex justify-content-center align-items-center w-100 h-100 custom-nav-link-product <?php echo (basename($_SERVER['PHP_SELF']) == 'product.php') ? 'active' : ''; ?>"
                                    href="product.php" style="font-size: 14px;"> Dining</a>
                            </li>
                            <li class="nav-item">
                                <a class="d-flex justify-content-center align-items-center w-100 h-100 custom-nav-link-product<?php echo (basename($_SERVER['PHP_SELF']) == 'promo.php') ? 'active' : ''; ?>"
                                    href="promo.php" style="font-size: 14px;"> Bedroom</a>
                            </li>
                            <li class="nav-item">
                                <a class="d-flex justify-content-center align-items-center w-100 h-100 custom-nav-link-product <?php echo (basename($_SERVER['PHP_SELF']) == 'dekorasi.php') ? 'active' : ''; ?>"
                                    href="dekorasi.php" style="font-size: 14px;"> Kitchen</a>
                            </li>
                        </ul>
                    </div>

                    <div class="tab-content wow fadeInUp" data-wow-delay=".25s" id="item-tabContent">
                        <div class="container">
                            <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 g-4  justify-content-center">
                                <div class="col">
                                    <div class="card shadow-right-bottom position-relative h-100"
                                        style="border-radius: 15px;">
                                        <!-- Corner Ribbon -->
                                        <div class="position-absolute"
                                            style="top: 0; left: 0; width: 150px; height: 150px; overflow: hidden; z-index: 10;">
                                            <div class="position-absolute text-white text-uppercase fw-bold d-flex align-items-center justify-content-center"
                                                style="width: 200px; height: 20px; transform: rotate(-45deg) translateY(-20px) translateX(-70px); font-size: 10px; background-color: #2B4779;">
                                                New Product
                                            </div>
                                        </div>

                                        <!-- Product Image - Centered -->
                                        <div class="text-center pt-3">
                                            <img src="assets/img/product/kursi/ZULU CHAIR WHITE.png"
                                                class="img-fluid mx-auto" alt="Product Image"
                                                style="max-height: 180px; max-width: 80%;">
                                        </div>

                                        <div class="card-body d-flex flex-column pt-2">
                                            <!-- Product Details -->
                                            <div class="pb-2">
                                                <h5 class="card-title fw-medium" style="font-size: 14px;">CT-IMP Matto
                                                    Light
                                                    Brown</h5>
                                                <p class="card-text mb-1" style="font-size: 12px;">Meja ruang tamu
                                                    aesthetic.</p>
                                                <div class="d-flex gap-1 align-items-center mb-2">
                                                    <i class="bi bi-star-fill text-warning"
                                                        style="font-size: 12px;"></i>
                                                    <i class="bi bi-star-fill text-warning"
                                                        style="font-size: 12px;"></i>
                                                    <i class="bi bi-star-fill text-warning"
                                                        style="font-size: 12px;"></i>
                                                    <i class="bi bi-star-fill text-warning"
                                                        style="font-size: 12px;"></i>
                                                    <i class="bi bi-star-fill text-warning"
                                                        style="font-size: 12px;"></i>
                                                    <small class="text-muted fst-italic ms-1"
                                                        style="font-size: 10px;">300
                                                        terjual</small>
                                                </div>
                                            </div>

                                            <!-- Price Section - Always at Bottom -->
                                            <div class="mt-auto d-flex align-items-center">
                                                <h5 class="card-title fw-bold mb-0 me-2" style="font-size: 15px;">
                                                    <sup class="fw-normal" style="font-size: 12px;">Rp</sup> 500.000
                                                </h5>
                                                <span class="fw-normal" style="font-size: 10px;">
                                                    <sup class="fw-normal text-danger" style="font-size: 10px;">Rp</sup>
                                                    <span
                                                        class="text-danger text-decoration-line-through">600.000</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card shadow-right-bottom position-relative h-100"
                                        style="border-radius: 15px;">
                                        <!-- Corner Ribbon -->
                                        <div class="position-absolute"
                                            style="top: 0; left: 0; width: 150px; height: 150px; overflow: hidden; z-index: 10;">
                                            <div class="position-absolute text-white text-uppercase fw-bold d-flex align-items-center justify-content-center"
                                                style="width: 200px; height: 20px; transform: rotate(-45deg) translateY(-20px) translateX(-70px); font-size: 10px; background-color: #2B4779;">
                                                New Product
                                            </div>
                                        </div>

                                        <!-- Product Image - Centered -->
                                        <div class="text-center pt-3">
                                            <img src="assets/img/product/kursi/ZULU CHAIR WHITE.png"
                                                class="img-fluid mx-auto" alt="Product Image"
                                                style="max-height: 180px; max-width: 80%;">
                                        </div>

                                        <div class="card-body d-flex flex-column pt-2">
                                            <!-- Product Details -->
                                            <div class="pb-2">
                                                <h5 class="card-title fw-medium" style="font-size: 14px;">CT-IMP Matto
                                                    Light
                                                    Brown</h5>
                                                <p class="card-text mb-1" style="font-size: 12px;">Meja ruang tamu
                                                    aesthetic.</p>
                                                <div class="d-flex gap-1 align-items-center mb-2">
                                                    <i class="bi bi-star-fill text-warning"
                                                        style="font-size: 12px;"></i>
                                                    <i class="bi bi-star-fill text-warning"
                                                        style="font-size: 12px;"></i>
                                                    <i class="bi bi-star-fill text-warning"
                                                        style="font-size: 12px;"></i>
                                                    <i class="bi bi-star-fill text-warning"
                                                        style="font-size: 12px;"></i>
                                                    <i class="bi bi-star-fill text-warning"
                                                        style="font-size: 12px;"></i>
                                                    <small class="text-muted fst-italic ms-1"
                                                        style="font-size: 10px;">300
                                                        terjual</small>
                                                </div>
                                            </div>

                                            <!-- Price Section - Always at Bottom -->
                                            <div class="mt-auto d-flex align-items-center">
                                                <h5 class="card-title fw-bold mb-0 me-2" style="font-size: 15px;">
                                                    <sup class="fw-normal" style="font-size: 12px;">Rp</sup> 500.000
                                                </h5>
                                                <span class="fw-normal" style="font-size: 10px;">
                                                    <sup class="fw-normal text-danger" style="font-size: 10px;">Rp</sup>
                                                    <span
                                                        class="text-danger text-decoration-line-through">600.000</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card shadow-right-bottom position-relative h-100"
                                        style="border-radius: 15px;">
                                        <!-- Corner Ribbon -->
                                        <div class="position-absolute"
                                            style="top: 0; left: 0; width: 150px; height: 150px; overflow: hidden; z-index: 10;">
                                            <div class="position-absolute text-white text-uppercase fw-bold d-flex align-items-center justify-content-center"
                                                style="width: 200px; height: 20px; transform: rotate(-45deg) translateY(-20px) translateX(-70px); font-size: 10px; background-color: #2B4779;">
                                                New Product
                                            </div>
                                        </div>

                                        <!-- Product Image - Centered -->
                                        <div class="text-center pt-3">
                                            <img src="assets/img/product/kursi/ZULU CHAIR WHITE.png"
                                                class="img-fluid mx-auto" alt="Product Image"
                                                style="max-height: 180px; max-width: 80%;">
                                        </div>

                                        <div class="card-body d-flex flex-column pt-2">
                                            <!-- Product Details -->
                                            <div class="pb-2">
                                                <h5 class="card-title fw-medium" style="font-size: 14px;">CT-IMP Matto
                                                    Light
                                                    Brown</h5>
                                                <p class="card-text mb-1" style="font-size: 12px;">Meja ruang tamu
                                                    aesthetic.</p>
                                                <div class="d-flex gap-1 align-items-center mb-2">
                                                    <i class="bi bi-star-fill text-warning"
                                                        style="font-size: 12px;"></i>
                                                    <i class="bi bi-star-fill text-warning"
                                                        style="font-size: 12px;"></i>
                                                    <i class="bi bi-star-fill text-warning"
                                                        style="font-size: 12px;"></i>
                                                    <i class="bi bi-star-fill text-warning"
                                                        style="font-size: 12px;"></i>
                                                    <i class="bi bi-star-fill text-warning"
                                                        style="font-size: 12px;"></i>
                                                    <small class="text-muted fst-italic ms-1"
                                                        style="font-size: 10px;">300
                                                        terjual</small>
                                                </div>
                                            </div>

                                            <!-- Price Section - Always at Bottom -->
                                            <div class="mt-auto d-flex align-items-center">
                                                <h5 class="card-title fw-bold mb-0 me-2" style="font-size: 15px;">
                                                    <sup class="fw-normal" style="font-size: 12px;">Rp</sup> 500.000
                                                </h5>
                                                <span class="fw-normal" style="font-size: 10px;">
                                                    <sup class="fw-normal text-danger" style="font-size: 10px;">Rp</sup>
                                                    <span
                                                        class="text-danger text-decoration-line-through">600.000</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card shadow-right-bottom position-relative h-100"
                                        style="border-radius: 15px;">
                                        <!-- Corner Ribbon -->
                                        <div class="position-absolute"
                                            style="top: 0; left: 0; width: 150px; height: 150px; overflow: hidden; z-index: 10;">
                                            <div class="position-absolute text-white text-uppercase fw-bold d-flex align-items-center justify-content-center"
                                                style="width: 200px; height: 20px; transform: rotate(-45deg) translateY(-20px) translateX(-70px); font-size: 10px; background-color: #2B4779;">
                                                New Product
                                            </div>
                                        </div>

                                        <!-- Product Image - Centered -->
                                        <div class="text-center pt-3">
                                            <img src="assets/img/product/kursi/ZULU CHAIR WHITE.png"
                                                class="img-fluid mx-auto" alt="Product Image"
                                                style="max-height: 180px; max-width: 80%;">
                                        </div>

                                        <div class="card-body d-flex flex-column pt-2">
                                            <!-- Product Details -->
                                            <div class="pb-2">
                                                <h5 class="card-title fw-medium" style="font-size: 14px;">CT-IMP Matto
                                                    Light
                                                    Brown</h5>
                                                <p class="card-text mb-1" style="font-size: 12px;">Meja ruang tamu
                                                    aesthetic.</p>
                                                <div class="d-flex gap-1 align-items-center mb-2">
                                                    <i class="bi bi-star-fill text-warning"
                                                        style="font-size: 12px;"></i>
                                                    <i class="bi bi-star-fill text-warning"
                                                        style="font-size: 12px;"></i>
                                                    <i class="bi bi-star-fill text-warning"
                                                        style="font-size: 12px;"></i>
                                                    <i class="bi bi-star-fill text-warning"
                                                        style="font-size: 12px;"></i>
                                                    <i class="bi bi-star-fill text-warning"
                                                        style="font-size: 12px;"></i>
                                                    <small class="text-muted fst-italic ms-1"
                                                        style="font-size: 10px;">300
                                                        terjual</small>
                                                </div>
                                            </div>

                                            <!-- Price Section - Always at Bottom -->
                                            <div class="mt-auto d-flex align-items-center">
                                                <h5 class="card-title fw-bold mb-0 me-2" style="font-size: 15px;">
                                                    <sup class="fw-normal" style="font-size: 12px;">Rp</sup> 500.000
                                                </h5>
                                                <span class="fw-normal" style="font-size: 10px;">
                                                    <sup class="fw-normal text-danger" style="font-size: 10px;">Rp</sup>
                                                    <span
                                                        class="text-danger text-decoration-line-through">600.000</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card shadow-right-bottom position-relative h-100"
                                        style="border-radius: 15px;">
                                        <!-- Corner Ribbon -->
                                        <div class="position-absolute"
                                            style="top: 0; left: 0; width: 150px; height: 150px; overflow: hidden; z-index: 10;">
                                            <div class="position-absolute text-white text-uppercase fw-bold d-flex align-items-center justify-content-center"
                                                style="width: 200px; height: 20px; transform: rotate(-45deg) translateY(-20px) translateX(-70px); font-size: 10px; background-color: #2B4779;">
                                                New Product
                                            </div>
                                        </div>

                                        <!-- Product Image - Centered -->
                                        <div class="text-center pt-3">
                                            <img src="assets/img/product/kursi/ZULU CHAIR WHITE.png"
                                                class="img-fluid mx-auto" alt="Product Image"
                                                style="max-height: 180px; max-width: 80%;">
                                        </div>

                                        <div class="card-body d-flex flex-column pt-2">
                                            <!-- Product Details -->
                                            <div class="pb-2">
                                                <h5 class="card-title fw-medium" style="font-size: 14px;">CT-IMP Matto
                                                    Light
                                                    Brown</h5>
                                                <p class="card-text mb-1" style="font-size: 12px;">Meja ruang tamu
                                                    aesthetic.</p>
                                                <div class="d-flex gap-1 align-items-center mb-2">
                                                    <i class="bi bi-star-fill text-warning"
                                                        style="font-size: 12px;"></i>
                                                    <i class="bi bi-star-fill text-warning"
                                                        style="font-size: 12px;"></i>
                                                    <i class="bi bi-star-fill text-warning"
                                                        style="font-size: 12px;"></i>
                                                    <i class="bi bi-star-fill text-warning"
                                                        style="font-size: 12px;"></i>
                                                    <i class="bi bi-star-fill text-warning"
                                                        style="font-size: 12px;"></i>
                                                    <small class="text-muted fst-italic ms-1"
                                                        style="font-size: 10px;">300
                                                        terjual</small>
                                                </div>
                                            </div>

                                            <!-- Price Section - Always at Bottom -->
                                            <div class="mt-auto d-flex align-items-center">
                                                <h5 class="card-title fw-bold mb-0 me-2" style="font-size: 15px;">
                                                    <sup class="fw-normal" style="font-size: 12px;">Rp</sup> 500.000
                                                </h5>
                                                <span class="fw-normal" style="font-size: 10px;">
                                                    <sup class="fw-normal text-danger" style="font-size: 10px;">Rp</sup>
                                                    <span
                                                        class="text-danger text-decoration-line-through">600.000</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card shadow-right-bottom position-relative h-100"
                                        style="border-radius: 15px;">
                                        <!-- Corner Ribbon -->
                                        <div class="position-absolute"
                                            style="top: 0; left: 0; width: 150px; height: 150px; overflow: hidden; z-index: 10;">
                                            <div class="position-absolute text-white text-uppercase fw-bold d-flex align-items-center justify-content-center"
                                                style="width: 200px; height: 20px; transform: rotate(-45deg) translateY(-20px) translateX(-70px); font-size: 10px; background-color: #2B4779;">
                                                New Product
                                            </div>
                                        </div>

                                        <!-- Product Image - Centered -->
                                        <div class="text-center pt-3">
                                            <img src="assets/img/product/kursi/ZULU CHAIR WHITE.png"
                                                class="img-fluid mx-auto" alt="Product Image"
                                                style="max-height: 180px; max-width: 80%;">
                                        </div>

                                        <div class="card-body d-flex flex-column pt-2">
                                            <!-- Product Details -->
                                            <div class="pb-2">
                                                <h5 class="card-title fw-medium" style="font-size: 14px;">CT-IMP Matto
                                                    Light
                                                    Brown</h5>
                                                <p class="card-text mb-1" style="font-size: 12px;">Meja ruang tamu
                                                    aesthetic.</p>
                                                <div class="d-flex gap-1 align-items-center mb-2">
                                                    <i class="bi bi-star-fill text-warning"
                                                        style="font-size: 12px;"></i>
                                                    <i class="bi bi-star-fill text-warning"
                                                        style="font-size: 12px;"></i>
                                                    <i class="bi bi-star-fill text-warning"
                                                        style="font-size: 12px;"></i>
                                                    <i class="bi bi-star-fill text-warning"
                                                        style="font-size: 12px;"></i>
                                                    <i class="bi bi-star-fill text-warning"
                                                        style="font-size: 12px;"></i>
                                                    <small class="text-muted fst-italic ms-1"
                                                        style="font-size: 10px;">300
                                                        terjual</small>
                                                </div>
                                            </div>

                                            <!-- Price Section - Always at Bottom -->
                                            <div class="mt-auto d-flex align-items-center">
                                                <h5 class="card-title fw-bold mb-0 me-2" style="font-size: 15px;">
                                                    <sup class="fw-normal" style="font-size: 12px;">Rp</sup> 500.000
                                                </h5>
                                                <span class="fw-normal" style="font-size: 10px;">
                                                    <sup class="fw-normal text-danger" style="font-size: 10px;">Rp</sup>
                                                    <span
                                                        class="text-danger text-decoration-line-through">600.000</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card shadow-right-bottom position-relative h-100"
                                        style="border-radius: 15px;">
                                        <!-- Corner Ribbon -->
                                        <div class="position-absolute"
                                            style="top: 0; left: 0; width: 150px; height: 150px; overflow: hidden; z-index: 10;">
                                            <div class="position-absolute text-white text-uppercase fw-bold d-flex align-items-center justify-content-center"
                                                style="width: 200px; height: 20px; transform: rotate(-45deg) translateY(-20px) translateX(-70px); font-size: 10px; background-color: #2B4779;">
                                                New Product
                                            </div>
                                        </div>

                                        <!-- Product Image - Centered -->
                                        <div class="text-center pt-3">
                                            <img src="assets/img/product/kursi/ZULU CHAIR WHITE.png"
                                                class="img-fluid mx-auto" alt="Product Image"
                                                style="max-height: 180px; max-width: 80%;">
                                        </div>

                                        <div class="card-body d-flex flex-column pt-2">
                                            <!-- Product Details -->
                                            <div class="pb-2">
                                                <h5 class="card-title fw-medium" style="font-size: 14px;">CT-IMP Matto
                                                    Light
                                                    Brown</h5>
                                                <p class="card-text mb-1" style="font-size: 12px;">Meja ruang tamu
                                                    aesthetic.</p>
                                                <div class="d-flex gap-1 align-items-center mb-2">
                                                    <i class="bi bi-star-fill text-warning"
                                                        style="font-size: 12px;"></i>
                                                    <i class="bi bi-star-fill text-warning"
                                                        style="font-size: 12px;"></i>
                                                    <i class="bi bi-star-fill text-warning"
                                                        style="font-size: 12px;"></i>
                                                    <i class="bi bi-star-fill text-warning"
                                                        style="font-size: 12px;"></i>
                                                    <i class="bi bi-star-fill text-warning"
                                                        style="font-size: 12px;"></i>
                                                    <small class="text-muted fst-italic ms-1"
                                                        style="font-size: 10px;">300
                                                        terjual</small>
                                                </div>
                                            </div>

                                            <!-- Price Section - Always at Bottom -->
                                            <div class="mt-auto d-flex align-items-center">
                                                <h5 class="card-title fw-bold mb-0 me-2" style="font-size: 15px;">
                                                    <sup class="fw-normal" style="font-size: 12px;">Rp</sup> 500.000
                                                </h5>
                                                <span class="fw-normal" style="font-size: 10px;">
                                                    <sup class="fw-normal text-danger" style="font-size: 10px;">Rp</sup>
                                                    <span
                                                        class="text-danger text-decoration-line-through">600.000</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card shadow-right-bottom position-relative h-100"
                                        style="border-radius: 15px;">
                                        <!-- Corner Ribbon -->
                                        <div class="position-absolute"
                                            style="top: 0; left: 0; width: 150px; height: 150px; overflow: hidden; z-index: 10;">
                                            <div class="position-absolute text-white text-uppercase fw-bold d-flex align-items-center justify-content-center"
                                                style="width: 200px; height: 20px; transform: rotate(-45deg) translateY(-20px) translateX(-70px); font-size: 10px; background-color: #2B4779;">
                                                New Product
                                            </div>
                                        </div>

                                        <!-- Product Image - Centered -->
                                        <div class="text-center pt-3">
                                            <img src="assets/img/product/kursi/ZULU CHAIR WHITE.png"
                                                class="img-fluid mx-auto" alt="Product Image"
                                                style="max-height: 180px; max-width: 80%;">
                                        </div>

                                        <div class="card-body d-flex flex-column pt-2">
                                            <!-- Product Details -->
                                            <div class="pb-2">
                                                <h5 class="card-title fw-medium" style="font-size: 14px;">CT-IMP Matto
                                                    Light
                                                    Brown</h5>
                                                <p class="card-text mb-1" style="font-size: 12px;">Meja ruang tamu
                                                    aesthetic.</p>
                                                <div class="d-flex gap-1 align-items-center mb-2">
                                                    <i class="bi bi-star-fill text-warning"
                                                        style="font-size: 12px;"></i>
                                                    <i class="bi bi-star-fill text-warning"
                                                        style="font-size: 12px;"></i>
                                                    <i class="bi bi-star-fill text-warning"
                                                        style="font-size: 12px;"></i>
                                                    <i class="bi bi-star-fill text-warning"
                                                        style="font-size: 12px;"></i>
                                                    <i class="bi bi-star-fill text-warning"
                                                        style="font-size: 12px;"></i>
                                                    <small class="text-muted fst-italic ms-1"
                                                        style="font-size: 10px;">300
                                                        terjual</small>
                                                </div>
                                            </div>

                                            <!-- Price Section - Always at Bottom -->
                                            <div class="mt-auto d-flex align-items-center">
                                                <h5 class="card-title fw-bold mb-0 me-2" style="font-size: 15px;">
                                                    <sup class="fw-normal" style="font-size: 12px;">Rp</sup> 500.000
                                                </h5>
                                                <span class="fw-normal" style="font-size: 10px;">
                                                    <sup class="fw-normal text-danger" style="font-size: 10px;">Rp</sup>
                                                    <span
                                                        class="text-danger text-decoration-line-through">600.000</span>
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
    </script>
</body>

</html>