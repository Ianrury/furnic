<?php
function base_url($path = '')
{
    return '/' . ltrim($path, '/');
}
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

    <nav class="breadcrumb-nav py-2 px-3">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="#">Product</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Clover Chair</li>
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
            <div class="container py-4">
                <div class="row g-5">
                    <!-- Product Images Column -->
                    <div class="col-md-5">
                        <div class="card product-card-detail">
                            <!-- New Product Badge -->
                            <div class="position-absolute ribbon-wrapper-detail">
                                <div class="ribbon-detail text-white text-uppercase fw-bold text-center">
                                    New Product
                                </div>
                            </div>

                            <!-- Main Product Image -->
                            <div class="card-body text-center p-4">
                                <img src="assets/img/product/kursi/ZULU CHAIR WHITE.png" alt="Clover Chair"
                                    class="img-fluid" width="255" height="255">
                            </div>

                            <!-- Thumbnails -->
                            <div class="card-footer bg-white p-3 border-0">
                                <div class="row g-2">
                                    <div class="col-3">
                                        <div class="thumbnail active p-1">
                                            <img src="assets/img/product/kursi/ZULU CHAIR WHITE.png" alt="Thumbnail 1"
                                                class="img-fluid" width="100" height="100">
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="thumbnail p-1">
                                            <img src="assets/img/product/kursi/ZULU CHAIR WHITE.png" alt="Thumbnail 2"
                                                class="img-fluid" width="100" height="100">
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="thumbnail p-1">
                                            <img src="assets/img/product/kursi/ZULU CHAIR WHITE.png" alt="Thumbnail 3"
                                                class="img-fluid" width="100" height="100">
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="thumbnail p-1">
                                            <img src="assets/img/product/kursi/ZULU CHAIR WHITE.png" alt="Thumbnail 4"
                                                class="img-fluid" width="100" height="100">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Product Details Column -->
                    <div class="col-md-5">
                        <h1 class="text-black fw-bold mb-1" style="font-size: 25px;">Clover Chair</h1>
                        <p class="text-black mb-3 fw-normal" style="font-size: 14px;">Kursi belajar anak</p>

                        <!-- Color Options -->
                        <div class="mb-4">
                            <p class="mb-2 fw-normal text-black" style="font-size: 14px;">Warna</p>
                            <div class="row g-2">
                                <div class="col-3">
                                    <div class="color-option ">Kuning</div>
                                </div>
                                <div class="col-3">
                                    <div class="color-option active">Merah</div>
                                </div>
                                <div class="col-3">
                                    <div class="color-option">Hijau</div>
                                </div>
                                <div class="col-3">
                                    <div class="color-option">Biru</div>
                                </div>
                            </div>
                        </div>

                        <!-- Pattern Options -->
                        <div class="mb-4">
                            <p class="mb-2 fw-normal text-black" style="font-size: 14px;">Motif</p>
                            <div class="row g-2">
                                <div class="col-3">
                                    <div class="color-option">Abstrak</div>
                                </div>
                                <div class="col-3">
                                    <div class="color-option">Polkadot</div>
                                </div>
                                <div class="col-3">
                                    <div class="color-option">Polos</div>
                                </div>
                                <div class="col-3">
                                    <div class="color-option">Leopard</div>
                                </div>
                            </div>
                        </div>

                        <!-- Quantity Selector -->
                        <div class="mb-4">
                            <p class="mb-2 fw-normal text-black" style="font-size: 14px;">Jumlah</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <button class="btn-quantity fw-medium">
                                        <span style="font-size: 20px;">-</span>
                                    </button>
                                    <span class="mx-4 fw-normal text-black" style="font-size: 14px;">3</span>
                                    <button class="btn-quantity fw-medium">
                                        <span style="font-size: 20px;">+</span>
                                    </button>
                                </div>
                                <div>
                                    <small class="fst-italic text-black" style="font-size: 14px;">Tersedia <span
                                            class="text-black">100</span> pcs</small>
                                </div>
                            </div>
                        </div>

                        <!-- Subtotal -->
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <p class="mb-0 text-black" style="font-size: 14px;">Subtotal Pembelian:</p>
                            <p class="mb-0 fw-bold text-black" style="font-size: 16px;">Rp 300.000</p>
                        </div>

                        <!-- Buy Button and Actions -->
                        <div class="mb-3">
                            <div class="row g-2 align-items-center">
                                <div class="col-9">
                                    <button class="btn btn-buy w-100 rounded-3 fw-bold" style="font-size: 14px;">Beli
                                        Sekarang</button>
                                </div>
                                <div class="col-3 d-flex justify-content-end gap-3">
                                    <div class="action-icon">
                                        <img src="assets/img/icon/love.svg" alt="Love Icon" width="30" height="30">

                                    </div>
                                    <div class="action-icon">
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
        <div class="product-area product-area-new ">
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
                                <div class="custom-nav-link-descripsi active" data-tab="spesifikasi">Spesifikasi Product
                                </div>
                            </li>
                            <li class="nav-item">
                                <div class="custom-nav-link-descripsi" data-tab="informasi">Informasi Product</div>
                            </li>
                        </ul>

                        <div class="tab-content-scroll me-3">
                            <div id="spesifikasi" class="tab-pane active">
                                <div class="spec-item">
                                    <span class="label">Material</span>
                                    <span class="value">: Polypropylene, Metal</span>
                                </div>
                                <div class="spec-item">
                                    <span class="label">Dimensi</span>
                                    <span class="value">: 40×36×51cm</span>
                                </div>
                                <div class="spec-item">
                                    <span class="label">Tinggi Kursi</span>
                                    <span class="value">: 35cm</span>
                                </div>
                                <div class="spec-item">
                                    <span class="label">Warna</span>
                                    <span class="value">: Red & Yellow</span>
                                </div>
                            </div>

                            <div id="informasi" class="tab-pane">
                                <p>Produk ini dirancang untuk kenyamanan dan daya tahan tinggi. Cocok digunakan di dalam
                                    maupun luar ruangan Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab
                                    magnam dolor, numquam illum eveniet modi repellendus voluptatibus error sed ad,
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ulasan penggan -->
        <div class="product-area product-area-new pt-40">
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
                        <div class="col-md-4 pe-1">
                            <div class="review-grid">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <div>
                                        <img src="assets/img/product/decorasi/ruang-santai.jpg" alt="foto review"
                                            class="img-fluid rounded-3" width="240" height="260">
                                    </div>
                                    <div class="ps-2">
                                        <div class="star-rating">
                                            <img src="assets/img/icon/star.svg" alt="start" class="star-icon">
                                            <img src="assets/img/icon/star.svg" alt="start" class="star-icon">
                                            <img src="assets/img/icon/star.svg" alt="start" class="star-icon">
                                            <img src="assets/img/icon/star.svg" alt="start" class="star-icon">
                                            <img src="assets/img/icon/star.svg" alt="start" class="star-icon">
                                            <div class="star-count">200</div>
                                        </div>
                                        <div class="star-rating">
                                            <img src="assets/img/icon/star.svg" alt="start" class="star-icon">
                                            <img src="assets/img/icon/star.svg" alt="start" class="star-icon">
                                            <img src="assets/img/icon/star.svg" alt="start" class="star-icon">
                                            <img src="assets/img/icon/star.svg" alt="start" class="star-icon">
                                            <div class="star-count">200</div>
                                        </div>
                                        <div class="star-rating">
                                            <img src="assets/img/icon/star.svg" alt="start" class="star-icon">
                                            <img src="assets/img/icon/star.svg" alt="start" class="star-icon">
                                            <img src="assets/img/icon/star.svg" alt="start" class="star-icon">
                                            <div class="star-count">200</div>
                                        </div>
                                        <div class="star-rating">
                                            <img src="assets/img/icon/star.svg" alt="start" class="star-icon">
                                            <img src="assets/img/icon/star.svg" alt="start" class="star-icon">
                                            <div class="star-count">200</div>
                                        </div>
                                        <div class="star-rating">
                                            <img src="assets/img/icon/star.svg" alt="start" class="star-icon">
                                            <div class="star-count">200</div>
                                        </div>
                                    </div>
                                </div>
                                <h6 class="text-black" style="font-size: 14px; font-weight: 400;">Foto oleh pelanggan
                                    (100)</h6>
                                <div class="review-photos-pelanggan mt-3 ">
                                    <div class="review-photo-pelanggan">
                                        <img src="assets/img/product/decorasi/ruang-santai.jpg" alt="Product review">
                                    </div>
                                    <div class="review-photo-pelanggan">
                                        <img src="assets/img/product/decorasi/ruang-santai.jpg" alt="Product review">
                                    </div>
                                    <div class="review-photo-pelanggan">
                                        <img src="assets/img/product/decorasi/ruang-santai.jpg" alt="Product review">
                                    </div>
                                    <div class="review-photo-pelanggan">
                                        <img src="assets/img/product/decorasi/ruang-santai.jpg" alt="Product review">
                                    </div>
                                    <div class="review-photo-pelanggan">
                                        <img src="assets/img/product/decorasi/ruang-santai.jpg" alt="Product review">
                                    </div>
                                    <div class="review-photo-pelanggan">
                                        <img src="assets/img/product/decorasi/ruang-santai.jpg" alt="Product review">
                                    </div>
                                    <div class="review-photo-pelanggan">
                                        <img src="assets/img/product/decorasi/ruang-santai.jpg" alt="Product review">
                                    </div>
                                    <div class="review-photo-pelanggan">
                                        <img src="assets/img/product/decorasi/ruang-santai.jpg" alt="Product review">
                                    </div>
                                    <div class="review-photo-pelanggan">
                                        <img src="assets/img/product/decorasi/ruang-santai.jpg" alt="Product review">
                                    </div>
                                    <div class="review-photo-pelanggan">
                                        <img src="assets/img/product/decorasi/ruang-santai.jpg" alt="Product review">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Right grid - User reviews -->
                        <div class="col-md-8 ps-1">
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
                style="max-width: 900px !important;">
                <div class="modal-content rounded-4" style="border: 2px solid #D9D9D9;">
                    <!-- Modal Header -->
                    <div class="modal-header border-bottom-0">
                        <h5 class="modal-title fw-bold" id="reviewModalLabel">Urutkan berdasarkan
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <!-- Modal Body -->
                    <div class="modal-body">
                        <!-- Reset Button -->
                        <div class="tab-content-scroll-review me-3">
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
                                                        <label class="form-check-label" for="unggulan">Product
                                                            Unggulan</label>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="mb-3">
                                                    <h6 class="fw-bold text-dark mb-2" style="font-size: 15px;">
                                                        Rating</h6>
                                                    <div class="">
                                                        <div class="form-check custom-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="productTerbaru">
                                                            <div class="star-rating">
                                                                <img src="assets/img/icon/star.svg" alt="start"
                                                                    class="star-icon">
                                                            </div>
                                                        </div>
                                                        <div class="form-check custom-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="productTerbaru">
                                                            <div class="star-rating">
                                                                <img src="assets/img/icon/star.svg" alt="start"
                                                                    class="star-icon">
                                                                <img src="assets/img/icon/star.svg" alt="start"
                                                                    class="star-icon">
                                                            </div>
                                                        </div>
                                                        <div class="form-check custom-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="productTerbaru">
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
                                                                id="productTerbaru">
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
                                                                id="productTerbaru">
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
                                        <div class="fw-bold text-black" style="font-size: 12px;">kursinya bagus rekomen
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
                                        <div class="fw-bold text-black" style="font-size: 12px;">kursinya bagus rekomen
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
                                        <div class="fw-bold text-black" style="font-size: 12px;">kursinya bagus rekomen
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
                                        <div class="fw-bold text-black" style="font-size: 12px;">kursinya bagus rekomen
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
                                <div class="card shadow position-relative h-100 rounded-4 p-2">
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

                                    <div class="card-body d-flex flex-column pt-2">
                                        <!-- Product Details -->
                                        <div class="pb-2">
                                            <h5 class="card-title fw-medium product-title">
                                                CT-IMP Matto Light Brown
                                            </h5>
                                            <p class="card-text mb-1 text-truncate product-desc">Meja ruang tamu
                                                aesthetic.</p>
                                            <div class="d-flex gap-1 align-items-center mb-2">
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
                            <div class="col">
                                <div class="card shadow position-relative h-100 rounded-4 p-2">
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

                                    <div class="card-body d-flex flex-column pt-2">
                                        <!-- Product Details -->
                                        <div class="pb-2">
                                            <h5 class="card-title fw-medium product-title">
                                                CT-IMP Matto Light Brown
                                            </h5>
                                            <p class="card-text mb-1 text-truncate product-desc">Meja ruang tamu
                                                aesthetic.</p>
                                            <div class="d-flex gap-1 align-items-center mb-2">
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
                            <div class="col">
                                <div class="card shadow position-relative h-100 rounded-4 p-2">
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

                                    <div class="card-body d-flex flex-column pt-2">
                                        <!-- Product Details -->
                                        <div class="pb-2">
                                            <h5 class="card-title fw-medium product-title">
                                                CT-IMP Matto Light Brown
                                            </h5>
                                            <p class="card-text mb-1 text-truncate product-desc">Meja ruang tamu
                                                aesthetic.</p>
                                            <div class="d-flex gap-1 align-items-center mb-2">
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
                            <div class="col">
                                <div class="card shadow position-relative h-100 rounded-4 p-2">
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

                                    <div class="card-body d-flex flex-column pt-2">
                                        <!-- Product Details -->
                                        <div class="pb-2">
                                            <h5 class="card-title fw-medium product-title">
                                                CT-IMP Matto Light Brown
                                            </h5>
                                            <p class="card-text mb-1 text-truncate product-desc">Meja ruang tamu
                                                aesthetic.</p>
                                            <div class="d-flex gap-1 align-items-center mb-2">
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

        <!-- Best Seller Product -->
        <div class="product-area product-area-new pt-40">
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
                        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 g-4  justify-content-center">
                            <div class="col">
                                <div class="card shadow position-relative h-100 rounded-4 p-2">
                                    <!-- Corner Ribbon -->
                                    <div class="position-absolute ribbon-wrapper">
                                        <div class="ribbon text-white text-uppercase fw-bold text-center"
                                            style="background-color: #FF8B2D;">
                                            Best Seller
                                        </div>
                                    </div>

                                    <!-- Product Image -->
                                    <div class="text-center pt-3">
                                        <img src="assets/img/product/kursi/ZULU CHAIR WHITE.png"
                                            class="img-fluid product-image" alt="Product Image">
                                    </div>

                                    <div class="card-body d-flex flex-column pt-2">
                                        <!-- Product Details -->
                                        <div class="pb-2">
                                            <h5 class="card-title fw-medium product-title">
                                                CT-IMP Matto Light Brown
                                            </h5>
                                            <p class="card-text mb-1 text-truncate product-desc">Meja ruang tamu
                                                aesthetic.</p>
                                            <div class="d-flex gap-1 align-items-center mb-2">
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
                            <div class="col">
                                <div class="card shadow position-relative h-100 rounded-4 p-2">
                                    <!-- Corner Ribbon -->
                                    <div class="position-absolute ribbon-wrapper">
                                        <div class="ribbon text-white text-uppercase fw-bold text-center"
                                            style="background-color: #FF8B2D;">
                                            Best Seller
                                        </div>
                                    </div>

                                    <!-- Product Image -->
                                    <div class="text-center pt-3">
                                        <img src="assets/img/product/kursi/ZULU CHAIR WHITE.png"
                                            class="img-fluid product-image" alt="Product Image">
                                    </div>

                                    <div class="card-body d-flex flex-column pt-2">
                                        <!-- Product Details -->
                                        <div class="pb-2">
                                            <h5 class="card-title fw-medium product-title">
                                                CT-IMP Matto Light Brown
                                            </h5>
                                            <p class="card-text mb-1 text-truncate product-desc">Meja ruang tamu
                                                aesthetic.</p>
                                            <div class="d-flex gap-1 align-items-center mb-2">
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
                            <div class="col">
                                <div class="card shadow position-relative h-100 rounded-4 p-2">
                                    <!-- Corner Ribbon -->
                                    <div class="position-absolute ribbon-wrapper">
                                        <div class="ribbon text-white text-uppercase fw-bold text-center"
                                            style="background-color: #FF8B2D;">
                                            Best Seller
                                        </div>
                                    </div>

                                    <!-- Product Image -->
                                    <div class="text-center pt-3">
                                        <img src="assets/img/product/kursi/ZULU CHAIR WHITE.png"
                                            class="img-fluid product-image" alt="Product Image">
                                    </div>

                                    <div class="card-body d-flex flex-column pt-2">
                                        <!-- Product Details -->
                                        <div class="pb-2">
                                            <h5 class="card-title fw-medium product-title">
                                                CT-IMP Matto Light Brown
                                            </h5>
                                            <p class="card-text mb-1 text-truncate product-desc">Meja ruang tamu
                                                aesthetic.</p>
                                            <div class="d-flex gap-1 align-items-center mb-2">
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
                            <div class="col">
                                <div class="card shadow position-relative h-100 rounded-4 p-2">
                                    <!-- Corner Ribbon -->
                                    <div class="position-absolute ribbon-wrapper">
                                        <div class="ribbon text-white text-uppercase fw-bold text-center"
                                            style="background-color: #FF8B2D;">
                                            Best Seller
                                        </div>
                                    </div>

                                    <!-- Product Image -->
                                    <div class="text-center pt-3">
                                        <img src="assets/img/product/kursi/ZULU CHAIR WHITE.png"
                                            class="img-fluid product-image" alt="Product Image">
                                    </div>

                                    <div class="card-body d-flex flex-column pt-2">
                                        <!-- Product Details -->
                                        <div class="pb-2">
                                            <h5 class="card-title fw-medium product-title">
                                                CT-IMP Matto Light Brown
                                            </h5>
                                            <p class="card-text mb-1 text-truncate product-desc">Meja ruang tamu
                                                aesthetic.</p>
                                            <div class="d-flex gap-1 align-items-center mb-2">
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
    <!-- <script>
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
    </script> -->

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
        resetButton.addEventListener('click', function () {
            filterCheckboxes.forEach(cb => cb.checked = false);
            resetButton.classList.remove('active');
        });
    </script>


</body>

</html>