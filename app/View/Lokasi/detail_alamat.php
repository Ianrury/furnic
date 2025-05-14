<?php
require_once __DIR__ . '/../../app/env.php';
$apiBaseUrl = env('API_BASE_URL');
$lokasi_store = $_GET['lokasi'];

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

        ol {
            padding-left: 1.2em;
        }

        li {
            margin-bottom: 0.75em;
            line-height: 1.6;
        }

        p {
            font-weight: 500;
        }

        .accordion-button::after {
            transition: transform 0.2s ease-in-out;
        }

        .accordion-button:not(.collapsed)::after {
            transform: rotate(180deg);
            /* panah menghadap atas saat dibuka */
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

        <!-- shop-area -->
        <?php if ($lokasi_store == 'Alam Sutera') { ?>
            <div class="container pt-90 pb-90">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="site-heading text-left">
                            <h2 class="site-title">Furnice <?= $lokasi_store ?></h2>
                        </div>
                    </div>
                </div>
                <div class="shop-item-wrap item-list">
                    <div class="row g-4">
                        <div class="col-md-12">
                            <div class="product-item">
                                <div class="row">
                                    <div class="col-7">
                                        <div class="product-img" style="width: 90%;">
                                            <img class="img-fluid" src="assets/img/lokasistore/3.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <div class="product-content">
                                            <h3 class="product-title text-dark">Selamat Datang di Furnice Alam Sutera</h3>
                                            <p>Di Alam Sutera Yogyakarta, Anda akan menemukan lebih dari 55 solusi ruangan yang diatur secara cerdas dan tiga rumah lengkap penuh inspirasi, semua terdapat di dalam toko yang berdiri dalam bangunan dua tingkat. Meliputi 35.000 meter persegi, termasuk sebuah restoran dengan 700 kursi dan lebih dari 1.000 ruang parkir, untuk mengubah rumah Anda menjadi tempat yang paling penting di dunia.​</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- detail alamat -->
                <div class="container">
                    <div class="row g-4">
                        <div class="col-6">
                            <div class="pt-20">
                                <ul>
                                    <li class="text-dark fw-bold" style="text-decoration: underline;">Jam Operasional</li>
                                    <li>Senin - Minggu & libur nasional: 10.00 - 22.00 WIB</li>
                                </ul>
                                <ul>
                                    <li class="text-dark fw-bold" style="text-decoration: underline;">Store</li>
                                    <li>Senin - Minggu: 10.00 - 22.00 WIB</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="pt-20">
                                <ul>
                                    <li class="text-dark fw-bold" style="text-decoration: underline;">Alamat</li>
                                    <li>Alam Sutera, Jl. Lingkar Barat No.15 Ruko Westonlane, Panunggangan Tim., Kec. Pinang, Kota Tangerang, Banten 15143</li>
                                </ul>
                                <ul>
                                    <li class="text-dark fw-bold" style="text-decoration: underline;">Hubungi Kami</li>
                                    <li>Phone: 08119018800</li>
                                    <li>email: furnicefurnishing.alamsutera@gmail.com</li>
                                </ul>
                            </div>
                            <div class="contact-map container pt-20 pb-50 border-1">
                                <iframe width="100%" height="500" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                                    src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDR-V1XgHw6Z98uRP_szB4qodB47Bstyqw&q=-6.228995493490095, 106.65250814142586">
                                </iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- detail alamat end -->

            </div>
        <?php } elseif ($lokasi_store == 'Yogyakarta') { ?>
            <div class="container pt-90 pb-90">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="site-heading text-left">
                            <h2 class="site-title">Furnice <?= $lokasi_store ?></h2>
                        </div>
                    </div>
                </div>
                <div class="shop-item-wrap item-list">
                    <div class="row g-4">
                        <div class="col-md-12">
                            <div class="product-item">
                                <div class="row">
                                    <div class="col-7">
                                        <div class="product-img" style="width: 90%;">
                                            <img class="img-fluid" src="assets/img/brand/1.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <div class="product-content">
                                            <h3 class="product-title text-dark">Selamat Datang di Furnice Yogyakarta</h3>
                                            <p>Di Furnice Yogyakarta, Anda akan menemukan lebih dari 55 solusi ruangan yang diatur secara cerdas dan tiga rumah lengkap penuh inspirasi, semua terdapat di dalam toko yang berdiri dalam bangunan dua tingkat. Meliputi 35.000 meter persegi, termasuk sebuah restoran dengan 700 kursi dan lebih dari 1.000 ruang parkir, untuk mengubah rumah Anda menjadi tempat yang paling penting di dunia.​</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- detail alamat -->
                <div class="container">
                    <div class="row g-4">
                        <div class="col-6">
                            <div class="pt-20">
                                <ul>
                                    <li class="text-dark fw-bold" style="text-decoration: underline;">Jam Operasional</li>
                                    <li>Senin - Minggu & libur nasional: 10.00 - 22.00 WIB</li>
                                </ul>
                                <ul>
                                    <li class="text-dark fw-bold" style="text-decoration: underline;">Store</li>
                                    <li>Senin - Minggu: 10.00 - 22.00 WIB</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="pt-20">
                                <ul>
                                    <li class="text-dark fw-bold" style="text-decoration: underline;">Alamat</li>
                                    <li>Jl. Magelang No.Km. 11, Dukuh, Tridadi, Kec. Sleman, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55511</li>
                                </ul>
                                <ul>
                                    <li class="text-dark fw-bold" style="text-decoration: underline;">Hubungi Kami</li>
                                    <li>Phone: 08119018800</li>
                                    <li>email: furnicefurnishing.alamsutera@gmail.com</li>
                                </ul>
                            </div>
                            <div class="contact-map container pt-20 pb-50 border-1">
                                <iframe width="100%" height="500" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                                    src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDR-V1XgHw6Z98uRP_szB4qodB47Bstyqw&q=-7.710176066990484, 110.35623262452886">
                                </iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- detail alamat end -->

            </div>
        <?php } ?>

        <!-- shop-area end -->


    </main>

    <!-- footer area -->
    <?php include __DIR__ . '/../templates/footer.php'; ?>
    <!-- footer area end -->



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
        const API_BASE_URL = "<?= $apiBaseUrl ?>";
    </script>
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

        // Data produk (untuk contoh)
    </script>
</body>

</html>