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

    <nav class="breadcrumb-nav mt-3">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="/">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="/product">Product</a></li>
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
            <div class="container">
                <div class="row g-0 g-md-5">
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
                                <img id="main-product-image" src="" alt="Main Product" class="img-fluid" width="255"
                                    height="255">
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
                        <h1 class="text-black fw-bold mb-1" style="font-size: 25px;">
                            <?= htmlspecialchars($model['detail']['nama_product']) ?>
                        </h1>
                        <p class="text-black mb-3 fw-normal" style="font-size: 14px;">
                            <?= htmlspecialchars($model['detail']['deskripsi']) ?>
                        </p>

                        <div class="mb-4">
                            <p class="mb-2 fw-normal text-black" style="font-size: 14px;">Warna</p>
                            <div class="row g-2" id="warna-container">
                                <?php
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
                                <?php } ?>
                            </div>
                        </div>


                        <!-- Pattern Options -->
                        <div class="mb-4">
                            <p class="mb-2 fw-normal text-black" style="font-size: 14px;">Motif</p>
                            <div class="row g-2" id="motif-container">
                                <?php
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
                                ?>
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
                                Rp <?= number_format($model['detail']['harga'], 0, ',', '.') ?>
                            </p>
                        </div>


                        <!-- Buy Button and Actions -->
                        <div class="mb-3">
                            <div class="row g-2 align-items-center">
                                <div class="col-9">
                                    <button class="btn btn-buy w-100 rounded-3 fw-bold" style="font-size: 14px;">Beli
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
                        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 g-4  justify-content-center">
                            <div class="col">
                                <div class="card shadow position-relative rounded-4 p-2">
                                    <!-- Corner Ribbon -->
                                    <div class="position-absolute ribbon-wrapper">
                                        <div class="ribbon text-uppercase fw-bold text-center"
                                            style="color: #FF0000; background-color: #FFFB2D;">
                                            Sale
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
                                        <div class="ribbon text-white text-uppercase fw-bold text-center"
                                            style="background-color: #FF0000;">
                                            Out of Stock
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
                        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 g-4 justify-content-center">
                            <?php foreach ($model['bestseller'] as $product): ?>
                                <div class="col">
                                    <div class="card shadow position-relative rounded-4 p-2">
                                        <!-- Corner Ribbon -->
                                        <div class="position-absolute ribbon-wrapper">
                                            <div class="ribbon text-white text-uppercase fw-bold text-center"
                                                style="background-color: #FF8B2D;">
                                                Best Seller
                                            </div>
                                        </div>

                                        <!-- Product Image -->
                                        <div class="text-center pt-3">
                                            <img src="assets/img/product/kursi/<?= $product['foto']; ?>"
                                                class="img-fluid product-image" alt="Product Image">
                                        </div>
                                        <div class="bodykartu">
                                            <div class="d-flex flex-column">
                                                <!-- Product Details -->
                                                <div class="">
                                                    <p class="card-title text-truncate fw-medium product-title">
                                                        <?= $product['nama_product']; ?>
                                                    </p>
                                                    <p class="card-text text-truncate product-desc">
                                                        <?= $product['deskripsi']; ?>
                                                    </p>
                                                    <div class="d-flex gap-1 align-items-center">
                                                        <i class="bi bi-star-fill text-warning small-icon"></i>
                                                        <i class="bi bi-star-fill text-warning small-icon"></i>
                                                        <i class="bi bi-star-fill text-warning small-icon"></i>
                                                        <i class="bi bi-star-fill text-warning small-icon"></i>
                                                        <i class="bi bi-star-fill text-warning small-icon"></i>
                                                        <small
                                                            class="text-muted fst-italic ms-1 sold-text"><?= $product['beli']; ?>
                                                            terjual</small>
                                                    </div>
                                                </div>

                                                <!-- Price Section -->
                                                <div class="mt-auto">
                                                    <div class="d-flex flex-wrap align-items-baseline">
                                                        <div class="me-2">
                                                            <?php if ($product['harga'] !== NULL): ?>
                                                                <span class="fw-bold price">
                                                                    <sup class="fw-normal">Rp</sup>
                                                                    <?= number_format($product['harga'], 0, ',', '.'); ?>
                                                                </span>
                                                            <?php else: ?>
                                                                <span class="fw-bold price">Harga Belum Tersedia</span>
                                                            <?php endif; ?>
                                                        </div>
                                                        <div>
                                                            <?php if ($product['harga'] !== NULL): ?>
                                                                <span class="fw-normal text-danger old-price">
                                                                    <sup>Rp</sup>
                                                                    <span
                                                                        class="text-decoration-line-through"><?= number_format($product['harga'] * 1.25, 0, ',', '.'); ?></span>
                                                                </span>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div id="toastContainer" class="position-fixed top-0 end-0 p-3" style="z-index: 9999;"></div>
        <input type="text" value="<?= htmlspecialchars($model['detail']['id_product']) ?>" id="id_product" hidden>

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

    <script>
        // Tunggu sampai dokumen siap
        document.addEventListener('DOMContentLoaded', function () {
            // Ambil elemen dropdown button dan semua item dropdown
            const dropdownButton = document.getElementById('dropdownMenu2');
            const dropdownItems = document.querySelectorAll('.dropdown-menu .dropdown-item');

            // Set default ke "Ulasan Terbaru"
            dropdownButton.textContent = "Ulasan Terbaru";

            // Tambahkan event listener untuk setiap item dropdown
            dropdownItems.forEach(item => {
                item.addEventListener('click', function () {
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
        document.addEventListener('DOMContentLoaded', function () {
            const morePhotosBtn = document.getElementById('morePhotosBtn');
            const reviewPhotosContainer = document.getElementById('reviewPhotos');

            // Jumlah foto yang tersembunyi
            const hiddenPhotosCount = document.querySelectorAll('.hidden-photos .review-photo-pelanggan').length;

            // Update teks pada overlay sesuai jumlah foto yang tersembunyi
            morePhotosBtn.textContent = '+' + hiddenPhotosCount;

            // Ketika overlay diklik, tampilkan semua foto tersembunyi
            morePhotosBtn.addEventListener('click', function () {
                reviewPhotosContainer.classList.toggle('expanded');
            });
        });
    </script>

    <script>
        let currentHarga = <?= $model['detail']['harga'] ?>;
        let maxQty = 0;
        let currentMotif = null; // ⬅️ tambahan: motif aktif sekarang

        function formatRupiah(number) {
            return new Intl.NumberFormat('id-ID', {
                style: 'currency',
                currency: 'IDR',
                minimumFractionDigits: 0
            }).format(number);
        }

        function setActiveWarna(index) {
            document.querySelectorAll('.color-option').forEach(e => e.classList.remove('active'));
            document.querySelectorAll('.color-option')[index].classList.add('active');

            document.getElementById('jumlah-beli').innerText = '1';

            let details = <?= json_encode($model['detail']['details']) ?>;
            let selectedDetail = details[index];
            document.getElementById('id_detail_product').value = selectedDetail.id_detail_product; // ← update ID detail

            updateMotifs(index);
            updateSubtotal();
        }


        function updateMotifs(index) {
            let motifContainer = document.getElementById('motif-container');
            motifContainer.innerHTML = '';

            let details = <?= json_encode($model['detail']['details']) ?>;
            let selectedDetail = details[index];

            let totalQty = 0;
            selectedDetail['motifs'].forEach(motif => totalQty += motif.qty);
            maxQty = totalQty;
            document.getElementById('stock').innerHTML = `Tersedia <span class="text-black">${totalQty}</span> pcs`;

            let firstPolosElement = null;
            let firstAvailableMotif = null;

            selectedDetail['motifs'].forEach(motif => {
                let div = document.createElement('div');
                div.classList.add('col-3');
                div.innerHTML = `
            <div class="color-option motif-option" 
                data-motif='${JSON.stringify(motif)}'
                data-qty="${motif.qty}" 
                onclick="setActiveMotif(this)">
                ${motif.motif}
            </div>`;
                motifContainer.appendChild(div);

                if (motif.motif.toLowerCase() === 'polos') {
                    firstPolosElement = div.querySelector('.motif-option');
                }
                if (!firstAvailableMotif && motif.qty > 0) {
                    firstAvailableMotif = div.querySelector('.motif-option');
                }
            });

            if (firstPolosElement) {
                setActiveMotif(firstPolosElement);
                document.getElementById('btn-tambah').disabled = false;
            } else if (firstAvailableMotif) {
                setActiveMotif(firstAvailableMotif);
                document.getElementById('btn-tambah').disabled = false;
            } else {
                document.getElementById('btn-tambah').disabled = true;
            }
        }

        function setActiveMotif(element) {
            document.querySelectorAll('.motif-option').forEach(e => e.classList.remove('active'));
            element.classList.add('active');

            let motifData = JSON.parse(element.getAttribute('data-motif'));
            currentMotif = motifData;
            document.getElementById('id_motif_produk').value = motifData.id_motif_produk; // ← update ID motif

            let qty = parseInt(element.getAttribute('data-qty'));
            maxQty = qty;
            document.getElementById('stock').innerHTML = `Tersedia <span class="text-black">${qty}</span> pcs`;

            document.getElementById('jumlah-beli').innerText = '1';
            updateSubtotal();
            updateMainAndThumbnailImage();
        }


        function changeQty(change) {
            let jumlahElem = document.getElementById('jumlah-beli');
            let currentQty = parseInt(jumlahElem.innerText);
            let newQty = currentQty + change;

            if (newQty < 1) return;
            if (newQty > maxQty) return;

            jumlahElem.innerText = newQty;
            updateSubtotal();
        }

        function updateSubtotal() {
            let qty = parseInt(document.getElementById('jumlah-beli').innerText);
            let subtotal = qty * currentHarga;
            document.getElementById('subtotal-text').innerText = formatRupiah(subtotal);
        }

        function updateMainAndThumbnailImage() {
            if (!currentMotif) return;

            // Update gambar utama
            document.getElementById('main-product-image').src = "assets/img/product/" + currentMotif.foto_kanan;

            // Update thumbnails
            let thumbnailContainer = document.getElementById('thumbnail-container');
            thumbnailContainer.innerHTML = `
            <div class="col-3">
                <div class="thumbnail active p-1">
                    <img src="assets/img/product/${currentMotif.foto_kanan}" alt="Thumbnail Kanan" class="img-fluid" width="100" height="100" onclick="changeMainImage('${currentMotif.foto_kanan}')">
                </div>
            </div>
            <div class="col-3">
                <div class="thumbnail p-1">
                    <img src="assets/img/product/${currentMotif.foto_kiri}" alt="Thumbnail Kiri" class="img-fluid" width="100" height="100" onclick="changeMainImage('${currentMotif.foto_kiri}')">
                </div>
            </div>
            <div class="col-3">
                <div class="thumbnail p-1">
                    <img src="assets/img/product/${currentMotif.foto_depan}" alt="Thumbnail Depan" class="img-fluid" width="100" height="100" onclick="changeMainImage('${currentMotif.foto_depan}')">
                </div>
            </div>
            <div class="col-3">
                <div class="thumbnail p-1">
                    <img src="assets/img/product/${currentMotif.foto_belakang}" alt="Thumbnail Belakang" class="img-fluid" width="100" height="100" onclick="changeMainImage('${currentMotif.foto_belakang}')">
                </div>
            </div>
        `;
        }

        function changeMainImage(filename) {
            document.getElementById('main-product-image').src = "assets/img/product/" + filename;
            document.querySelectorAll('.thumbnail').forEach(e => e.classList.remove('active'));
            event.target.parentElement.classList.add('active');
        }

        document.addEventListener('DOMContentLoaded', function () {
            let details = <?= json_encode($model['detail']['details']) ?>;

            for (let i = 0; i < details.length; i++) {
                let hasStock = details[i].motifs.some(motif => motif.qty > 0);
                if (hasStock) {
                    setActiveWarna(i);
                    break;
                }
            }
        });
    </script>

    <script>
        document.getElementById('wishlistBtn').addEventListener('click', function () {
            var productId = document.getElementById('id_product').value;

            fetch(`/product/create/wishlist/${productId}`)
                .then(response => response.json())
                .then(data => {
                    showToast(data.message, data.status === 'success' ? 'success' : 'danger');

                    // Ganti ikon jika berhasil atau batalkan wishlist
                    const icon = document.getElementById('wishlistIcon');
                    if (data.status === 'success' && data.wishlisted) {
                        icon.src = 'assets/img/icon/love_wislist.svg';
                    } else {
                        icon.src = 'assets/img/icon/love.svg';
                    }
                })
                .catch(error => {
                    showToast('Terjadi kesalahan saat mengirim permintaan.', 'danger');
                });
        });

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
            formData.append('qty', qty);
            formData.append('id_detail_product', idDetailProduct);
            formData.append('id_motif_produk', idMotifProduk);

            fetch('/keranjang', {
                method: 'POST',
                body: formData
            })
                .then(response => response.json())
                .then(data => {
                    showToast(data.message, data.status === 'success' ? 'success' : 'danger');
                })
                .catch(() => {
                    showToast('Terjadi kesalahan. Coba lagi.', 'danger');
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
        document.addEventListener('DOMContentLoaded', function () {
            var productId = document.getElementById('id_product').value;

            fetch(`/product/create/cekwishlist/${productId}`)
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
                });
        });
    </script>

    <script>
        document.addEventListener('click', function (e) {
            const card = e.target.closest('.product-card');
            if (card) {
                const productId = card.getAttribute('data-id');
                if (productId) {
                    window.location.href = `/product/detail/${productId}`;
                }
            }
        });
    </script>





</body>

</html>