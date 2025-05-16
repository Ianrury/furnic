<?php
function base_url($path = '')
{
    return '/' . ltrim($path, '/');
}
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
    <base href="/">
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

        .store-availability-badge {
            z-index: 10;
            transition: all 0.3s ease;
        }

        .store-availability-badge .badge {
            font-size: 0.75rem;
            font-weight: 500;
            letter-spacing: 0.03em;
        }

        /* Ensuring the badge is responsive */
        @media (max-width: 576px) {
            .store-name {
                display: none;
            }

            .store-availability-badge .badge {
                padding: 0.25rem !important;
                width: 32px;
                height: 32px;
                border-radius: 50% !important;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .store-availability-badge .badge i {
                margin-right: 0 !important;
            }
        }

        /* Medium hover effect */
        .store-availability-badge:hover {
            transform: translateY(-2px);
        }

        /* Animation effect */
        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translate3d(0, -20px, 0);
            }

            to {
                opacity: 1;
                transform: translate3d(0, 0, 0);
            }
        }

        .store-availability-badge {
            animation: fadeInDown 0.5s ease-out forwards;
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

    <nav class="breadcrumb-nav mt-3">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="/">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="/product">Product</a></li>
                    <li class="breadcrumb-item active" aria-current="page" id="nama_breadcrumb">Clover Chair</li>
                </ol>
            </nav>
        </div>
    </nav>

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
        <!-- Product -->
        <div class="product-area product-area-new">
            <div class="container">
                <div class="row g-0 g-md-5">
                    <!-- Product Images Column -->
                    <!-- Modified Product Card with Bootstrap Availability Indicator -->
                    <div class="col-md-5">
                        <div class="card product-card-detail">
                            <!-- New Product Badge -->
                            <div class="position-absolute ribbon-wrapper-detail">
                                <div class="ribbon-detail text-white text-uppercase fw-bold text-center">
                                    New Product
                                </div>
                            </div>

                            <!-- Store Availability Badge (New) -->
                            <div class="position-absolute top-0 end-0 m-3">
                                <div class="store-availability-badge d-flex align-items-center">
                                    <span class="badge bg-success px-3 py-2 rounded-pill shadow-sm d-flex align-items-center">
                                        <i class="fas fa-store me-2"></i>
                                        <span class="store-name"></span>
                                    </span>
                                </div>
                            </div>

                            <!-- Main Product Image -->
                            <div class="card-body text-center p-4">
                                <img id="main-product-image" src="" alt="Main Product" class="img-fluid" width="255" height="255">
                            </div>

                            <!-- Thumbnail Images -->
                            <div class="card-footer bg-white p-3 border-0">
                                <div class="row g-2" id="thumbnail-container">
                                    <!-- Thumbnails akan di-generate di sini -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Product Details Column -->
                    <div class="col-md-5 product-details">
                        <h1 class="text-black fw-bold mb-1" style="font-size: 25px;" id="nama_product">

                        </h1>
                        <p class="text-black mb-3 fw-normal" style="font-size: 14px;" id="descripsi">
                        </p>

                        <div class="mb-4">
                            <p class="mb-2 fw-normal text-black" style="font-size: 14px;">Warna</p>
                            <div class="row g-2" id="warna-container">
                                <!-- <?php
                                        // Looping untuk menampilkan warna berdasarkan data 'details'
                                        foreach ($model['detail']['details'] as $index => $detail) {
                                            $warna = $detail['warna']; // Ambil warna dari detail produk

                                            // Cek apakah ada motif dengan qty > 0
                                            $isActive = false;
                                            foreach ($detail['motifs'] as $motif) {
                                                if ($motif['qty'] > 0) {
                                                    $isActive = true;
                                                    break;
                                                }
                                            }
                                            // Tentukan kelas active jika motif memiliki qty > 0 dan warna pertama
                                            $activeClass = $isActive && $index === 0 ? 'active' : ''; // Default aktifkan warna pertama
                                        ?>
                                    <div class="col-3">
                                        <div class="color-option <?= $activeClass ?>" data-index="<?= $index ?>"
                                            onclick="setActiveWarna(<?= $index ?>)">
                                            <?= htmlspecialchars($warna) ?>
                                        </div>
                                    </div>
                                <?php } ?> -->
                            </div>
                        </div>


                        <!-- Pattern Options -->
                        <div class="mb-4">
                            <p class="mb-2 fw-normal text-black" style="font-size: 14px;">Motif</p>
                            <div class="row g-2" id="motif-container">
                                <!-- <?php
                                        // Loop untuk menampilkan motif berdasarkan warna pertama yang aktif
                                        foreach ($model['detail']['details'][0]['motifs'] as $motif) {
                                        ?>
                                    <div class="col-3">
                                        <div class="color-option motif-option"
                                            data-motif="<?= htmlspecialchars($motif['motif']) ?>"
                                            data-qty="<?= $motif['qty'] ?>" onclick="setActiveMotif(this)">
                                            <?= htmlspecialchars($motif['motif']) ?>
                                        </div>
                                    </div>
                                <?php
                                        }
                                ?> -->
                            </div>
                        </div>





                        <!-- Quantity Selector -->
                        <div class="mb-4">
                            <p class="mb-2 fw-normal text-black" style="font-size: 14px;">Jumlah</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <button class="btn-quantity fw-medium" onclick="changeQty(-1)">
                                        <span style="font-size: 20px;">-</span>
                                    </button>
                                    <span id="jumlah-beli" class="mx-4 fw-normal text-black"
                                        style="font-size: 14px;">1</span>
                                    <button id="btn-tambah" class="btn-quantity fw-medium" onclick="changeQty(1)">
                                        <span style="font-size: 20px;">+</span>
                                    </button>
                                </div>
                                <div>
                                    <small id="stock" class="fst-italic text-black" style="font-size: 14px;">Tersedia
                                        <span class="text-black">0</span> <span id="satuan">pcs</span></small>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <p class="mb-0 text-black" style="font-size: 14px;">Subtotal Pembelian:</p>
                            <p class="mb-0 fw-bold text-black" style="font-size: 16px;" id="subtotal-text">
                                <!-- Rp <?= number_format($model['detail']['harga'], 0, ',', '.') ?> -->
                            </p>
                        </div>


                        <!-- Buy Button and Actions -->
                        <div class="mb-3">
                            <div class="row g-2 align-items-center">
                                <div class="col-9">
                                    <button class="btn btn-buy w-100 rounded-3 fw-bold" id="btnbeli"
                                        style="font-size: 14px;">Beli
                                        Sekarang</button>
                                </div>
                                <div class="col-3 d-flex justify-content-end gap-3">
                                    <div class="action-icon" id="wishlistBtn">
                                        <img id="wishlistIcon" src="assets/img/icon/love.svg" alt="Love Icon" width="30"
                                            height="30">
                                    </div>
                                    <div class="action-icon" onclick="masukkanKeranjang()">
                                        <img src="assets/img/icon/Group.png" alt="shop Icon" width="30" height="30">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- detail Product -->
        <div class="product-area product-area-new">
            <div class="container">
                <div class="row">
                    <div class="col-12 wow fadeInDown mb-0" data-wow-delay=".25s">
                        <div class="site-heading-inline">
                            <h2 class="site-title">Detail Product</h2>
                        </div>
                    </div>
                </div>
                <div class="tab-content wow fadeInUp" data-wow-delay=".25s" id="item-tabContent">
                    <div style="background-color: #f5f6fa; height: 170px" class="rounded-3">
                        <ul class="d-flex mb-0 ms-3 pt-3" style="list-style: none; padding-left: 0; gap: 20px;">
                            <li class="nav-item">
                                <div class="custom-nav-link-descripsi active" data-tab="spesifikasi">Spesifikasi Product</div>
                            </li>
                            <li class="nav-item">
                                <div class="custom-nav-link-descripsi" data-tab="informasi">Informasi Product</div>
                            </li>
                        </ul>

                        <div class="tab-content-scroll me-3">
                            <!-- Specifications tab -->
                            <div id="spesifikasi" class="tab-pane active">
                                <!-- Content will be populated dynamically by JavaScript -->
                            </div>

                            <!-- Information tab -->
                            <div id="informasi" class="tab-pane">
                                <!-- Content will be populated dynamically by JavaScript -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ulasan penggan -->
        <div class="product-area product-area-new">
            <div class="container">
                <div class="row">
                    <div class="col-12 wow fadeInDown mb-0" data-wow-delay=".25s">
                        <div class="site-heading-inline">
                            <h2 class="site-title">Ulasan Pengguna</h2>
                        </div>
                    </div>
                </div>
                <div class="tab-content wow fadeInUp" data-wow-delay=".25s" id="item-tabContent">
                    <div class="row">
                        <!-- Left grid - Ratings and photos -->
                        <div class="col-12 col-lg-4">
                            <div class="review-grid" id="review-grid">
                                <div class="d-flex justify-content-start align-items-center mb-3">
                                    <div>
                                        <img src="assets/img/product/decorasi/ruang-santai.jpg" alt="foto review"
                                            class="img-fluid foto-review rounded-3" width="240" height="260">
                                    </div>
                                    <div class="ps-2">
                                        <div class="star-rating">
                                            <img src="assets/img/icon/star.svg" alt="start" class="star-icon-review">
                                            <img src="assets/img/icon/star.svg" alt="start" class="star-icon-review">
                                            <img src="assets/img/icon/star.svg" alt="start" class="star-icon-review">
                                            <img src="assets/img/icon/star.svg" alt="start" class="star-icon-review">
                                            <img src="assets/img/icon/star.svg" alt="start" class="star-icon-review">
                                            <div class="star-count">0</div>
                                        </div>
                                        <div class="star-rating">
                                            <img src="assets/img/icon/star.svg" alt="start" class="star-icon-review">
                                            <img src="assets/img/icon/star.svg" alt="start" class="star-icon-review">
                                            <img src="assets/img/icon/star.svg" alt="start" class="star-icon-review">
                                            <img src="assets/img/icon/star.svg" alt="start" class="star-icon-review">
                                            <div class="star-count">0</div>
                                        </div>
                                        <div class="star-rating">
                                            <img src="assets/img/icon/star.svg" alt="start" class="star-icon-review">
                                            <img src="assets/img/icon/star.svg" alt="start" class="star-icon-review">
                                            <img src="assets/img/icon/star.svg" alt="start" class="star-icon-review">
                                            <div class="star-count">0</div>
                                        </div>
                                        <div class="star-rating">
                                            <img src="assets/img/icon/star.svg" alt="start" class="star-icon-review">
                                            <img src="assets/img/icon/star.svg" alt="start" class="star-icon-review">
                                            <div class="star-count">0</div>
                                        </div>
                                        <div class="star-rating">
                                            <img src="assets/img/icon/star.svg" alt="start" class="star-icon-review">
                                            <div class="star-count">0</div>
                                        </div>
                                    </div>
                                </div>
                                <h6 class="text-black" style="font-size: 14px; font-weight: 400;" id="foto-pelanggan-total">Foto oleh pelanggan
                                    (0)</h6>
                                <div class="container mt-3">
                                    <div class="review-photos-container" id="reviewPhotos">
                                        <div class="row gap-2 justify-content-start visible-photos">
                                            <!-- Foto 1-9 yang langsung terlihat -->
                                            <div class="col-2 review-photo-pelanggan">
                                                <img src="assets/img/product/kursi/ZULU CHAIR WHITE.png"
                                                    class="rounded-3" alt="Product review 1">
                                            </div>
                                            <div class="col-2 review-photo-pelanggan">
                                                <img src="assets/img/product/kursi/ZULU CHAIR WHITE.png"
                                                    class="rounded-3" alt="Product review 2">
                                            </div>
                                            <div class="col-2 review-photo-pelanggan">
                                                <img src="assets/img/product/decorasi/ruang-santai.jpg"
                                                    class="rounded-3" alt="Product review 3">
                                            </div>
                                            <div class="col-2 review-photo-pelanggan">
                                                <img src="assets/img/product/kursi/ZULU CHAIR WHITE.png"
                                                    class="rounded-3" alt="Product review 4">
                                            </div>
                                            <div class="col-2 review-photo-pelanggan">
                                                <img src="assets/img/product/decorasi/ruang-santai.jpg"
                                                    class="rounded-3" alt="Product review 5">
                                            </div>
                                            <div class="col-2 review-photo-pelanggan">
                                                <img src="assets/img/product/kursi/ZULU CHAIR WHITE.png"
                                                    class="rounded-3" alt="Product review 6">
                                            </div>
                                            <div class="col-2 review-photo-pelanggan">
                                                <img src="assets/img/product/decorasi/ruang-santai.jpg"
                                                    class="rounded-3" alt="Product review 7">
                                            </div>
                                            <div class="col-2 review-photo-pelanggan">
                                                <img src="assets/img/product/kursi/ZULU CHAIR WHITE.png"
                                                    class="rounded-3" alt="Product review 8">
                                            </div>
                                            <div class="col-2 review-photo-pelanggan">
                                                <img src="assets/img/product/decorasi/ruang-santai.jpg"
                                                    class="rounded-3" alt="Product review 9">
                                            </div>

                                            <!-- Foto ke-10 dengan overlay -->
                                            <div class="col-2 review-photo-pelanggan" id="lastVisiblePhoto">
                                                <img src="assets/img/product/kursi/ZULU CHAIR WHITE.png"
                                                    class="rounded-3" alt="Product review 10">
                                                <div class="more-photos-overlay" data-bs-toggle="modal"
                                                    data-bs-target="#reviewModal">+5</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Right grid - User reviews -->
                        <div class="col-12 col-lg-8">
                            <!-- First review -->
                            <div class="review-grid-review" id="card-review">
                                <div class="username"></div>
                                <div class="review-text"></div>
                                <img src="assets/img/icon/star.svg" alt="start" class="star-icon">
                                <img src="assets/img/icon/star.svg" alt="start" class="star-icon">
                                <img src="assets/img/icon/star.svg" alt="start" class="star-icon">
                                <img src="assets/img/icon/star.svg" alt="start" class="star-icon">
                                <img src="assets/img/icon/star.svg" alt="start" class="star-icon">


                                <div class="review-photos">
                                    <div class="review-photo">
                                        <img src="assets/img/product/decorasi/ruang-santai.jpg" alt="Product review">
                                    </div>
                                    <div class="review-photo">
                                        <img src="assets/img/product/decorasi/ruang-santai.jpg" alt="Product review">
                                    </div>
                                    <div class="review-photo">
                                        <img src="assets/img/product/decorasi/ruang-santai.jpg" alt="Product review">
                                    </div>
                                    <div class="review-photo">
                                        <img src="assets/img/product/decorasi/ruang-santai.jpg" alt="Product review">
                                    </div>
                                    <div class="review-photo">
                                        <img src="assets/img/product/decorasi/ruang-santai.jpg" alt="Product review">
                                    </div>
                                </div>
                                <div class="date">18/04/2023</div>
                            </div>

                            <!-- See more button -->
                            <button type="button" class="see-more-btn" data-bs-toggle="modal"
                                data-bs-target="#reviewModal">Lihat Ulasan Lainnya</button>
                            <!-- Button trigger modal -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Rview -->

        <!-- Modal Structure -->
        <div class="modal fade" id="reviewModal" tabindex="-1" aria-labelledby="reviewModalLabel" aria-hidden="true"
            style="border-color: #FF8B2D;">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg"
                style="max-width: 900px !important; max-height: 80vh !important;">
                <div class="modal-content rounded-4" style="border: 2px solid #D9D9D9; height: 600px;">
                    <!-- Modal Header -->
                    <div class="modal-header border-bottom-0">
                        <h5 class="modal-title fw-bold" id="reviewModalLabel">
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <!-- Modal Body -->
                    <div class="modal-body">
                        <!-- Reset Button -->
                        <div class="tab-content-scroll-review">
                            <div class="row">
                                <!-- Left grid - Ratings and photos -->
                                <div class="col-md-3 pe-1">
                                    <div class="review-grid-modal" style="background-color: #FFFFFF;">
                                        <div class="col-md-3 m-0 p-0"
                                            style="opacity: 1 !important; background-color: white;">
                                            <div style="width: 250px;">
                                                <h6 class="fw-bold text-dark mb-2" style="font-size: 14px;">
                                                    Urutkan Berdasarkan</h6>
                                                <!-- Urutkan Berdasarkan -->
                                                <div class="mb-3">
                                                    <button id="resetFilter" class="btn btn-secondary btn-sm mt-1"
                                                        style="font-size: 11px; padding-right: 27px; padding-left: 27px;padding-top: 1px; padding-bottom: 1px; background-color: #D9D9D9; border: #D9D9D9;">Reset</button>
                                                </div>

                                                <hr>

                                                <!-- Rekomendasi -->
                                                <div class="mb-3">
                                                    <h6 class="fw-bold text-dark mb-2" style="font-size: 15px;">
                                                        Rekomendasi</h6>
                                                    <div class="filter-checkbox d-none d-md-block">
                                                        <div class="form-check custom-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="productTerbaru" style="border: 1px solid #95a5a6">
                                                            <label class="form-check-label" for="productTerbaru">
                                                                Ulasan Terbaru
                                                            </label>
                                                        </div>
                                                        <div class="form-check custom-check">
                                                            <input class="form-check-input" type="checkbox" id="promo"
                                                                style="border: 1px solid #95a5a6">
                                                            <label class="form-check-label" for="promo">Rating
                                                                Tertinggi</label>
                                                        </div>
                                                        <div class="form-check custom-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="unggulan" style="border: 1px solid #95a5a6">
                                                            <label class="form-check-label" for="unggulan">Rating
                                                                terendah</label>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown small-dropdown my-dropdown">
                                                        <button class="btn btn-secondary dropdown-toggle" type="button"
                                                            id="dropdownMenu2" data-bs-toggle="dropdown"
                                                            aria-haspopup="true" aria-expanded="false">
                                                            Rekomendasi
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                            <button class="dropdown-item" type="button">Semua</button>
                                                            <button class="dropdown-item" type="button">Ulasan
                                                                Terbaru</button>
                                                            <button class="dropdown-item" type="button">Rating
                                                                Tertinggi</button>
                                                            <button class="dropdown-item" type="button">Rating
                                                                terendah</button>
                                                        </div>
                                                    </div>

                                                </div>
                                                <hr>
                                                <div class="mb-3">
                                                    <h6 class="fw-bold text-dark mb-2" style="font-size: 15px;">
                                                        Rating</h6>
                                                    <div class="">
                                                        <div class="form-check custom-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="productTerbaru" style="border: 1px solid #95a5a6">
                                                            <div class="star-rating">
                                                                <img src="assets/img/icon/star.svg" alt="start"
                                                                    class="star-icon">
                                                            </div>
                                                        </div>
                                                        <div class="form-check custom-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="productTerbaru" style="border: 1px solid #95a5a6">
                                                            <div class="star-rating">
                                                                <img src="assets/img/icon/star.svg" alt="start"
                                                                    class="star-icon">
                                                                <img src="assets/img/icon/star.svg" alt="start"
                                                                    class="star-icon">
                                                            </div>
                                                        </div>
                                                        <div class="form-check custom-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="productTerbaru" style="border: 1px solid #95a5a6">
                                                            <div class="star-rating">
                                                                <img src="assets/img/icon/star.svg" alt="start"
                                                                    class="star-icon">
                                                                <img src="assets/img/icon/star.svg" alt="start"
                                                                    class="star-icon">
                                                                <img src="assets/img/icon/star.svg" alt="start"
                                                                    class="star-icon">
                                                            </div>
                                                        </div>
                                                        <div class="form-check custom-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="productTerbaru" style="border: 1px solid #95a5a6">
                                                            <div class="star-rating">
                                                                <img src="assets/img/icon/star.svg" alt="start"
                                                                    class="star-icon">
                                                                <img src="assets/img/icon/star.svg" alt="start"
                                                                    class="star-icon">
                                                                <img src="assets/img/icon/star.svg" alt="start"
                                                                    class="star-icon">
                                                                <img src="assets/img/icon/star.svg" alt="start"
                                                                    class="star-icon">
                                                            </div>
                                                        </div>
                                                        <div class="form-check custom-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="productTerbaru" style="border: 1px solid #95a5a6">
                                                            <div class="star-rating">
                                                                <img src="assets/img/icon/star.svg" alt="start"
                                                                    class="star-icon">
                                                                <img src="assets/img/icon/star.svg" alt="start"
                                                                    class="star-icon">
                                                                <img src="assets/img/icon/star.svg" alt="start"
                                                                    class="star-icon">
                                                                <img src="assets/img/icon/star.svg" alt="start"
                                                                    class="star-icon">
                                                                <img src="assets/img/icon/star.svg" alt="start"
                                                                    class="star-icon">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Right grid - User reviews -->
                                <div class="col-md-9 ps-1">
                                    <!-- First review -->
                                    <div class="review-grid-review-modal" style="background-color: #FFFFFF;">
                                        <div class="username"></div>
                                        <div class="fw-normal text-black" style="font-size: 12px;"></div>
                                        <img src="assets/img/icon/star.svg" alt="start" class="star-icon">
                                        <img src="assets/img/icon/star.svg" alt="start" class="star-icon">
                                        <img src="assets/img/icon/star.svg" alt="start" class="star-icon">
                                        <img src="assets/img/icon/star.svg" alt="start" class="star-icon">
                                        <img src="assets/img/icon/star.svg" alt="start" class="star-icon">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Rekomendasi Product -->
        <div class="product-area product-area-new">
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
                        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 g-4  justify-content-center" id="expensif">

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Best Seller Product -->
        <div class="product-area product-area-new">
            <div class="container">
                <div class="row">
                    <div class="col-12 wow fadeInDown mb-0" data-wow-delay=".25s">
                        <div class="site-heading-inline">
                            <h2 class="site-title">Best Seller Product</h2>
                        </div>
                    </div>
                </div>
                <div class="tab-content wow fadeInUp" data-wow-delay=".25s" id="item-tabContent">
                    <div class="container">
                        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 g-4 justify-content-center" id="bestseller">

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div id="toastContainer" class="position-fixed top-0 end-0 p-3" style="z-index: 9999;"></div>
        <input type="text" value="" id="id_product" hidden>

        <input type="text" value="" id="id_detail_product" hidden>
        <input type="text" value="" id="id_motif_produk" hidden>


        <div id="toastContainer" class="position-fixed top-0 end-0 p-3" style="z-index: 9999;">
            <div id="liveToast" class="toast hide" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <img src="assets/img/icon/love_wislist.svg" width="30" height="30" class="rounded me-2" alt="...">
                    <strong class="me-auto">Info</strong>
                    <small>Just now</small>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    Hello, world! This is a toast message.
                </div>
            </div>
        </div>

    </main>


    <!-- footer area -->
    <?php include __DIR__ . '/../templates/footer.php'; ?>
    <!-- footer area end -->



    <!-- js -->

    <!-- js end -->
    <!-- <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script> -->
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
        const API_BASE_URL = "<?= $apiBaseUrl ?>";

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
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            fetch(`${API_BASE_URL}/product-expensif`)
                .then(response => response.json())
                .then(result => {
                    if (result.status === 'success' && result.data.length > 0) {
                        const container = document.getElementById('expensif');
                        container.innerHTML = ''; // kosongkan container

                        result.data.forEach(product => {
                            const qty = parseInt(product.qty);
                            const promoPersen = parseFloat(product.total_promo ?? 0);
                            const createdAt = new Date(product.created_at);
                            const today = new Date();
                            const diffDays = Math.floor((today - createdAt) / (1000 * 60 * 60 * 24));

                            // Ribbon logic
                            let ribbon = '',
                                bgColor = '',
                                textColor = '';
                            if (qty <= 0) {
                                ribbon = 'Out of Stock';
                                bgColor = '#FF0000';
                                textColor = '#FFFFFF';
                            } else if (promoPersen > 0) {
                                ribbon = 'Sale';
                                bgColor = '#FFFB2D';
                                textColor = '#FF0000';
                            } else if (diffDays <= 7) {
                                ribbon = 'New Product';
                                bgColor = '#2B4779';
                                textColor = '#FFFFFF';
                            }

                            const harga = parseFloat(product.harga);
                            const diskon_nominal = (promoPersen > 0) ? (harga * (promoPersen / 100)) : 0;
                            const harga_setelah_diskon = harga - diskon_nominal;

                            const card = `
                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="card shadow position-relative rounded-4 p-2 product-card" data-id="${product.id_product}" data-slug="${product.slug}" 
                 data-token="${product.token}" style="cursor:pointer;">
                                ${ribbon ? `
                                    <div class="position-absolute ribbon-wrapper">
                                        <div class="ribbon text-uppercase fw-bold text-center" style="background-color: ${bgColor}; color: ${textColor};">
                                            ${ribbon}
                                        </div>
                                    </div>` : ''
                                }
                                <div class="text-center pt-3">
                                    <img src="${product.url_foto}" class="img-fluid product-image" alt="Product Image">
                                </div>
                                <div class="bodykartu">
                                    <div class="d-flex flex-column">
                                        <div>
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
                                        </div>
                                        <div class="mt-auto">
                                            <div class="d-flex flex-wrap align-items-baseline">
                                                <div class="me-2">
                                                    <span class="fw-bold price"><sup class="fw-normal">Rp</sup> ${harga_setelah_diskon.toLocaleString('id-ID')}</span>
                                                </div>
                                                ${diskon_nominal > 0 ? `
                                                    <div>
                                                        <span class="fw-normal text-danger old-price"><sup>Rp</sup> <span class="text-decoration-line-through">${harga.toLocaleString('id-ID')}</span></span>
                                                    </div>` : ''
                                                }
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>`;

                            container.insertAdjacentHTML('beforeend', card);
                        });
                    } else {
                        document.getElementById('expensif').innerHTML = '<p>Tidak ada produk terbaru yang tersedia.</p>';
                    }
                })
                .catch(error => {
                    console.error('Gagal mengambil produk:', error);
                    document.getElementById('expensif').innerHTML = '<p>Gagal mengambil produk.</p>';
                });
        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            fetch(`${API_BASE_URL}/product-bestseller`)
                .then(response => response.json())
                .then(result => {
                    if (result.status === 'success' && result.data.length > 0) {
                        const container = document.getElementById('bestseller');
                        container.innerHTML = ''; // kosongkan container

                        result.data.forEach(product => {
                            const qty = parseInt(product.qty);
                            const promoPersen = parseFloat(product.total_promo ?? 0);
                            const createdAt = new Date(product.created_at);
                            const today = new Date();
                            const diffDays = Math.floor((today - createdAt) / (1000 * 60 * 60 * 24));

                            // Ribbon logic
                            let ribbon = '',
                                bgColor = '',
                                textColor = '';
                            if (qty <= 0) {
                                ribbon = 'Out of Stock';
                                bgColor = '#FF0000';
                                textColor = '#FFFFFF';
                            } else if (promoPersen > 0) {
                                ribbon = 'Sale';
                                bgColor = '#FFFB2D';
                                textColor = '#FF0000';
                            } else if (diffDays <= 7) {
                                ribbon = 'New Product';
                                bgColor = '#2B4779';
                                textColor = '#FFFFFF';
                            }

                            const harga = parseFloat(product.harga);
                            const diskon_nominal = (promoPersen > 0) ? (harga * (promoPersen / 100)) : 0;
                            const harga_setelah_diskon = harga - diskon_nominal;

                            const card = `
                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="card shadow position-relative rounded-4 p-2 product-card" data-id="${product.id_product}" data-slug="${product.slug}" 
                   data-token="${product.token}" style="cursor:pointer;">
                                ${ribbon ? `
                                    <div class="position-absolute ribbon-wrapper">
                                        <div class="ribbon text-uppercase fw-bold text-center" style="background-color: ${bgColor}; color: ${textColor};">
                                            ${ribbon}
                                        </div>
                                    </div>` : ''
                                }
                                <div class="text-center pt-3">
                                    <img src="${product.url_foto}" class="img-fluid product-image" alt="Product Image">
                                </div>
                                <div class="bodykartu">
                                    <div class="d-flex flex-column">
                                        <div>
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
                                        </div>
                                        <div class="mt-auto">
                                            <div class="d-flex flex-wrap align-items-baseline">
                                                <div class="me-2">
                                                    <span class="fw-bold price"><sup class="fw-normal">Rp</sup> ${harga_setelah_diskon.toLocaleString('id-ID')}</span>
                                                </div>
                                                ${diskon_nominal > 0 ? `
                                                    <div>
                                                        <span class="fw-normal text-danger old-price"><sup>Rp</sup> <span class="text-decoration-line-through">${harga.toLocaleString('id-ID')}</span></span>
                                                    </div>` : ''
                                                }
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>`;

                            container.insertAdjacentHTML('beforeend', card);
                        });
                    } else {
                        document.getElementById('expensif').innerHTML = '<p>Tidak ada produk terbaru yang tersedia.</p>';
                    }
                })
                .catch(error => {
                    console.error('Gagal mengambil produk:', error);
                    document.getElementById('expensif').innerHTML = '<p>Gagal mengambil produk.</p>';
                });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const currentPath = window.location.pathname;
            console.log('Current path:', currentPath);

            // Pecah berdasarkan '/'
            const parts = currentPath.split('/');

            // Ambil slug dan token
            const slug = parts[2];
            const token = parts[3];

            fetch(`${API_BASE_URL}/review/detail/${slug}/${token}`)
                .then(response => response.json())
                .then(result => {
                    if (result.status === 'success') {
                        console.log("data review", result.data);

                        // Check if there are reviews
                        if (result.data && result.data.length > 0) {
                            // Render review cards (max 2)
                            renderReviewCards(result.data);

                            // Render review photos
                            renderReviewPhotos(result.data);

                            // Render rating summary
                            renderRatingSummary(result.data);

                            // Render all reviews in modal
                            renderReviewsInModal(result.data);

                            // Set up the original data for reset functionality
                            window.originalReviewData = result.data;

                            // Make sure all review sections are visible
                            showReviewSections();
                        } else {
                            // No reviews, show empty state
                            handleEmptyReviews();
                        }
                    } else {
                        // API returned success: false or had an error
                        handleEmptyReviews();
                        console.error("Error in API response:", result);
                    }
                })
                .catch(error => {
                    handleEmptyReviews();
                    console.error("Error fetching reviews:", error);
                });

            // Setup image zoom functionality
            setupImageZoom();
        });

        // New function to handle empty reviews state
        function handleEmptyReviews() {
            // Hide all review sections
            hideReviewSections();

            // Show empty state message
            showEmptyReviewMessage();
        }

        // Function to hide all review sections
        function hideReviewSections() {
            // Hide review cards section
            const cardContainerElement = document.getElementById('card-review');
            if (cardContainerElement && cardContainerElement.parentElement) {
                cardContainerElement.parentElement.style.display = 'none';
            }

            // Hide review photos section
            const reviewPhotosContainer = document.getElementById('reviewPhotos');
            if (reviewPhotosContainer) {
                reviewPhotosContainer.style.display = 'none';
            }

            // Hide rating summary section
            const ratingSummaryContainer = document.querySelector('.d-flex.justify-content-start.align-items-center.mb-3');
            if (ratingSummaryContainer) {
                ratingSummaryContainer.style.display = 'none';
            }

            // Disable "See more" button if it exists
            const seeMoreButton = document.querySelector('.see-more-btn');
            if (seeMoreButton) {
                seeMoreButton.style.display = 'none';
            }
        }

        // Function to show all review sections
        function showReviewSections() {
            // Show review cards section
            const cardContainerElement = document.getElementById('card-review');
            if (cardContainerElement && cardContainerElement.parentElement) {
                cardContainerElement.parentElement.style.display = 'block';
            }

            // Show review photos section
            const reviewPhotosContainer = document.getElementById('reviewPhotos');
            if (reviewPhotosContainer) {
                reviewPhotosContainer.style.display = 'block';
            }

            // Show rating summary section
            const ratingSummaryContainer = document.querySelector('.d-flex.justify-content-start.align-items-center.mb-3');
            if (ratingSummaryContainer) {
                ratingSummaryContainer.style.display = 'flex';
            }
        }

        // Function to show empty review message
        function showEmptyReviewMessage() {
            // Find a good container to show the message
            const mainContainer = document.querySelector('.product-review-container') ||
                document.querySelector('.container.py-5') ||
                document.querySelector('main');

            if (mainContainer) {
                // Create empty state message
                const emptyStateElement = document.createElement('div');
                emptyStateElement.className = 'empty-review-message text-center py-5';
                emptyStateElement.innerHTML = `
            <div class="mb-3">
                <img src="assets/img/icon/no-review.svg" alt="No Reviews" style="width: 80px; height: 80px;" 
                     onerror="this.onerror=null; this.src='assets/img/icon/star.svg';">
            </div>
            <h5 class="mb-3">Belum ada ulasan untuk produk ini</h5>
            <p class="text-muted">Jadilah yang pertama memberikan ulasan untuk produk ini</p>
        `;

                // Insert the empty state message
                mainContainer.appendChild(emptyStateElement);

                // Add styles for the empty state
                const style = document.createElement('style');
                style.textContent = `
            .empty-review-message {
                background-color: #f9f9f9;
                border-radius: 8px;
                padding: 2rem;
                margin: 2rem 0;
                box-shadow: 0 2px 5px rgba(0,0,0,0.05);
            }
        `;
                document.head.appendChild(style);
            }
        }

        // Function to render review cards (max 2)
        function renderReviewCards(reviewData) {
            // Find the container that holds the reviews
            const cardContainerElement = document.getElementById('card-review').parentElement;

            // Find the "See more" button
            const seeMoreButton = cardContainerElement.querySelector('.see-more-btn');

            // Remove existing review cards but keep the button
            const reviewCards = cardContainerElement.querySelectorAll('.review-grid-review');
            reviewCards.forEach(card => card.remove());

            // Display maximum 2 cards
            const displayCount = Math.min(reviewData.length, 2);

            // Reference for where to insert cards (before the button)
            const insertBeforeElement = seeMoreButton || null;

            for (let i = 0; i < displayCount; i++) {
                const review = reviewData[i];

                // Create stars based on rating
                let starsHTML = '';
                for (let j = 0; j < review.bintang_review; j++) {
                    starsHTML += '<img src="assets/img/icon/star.svg" alt="start" class="star-icon">';
                }

                // Create photos HTML
                let photosHTML = '';
                if (review.foto_review && review.foto_review.length > 0) {
                    photosHTML = '<div class="review-photos">';
                    // Display up to 5 photos per review
                    const photoCount = Math.min(review.foto_review.length, 5);
                    for (let j = 0; j < photoCount; j++) {
                        photosHTML += `
                    <div class="review-photo">
                        <img src="${review.foto_review[j]}" alt="Product review" class="zoomable-image">
                    </div>
                `;
                    }
                    photosHTML += '</div>';
                }

                // Format date
                const reviewDate = new Date(review.tanggal);
                const formattedDate = reviewDate.toLocaleDateString('id-ID', {
                    year: 'numeric',
                    month: '2-digit',
                    day: '2-digit'
                }).replace(/\//g, '/');

                // Create card element
                const cardElement = document.createElement('div');
                cardElement.className = 'review-grid-review';
                cardElement.innerHTML = `
            <div class="username">${review.nama_customer}</div>
            <div class="review-text">${review.review}</div>
            ${starsHTML}
            ${photosHTML}
            <div class="date">${formattedDate}</div>
        `;

                // Insert card before the "See more" button
                cardContainerElement.insertBefore(cardElement, insertBeforeElement);
            }

            // Make sure the "See more" button is visible only if we have reviews
            if (seeMoreButton) {
                seeMoreButton.style.display = reviewData.length > 0 ? 'block' : 'none';
            }
        }

        // Function to setup image zoom functionality
        function setupImageZoom() {
            // Create modal for zoomed images
            if (!document.getElementById('imageZoomModal')) {
                const modal = document.createElement('div');
                modal.id = 'imageZoomModal';
                modal.className = 'image-zoom-modal';
                modal.innerHTML = `
            <div class="image-zoom-content">
                <span class="close-zoom">&times;</span>
                <img id="zoomedImage">
            </div>
        `;
                document.body.appendChild(modal);

                // Close modal when clicking on X
                modal.querySelector('.close-zoom').addEventListener('click', function() {
                    modal.style.display = 'none';
                });

                // Close modal when clicking outside the image
                modal.addEventListener('click', function(e) {
                    if (e.target === modal) {
                        modal.style.display = 'none';
                    }
                });
            }

            // Add event listeners for images (using event delegation)
            document.addEventListener('click', function(e) {
                if (e.target && e.target.classList.contains('zoomable-image')) {
                    const modal = document.getElementById('imageZoomModal');
                    const modalImg = document.getElementById('zoomedImage');
                    modal.style.display = 'block';
                    modalImg.src = e.target.src;
                }
            });

            // Add hover effect (using event delegation)
            document.addEventListener('mouseover', function(e) {
                if (e.target && e.target.classList.contains('zoomable-image')) {
                    e.target.style.transform = 'scale(1.1)';
                    e.target.style.transition = 'transform 0.3s ease';
                    e.target.style.cursor = 'pointer';
                    e.target.style.zIndex = '1';
                }
            });

            document.addEventListener('mouseout', function(e) {
                if (e.target && e.target.classList.contains('zoomable-image')) {
                    e.target.style.transform = 'scale(1)';
                    e.target.style.zIndex = 'auto';
                }
            });

            // Add CSS for the image zoom modal
            if (!document.getElementById('zoomStyles')) {
                const style = document.createElement('style');
                style.id = 'zoomStyles';
                style.textContent = `
            .image-zoom-modal {
                display: none;
                position: fixed;
                z-index: 1000;
                padding-top: 100px;
                left: 0;
                top: 0;
                width: 100%;
                height: 100%;
                overflow: auto;
                background-color: rgba(0,0,0,0.9);
            }
            .image-zoom-content {
                margin: auto;
                display: block;
                position: relative;
                max-width: 80%;
                max-height: 80%;
            }
            #zoomedImage {
                display: block;
                width: 100%;
                max-height: 70vh;
                object-fit: contain;
            }
            .close-zoom {
                position: absolute;
                top: -30px;
                right: 0;
                color: #f1f1f1;
                font-size: 40px;
                font-weight: bold;
                transition: 0.3s;
                cursor: pointer;
            }
            .close-zoom:hover {
                color: #bbb;
            }
            @media only screen and (max-width: 700px){
                .image-zoom-content {
                    width: 100%;
                }
            }
        `;
                document.head.appendChild(style);
            }
        }

        // Function to render review photos in the grid
        function renderReviewPhotos(reviewData) {
            const reviewPhotosContainer = document.getElementById('reviewPhotos');
            if (!reviewPhotosContainer) return;

            const photosRow = reviewPhotosContainer.querySelector('.row');
            if (!photosRow) return;

            // Clear existing content
            photosRow.innerHTML = '';

            // Get all photos from all reviews
            let allPhotos = [];
            reviewData.forEach(review => {
                if (review.foto_review && review.foto_review.length > 0) {
                    allPhotos = allPhotos.concat(review.foto_review);
                }
            });

            // Update total photos count
            const totalPhotosElement = document.getElementById('foto-pelanggan-total');
            if (totalPhotosElement) {
                totalPhotosElement.textContent = `Foto oleh pelanggan (${allPhotos.length})`;
            }

            // If no photos, hide this section
            if (allPhotos.length === 0) {
                reviewPhotosContainer.style.display = 'none';
                return;
            } else {
                reviewPhotosContainer.style.display = 'block';
            }

            // Display up to 10 photos in the grid
            const visiblePhotos = allPhotos.slice(0, 10);
            const hiddenPhotosCount = allPhotos.length > 10 ? allPhotos.length - 10 : 0;

            visiblePhotos.forEach((photo, index) => {
                const isLast = index === 9 && hiddenPhotosCount > 0;
                const photoDiv = document.createElement('div');
                photoDiv.className = 'col-2 review-photo-pelanggan';

                if (isLast) {
                    photoDiv.id = 'lastVisiblePhoto';
                    photoDiv.innerHTML = `
                <img src="${photo}" class="rounded-3 zoomable-image" alt="Product review ${index + 1}">
                <div class="more-photos-overlay" data-bs-toggle="modal" data-bs-target="#reviewModal">+${hiddenPhotosCount}</div>
            `;
                } else {
                    photoDiv.innerHTML = `
                <img src="${photo}" class="rounded-3 zoomable-image" alt="Product review ${index + 1}">
            `;
                }

                photosRow.appendChild(photoDiv);
            });

            // If we have less than 10 photos, fill with what we have but don't duplicate
            if (visiblePhotos.length > 0 && visiblePhotos.length < 10) {
                const remainingSlots = Math.min(10 - visiblePhotos.length, visiblePhotos.length);

                for (let i = 0; i < remainingSlots; i++) {
                    const photoDiv = document.createElement('div');
                    photoDiv.className = 'col-2 review-photo-pelanggan';
                    photoDiv.innerHTML = `
                <img src="${visiblePhotos[i % visiblePhotos.length]}" class="rounded-3 zoomable-image" alt="Product review fill">
            `;
                    photosRow.appendChild(photoDiv);
                }
            }
        }

        // Function to render rating summary
        function renderRatingSummary(reviewData) {
            // Get rating summary container
            const ratingSummaryContainer = document.querySelector('.d-flex.justify-content-start.align-items-center.mb-3');
            if (!ratingSummaryContainer) return;

            // Count reviews by rating
            const ratingCounts = {
                1: 0,
                2: 0,
                3: 0,
                4: 0,
                5: 0
            };

            reviewData.forEach(review => {
                const rating = parseInt(review.bintang_review);
                if (rating >= 1 && rating <= 5) {
                    ratingCounts[rating]++;
                }
            });

            // Select random photo for main display
            let randomPhoto = 'assets/img/product/decorasi/ruang-santai.jpg'; // Default
            for (const review of reviewData) {
                if (review.foto_review && review.foto_review.length > 0) {
                    randomPhoto = review.foto_review[Math.floor(Math.random() * review.foto_review.length)];
                    break;
                }
            }

            // Update main photo
            const mainPhotoElement = ratingSummaryContainer.querySelector('.img-fluid.foto-review');
            if (mainPhotoElement) {
                mainPhotoElement.src = randomPhoto;
                mainPhotoElement.classList.add('zoomable-image');
            }

            // Update star counts
            const starRatings = ratingSummaryContainer.querySelectorAll('.star-rating');
            starRatings.forEach((starRating, index) => {
                const ratingNumber = 5 - index; // 5, 4, 3, 2, 1
                const starCount = starRating.querySelector('.star-count');
                if (starCount) {
                    starCount.textContent = ratingCounts[ratingNumber];
                }
            });
        }

        // Function to render reviews in modal
        function renderReviewsInModal(reviewData) {
            const reviewsContainer = document.querySelector('.col-md-9.ps-1');
            if (!reviewsContainer) return;

            // Clear existing content
            reviewsContainer.innerHTML = '';

            // If no reviews after filtering
            if (reviewData.length === 0) {
                const noReviewsElement = document.createElement('div');
                noReviewsElement.className = 'no-reviews-message';
                noReviewsElement.innerHTML = '<p class="text-center py-5">Tidak ada ulasan yang sesuai dengan filter yang dipilih.</p>';
                reviewsContainer.appendChild(noReviewsElement);
                return;
            }

            // Render each review
            reviewData.forEach(review => {
                const reviewElement = document.createElement('div');
                reviewElement.className = 'review-grid-review-modal';
                reviewElement.style.backgroundColor = '#FFFFFF';

                // Render stars based on rating
                let starsHTML = '';
                for (let i = 0; i < review.bintang_review; i++) {
                    starsHTML += '<img src="assets/img/icon/star.svg" alt="start" class="star-icon">';
                }

                // Render photos
                let photosHTML = '';
                if (review.foto_review && review.foto_review.length > 0) {
                    photosHTML = '<div class="review-photos">';
                    review.foto_review.forEach(photo => {
                        photosHTML += `
                    <div class="review-photo">
                        <img src="${photo}" alt="Product review" class="zoomable-image">
                    </div>
                `;
                    });
                    photosHTML += '</div>';
                }

                // Format date
                const reviewDate = new Date(review.tanggal);
                const formattedDate = reviewDate.toLocaleDateString('id-ID', {
                    year: 'numeric',
                    month: 'long',
                    day: 'numeric'
                });

                reviewElement.innerHTML = `
            <div class="username">${review.nama_customer}</div>
            <div class="fw-normal text-black" style="font-size: 12px;">${review.review}</div>
            <div class="stars-container">${starsHTML}</div>
            <div class="review-date text-muted" style="font-size: 11px;">${formattedDate}</div>
            ${photosHTML}
        `;

                reviewsContainer.appendChild(reviewElement);
            });
        }

        // Function to set up filter listeners
        function setupFilterListeners(reviewData) {
            // Store original data for reset functionality
            window.originalReviewData = reviewData;

            const resetFilterBtn = document.getElementById('resetFilter');
            const ratingCheckboxes = document.querySelectorAll('.form-check-input');

            if (!resetFilterBtn || !ratingCheckboxes.length) return;

            // Reset filter
            resetFilterBtn.addEventListener('click', function() {
                // Uncheck all checkboxes
                ratingCheckboxes.forEach(checkbox => {
                    checkbox.checked = false;
                });

                // Render all reviews again using the original data
                renderReviewsInModal(window.originalReviewData);
            });

            // Rating filter
            ratingCheckboxes.forEach(checkbox => {
                checkbox.addEventListener('change', function() {
                    // Get selected ratings
                    const selectedRatings = [];
                    document.querySelectorAll('.form-check-input:checked').forEach(checkedBox => {
                        const parentDiv = checkedBox.closest('.form-check');
                        const stars = parentDiv.querySelectorAll('.star-icon');
                        selectedRatings.push(stars.length);
                    });

                    // If none selected, show all
                    if (selectedRatings.length === 0) {
                        renderReviewsInModal(window.originalReviewData);
                        return;
                    }

                    // Filter reviews by selected ratings
                    const filteredReviews = window.originalReviewData.filter(review => {
                        const rating = parseInt(review.bintang_review);
                        return selectedRatings.includes(rating);
                    });

                    // Render filtered reviews
                    renderReviewsInModal(filteredReviews);
                });
            });

            // Sort options
            const sortOptions = document.querySelectorAll('.dropdown-item');
            sortOptions.forEach(option => {
                option.addEventListener('click', function() {
                    const sortText = this.textContent.trim();
                    const dropdownButton = document.querySelector('#dropdownMenu2');
                    if (dropdownButton) {
                        dropdownButton.textContent = sortText;
                    }

                    // Get currently visible reviews (which might be filtered)
                    const currentlyDisplayedReviews = [...window.originalReviewData];

                    // Apply current filter
                    const selectedRatings = [];
                    document.querySelectorAll('.form-check-input:checked').forEach(checkedBox => {
                        const parentDiv = checkedBox.closest('.form-check');
                        const stars = parentDiv.querySelectorAll('.star-icon');
                        selectedRatings.push(stars.length);
                    });

                    let displayedReviews = currentlyDisplayedReviews;
                    if (selectedRatings.length > 0) {
                        displayedReviews = currentlyDisplayedReviews.filter(review => {
                            const rating = parseInt(review.bintang_review);
                            return selectedRatings.includes(rating);
                        });
                    }

                    // Apply sorting
                    if (sortText === 'Ulasan Terbaru') {
                        displayedReviews.sort((a, b) => new Date(b.tanggal) - new Date(a.tanggal));
                    } else if (sortText === 'Rating Tertinggi') {
                        displayedReviews.sort((a, b) => b.bintang_review - a.bintang_review);
                    } else if (sortText === 'Rating terendah') {
                        displayedReviews.sort((a, b) => a.bintang_review - b.bintang_review);
                    }

                    renderReviewsInModal(displayedReviews);
                });
            });
        }

        // Add CSS for responsive modal
        function addResponsiveModalStyles() {
            if (!document.getElementById('responsiveModalStyles')) {
                const style = document.createElement('style');
                style.id = 'responsiveModalStyles';
                style.textContent = `
            @media (max-width: 768px) {
                .modal-dialog {
                    margin: 0.5rem;
                    max-width: calc(100% - 1rem);
                }
                .col-md-3, .col-md-9 {
                    width: 100%;
                    padding: 0.5rem;
                }
                .review-grid-review-modal {
                    margin-bottom: 1rem;
                }
                .review-photo img {
                    max-width: 100%;
                    height: auto;
                }
            }
            .review-photo img.zoomable-image:hover {
                transform: scale(1.1);
                transition: transform 0.3s ease;
                cursor: pointer;
                z-index: 1;
            }
            .stars-container {
                display: flex;
                flex-wrap: wrap;
            }
        `;
                document.head.appendChild(style);
            }
        }

        // Initialize when modal is shown
        document.addEventListener('DOMContentLoaded', function() {
            const reviewModal = document.getElementById('reviewModal');
            if (reviewModal) {
                reviewModal.addEventListener('shown.bs.modal', function() {
                    // Call this function when modal is shown
                    addResponsiveModalStyles();

                    // Set up filter listeners if not already set up
                    if (window.originalReviewData) {
                        setupFilterListeners(window.originalReviewData);
                    }
                });
            }
        });
    </script>
    <script>
        // slid halaman detail
        const tabs = document.querySelectorAll('.custom-nav-link-descripsi');
        const panes = document.querySelectorAll('.tab-pane');

        tabs.forEach(tab => {
            tab.addEventListener('click', () => {
                // Hapus class active dari semua tab
                tabs.forEach(t => t.classList.remove('active'));

                // Tambahkan class active ke tab yang diklik
                tab.classList.add('active');

                // Ambil target tab berdasarkan atribut data-tab
                const targetId = tab.getAttribute('data-tab');

                // Tampilkan hanya tab-pane yang cocok, lainnya disembunyikan
                panes.forEach(pane => {
                    if (pane.id === targetId) {
                        pane.classList.add('active');
                    } else {
                        pane.classList.remove('active');
                    }
                });
            });
        });
    </script>

    <script>
        const filterCheckboxes = document.querySelectorAll('.form-check-input');
        const resetButton = document.getElementById('resetFilter');

        // Fungsi untuk cek apakah ada filter yang aktif
        function checkFilters() {
            let isAnyChecked = false;
            filterCheckboxes.forEach(cb => {
                if (cb.checked) isAnyChecked = true;
            });

            if (isAnyChecked) {
                resetButton.classList.add('active');
            } else {
                resetButton.classList.remove('active');
            }
        }

        // Event listener untuk semua checkbox
        filterCheckboxes.forEach(cb => {
            cb.addEventListener('change', checkFilters);
        });

        // Tombol Reset
        resetButton.addEventListener('click', function() {
            filterCheckboxes.forEach(cb => cb.checked = false);
            resetButton.classList.remove('active');
        });
    </script>

    <script>
        // Tunggu sampai dokumen siap
        document.addEventListener('DOMContentLoaded', function() {
            // Ambil elemen dropdown button dan semua item dropdown
            const dropdownButton = document.getElementById('dropdownMenu2');
            const dropdownItems = document.querySelectorAll('.dropdown-menu .dropdown-item');

            // Set default ke "Ulasan Terbaru"
            dropdownButton.textContent = "Ulasan Terbaru";

            // Tambahkan event listener untuk setiap item dropdown
            dropdownItems.forEach(item => {
                item.addEventListener('click', function() {
                    // Ubah teks tombol dropdown menjadi teks dari item yang diklik
                    dropdownButton.textContent = this.textContent.trim();
                });

                // Tandai item "Ulasan Terbaru" sebagai aktif secara default
                if (item.textContent.trim() === "Ulasan Terbaru") {
                    item.classList.add('active');
                }
            });
        });
    </script>


    <script>
        // Definisikan global variabel yang akan menyimpan data model
        let $model = {
            detail: {
                harga: 0,
                diskon: 0, // Tambahkan field diskon untuk menampung nilai diskon
                details: []
            }
        };

        document.addEventListener('DOMContentLoaded', function() {
            // 1. Ambil path dari URL saat ini
            const currentPath = window.location.pathname;
            console.log('Current path:', currentPath);

            // 2. Pecah berdasarkan '/'
            const parts = currentPath.split('/');

            // 3. Ambil slug dan token
            // Contoh hasil parts = ["", "product", "safi-bar-chair-coffee-2", "0fa31a6936977be1c123aa57bccaf582"]
            const slug = parts[2];
            const token = parts[3];

            // console.log('Slug:', slug);
            // console.log('Token:', token);

            // Tampilkan loading message
            const errorMessageElement = document.getElementById('error-message');
            if (errorMessageElement) {
                errorMessageElement.textContent = 'Loading product data...';
                errorMessageElement.classList.remove('d-none');
                errorMessageElement.classList.remove('alert-danger');
                errorMessageElement.classList.add('alert-info');
            }

            if (slug && token) {
                // 4. Gunakan dalam fetch API
                fetch(`${API_BASE_URL}/product/${slug}/${token}`)
                    .then(response => {
                        if (!response.ok) {
                            throw new Error('Network response was not ok: ' + response.statusText);
                        }
                        return response.json();
                    })
                    .then(data => {
                        if (data.status === 'success') {
                            console.log('Produk detail:', data.data);
                            document.getElementById('nama_breadcrumb').innerHTML = data.data.nama_product
                            document.getElementById('id_product').value = data.data.id_product;
                            // console.log('satuan', data.data.uom);
                            document.getElementById('satuan').innerHTML = data.data.uom;

                            // Simpan data ke model global
                            $model.detail = data.data;

                            // Sembunyikan pesan loading
                            if (errorMessageElement) {
                                errorMessageElement.classList.add('d-none');
                            }

                            // Inisialisasi UI dengan data yang sudah diambil
                            initProductUI();
                        } else {
                            console.error(data.message);
                            if (errorMessageElement) {
                                errorMessageElement.textContent = data.message || 'Terjadi kesalahan saat memuat produk';
                                errorMessageElement.classList.remove('alert-info');
                                errorMessageElement.classList.add('alert-danger');
                                errorMessageElement.classList.remove('d-none');
                            }
                        }
                    })
                    .catch(error => {
                        console.error('Terjadi kesalahan:', error);
                        if (errorMessageElement) {
                            errorMessageElement.textContent = 'Terjadi kesalahan saat memuat produk: ' + error.message;
                            errorMessageElement.classList.remove('alert-info');
                            errorMessageElement.classList.add('alert-danger');
                            errorMessageElement.classList.remove('d-none');
                        }
                    });
            } else {
                console.error('Slug atau token tidak ditemukan di URL');
                if (errorMessageElement) {
                    errorMessageElement.textContent = 'URL produk tidak valid';
                    errorMessageElement.classList.remove('alert-info');
                    errorMessageElement.classList.add('alert-danger');
                    errorMessageElement.classList.remove('d-none');
                }
            }
        });

        // Fungsi untuk menginisialisasi UI setelah data diambil
        function initProductUI() {
            let currentHarga = $model.detail.harga;
            let maxQty = 0;
            let currentMotif = null; // ⬅️ tambahan: motif aktif sekarang

            // Update judul dan harga produk
            const titleElement = document.getElementById('product-title');
            if (titleElement) {
                titleElement.textContent = $model.detail.nama || 'Product Name';
            }

            // Update harga produk (dengan diskon jika ada)
            const priceElement = document.getElementById('product-price');
            if (priceElement) {
                if ($model.detail.diskon && $model.detail.diskon > 0) {
                    // Jika ada diskon, tampilkan harga asli yang dicoret dan harga setelah diskon
                    const discountedPrice = currentHarga - (currentHarga * $model.detail.diskon / 100);
                    priceElement.innerHTML = `
                <span class="text-decoration-line-through text-muted me-2">${formatRupiah(currentHarga)}</span>
                <span class="text-danger">${formatRupiah(discountedPrice)}</span>
            `;
                } else {
                    priceElement.textContent = formatRupiah(currentHarga);
                }
            }

            // Inisialisasi kontainer warna
            initColorOptions();

            // Inisialisasi warna jika ada
            if ($model.detail.details && $model.detail.details.length > 0) {
                // Cari warna pertama yang memiliki stok
                for (let i = 0; i < $model.detail.details.length; i++) {
                    let hasStock = $model.detail.details[i].motifs &&
                        $model.detail.details[i].motifs.some(motif => motif.qty > 0);
                    if (hasStock) {
                        setActiveWarna(i);
                        break;
                    }
                }
            }

            // Juga update detail produk
            updateProductDetails();
        }

        // Fungsi untuk menginisialisasi opsi warna
        function initColorOptions() {
            const warnaContainer = document.getElementById('warna-container');
            if (!warnaContainer || !$model.detail.details) return;

            warnaContainer.innerHTML = '';

            // Loop untuk menambahkan opsi warna
            $model.detail.details.forEach((detail, index) => {
                // Cek apakah warna ini memiliki stok
                let hasStock = detail.motifs && detail.motifs.some(motif => motif.qty > 0);

                const div = document.createElement('div');
                div.classList.add('col-3');
                div.innerHTML = `
            <div class="color-option ${hasStock ? '' : 'disabled'}" 
                data-index="${index}" 
                onclick="${hasStock ? 'setActiveWarna(' + index + ')' : ''}"
                style="${!hasStock ? 'cursor: not-allowed; opacity: 0.5;' : ''}">
                ${detail.warna}
            </div>
        `;
                warnaContainer.appendChild(div);
            });
        }

        function formatRupiah(number) {
            return new Intl.NumberFormat('id-ID', {
                style: 'currency',
                currency: 'IDR',
                minimumFractionDigits: 0
            }).format(number);
        }

        function setActiveWarna(index) {
            const colorOptions = document.querySelectorAll('.color-option');
            colorOptions.forEach(e => {
                if (!e.classList.contains('motif-option')) {
                    e.classList.remove('active');
                }
            });

            // Find the specific color option using data-index
            const selectedColorOption = document.querySelector(`.color-option[data-index="${index}"]`);
            if (selectedColorOption) {
                selectedColorOption.classList.add('active');
            }

            const jumlahBeli = document.getElementById('jumlah-beli');
            if (jumlahBeli) {
                jumlahBeli.innerText = '1';
            }

            let selectedDetail = $model.detail.details[index];

            const idDetailProduct = document.getElementById('id_detail_product');
            if (idDetailProduct && selectedDetail) {
                idDetailProduct.value = selectedDetail.id_detail_product; // ← update ID detail
            }

            updateMotifs(index);
            updateSubtotal();
        }

        function updateMotifs(index) {
            const motifContainer = document.getElementById('motif-container');
            if (!motifContainer) {
                console.error('Element motif-container tidak ditemukan');
                return;
            }

            motifContainer.innerHTML = '';

            if (!$model.detail.details || !$model.detail.details[index]) {
                console.error('Detail produk tidak ditemukan untuk index', index);
                return;
            }

            let selectedDetail = $model.detail.details[index];

            if (!selectedDetail.motifs) {
                console.error('Motifs tidak ditemukan untuk detail dengan index', index);
                return;
            }

            let totalQty = 0;
            selectedDetail.motifs.forEach(motif => totalQty += motif.qty);
            maxQty = totalQty;

            const stockElement = document.getElementById('stock');
            if (stockElement) {
                stockElement.innerHTML = `Tersedia <span class="text-black">${totalQty}</span> pcs`;
            }

            let firstPolosElement = null;
            let firstAvailableMotif = null;

            selectedDetail.motifs.forEach(motif => {
                let div = document.createElement('div');
                div.classList.add('col-3');

                // Pastikan data motif lengkap dengan semua URL foto
                const motifData = {
                    ...motif,
                    url_foto_kanan: motif.url_foto_kanan || '',
                    url_foto_kiri: motif.url_foto_kiri || '',
                    url_foto_depan: motif.url_foto_depan || '',
                    url_foto_belakang: motif.url_foto_belakang || ''
                };

                div.innerHTML = `
            <div class="color-option motif-option ${motif.qty <= 0 ? 'disabled' : ''}" 
                data-motif='${JSON.stringify(motifData)}'
                data-qty="${motif.qty}" 
                onclick="${motif.qty > 0 ? 'setActiveMotif(this)' : ''}"
                style="${motif.qty <= 0 ? 'cursor: not-allowed; opacity: 0.5;' : ''}">
                ${motif.motif}
            </div>`;
                motifContainer.appendChild(div);

                if (motif.motif.toLowerCase() === 'polos' && motif.qty > 0) {
                    firstPolosElement = div.querySelector('.motif-option');
                }
                if (!firstAvailableMotif && motif.qty > 0) {
                    firstAvailableMotif = div.querySelector('.motif-option');
                }
            });

            const btnTambah = document.getElementById('btn-tambah');

            if (firstPolosElement) {
                setActiveMotif(firstPolosElement);
                if (btnTambah) btnTambah.disabled = false;
            } else if (firstAvailableMotif) {
                setActiveMotif(firstAvailableMotif);
                if (btnTambah) btnTambah.disabled = false;
            } else {
                if (btnTambah) btnTambah.disabled = true;
            }
        }

        function setActiveMotif(element) {
            document.querySelectorAll('.motif-option').forEach(e => e.classList.remove('active'));
            element.classList.add('active');

            let motifData = JSON.parse(element.getAttribute('data-motif'));
            currentMotif = motifData;

            const idMotifProduk = document.getElementById('id_motif_produk');
            if (idMotifProduk) {
                idMotifProduk.value = motifData.id_motif_produk; // ← update ID motif
            }

            let qty = parseInt(element.getAttribute('data-qty'));
            maxQty = qty;

            const stockElement = document.getElementById('stock');
            if (stockElement) {
                stockElement.innerHTML = `Tersedia <span class="text-black">${qty}</span> `;
            }

            const jumlahBeli = document.getElementById('jumlah-beli');
            if (jumlahBeli) {
                jumlahBeli.innerText = '1';
            }

            updateSubtotal();
            updateMainAndThumbnailImage();
        }

        function changeQty(change) {
            const jumlahElem = document.getElementById('jumlah-beli');
            if (!jumlahElem) return;

            let currentQty = parseInt(jumlahElem.innerText);
            let newQty = currentQty + change;

            if (newQty < 1) return;
            if (newQty > maxQty) return;

            jumlahElem.innerText = newQty;

            // Update hidden input for form submission
            const quantityInput = document.getElementById('quantity');
            if (quantityInput) {
                quantityInput.value = newQty;
            }

            updateSubtotal();
        }

        function updateSubtotal() {
            const jumlahBeli = document.getElementById('jumlah-beli');
            const subtotalText = document.getElementById('subtotal-text');

            if (!jumlahBeli || !subtotalText) return;

            let qty = parseInt(jumlahBeli.innerText);
            let harga = $model.detail.harga;

            // Hitung harga setelah diskon jika ada
            if ($model.detail.diskon && $model.detail.diskon > 0) {
                harga = harga - (harga * $model.detail.diskon / 100);
            }

            let subtotal = qty * harga;
            subtotalText.innerText = formatRupiah(subtotal);
        }

        function updateMainAndThumbnailImage() {
            if (!currentMotif) return;

            // Default ke foto depan jika tersedia
            const defaultImageUrl = currentMotif.url_foto_depan ||
                currentMotif.url_foto_kanan ||
                currentMotif.url_foto_kiri ||
                currentMotif.url_foto_belakang;

            // Update gambar utama
            const mainProductImage = document.getElementById('main-product-image');
            if (mainProductImage) {
                mainProductImage.src = defaultImageUrl;
            }

            // Update thumbnails (hanya jika URL tersedia)
            const thumbnailContainer = document.getElementById('thumbnail-container');
            if (!thumbnailContainer) return;

            thumbnailContainer.innerHTML = '';

            // Tambahkan foto depan (jika tersedia)
            if (currentMotif.url_foto_depan) {
                thumbnailContainer.innerHTML += `
        <div class="col-3">
            <div class="thumbnail active p-1">
                <img src="${currentMotif.url_foto_depan}" alt="Thumbnail Depan" class="img-fluid" width="100" height="100" onclick="changeMainImage('${currentMotif.url_foto_depan}')">
            </div>
        </div>`;
            }

            // Tambahkan foto kanan (jika tersedia)
            if (currentMotif.url_foto_kanan) {
                thumbnailContainer.innerHTML += `
        <div class="col-3">
            <div class="thumbnail p-1">
                <img src="${currentMotif.url_foto_kanan}" alt="Thumbnail Kanan" class="img-fluid" width="100" height="100" onclick="changeMainImage('${currentMotif.url_foto_kanan}')">
            </div>
        </div>`;
            }

            // Tambahkan foto kiri (jika tersedia)
            if (currentMotif.url_foto_kiri) {
                thumbnailContainer.innerHTML += `
        <div class="col-3">
            <div class="thumbnail p-1">
                <img src="${currentMotif.url_foto_kiri}" alt="Thumbnail Kiri" class="img-fluid" width="100" height="100" onclick="changeMainImage('${currentMotif.url_foto_kiri}')">
            </div>
        </div>`;
            }

            // Tambahkan foto belakang (jika tersedia)
            if (currentMotif.url_foto_belakang) {
                thumbnailContainer.innerHTML += `
        <div class="col-3">
            <div class="thumbnail p-1">
                <img src="${currentMotif.url_foto_belakang}" alt="Thumbnail Belakang" class="img-fluid" width="100" height="100" onclick="changeMainImage('${currentMotif.url_foto_belakang}')">
            </div>
        </div>`;
            }

            // Set thumbnail pertama sebagai aktif
            const firstThumbnail = thumbnailContainer.querySelector('.thumbnail');
            if (firstThumbnail) {
                thumbnailContainer.querySelectorAll('.thumbnail').forEach(t => t.classList.remove('active'));
                firstThumbnail.classList.add('active');
            }
        }

        function changeMainImage(filename) {
            const mainProductImage = document.getElementById('main-product-image');
            if (!mainProductImage) return;

            mainProductImage.src = filename;

            document.querySelectorAll('.thumbnail').forEach(e => e.classList.remove('active'));
            event.target.parentElement.classList.add('active');
        }

        // Function to initialize the product detail tabs
        function initProductDetailTabs() {
            // Add listeners to tab navigation
            document.querySelectorAll('.custom-nav-link-descripsi').forEach(tabLink => {
                tabLink.addEventListener('click', function() {
                    // Remove active class from all tabs
                    document.querySelectorAll('.custom-nav-link-descripsi').forEach(tab => {
                        tab.classList.remove('active');
                    });

                    // Hide all tab panes
                    document.querySelectorAll('.tab-pane').forEach(pane => {
                        pane.classList.remove('active');
                    });

                    // Add active class to clicked tab
                    this.classList.add('active');

                    // Show the corresponding tab content
                    const tabId = this.getAttribute('data-tab');
                    document.getElementById(tabId).classList.add('active');
                });
            });
        }

        // Function to update product details section with AJAX data
        function updateProductDetails() {
            if (!$model.detail) {
                console.error('Product detail data not available');
                return;
            }

            // Update product name
            const nameElement = document.getElementById('nama_product');
            if (nameElement) {
                nameElement.textContent = $model.detail.nama_product || $model.detail.nama || 'Product Name';
            }

            // Update product description
            const descElement = document.getElementById('descripsi');
            if (descElement) {
                descElement.textContent = $model.detail.deskripsi || '';
            }

            // Update product specifications tab
            updateSpecifications();

            // Update product information tab
            updateProductInformation();

            // Initialize tab functionality
            initProductDetailTabs();

            updateStoreAvailability();
        }

        // Function to update specifications tab
        function updateSpecifications() {
            const specTab = document.getElementById('spesifikasi');
            if (!specTab) return;

            specTab.innerHTML = '';

            if ($model.detail.spesifikasi) {
                let specifications;

                // Check if spesifikasi is a string (JSON) or already an object
                if (typeof $model.detail.spesifikasi === 'string') {
                    try {
                        specifications = JSON.parse($model.detail.spesifikasi);
                    } catch (e) {
                        console.error('Failed to parse specifications:', e);
                        specifications = {};
                    }
                } else {
                    specifications = $model.detail.spesifikasi;
                }

                // Create specification items
                for (const [key, value] of Object.entries(specifications)) {
                    const specItem = document.createElement('div');
                    specItem.className = 'spec-item';

                    const labelSpan = document.createElement('span');
                    labelSpan.className = 'label';
                    labelSpan.textContent = key;

                    const valueSpan = document.createElement('span');
                    valueSpan.className = 'value';
                    valueSpan.textContent = ': ' + value;

                    specItem.appendChild(labelSpan);
                    specItem.appendChild(valueSpan);
                    specTab.appendChild(specItem);
                }
            } else {
                specTab.innerHTML = '<p>No specifications available</p>';
            }
        }

        // Function to update product information tab
        function updateProductInformation() {
            const infoTab = document.getElementById('informasi');
            if (!infoTab) return;

            if ($model.detail.informasi_product) {
                infoTab.innerHTML = `<p>${$model.detail.informasi_product}</p>`;
            } else {
                infoTab.innerHTML = '<p>No additional information available</p>';
            }
        }

        // This function will be called from your existing updateMainAndThumbnailImage function
        function updateStoreAvailability() {
            const storeName = $model.detail.nama_toko || "Toko Dummy";
            console.log(storeName);
            const storeNameElement = document.querySelector('.store-name');

            if (storeNameElement) {
                storeNameElement.textContent = 'Tersedia di ' + storeName;
            }
        }
    </script>

    <!-- disini -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const tokenLogin = localStorage.getItem('auth_token');


            const currentPath = window.location.pathname;
            const parts = currentPath.split('/');
            const slug = parts[2];
            const token = parts[3];

            fetch(`${API_BASE_URL}/product/create/cekwishlist/${slug}/${token}`, {
                    method: 'GET',
                    headers: {
                        'Authorization': 'Bearer ' + tokenLogin
                    }
                })
                .then(response => response.json())
                .then(data => {
                    const icon = document.getElementById('wishlistIcon');
                    if (data.status === 'success' && data.wishlisted) {
                        icon.src = 'assets/img/icon/love_wislist.svg';
                    } else {
                        icon.src = 'assets/img/icon/love.svg';
                    }
                })
                .catch(error => {
                    // console.error('Gagal cek wishlist:', error);
                });

        });
        document.getElementById('wishlistBtn').addEventListener('click', function() {
            const tokenLogin = localStorage.getItem('auth_token');
            if (!tokenLogin) {
                window.location.href = '/login';
                return;
            }

            const currentPath = window.location.pathname;
            const parts = currentPath.split('/');
            const slug = parts[2];
            const token = parts[3];

            fetch(`${API_BASE_URL}/product/create/wishlist/${slug}/${token}`, {
                    method: 'GET',
                    headers: {
                        'Authorization': 'Bearer ' + tokenLogin
                    }
                })
                .then(response => response.json())
                .then(data => {
                    showToast(data.message, data.status === 'success' ? 'success' : 'danger');

                    const icon = document.getElementById('wishlistIcon');
                    if (data.status === 'success' && data.wishlisted) {
                        icon.src = 'assets/img/icon/love_wislist.svg';
                    } else {
                        icon.src = 'assets/img/icon/love.svg';
                    }

                    // Panggil update jumlah wishlist setelah sukses
                    updateWishlistBadge(tokenLogin);
                })
                .catch(error => {
                    if (error.message === 'Token tidak ditemukan') {
                        window.location.href = '/login';
                        return;
                    }
                    showToast('Terjadi kesalahan saat mengirim permintaan.', 'danger');
                });
        });

        // Fungsi untuk update badge wishlist
        function updateWishlistBadge(tokenLogin) {
            fetch(API_BASE_URL + '/nominal-wishlist', {
                    method: 'GET',
                    headers: {
                        'Authorization': 'Bearer ' + tokenLogin
                    }
                })
                .then(res => res.json())
                .then(data => {
                    if (data.status === 'success') {
                        const wishlistCount = data.total_wishlist || 0;
                        document.getElementById('wishlist-badge').innerText = wishlistCount;
                    } else {
                        console.error('Gagal ambil jumlah wishlist:', data.message);
                    }
                })
                .catch(err => {
                    console.error('Error fetch wishlist:', err);
                });
        }


        function showToast(message, type) {
            const toastEl = document.getElementById('liveToast');
            const toastBody = toastEl.querySelector('.toast-body');
            const toastHeader = toastEl.querySelector('.me-auto');

            toastBody.innerText = message;
            toastHeader.innerText = type === 'success' ? 'Berhasil' : 'Gagal';

            const bsToast = new bootstrap.Toast(toastEl);
            bsToast.show();
        }
    </script>

    <!-- card -->
    <script>
        function masukkanKeranjang() {
            const idProduct = document.getElementById('id_product').value;
            const qty = parseInt(document.getElementById('jumlah-beli').innerText) || 1;
            const idDetailProduct = document.getElementById('id_detail_product').value;
            const idMotifProduk = document.getElementById('id_motif_produk').value;

            // Ambil stok yang tersedia dari DOM
            const stockAvailable = parseInt(document.querySelector('#stock span').innerText) || 0;

            // Validasi jika produk tidak tersedia (stok 0)
            if (stockAvailable === 0) {
                showToast('Produk tidak tersedia', 'danger');
                return; // Jangan lanjutkan jika produk tidak tersedia
            }

            // Validasi jika qty lebih besar dari stok yang tersedia
            if (qty > stockAvailable) {
                showToast(`Jumlah yang ingin dibeli melebihi stok yang tersedia. Stok tersedia: ${stockAvailable} pcs`, 'danger');
                return; // Jangan lanjutkan jika qty lebih banyak dari stok
            }

            const formData = new FormData();
            formData.append('id', idProduct);
            console.log(idProduct);
            formData.append('qty', qty);
            formData.append('id_detail_product', idDetailProduct);
            formData.append('id_motif_produk', idMotifProduk);
            // disini keranjang
            const tokenLogin = localStorage.getItem('auth_token');
            if (!tokenLogin) {
                window.location.href = '/login';
                return;
            }
            fetch(`${API_BASE_URL}/keranjang`, {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'Authorization': 'Bearer ' + tokenLogin
                    }
                })
                .then(response => response.json())
                .then(data => {
                    showToast(data.message, data.status === 'success' ? 'success' : 'danger');
                    if (data.status === 'success') {
                        updateNominalKeranjang(); // ✅ Tambahkan ini
                    }
                })
                .catch(() => {
                    if (error.message === 'Token tidak ditemukan' || error.message === 'Token tidak valid, silakan login ulang') {
                        window.location.href = '/login';
                        return;
                    }
                    showToast('Terjadi kesalahan. Coba lagi.', 'danger');
                });
        }

        function updateNominalKeranjang() {
            const token = localStorage.getItem('auth_token');
            if (!token) return;

            fetch(API_BASE_URL + '/nominal-keranjang', {
                    method: 'GET',
                    headers: {
                        'Authorization': 'Bearer ' + token
                    }
                })
                .then(res => res.json())
                .then(data => {
                    if (data.status === 'success') {
                        const nominal = data.total_nominal || 0;
                        document.getElementById('cart-badge').innerText = nominal;
                    } else {
                        console.error('Gagal ambil nominal keranjang:', data.message);
                    }
                })
                .catch(err => {
                    console.error('Error fetch nominal keranjang:', err);
                });
        }


        function showToast(message, type = 'success') {
            const toastId = `toast-${Date.now()}`;
            const toastHTML = `
            <div id="${toastId}" class="toast align-items-center text-bg-${type} border-0 shadow" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="3000">
                <div class="d-flex">
                    <div class="toast-body">${message}</div>
                    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
            </div>`;
            const container = document.getElementById('toastContainer');
            container.insertAdjacentHTML('beforeend', toastHTML);
            const toastElement = new bootstrap.Toast(document.getElementById(toastId));
            toastElement.show();
        }
    </script>

    <script>
        document.addEventListener('click', function(e) {
            const card = e.target.closest('.product-card');
            if (card) {
                const slug = card.getAttribute('data-slug');
                const token = card.getAttribute('data-token');
                if (slug && token) {
                    window.location.href = `/product/${slug}/${token}`;
                }
            }
        });

        document.getElementById('btnbeli').addEventListener('click', function(e) {
            e.preventDefault();

            const id_product = document.getElementById('id_product').value;
            const id_detail_product = document.getElementById('id_detail_product').value;
            const id_motif_produk = document.getElementById('id_motif_produk').value;
            const qty = parseInt(document.getElementById('jumlah-beli').innerText);
            // Ambil stok yang tersedia dari DOM
            const stockAvailable = parseInt(document.querySelector('#stock span').innerText) || 0;

            // Validasi jika produk tidak tersedia (stok 0)
            if (stockAvailable === 0) {
                showToast('Produk tidak tersedia', 'danger');
                return; // Janga
                // n lanjutkan jika produk tidak tersedia
            }
            const token = localStorage.getItem('auth_token');
            if (!token) {
                window.location.href = '/login';
                return;
            };

            fetch(API_BASE_URL + '/createPesanan', {
                    method: 'POST',
                    headers: {
                        'Authorization': 'Bearer ' + token
                    },
                    body: new URLSearchParams({
                        id: id_product,
                        id_detail_product: id_detail_product,
                        id_motif_produk: id_motif_produk,
                        qty: qty
                    })
                })
                .then(response => response.json())
                .then(result => {
                    if (result.status === 'success') {
                        // Simpan ke localStorage
                        if (localStorage.getItem('cart_ids')) {
                            localStorage.removeItem('cart_ids');
                        }

                        // Simpan data baru
                        localStorage.setItem('cart_ids', JSON.stringify(result.cart_ids));

                        showToast(result.message, 'success');

                        setTimeout(() => {
                            window.location.href = '/buat-pesanan';
                        }, 1500);
                    } else {
                        showToast(result.message, 'danger');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    showToast('Terjadi kesalahan. Coba lagi nanti.', 'danger');
                });

        });
    </script>



</body>

</html>