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
        <!-- <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="/">Beranda</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="/product/wishlist">Wishlist Product</a></li>
                </ol>
            </nav>
        </div> -->
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="/">Beranda</a></li>
                    <!-- <li class="breadcrumb-item"><a href="/product">Product</a></li> -->
                    <li class="breadcrumb-item active" aria-current="page">Pesanan</li>
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

        <div class="product-area product-area-new">
            <div class="container">
                <div class="row">
                    <div class="col-12 wow fadeInDown mb-0" data-wow-delay=".25s">
                        <div class="site-heading-inline">
                            <h2 class="site-title">Pesanan Belanja</h2>
                        </div>
                    </div>
                </div>
                <div class="tab-content wow fadeInUp" data-wow-delay=".25s" id="item-tabContent">
                    <div class="container">
                        <div class="row g-3">
                            <!-- List Produk -->
                            <div class="col-lg-8 ps-0">
                                <div class="custom-col rounded-4" style="border: 1px solid #D9D9D9;">
                                    <h4>List Produk</h4>
                                    <p>Konten untuk list produk Anda</p>
                                </div>
                            </div>

                            <!-- Detail Pembayaran -->
                            <div class="col-lg-4 pe-0">
                                <div class="custom-col rounded-4" style="border: 1px solid #D9D9D9;">
                                    <h4>Detail Pembayaran</h4>
                                    <p>Konten untuk detail pembayaran</p>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-2">
                            <!-- List Produk -->
                            <div class="col-12 px-0">
                                <div class="d-flex flex-column gap-3">
                                    <!-- Mulai looping produk di sini -->
                                    <div class="rounded-4" style="border: 1px solid #D9D9D9;">
                                        <!-- Header Row -->
                                        <div class="w-100 p-3 d-flex align-items-center">
                                            <div style="width: 50%; padding-left: 15px;" class="text-header">Product
                                            </div>
                                            <div style="width: 15%; text-align: center;" class="text-header">Qty</div>
                                            <div style="width: 15%; text-align: center;" class="text-header">Harga</div>
                                            <div style="width: 20%; text-align: center;" class="text-header">Total</div>
                                        </div>

                                        <?php foreach ($model['data'] as $item): ?>
                                            <div class="w-100 p-3 pt-0 d-flex align-items-center">
                                                <!-- Product Column -->
                                                <div style="width: 50%;" class="d-flex gap-3 align-items-center">
                                                    <div class="card shadow position-relative rounded-4 p-2">
                                                        <!-- Corner Ribbon -->
                                                        <div class="position-absolute ribbon-wrapper-keranjang">
                                                            <div
                                                                class="ribbon-keranjang text-white text-uppercase fw-bold text-center">
                                                                New Product
                                                            </div>
                                                        </div>
                                                        <!-- Product Image -->
                                                        <div class="text-center pt-3">
                                                            <img src="assets/img/product/<?= htmlspecialchars($item['foto']) ?>"
                                                                class="img-fluid product-image-keranjang"
                                                                alt="Product Image">
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <h5 class="title-keranjang">
                                                            <?= htmlspecialchars($item['nama_product']) ?>
                                                        </h5>
                                                        <p class="name-keranjang">
                                                            <?= htmlspecialchars($item['deskripsi']) ?>
                                                        </p>
                                                        <ul class="list-unstyled m-0 p-0">
                                                            <li class="motif-keranjang">
                                                                <span class="label-keranjang">Warna</span> : <span
                                                                    class="value-keranjang"><?= htmlspecialchars($item['warna']) ?></span>
                                                            </li>
                                                            <li class="motif-keranjang">
                                                                <span class="label-keranjang">Motif</span> : <span
                                                                    class="value-keranjang"><?= htmlspecialchars($item['motif']) ?></span>
                                                            </li>
                                                        </ul>
                                                        <div class="d-flex flex-wrap align-items-baseline">
                                                            <div class="me-2">
                                                                <span class="fw-bold title-keranjang">
                                                                    <?php
                                                                    $harga_normal = $item['harga']; // harga normal dari database
                                                                    $diskon = $item['diskon']; // diskon dari database, bisa null atau 0
                                                                
                                                                    // Jika diskon ada (lebih dari 0), hitung harga setelah diskon
                                                                    if ($diskon > 0):
                                                                        // Menghitung nominal diskon
                                                                        $nominal_diskon = ($diskon / 100) * $harga_normal;
                                                                        // Menghitung harga setelah diskon
                                                                        $harga_setelah_diskon = $harga_normal - $nominal_diskon;
                                                                    else:
                                                                        // Jika tidak ada diskon, harga tetap harga normal
                                                                        $harga_setelah_diskon = $harga_normal;
                                                                    endif;
                                                                    ?>

                                                                    <sup class="fw-normal">Rp</sup>
                                                                    <?= number_format($harga_setelah_diskon, 0, ',', '.') ?>
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <?php
                                                                $harga_normal = $item['harga']; // harga normal dari database
                                                                $diskon = $item['diskon']; // diskon dari database, bisa null atau 0
                                                            
                                                                // Jika diskon ada (lebih dari 0), tampilkan harga lama dengan diskon
                                                                if ($diskon > 0):
                                                                    // Menghitung nominal diskon
                                                                    $nominal_diskon = ($diskon / 100) * $harga_normal;
                                                                    ?>
                                                                    <div>
                                                                        <span class="fw-normal text-danger old-price">
                                                                            <sup>Rp</sup>
                                                                            <span class="text-decoration-line-through">
                                                                                <?= number_format($nominal_diskon, 0, ',', '.') ?>
                                                                            </span>
                                                                        </span>
                                                                    </div>
                                                                    <?php
                                                                endif;
                                                                ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Quantity Column -->
                                                <div style="width: 15%; text-align: center;">
                                                    <span class="fw-normal text-black" style="font-size: 14px;"
                                                        id="qty-<?= $item['id_cart'] ?>"
                                                        data-max="<?= $item['qty_motif'] ?>"
                                                        data-price="<?= ($item['diskon'] > 0) ? ($item['harga'] - ($item['diskon'] / 100 * $item['harga'])) : $item['harga'] ?>">
                                                        <?= ($item['qty_cart'] > $item['qty_motif']) ? $item['qty_motif'] : $item['qty_cart'] ?>
                                                    </span>
                                                </div>

                                                <!-- Price Column -->
                                                <div style="width: 15%; text-align: center;">
                                                    <?php
                                                    // Menghitung harga setelah diskon (jika ada)
                                                    $harga_normal = $item['harga']; // Harga normal dari database
                                                    $diskon = $item['diskon']; // Diskon dari database
                                                
                                                    // Jika diskon ada, hitung harga setelah diskon
                                                    if ($diskon > 0) {
                                                        $nominal_diskon = ($diskon / 100) * $harga_normal; // Nominal diskon
                                                        $harga_setelah_diskon = $harga_normal - $nominal_diskon; // Harga setelah diskon
                                                    } else {
                                                        $harga_setelah_diskon = $harga_normal; // Tidak ada diskon, gunakan harga normal
                                                    }
                                                    ?>
                                                    <span class="fw-bold title-keranjang">
                                                        <sup class="fw-normal">Rp</sup>
                                                        <?= number_format($harga_setelah_diskon, 0, ',', '.') ?>
                                                    </span>
                                                </div>

                                                <!-- Total Column -->
                                                <div style="width: 20%; text-align: center;">
                                                    <?php
                                                    // Menghitung qty yang valid (tidak melebihi qty_motif)
                                                    $qty = ($item['qty_cart'] > $item['qty_motif']) ? $item['qty_motif'] : $item['qty_cart'];

                                                    // Menghitung harga setelah diskon (jika ada)
                                                    $harga_normal = $item['harga']; // Harga normal dari database
                                                    $diskon = $item['diskon']; // Diskon dari database
                                                
                                                    // Jika diskon ada, hitung harga setelah diskon
                                                    if ($diskon > 0) {
                                                        $nominal_diskon = ($diskon / 100) * $harga_normal; // Nominal diskon
                                                        $harga_setelah_diskon = $harga_normal - $nominal_diskon; // Harga setelah diskon
                                                    } else {
                                                        $harga_setelah_diskon = $harga_normal; // Tidak ada diskon, gunakan harga normal
                                                    }

                                                    // Hitung total harga
                                                    $total = $qty * $harga_setelah_diskon;
                                                    ?>
                                                    <span id="total-<?= $item['id_cart'] ?>"
                                                        class="fw-bold title-keranjang total-produk-detail">
                                                        <sup class="fw-normal">Rp</sup>
                                                        <?= number_format($total, 0, ',', '.') ?>
                                                    </span>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>


                                    <!-- Selesai 1 produk -->
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>

        <div class="newsletter-area product-area">
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
                        <div class="row flex-nowrap overflow-auto g-4 pb-3">
                            <div class="col-6 col-md-4 col-lg-3">
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
                            <div class="col-6 col-md-4 col-lg-3">
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
                            <div class="col-6 col-md-4 col-lg-3">
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
                            <div class="col-6 col-md-4 col-lg-3">
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
        <div id="toastContainer" class="position-fixed top-0 end-0 p-3" style="z-index: 9999;"></div>
    </main>


    <!-- footer area -->
    <?php include __DIR__ . '/../templates/footer.php'; ?>
    <!-- footer area end -->

    <!-- js -->
    <?php include __DIR__ . '/../Scripts/script.php'; ?>
    <!-- js end -->
    <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/js/jquery-3.7.1.min.js"></script>
    <script src="assets/js/modernizr.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="assets/js/imagesloaded.pkgd.min.js"></script> -->
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
        document.addEventListener("DOMContentLoaded", function () {
            // Variable to store selected product IDs
            let selectedProductIds = [];

            // Format currency in Rupiah
            function formatRupiah(angka) {
                return angka.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
            }

            // Show toast notification
            function showToast(message, type = 'success') {
                let toastHTML = `
            <div class="toast align-items-center text-bg-${type} border-0 shadow" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="3000">
                <div class="d-flex">
                    <div class="toast-body">${message}</div>
                    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
            </div>
        `;
                document.getElementById('toastContainer').insertAdjacentHTML('beforeend', toastHTML);
                new bootstrap.Toast(document.querySelector('.toast:last-child')).show();
            }

            // Calculate and update the total payment
            function updateTotalPembayaran() {
                let subtotal = 0;
                let totalDiskon = 0;
                let total = 0;
                selectedProductIds = []; // Reset selected products

                document.querySelectorAll('.item-checkbox').forEach(function (checkbox) {
                    if (checkbox.id === 'checkAll') return; // Skip the "Select All" checkbox

                    const id = checkbox.dataset.id;
                    const harga = parseInt(checkbox.dataset.price);
                    const diskonPersen = parseFloat(checkbox.dataset.discount);
                    const qty = parseInt(document.getElementById('qty-' + id).textContent);
                    const diskonNominal = (diskonPersen / 100) * harga;
                    const hargaSetelahDiskon = harga - diskonNominal;

                    // If product is checked, calculate and display its total
                    if (checkbox.checked) {
                        subtotal += harga * qty;
                        totalDiskon += diskonNominal * qty;
                        total += hargaSetelahDiskon * qty;
                        selectedProductIds.push(id); // Add ID to selected products array

                        const elTotalProduk = document.getElementById('total-' + id);
                        if (elTotalProduk) {
                            elTotalProduk.innerHTML = `<sup class="fw-normal">Rp</sup> ${formatRupiah(hargaSetelahDiskon * qty)}`;
                        }
                    } else {
                        // If not checked, show original price
                        const elTotalProduk = document.getElementById('total-' + id);
                        if (elTotalProduk) {
                            elTotalProduk.innerHTML = `<sup class="fw-normal">Rp</sup> ${formatRupiah(hargaSetelahDiskon * qty)}`;
                        }
                    }
                });

                // Update totals in the summary section
                document.getElementById('subtotal-harga').innerHTML = '<sup class="fw-normal">Rp</sup> ' + formatRupiah(subtotal);
                document.getElementById('diskon-produk').innerHTML = '<sup class="fw-normal">Rp</sup> ' + formatRupiah(totalDiskon);
                document.getElementById('total-pembayaran').innerHTML = '<sup class="fw-normal">Rp</sup> ' + formatRupiah(total);

                // Show or hide delete button based on selections
                toggleDeleteButton();
            }

            // Toggle visibility of delete button
            function toggleDeleteButton() {
                const deleteContainer = document.getElementById('deleteSelectedContainer');
                if (selectedProductIds.length > 0) {
                    deleteContainer.classList.remove('d-none');
                } else {
                    deleteContainer.classList.add('d-none');
                }
            }

            // Handle "Select All" checkbox
            const checkAllBox = document.getElementById('checkAll');
            if (checkAllBox) {
                checkAllBox.addEventListener('change', function () {
                    const isChecked = this.checked;
                    document.querySelectorAll('.item-checkbox').forEach(function (checkbox) {
                        if (checkbox.id !== 'checkAll') {
                            checkbox.checked = isChecked;
                        }
                    });
                    updateTotalPembayaran();
                });
            }

            // Handle individual checkboxes
            document.querySelectorAll('.item-checkbox').forEach(function (checkbox) {
                if (checkbox.id !== 'checkAll') {
                    checkbox.addEventListener('change', function () {
                        updateTotalPembayaran();

                        // Update "Select All" checkbox state
                        const allChecked = Array.from(document.querySelectorAll('.item-checkbox:not(#checkAll)')).every(box => box.checked);
                        const checkAllBox = document.getElementById('checkAll');
                        if (checkAllBox) {
                            checkAllBox.checked = allChecked;
                        }
                    });
                }
            });

            // Handle quantity increase buttons
            document.querySelectorAll('.increase-qty').forEach(function (btn) {
                btn.addEventListener('click', function () {
                    const id = btn.dataset.id;
                    const qtyEl = document.getElementById('qty-' + id);
                    let qty = parseInt(qtyEl.textContent);
                    const max = parseInt(qtyEl.dataset.max);

                    if (qty < max) {
                        qty++;
                        qtyEl.textContent = qty;
                        updateTotalPembayaran();
                    } else {
                        showToast('Jumlah maksimal tercapai', 'warning');
                    }
                });
            });

            // Handle quantity decrease buttons
            document.querySelectorAll('.decrease-qty').forEach(function (btn) {
                btn.addEventListener('click', function () {
                    const id = btn.dataset.id;
                    const qtyEl = document.getElementById('qty-' + id);
                    let qty = parseInt(qtyEl.textContent);

                    if (qty > 1) {
                        qty--;
                        qtyEl.textContent = qty;
                        updateTotalPembayaran();
                    } else {
                        showToast('Jumlah minimal adalah 1', 'warning');
                    }
                });
            });

            // Handle delete selected products
            const btnDeleteSelected = document.getElementById('btnDeleteSelected');
            if (btnDeleteSelected) {
                btnDeleteSelected.addEventListener('click', function () {
                    if (selectedProductIds.length > 0) {
                        // Langsung panggil deleteSelectedProducts() tanpa konfirmasi
                        deleteSelectedProducts();
                    }
                });
            }


            // Delete selected products via AJAX
            function deleteSelectedProducts() {
                // Create form data for AJAX request
                const formData = new FormData();
                formData.append('product_ids', JSON.stringify(selectedProductIds));

                fetch('/deletekeranjang', {
                    method: 'POST',
                    body: formData
                })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            // Apply fade-out animation to deleted items
                            selectedProductIds.forEach(id => {
                                const productElement = document.getElementById('checkbox-' + id).closest('.d-flex.gap-3.align-items-start');
                                if (productElement) {
                                    // Apply animation
                                    productElement.style.transition = 'opacity 0.5s ease';
                                    productElement.style.opacity = '0';

                                    // Remove element after animation completes
                                    setTimeout(() => {
                                        productElement.remove();

                                        // Update UI elements if cart is now empty
                                        const remainingProducts = document.querySelectorAll('.item-checkbox:not(#checkAll)');
                                        if (remainingProducts.length === 0) {
                                            // If no products left, display empty cart message or redirect
                                            const cartContainer = document.querySelector('.cart-container');
                                            if (cartContainer) {
                                                cartContainer.innerHTML = `
                                        <div class="text-center py-5">
                                            <h4>Keranjang belanja Anda kosong</h4>
                                            <p>Silakan tambahkan produk ke keranjang</p>
                                            <a href="/products" class="btn btn-primary mt-3">Belanja Sekarang</a>
                                        </div>
                                    `;
                                            }
                                        }
                                    }, 500);
                                }
                            });

                            // Reset selected products
                            selectedProductIds = [];
                            toggleDeleteButton();

                            // Update total payment after deletion
                            setTimeout(() => {
                                updateTotalPembayaran();
                            }, 600);

                            // Show success message
                            showToast('Produk berhasil dihapus dari keranjang', 'success');
                        } else {
                            showToast('Gagal menghapus produk: ' + (data.message || 'Terjadi kesalahan'), 'danger');
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        showToast('Terjadi kesalahan saat menghapus produk', 'danger');
                    });
            }

            // Initialize the UI state
            updateTotalPembayaran();
        });
    </script>


</body>

</html>