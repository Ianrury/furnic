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
        <!-- Dekorasi Pilihan -->
        <div class="product-area product-area-new pt-40">
            <div class="container">
                <div class="row">
                    <div class="col-12 wow fadeInDown mb-0" data-wow-delay=".25s">
                        <div class="site-heading-inline">
                            <h2 class="site-title">Dekorasi Product</h2>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="tab-content wow fadeInUp" data-wow-delay=".25s" id="item-tabContent">
                        <div class="row g-3">
                            <div class="col-3">
                                <div class="card h-100 border-0 overflow-hidden rounded-2">
                                    <img src="assets/img/product/decorasi/kamar-tidur.jpg"
                                        class="card-img h-100 object-fit-cover" alt="Kamar Tidur">
                                    <div class="position-absolute top-3 start-3 pt-2 ps-2">
                                        <span
                                            class="badge bg-white text-dark py-2 px-3 fw-medium rounded-2 shadow-sm">Kamar
                                            Tidur</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="card h-100 border-0 overflow-hidden rounded-2">
                                    <img src="assets/img/product/decorasi/ruang-tamu.jpg"
                                        class="card-img h-100 object-fit-cover" alt="Ruang Tamu">
                                    <div class="position-absolute top-3 start-3 pt-2 ps-2">
                                        <span
                                            class="badge bg-white text-dark py-2 px-3 fw-medium rounded-2 shadow-sm">Ruang
                                            Tamu</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="card h-100 border-0 overflow-hidden rounded-2">
                                    <img src="assets/img/product/decorasi/kantor.jpg"
                                        class="card-img h-100 object-fit-cover" alt="Kantor">
                                    <div class="position-absolute top-3 start-3 pt-2 ps-2">
                                        <span
                                            class="badge bg-white text-dark py-2 px-3 fw-medium rounded-2 shadow-sm">Kantor</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="card h-100 border-0 overflow-hidden rounded-2">
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
        <!-- Product -->
        <div class="product-area product-area-new pt-40">
            <div class="container">
                <div class="row">
                    <div class="col-12 wow fadeInDown mb-0" data-wow-delay=".25s">
                        <div class="site-heading-inline">
                            <h2 class="site-title">Produk </h2>
                        </div>
                    </div>
                </div>
                <div class="tab-content wow fadeInUp" data-wow-delay=".25s" id="item-tabContent">
                    <div class="container">
                        <div class="row">
                            <!-- Sidebar Filter -->
                            <div class="col-md-3 m-0 p-0" style="opacity: 1 !important; background-color: white;">
                                <p class="fw-semibold text-dark" style="font-size: 14px;">Urutkan berdasarkan</p>
                                <div class=" " style="width: 250px;">
                                    <!-- Urutkan Berdasarkan -->
                                    <div class="mb-3">
                                        <button id="resetFilter" class="btn btn-secondary btn-sm mt-1"
                                            style="font-size: 11px; padding-right: 27px; padding-left: 27px;padding-top: 1px; padding-bottom: 1px; background-color: #D9D9D9; border: #D9D9D9;">Reset</button>
                                    </div>

                                    <hr>

                                    <!-- Rekomendasi -->
                                    <div class="mb-3">
                                        <h6 class="fw-bold text-dark mb-2" style="font-size: 15px;">Rekomendasi</h6>
                                        <div class="form-check custom-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="productTerbaru">
                                            <label class="form-check-label" for="productTerbaru">
                                                Product Terbaru
                                            </label>
                                        </div>
                                        <div class="form-check custom-check">
                                            <input class="form-check-input" type="checkbox" id="promo">
                                            <label class="form-check-label" for="promo">Promo</label>
                                        </div>
                                        <div class="form-check custom-check">
                                            <input class="form-check-input" type="checkbox" id="unggulan">
                                            <label class="form-check-label" for="unggulan">Product Unggulan</label>
                                        </div>
                                    </div>

                                    <hr>

                                    <!-- Kategori -->
                                    <div class="mb-3">
                                        <h6 class="fw-bold text-dark mb-2" style="font-size: 15px;">Kategori</h6>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-check custom-check">
                                                    <input class="form-check-input" type="checkbox" id="bedroom">
                                                    <label class="form-check-label" for="bedroom">Bedroom</label>
                                                </div>
                                                <div class="form-check custom-check">
                                                    <input class="form-check-input" type="checkbox" id="business">
                                                    <label class="form-check-label" for="business">Business Table &
                                                        Chair</label>
                                                </div>
                                                <div class="form-check custom-check">
                                                    <input class="form-check-input" type="checkbox" id="dining">
                                                    <label class="form-check-label" for="dining">Dining</label>
                                                </div>
                                                <div class="form-check custom-check">
                                                    <input class="form-check-input" type="checkbox" id="home_deco">
                                                    <label class="form-check-label" for="home_deco">Home
                                                        Decoration</label>
                                                </div>
                                                <div class="form-check custom-check">
                                                    <input class="form-check-input" type="checkbox" id="homeware">
                                                    <label class="form-check-label" for="homeware">Homeware</label>
                                                </div>
                                                <div class="form-check custom-check">
                                                    <input class="form-check-input" type="checkbox" id="textile">
                                                    <label class="form-check-label" for="textile">Home Textile</label>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-check custom-check">
                                                    <input class="form-check-input" type="checkbox" id="kids">
                                                    <label class="form-check-label" for="kids">Kids & Teens</label>
                                                </div>
                                                <div class="form-check custom-check">
                                                    <input class="form-check-input" type="checkbox" id="kitchen">
                                                    <label class="form-check-label" for="kitchen">Kitchen</label>
                                                </div>
                                                <div class="form-check custom-check">
                                                    <input class="form-check-input" type="checkbox" id="living">
                                                    <label class="form-check-label" for="living">Living</label>
                                                </div>
                                                <div class="form-check custom-check">
                                                    <input class="form-check-input" type="checkbox" id="mattress">
                                                    <label class="form-check-label" for="mattress">Mattress</label>
                                                </div>
                                                <div class="form-check custom-check">
                                                    <input class="form-check-input" type="checkbox" id="office">
                                                    <label class="form-check-label" for="office">Office</label>
                                                </div>
                                                <div class="form-check custom-check">
                                                    <input class="form-check-input" type="checkbox" id="rugs">
                                                    <label class="form-check-label" for="rugs">Rugs & Mats</label>
                                                </div>
                                                <div class="form-check custom-check">
                                                    <input class="form-check-input" type="checkbox" id="storage">
                                                    <label class="form-check-label" for="storage">Storage</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <hr>

                                    <!-- Harga -->
                                    <div class="mb-3">
                                        <h6 class="fw-bold text-dark mb-2" style="font-size: 15px;">Kategori</h6>
                                        <div class="input-group input-group-sm mb-3">
                                            <span class="input-group-text fw-bold" id="inputGroup-sizing-sm"
                                                style="font-size: 10px; background-color: #D9D9D9;">Rp</span>
                                            <input type="text" class="form-control harga-input"
                                                placeholder="Masukkan harga minimum" aria-label="Sizing example input"
                                                aria-describedby="inputGroup-sizing-sm"
                                                onfocus="this.classList.add('focused')"
                                                onblur="if(!this.value) this.classList.remove('focused')">
                                        </div>
                                        <div class="input-group input-group-sm mb-3">
                                            <span class="input-group-text fw-bold" id="inputGroup-sizing-sm"
                                                style="font-size: 10px; background-color: #D9D9D9;">Rp</span>
                                            <input type="text" class="form-control harga-input"
                                                placeholder="Masukkan harga maximum" aria-label="Sizing example input"
                                                aria-describedby="inputGroup-sizing-sm"
                                                onfocus="this.classList.add('focused')"
                                                onblur="if(!this.value) this.classList.remove('focused')">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Produk Grid -->
                            <div class="col-md-9">
                                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                                    <!-- Ulangi card produk -->
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
                                                    <h5 class="card-title fw-medium text-truncate"
                                                        style="font-size: 14px;">
                                                        CT-IMP Matto Light Brown</h5>
                                                    <p class="card-text mb-1 text-truncate" style="font-size: 12px;">
                                                        Meja ruang
                                                        tamu aesthetic.</p>
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
                                                <div class="mt-auto">
                                                    <div class="d-flex flex-wrap align-items-baseline">
                                                        <div class="me-2">
                                                            <span class="fw-bold" style="font-size: 15px;">
                                                                <sup class="fw-normal" style="font-size: 12px;">Rp</sup>
                                                                500.000
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <span class="fw-normal" style="font-size: 10px;">
                                                                <sup class="fw-normal text-danger"
                                                                    style="font-size: 10px;">Rp</sup>
                                                                <span
                                                                    class="text-danger text-decoration-line-through">600.000</span>
                                                            </span>
                                                        </div>
                                                    </div>
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
                                                    <h5 class="card-title fw-medium text-truncate"
                                                        style="font-size: 14px;">
                                                        CT-IMP Matto Light Brown</h5>
                                                    <p class="card-text mb-1 text-truncate" style="font-size: 12px;">
                                                        Meja ruang
                                                        tamu aesthetic.</p>
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
                                                <div class="mt-auto">
                                                    <div class="d-flex flex-wrap align-items-baseline">
                                                        <div class="me-2">
                                                            <span class="fw-bold" style="font-size: 15px;">
                                                                <sup class="fw-normal" style="font-size: 12px;">Rp</sup>
                                                                500.000
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <span class="fw-normal" style="font-size: 10px;">
                                                                <sup class="fw-normal text-danger"
                                                                    style="font-size: 10px;">Rp</sup>
                                                                <span
                                                                    class="text-danger text-decoration-line-through">600.000</span>
                                                            </span>
                                                        </div>
                                                    </div>
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
                                                    <h5 class="card-title fw-medium text-truncate"
                                                        style="font-size: 14px;">
                                                        CT-IMP Matto Light Brown</h5>
                                                    <p class="card-text mb-1 text-truncate" style="font-size: 12px;">
                                                        Meja ruang
                                                        tamu aesthetic.</p>
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
                                                <div class="mt-auto">
                                                    <div class="d-flex flex-wrap align-items-baseline">
                                                        <div class="me-2">
                                                            <span class="fw-bold" style="font-size: 15px;">
                                                                <sup class="fw-normal" style="font-size: 12px;">Rp</sup>
                                                                500.000
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <span class="fw-normal" style="font-size: 10px;">
                                                                <sup class="fw-normal text-danger"
                                                                    style="font-size: 10px;">Rp</sup>
                                                                <span
                                                                    class="text-danger text-decoration-line-through">600.000</span>
                                                            </span>
                                                        </div>
                                                    </div>
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
                                                    <h5 class="card-title fw-medium text-truncate"
                                                        style="font-size: 14px;">
                                                        CT-IMP Matto Light Brown</h5>
                                                    <p class="card-text mb-1 text-truncate" style="font-size: 12px;">
                                                        Meja ruang
                                                        tamu aesthetic.</p>
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
                                                <div class="mt-auto">
                                                    <div class="d-flex flex-wrap align-items-baseline">
                                                        <div class="me-2">
                                                            <span class="fw-bold" style="font-size: 15px;">
                                                                <sup class="fw-normal" style="font-size: 12px;">Rp</sup>
                                                                500.000
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <span class="fw-normal" style="font-size: 10px;">
                                                                <sup class="fw-normal text-danger"
                                                                    style="font-size: 10px;">Rp</sup>
                                                                <span
                                                                    class="text-danger text-decoration-line-through">600.000</span>
                                                            </span>
                                                        </div>
                                                    </div>
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
                                                    <h5 class="card-title fw-medium text-truncate"
                                                        style="font-size: 14px;">
                                                        CT-IMP Matto Light Brown</h5>
                                                    <p class="card-text mb-1 text-truncate" style="font-size: 12px;">
                                                        Meja ruang
                                                        tamu aesthetic.</p>
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
                                                <div class="mt-auto">
                                                    <div class="d-flex flex-wrap align-items-baseline">
                                                        <div class="me-2">
                                                            <span class="fw-bold" style="font-size: 15px;">
                                                                <sup class="fw-normal" style="font-size: 12px;">Rp</sup>
                                                                500.000
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <span class="fw-normal" style="font-size: 10px;">
                                                                <sup class="fw-normal text-danger"
                                                                    style="font-size: 10px;">Rp</sup>
                                                                <span
                                                                    class="text-danger text-decoration-line-through">600.000</span>
                                                            </span>
                                                        </div>
                                                    </div>
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
                                                    <h5 class="card-title fw-medium text-truncate"
                                                        style="font-size: 14px;">
                                                        CT-IMP Matto Light Brown</h5>
                                                    <p class="card-text mb-1 text-truncate" style="font-size: 12px;">
                                                        Meja ruang
                                                        tamu aesthetic.</p>
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
                                                <div class="mt-auto">
                                                    <div class="d-flex flex-wrap align-items-baseline">
                                                        <div class="me-2">
                                                            <span class="fw-bold" style="font-size: 15px;">
                                                                <sup class="fw-normal" style="font-size: 12px;">Rp</sup>
                                                                500.000
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <span class="fw-normal" style="font-size: 10px;">
                                                                <sup class="fw-normal text-danger"
                                                                    style="font-size: 10px;">Rp</sup>
                                                                <span
                                                                    class="text-danger text-decoration-line-through">600.000</span>
                                                            </span>
                                                        </div>
                                                    </div>
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
                                                    <h5 class="card-title fw-medium text-truncate"
                                                        style="font-size: 14px;">
                                                        CT-IMP Matto Light Brown</h5>
                                                    <p class="card-text mb-1 text-truncate" style="font-size: 12px;">
                                                        Meja ruang
                                                        tamu aesthetic.</p>
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
                                                <div class="mt-auto">
                                                    <div class="d-flex flex-wrap align-items-baseline">
                                                        <div class="me-2">
                                                            <span class="fw-bold" style="font-size: 15px;">
                                                                <sup class="fw-normal" style="font-size: 12px;">Rp</sup>
                                                                500.000
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <span class="fw-normal" style="font-size: 10px;">
                                                                <sup class="fw-normal text-danger"
                                                                    style="font-size: 10px;">Rp</sup>
                                                                <span
                                                                    class="text-danger text-decoration-line-through">600.000</span>
                                                            </span>
                                                        </div>
                                                    </div>
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
                                                    <h5 class="card-title fw-medium text-truncate"
                                                        style="font-size: 14px;">
                                                        CT-IMP Matto Light Brown</h5>
                                                    <p class="card-text mb-1 text-truncate" style="font-size: 12px;">
                                                        Meja ruang
                                                        tamu aesthetic.</p>
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
                                                <div class="mt-auto">
                                                    <div class="d-flex flex-wrap align-items-baseline">
                                                        <div class="me-2">
                                                            <span class="fw-bold" style="font-size: 15px;">
                                                                <sup class="fw-normal" style="font-size: 12px;">Rp</sup>
                                                                500.000
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <span class="fw-normal" style="font-size: 10px;">
                                                                <sup class="fw-normal text-danger"
                                                                    style="font-size: 10px;">Rp</sup>
                                                                <span
                                                                    class="text-danger text-decoration-line-through">600.000</span>
                                                            </span>
                                                        </div>
                                                    </div>
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
                                                    <h5 class="card-title fw-medium text-truncate"
                                                        style="font-size: 14px;">
                                                        CT-IMP Matto Light Brown</h5>
                                                    <p class="card-text mb-1 text-truncate" style="font-size: 12px;">
                                                        Meja ruang
                                                        tamu aesthetic.</p>
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
                                                <div class="mt-auto">
                                                    <div class="d-flex flex-wrap align-items-baseline">
                                                        <div class="me-2">
                                                            <span class="fw-bold" style="font-size: 15px;">
                                                                <sup class="fw-normal" style="font-size: 12px;">Rp</sup>
                                                                500.000
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <span class="fw-normal" style="font-size: 10px;">
                                                                <sup class="fw-normal text-danger"
                                                                    style="font-size: 10px;">Rp</sup>
                                                                <span
                                                                    class="text-danger text-decoration-line-through">600.000</span>
                                                            </span>
                                                        </div>
                                                    </div>
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
                                                    <h5 class="card-title fw-medium text-truncate"
                                                        style="font-size: 14px;">
                                                        CT-IMP Matto Light Brown</h5>
                                                    <p class="card-text mb-1 text-truncate" style="font-size: 12px;">
                                                        Meja ruang
                                                        tamu aesthetic.</p>
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
                                                <div class="mt-auto">
                                                    <div class="d-flex flex-wrap align-items-baseline">
                                                        <div class="me-2">
                                                            <span class="fw-bold" style="font-size: 15px;">
                                                                <sup class="fw-normal" style="font-size: 12px;">Rp</sup>
                                                                500.000
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <span class="fw-normal" style="font-size: 10px;">
                                                                <sup class="fw-normal text-danger"
                                                                    style="font-size: 10px;">Rp</sup>
                                                                <span
                                                                    class="text-danger text-decoration-line-through">600.000</span>
                                                            </span>
                                                        </div>
                                                    </div>
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
                                                    <h5 class="card-title fw-medium text-truncate"
                                                        style="font-size: 14px;">
                                                        CT-IMP Matto Light Brown</h5>
                                                    <p class="card-text mb-1 text-truncate" style="font-size: 12px;">
                                                        Meja ruang
                                                        tamu aesthetic.</p>
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
                                                <div class="mt-auto">
                                                    <div class="d-flex flex-wrap align-items-baseline">
                                                        <div class="me-2">
                                                            <span class="fw-bold" style="font-size: 15px;">
                                                                <sup class="fw-normal" style="font-size: 12px;">Rp</sup>
                                                                500.000
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <span class="fw-normal" style="font-size: 10px;">
                                                                <sup class="fw-normal text-danger"
                                                                    style="font-size: 10px;">Rp</sup>
                                                                <span
                                                                    class="text-danger text-decoration-line-through">600.000</span>
                                                            </span>
                                                        </div>
                                                    </div>
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
                                                    <h5 class="card-title fw-medium text-truncate"
                                                        style="font-size: 14px;">
                                                        CT-IMP Matto Light Brown</h5>
                                                    <p class="card-text mb-1 text-truncate" style="font-size: 12px;">
                                                        Meja ruang
                                                        tamu aesthetic.</p>
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
                                                <div class="mt-auto">
                                                    <div class="d-flex flex-wrap align-items-baseline">
                                                        <div class="me-2">
                                                            <span class="fw-bold" style="font-size: 15px;">
                                                                <sup class="fw-normal" style="font-size: 12px;">Rp</sup>
                                                                500.000
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <span class="fw-normal" style="font-size: 10px;">
                                                                <sup class="fw-normal text-danger"
                                                                    style="font-size: 10px;">Rp</sup>
                                                                <span
                                                                    class="text-danger text-decoration-line-through">600.000</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Akhir satu produk -->
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
                                                <li class="page-item ">
                                                    <a class="page-link" href="#">3</a>
                                                </li>
                                                <li class="page-item ">
                                                    <a class="page-link" href="#">4</a>
                                                </li>
                                                <li class="page-item ">
                                                    <a class="page-link" href="#">5</a>
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
            </div>
        </div>
        <!-- Rekomendasi Product -->
        <div class="product-area product-area-new pt-40">
            <div class="container">
                <div class="row">
                    <div class="col-12 wow fadeInDown mb-0" data-wow-delay=".25s">
                        <div class="site-heading-inline">
                            <h2 class="site-title">Rekomendasi Product</h2>
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
                                            style="width: 200px; height: 20px; transform: rotate(-45deg) translateY(-20px) translateX(-70px); font-size: 10px; background-color: #FFFB2D;">
                                            Sale
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
                                            <h5 class="card-title fw-medium text-truncate" style="font-size: 14px;">
                                                CT-IMP Matto Light Brown</h5>
                                            <p class="card-text mb-1 text-truncate" style="font-size: 12px;">Meja ruang
                                                tamu aesthetic.</p>
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
                                        <div class="mt-auto">
                                            <div class="d-flex flex-wrap align-items-baseline">
                                                <div class="me-2">
                                                    <span class="fw-bold" style="font-size: 15px;">
                                                        <sup class="fw-normal" style="font-size: 12px;">Rp</sup> 500.000
                                                    </span>
                                                </div>
                                                <div>
                                                    <span class="fw-normal" style="font-size: 10px;">
                                                        <sup class="fw-normal text-danger"
                                                            style="font-size: 10px;">Rp</sup>
                                                        <span
                                                            class="text-danger text-decoration-line-through">600.000</span>
                                                    </span>
                                                </div>
                                            </div>
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
                                            style="width: 200px; height: 20px; transform: rotate(-45deg) translateY(-20px) translateX(-70px); font-size: 10px; background-color: #FF0000;">
                                            Out of Stock
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
                                            <h5 class="card-title fw-medium text-truncate" style="font-size: 14px;">
                                                CT-IMP Matto Light Brown</h5>
                                            <p class="card-text mb-1 text-truncate" style="font-size: 12px;">Meja ruang
                                                tamu aesthetic.</p>
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
                                        <div class="mt-auto">
                                            <div class="d-flex flex-wrap align-items-baseline">
                                                <div class="me-2">
                                                    <span class="fw-bold" style="font-size: 15px;">
                                                        <sup class="fw-normal" style="font-size: 12px;">Rp</sup> 500.000
                                                    </span>
                                                </div>
                                                <div>
                                                    <span class="fw-normal" style="font-size: 10px;">
                                                        <sup class="fw-normal text-danger"
                                                            style="font-size: 10px;">Rp</sup>
                                                        <span
                                                            class="text-danger text-decoration-line-through">600.000</span>
                                                    </span>
                                                </div>
                                            </div>
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
                                            <h5 class="card-title fw-medium text-truncate" style="font-size: 14px;">
                                                CT-IMP Matto Light Brown</h5>
                                            <p class="card-text mb-1 text-truncate" style="font-size: 12px;">Meja ruang
                                                tamu aesthetic.</p>
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
                                        <div class="mt-auto">
                                            <div class="d-flex flex-wrap align-items-baseline">
                                                <div class="me-2">
                                                    <span class="fw-bold" style="font-size: 15px;">
                                                        <sup class="fw-normal" style="font-size: 12px;">Rp</sup> 500.000
                                                    </span>
                                                </div>
                                                <div>
                                                    <span class="fw-normal" style="font-size: 10px;">
                                                        <sup class="fw-normal text-danger"
                                                            style="font-size: 10px;">Rp</sup>
                                                        <span
                                                            class="text-danger text-decoration-line-through">600.000</span>
                                                    </span>
                                                </div>
                                            </div>
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
                                            style="width: 200px; height: 20px; transform: rotate(-45deg) translateY(-20px) translateX(-70px); font-size: 10px; background-color: #FF8B2D;">
                                            Best Seller
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
                                            <h5 class="card-title fw-medium text-truncate" style="font-size: 14px;">
                                                CT-IMP Matto Light Brown</h5>
                                            <p class="card-text mb-1 text-truncate" style="font-size: 12px;">Meja ruang
                                                tamu aesthetic.</p>
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
                                        <div class="mt-auto">
                                            <div class="d-flex flex-wrap align-items-baseline">
                                                <div class="me-2">
                                                    <span class="fw-bold" style="font-size: 15px;">
                                                        <sup class="fw-normal" style="font-size: 12px;">Rp</sup> 500.000
                                                    </span>
                                                </div>
                                                <div>
                                                    <span class="fw-normal" style="font-size: 10px;">
                                                        <sup class="fw-normal text-danger"
                                                            style="font-size: 10px;">Rp</sup>
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

    <script>
        // Add focus event to automatically open modal when clicking the search field
        document.addEventListener('DOMContentLoaded', function () {
            const searchModal = document.getElementById('searchModal');
            searchModal.addEventListener('shown.bs.modal', function () {
                searchModal.querySelector('input').focus();
            });
        });


        const resetBtn = document.getElementById('resetFilter');
        const checkboxes = document.querySelectorAll('input[type="checkbox"]');
        const hargaInputs = document.querySelectorAll('.harga-input');

        const defaultColor = '#D9D9D9';
        const activeColor = '#2B4779';

        function updateResetButtonState() {
            const anyChecked = Array.from(checkboxes).some(cb => cb.checked);
            const anyHargaFilled = Array.from(hargaInputs).some(input => input.value.trim() !== '');

            if (anyChecked || anyHargaFilled) {
                resetBtn.style.backgroundColor = activeColor;
                resetBtn.style.borderColor = activeColor;
                resetBtn.style.color = 'white';
            } else {
                resetBtn.style.backgroundColor = defaultColor;
                resetBtn.style.borderColor = defaultColor;
                resetBtn.style.color = 'black';
            }
        }

        // Listener untuk checkbox
        checkboxes.forEach(cb => {
            cb.addEventListener('change', updateResetButtonState);
        });

        // Listener untuk input harga
        hargaInputs.forEach(input => {
            input.addEventListener('input', updateResetButtonState);
        });

        // Reset button
        resetBtn.addEventListener('click', function () {
            // Uncheck semua checkbox
            checkboxes.forEach(cb => cb.checked = false);

            // Kosongkan input harga
            hargaInputs.forEach(input => input.value = '');

            // Reset warna tombol
            updateResetButtonState();
        }); 
    </script>

</body>

</html>