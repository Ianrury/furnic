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
                                <div class="custom-col rounded-4 panjang-card" style="border: 2px solid #D9D9D9;">
                                    <div class="px-4 py-3">
                                        <div>
                                            <h4 class="text-black text-header-informasi">Alamat Pengirim</h4>
                                        </div>
                                        <div class="text-alamat-rumah my-2">
                                            <p>Rumah</p>
                                            <p>Ian Roery</p>
                                            <p>0812729293292</p>
                                            <p>Jl Godean Km 5 Rt 3 Rw 20, Modinan, Banyuraden, Kec. Gamping, Kabupaten
                                                Sleman, Daerah Istimewa Yogyakarta 55293</p>
                                        </div>
                                        <div>
                                            <button class="button-edit">Edit Alamat</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Detail pengiriman -->
                            <div class="col-lg-4 pe-0">
                                <div class="custom-col rounded-4 panjang-card" style="border: 2px solid #D9D9D9;">
                                    <div class="px-4 py-3">
                                        <div>
                                            <h4 class="text-black text-header-informasi">Jenis Pengiriman</h4>
                                        </div>
                                        <div class="text-alamat-rumah my-2">
                                            <div class="d-flex justify-content-between gap-1">
                                                <div>
                                                    <button class="button-pengiriman active" id="btn-antar">Antar ke
                                                        Alamat</button>
                                                </div>
                                                <div>
                                                    <button class="button-pengiriman" id="btn-ambil">Ambil di
                                                        Tempat</button>
                                                </div>
                                            </div>

                                            <!-- Container untuk konten dinamis -->
                                            <div class="pt-3 px-2" id="pengiriman-content">
                                                <!-- Default aktif: Antar ke Alamat -->
                                                <h6 class="text-black header-pilih-jasa">Pilih jasa Pengiriman</h6>
                                                <div
                                                    class="d-flex justify-content-between align-items-center w-100 mt-2">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <input type="checkbox" id="flexCheckDefault">
                                                        <div class="text-detail-jasa">Reguler (2 - 5 hari)</div>
                                                    </div>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <div class="text-danger old-price fw-normal">
                                                            <sup>Rp</sup><span
                                                                class="text-decoration-line-through">30.000</span>
                                                        </div>
                                                        <div class="text-nominal text-black">gratis</div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="d-flex justify-content-between align-items-center w-100 mt-2">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <input type="checkbox" id="flexCheckDefault">
                                                        <div class="text-detail-jasa">Reguler (2 - 5 hari)</div>
                                                    </div>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <div class="text-danger old-price fw-normal">
                                                            <sup>Rp</sup><span
                                                                class="text-decoration-line-through">30.000</span>
                                                        </div>
                                                        <div class="text-nominal text-black">gratis</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="row mt-2">
                            <!-- List Produk -->
                            <div class="col-12 px-0">
                                <div class="d-flex flex-column gap-3">
                                    <!-- Mulai looping produk di sini -->
                                    <div class="rounded-4" style="border: 2px solid #D9D9D9;">
                                        <!-- Header Row -->
                                        <div class="w-100 p-4 d-flex align-items-center">
                                            <div style="width: 50%; padding-left: 15px;" class="text-header">Product
                                            </div>
                                            <div style="width: 15%; text-align: center;" class="text-header">Qty</div>
                                            <div style="width: 15%; text-align: center;" class="text-header">Harga</div>
                                            <div style="width: 20%; text-align: center;" class="text-header">Total</div>
                                        </div>

                                        <?php foreach ($model['data'] as $item): ?>
                                            <div class="w-100 p-4 pt-0 d-flex align-items-center">
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
                                                                class=" img-fluid product-image-keranjang"
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
                                        <div class="px-4">
                                            <hr class="hr-tebal">
                                        </div>
                                        <div class="row">
                                            <!-- Card A: Hanya muncul di layar kecil (<900px) dan isinya kosong -->
                                            <div class="col-lg-6 border-0">
                                                <div class=" p-4 bg-white">
                                                    <!-- Tidak ada isi di sini -->
                                                </div>
                                            </div>

                                            <!-- Card B: Selalu terlihat -->
                                            <div class="col-lg-6">
                                                <div class="px-4 py-2 bg-white">
                                                    <!-- Subtotal -->
                                                    <div>
                                                        <h1 class="fw-bold text-black" style="font-size: 16px;">Detail
                                                            Rincian Pembayaran</h1>
                                                        <div class="order-summary">
                                                            <div class="summary-label">Subtotal Harga</div>
                                                            <div class="summary-value"><span
                                                                    class="currency-symbol">Rp</span> 108.000.000</div>

                                                            <div class="summary-label">Total Diskon</div>
                                                            <div class="summary-value"><span
                                                                    class="currency-symbol">Rp</span> 8.000.000</div>

                                                            <div class="summary-label">Total Ongkir</div>
                                                            <div class="summary-value"><span
                                                                    class="currency-symbol">Rp</span> 500.000</div>
                                                        </div>
                                                        <hr class="hr-tebal" style="margin-top: 10px;">
                                                        <div class="order-summary" style="font-weight: bold;">
                                                            <div class="summary-label">Total Pembayaran</div>
                                                            <div class="summary-value"><span
                                                                    class="currency-symbol">Rp</span> 500.000</div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="px-4 mb-3">
                                            <button class="btn btn-buy w-100 rounded-3 fw-bold w-100"
                                                style="font-size: 14px;">Bayar</button>
                                        </div>


                                        <!-- Selesai 1 produk -->
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

    <!-- Script -->
    <script>
        const btnAntar = document.getElementById('btn-antar');
        const btnAmbil = document.getElementById('btn-ambil');
        const content = document.getElementById('pengiriman-content');

        // Fungsi render konten
        function renderContent(type) {
            if (type === 'antar') {
                content.innerHTML = `
        <h6 class="text-black header-pilih-jasa">Pilih jasa Pengiriman</h6>
        <div class="d-flex justify-content-between align-items-center w-100 mt-2">
          <div class="d-flex align-items-center gap-2">
            <input type="checkbox" id="flexCheckDefault">
            <div class="text-detail-jasa">Reguler (2 - 5 hari)</div>
          </div>
          <div class="d-flex align-items-center gap-3">
            <div class="text-danger old-price fw-normal">
              <sup>Rp</sup><span class="text-decoration-line-through">30.000</span>
            </div>
            <div class="text-nominal text-black">gratis</div>
          </div>
        </div>`;
            } else {
                content.innerHTML = `
        <h6 class="text-black header-pilih-jasa">Pilih jasa Pengiriman</h6>
        <div class="d-flex align-items-start gap-2 w-100 mt-2">
          <input type="checkbox" id="flexCheckDefault" style="margin-top: 4px;">
          <div class="d-flex flex-column">
            <div class="text-detail-jasa">Furnic Jogja</div>
            <div class="text-detail-jasa">Jln magelang km3 Lorem ipsum dolor sit amet consectetur.</div>
          </div>
        </div>
         <div class="d-flex align-items-start gap-2 w-100 mt-2">
          <input type="checkbox" id="flexCheckDefault" style="margin-top: 4px;">
          <div class="d-flex flex-column">
            <div class="text-detail-jasa">Furnic Jogja</div>
            <div class="text-detail-jasa">Jln magelang km3 Lorem ipsum dolor sit amet consectetur.</div>
          </div>
        </div>
        `;
            }
        }

        // Event click
        btnAntar.addEventListener('click', () => {
            renderContent('antar');
            btnAntar.classList.add('active');
            btnAmbil.classList.remove('active');
        });

        btnAmbil.addEventListener('click', () => {
            renderContent('ambil');
            btnAmbil.classList.add('active');
            btnAntar.classList.remove('active');
        });
    </script>


</body>

</html>