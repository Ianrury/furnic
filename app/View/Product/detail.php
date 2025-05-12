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
                                        <span class="text-black">0</span> pcs</small>
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
                            <div class="review-grid">
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
                                            <div class="star-count">200</div>
                                        </div>
                                        <div class="star-rating">
                                            <img src="assets/img/icon/star.svg" alt="start" class="star-icon-review">
                                            <img src="assets/img/icon/star.svg" alt="start" class="star-icon-review">
                                            <img src="assets/img/icon/star.svg" alt="start" class="star-icon-review">
                                            <img src="assets/img/icon/star.svg" alt="start" class="star-icon-review">
                                            <div class="star-count">200</div>
                                        </div>
                                        <div class="star-rating">
                                            <img src="assets/img/icon/star.svg" alt="start" class="star-icon-review">
                                            <img src="assets/img/icon/star.svg" alt="start" class="star-icon-review">
                                            <img src="assets/img/icon/star.svg" alt="start" class="star-icon-review">
                                            <div class="star-count">200</div>
                                        </div>
                                        <div class="star-rating">
                                            <img src="assets/img/icon/star.svg" alt="start" class="star-icon-review">
                                            <img src="assets/img/icon/star.svg" alt="start" class="star-icon-review">
                                            <div class="star-count">200</div>
                                        </div>
                                        <div class="star-rating">
                                            <img src="assets/img/icon/star.svg" alt="start" class="star-icon-review">
                                            <div class="star-count">200</div>
                                        </div>
                                    </div>
                                </div>
                                <h6 class="text-black" style="font-size: 14px; font-weight: 400;">Foto oleh pelanggan
                                    (100)</h6>
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

                                        <!-- Foto tersembunyi (hidden) -->
                                        <div class="row g-2 justify-content-start hidden-photos">
                                            <div class="col-2 review-photo-pelanggan">
                                                <img src="assets/img/product/decorasi/ruang-santai.jpg"
                                                    class="rounded-3" alt="Product review 11">
                                            </div>
                                            <div class="col-2 review-photo-pelanggan">
                                                <img src="assets/img/product/kursi/ZULU CHAIR WHITE.png"
                                                    class="rounded-3" alt="Product review 12">
                                            </div>
                                            <div class="col-2 review-photo-pelanggan">
                                                <img src="assets/img/product/decorasi/ruang-santai.jpg"
                                                    class="rounded-3" alt="Product review 13">
                                            </div>
                                            <div class="col-2 review-photo-pelanggan">
                                                <img src="assets/img/product/kursi/ZULU CHAIR WHITE.png"
                                                    class="rounded-3" alt="Product review 14">
                                            </div>
                                            <div class="col-2 review-photo-pelanggan">
                                                <img src="assets/img/product/decorasi/ruang-santai.jpg"
                                                    class="rounded-3" alt="Product review 15">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Right grid - User reviews -->
                        <div class="col-12 col-lg-8">
                            <!-- First review -->
                            <div class="review-grid-review">
                                <div class="username">Yolanda</div>
                                <div class="review-text">Kursinya kokoh, warnanya lucu</div>
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

                            <!-- Second review -->
                            <div class="review-grid-review">
                                <div class="username">Yolanda</div>
                                <div class="review-text">kursinya bagus rekomen untuk yang mencari kursi belajar anak,
                                    warna yang di berikan juga variatif</div>
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
                                        <div class="username">Yolanda</div>
                                        <div class="fw-normal text-black" style="font-size: 12px;">kursinya bagus
                                            rekomen
                                            untuk yang mencari kursi belajar
                                            anak,
                                            warna yang di berikan juga variatif</div>
                                        <img src="assets/img/icon/star.svg" alt="start" class="star-icon">
                                        <img src="assets/img/icon/star.svg" alt="start" class="star-icon">
                                        <img src="assets/img/icon/star.svg" alt="start" class="star-icon">
                                        <img src="assets/img/icon/star.svg" alt="start" class="star-icon">
                                        <img src="assets/img/icon/star.svg" alt="start" class="star-icon">
                                        <div class="review-photos">
                                            <div class="review-photo">
                                                <img src="assets/img/product/decorasi/ruang-santai.jpg"
                                                    alt="Product review">
                                            </div>
                                            <div class="review-photo">
                                                <img src="assets/img/product/decorasi/ruang-santai.jpg"
                                                    alt="Product review">
                                            </div>
                                            <div class="review-photo">
                                                <img src="assets/img/product/decorasi/ruang-santai.jpg"
                                                    alt="Product review">
                                            </div>
                                            <div class="review-photo">
                                                <img src="assets/img/product/decorasi/ruang-santai.jpg"
                                                    alt="Product review">
                                            </div>
                                            <div class="review-photo">
                                                <img src="assets/img/product/decorasi/ruang-santai.jpg"
                                                    alt="Product review">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="review-grid-review-modal" style="background-color: #FFFFFF;">
                                        <div class="username">Yolanda</div>
                                        <div class="fw-normal text-black" style="font-size: 12px;">kursinya bagus
                                            rekomen
                                            untuk yang mencari kursi belajar
                                            anak,
                                            warna yang di berikan juga variatif</div>
                                        <img src="assets/img/icon/star.svg" alt="start" class="star-icon">
                                        <img src="assets/img/icon/star.svg" alt="start" class="star-icon">
                                        <img src="assets/img/icon/star.svg" alt="start" class="star-icon">
                                        <img src="assets/img/icon/star.svg" alt="start" class="star-icon">
                                        <img src="assets/img/icon/star.svg" alt="start" class="star-icon">
                                        <div class="review-photos">
                                            <div class="review-photo">
                                                <img src="assets/img/product/decorasi/ruang-santai.jpg"
                                                    alt="Product review">
                                            </div>
                                            <div class="review-photo">
                                                <img src="assets/img/product/decorasi/ruang-santai.jpg"
                                                    alt="Product review">
                                            </div>
                                            <div class="review-photo">
                                                <img src="assets/img/product/decorasi/ruang-santai.jpg"
                                                    alt="Product review">
                                            </div>
                                            <div class="review-photo">
                                                <img src="assets/img/product/decorasi/ruang-santai.jpg"
                                                    alt="Product review">
                                            </div>
                                            <div class="review-photo">
                                                <img src="assets/img/product/decorasi/ruang-santai.jpg"
                                                    alt="Product review">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="review-grid-review-modal" style="background-color: #FFFFFF;">
                                        <div class="username">Yolanda</div>
                                        <div class="fw-normal text-black" style="font-size: 12px;">kursinya bagus
                                            rekomen
                                            untuk yang mencari kursi belajar
                                            anak,
                                            warna yang di berikan juga variatif</div>
                                        <img src="assets/img/icon/star.svg" alt="start" class="star-icon">
                                        <img src="assets/img/icon/star.svg" alt="start" class="star-icon">
                                        <img src="assets/img/icon/star.svg" alt="start" class="star-icon">
                                        <img src="assets/img/icon/star.svg" alt="start" class="star-icon">
                                        <img src="assets/img/icon/star.svg" alt="start" class="star-icon">
                                        <div class="review-photos">
                                            <div class="review-photo">
                                                <img src="assets/img/product/decorasi/ruang-santai.jpg"
                                                    alt="Product review">
                                            </div>
                                            <div class="review-photo">
                                                <img src="assets/img/product/decorasi/ruang-santai.jpg"
                                                    alt="Product review">
                                            </div>
                                            <div class="review-photo">
                                                <img src="assets/img/product/decorasi/ruang-santai.jpg"
                                                    alt="Product review">
                                            </div>
                                            <div class="review-photo">
                                                <img src="assets/img/product/decorasi/ruang-santai.jpg"
                                                    alt="Product review">
                                            </div>
                                            <div class="review-photo">
                                                <img src="assets/img/product/decorasi/ruang-santai.jpg"
                                                    alt="Product review">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="review-grid-review-modal" style="background-color: #FFFFFF;">
                                        <div class="username">Yolanda</div>
                                        <div class="fw-normal text-black" style="font-size: 12px;">kursinya bagus
                                            rekomen
                                            untuk yang mencari kursi belajar
                                            anak,
                                            warna yang di berikan juga variatif</div>
                                        <img src="assets/img/icon/star.svg" alt="start" class="star-icon">
                                        <img src="assets/img/icon/star.svg" alt="start" class="star-icon">
                                        <img src="assets/img/icon/star.svg" alt="start" class="star-icon">
                                        <img src="assets/img/icon/star.svg" alt="start" class="star-icon">
                                        <img src="assets/img/icon/star.svg" alt="start" class="star-icon">
                                        <div class="review-photos">
                                            <div class="review-photo">
                                                <img src="assets/img/product/decorasi/ruang-santai.jpg"
                                                    alt="Product review">
                                            </div>
                                            <div class="review-photo">
                                                <img src="assets/img/product/decorasi/ruang-santai.jpg"
                                                    alt="Product review">
                                            </div>
                                            <div class="review-photo">
                                                <img src="assets/img/product/decorasi/ruang-santai.jpg"
                                                    alt="Product review">
                                            </div>
                                            <div class="review-photo">
                                                <img src="assets/img/product/decorasi/ruang-santai.jpg"
                                                    alt="Product review">
                                            </div>
                                            <div class="review-photo">
                                                <img src="assets/img/product/decorasi/ruang-santai.jpg"
                                                    alt="Product review">
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
        document.addEventListener('DOMContentLoaded', function() {
            const morePhotosBtn = document.getElementById('morePhotosBtn');
            const reviewPhotosContainer = document.getElementById('reviewPhotos');

            // Jumlah foto yang tersembunyi
            const hiddenPhotosCount = document.querySelectorAll('.hidden-photos .review-photo-pelanggan').length;

            // Update teks pada overlay sesuai jumlah foto yang tersembunyi
            morePhotosBtn.textContent = '+' + hiddenPhotosCount;

            // Ketika overlay diklik, tampilkan semua foto tersembunyi
            morePhotosBtn.addEventListener('click', function() {
                reviewPhotosContainer.classList.toggle('expanded');
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
                stockElement.innerHTML = `Tersedia <span class="text-black">${qty}</span> pcs`;
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


    <!-- <script>
        document.addEventListener('DOMContentLoaded', function() {
            const tokenLogin = localStorage.getItem('auth_token');
            if (!tokenLogin) {
                window.location.href = '/login';
                return;
            }

            const currentPath = window.location.pathname;
            const parts = currentPath.split('/');
            const slug = parts[2];
            const token = parts[3];

            fetch(`${API_BASE_URL}/product/create/cekwishlist/${slug}/${token}`, {
                method: 'GET',
                headers: {
                    'Authorization': 'Bearer ' + tokenLogin
                }
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
                    console.error('Gagal cek wishlist:', error);
                })
            })
        });
    </script> -->

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
                return; // Jangan lanjutkan jika produk tidak tersedia
            }
            fetch( API_BASE_URL + '/createPesanan', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded'
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
                        showToast(result.message, 'success');
                        setTimeout(() => {
                            window.location.href = '/pesanan';
                        }, 1500); // tunggu 1.5 detik biar user sempat lihat toast-nya
                    } else {
                        showToast(result.message, 'danger'); // warna merah untuk error
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