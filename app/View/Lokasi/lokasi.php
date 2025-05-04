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

        <!-- hero slider -->

        <!-- hero slider end -->


        <!-- popular item -->
        <div class="product-area product-area-new">
            <div class="container">
                <div class="row">
                    <div class="col-12 wow fadeInDown mb-0" data-wow-delay=".25s">
                        <div class="site-heading-inline">
                            <h2 class="site-title">Lokasi Furnic</h2>
                        </div>
                    </div>
                </div>
                <div class="tab-content wow fadeInUp" data-wow-delay=".25s" id="item-tabContent">
                    <div class="container" id="product-pagination-container">
                        <div class="container my-5">
                            <div class="row row-cols-1 row-cols-md-3 g-4">
                                <!-- Lokasi 1 -->
                                <div class="col">
                                    <div class="card h-100">
                                        <img src="https://i.imgur.com/NpN8EJf.png" class="card-img-top"
                                            alt="Furnice Alamsutera">
                                        <div class="card-body">
                                            <h5 class="card-title">Furnice Alamsutera</h5>
                                            <p class="card-text">
                                                Buka Senin – Minggu<br>
                                                Pukul 09.00 WIB s/d 20.00 WIB<br><br>
                                                Alam Sutera, Jl. Lingkar Barat No.15 Ruko Westonlane,<br>
                                                Panunggangan Tim., Kec. Pinang,<br>
                                                Kota Tangerang, Banten 15143
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Lokasi 2 -->
                                <div class="col">
                                    <div class="card h-100">
                                        <img src="https://i.imgur.com/NpN8EJf.png" class="card-img-top"
                                            alt="Furnice Alamsutera">
                                        <div class="card-body">
                                            <h5 class="card-title">Furnice Alamsutera</h5>
                                            <p class="card-text">
                                                Buka Senin – Minggu<br>
                                                Pukul 09.00 WIB s/d 20.00 WIB<br><br>
                                                Alam Sutera, Jl. Lingkar Barat No.15 Ruko Westonlane,<br>
                                                Panunggangan Tim., Kec. Pinang,<br>
                                                Kota Tangerang, Banten 15143
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Lokasi 3 -->
                                <div class="col">
                                    <div class="card h-100">
                                        <img src="https://i.imgur.com/C1MH6du.png" class="card-img-top"
                                            alt="Furnice Jogja">
                                        <div class="card-body">
                                            <h5 class="card-title">Furnice Jogja</h5>
                                            <p class="card-text">
                                                Buka Senin – Minggu<br>
                                                Pukul 09.00 WIB s/d 20.00 WIB<br><br>
                                                Jl. Magelang No.Km. 11, Dukuh, Tridadi, Kec. Sleman,<br>
                                                Kabupaten Sleman, Daerah Istimewa Yogyakarta 55511
                                            </p>
                                        </div>
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
                            <h2 class="site-title">Syarat & Ketentuan Furnice</h2>
                        </div>
                    </div>
                </div>
                <div class="tab-content wow fadeInUp" data-wow-delay=".25s" id="item-tabContent">
                    <div class="container">
                        <div class="container my-5">
                            <div class="container my-4">
                                <p>
                                    Lorem Ipsum Dolor Sit Amet, Consectetur Adipisicing Elit, Sed Do Eiusmod Tempor
                                    Incididunt Ut Labore Et Dolore Magna Aliqua.
                                </p>
                                <ol>
                                    <li>
                                        Ut Enim Ad Minim Veniam, Quis Nostrud Exercitation Ullamco Laboris Nisi Ut
                                        Aliquip Ex Ea Commodo Consequat.
                                        <br>Duis Aute Irure Dolor In Reprehenderit In Voluptate Velit Esse Cillum Dolore
                                        Eu Fugiat Nulla Pariatur.
                                    </li>
                                    <li>
                                        Excepteur Sint Occaecat Cupidatat Non Proident, Sunt In Culpa Qui Officia
                                        Deserunt Mollit Anim Id Est Laborum
                                    </li>
                                    <li>
                                        Lorem Ipsum Dolor Sit Amet, Consectetur Adipisicing Elit, Sed Do Eiusmod Tempor
                                        Incididunt Ut Labore Et Dolore Magna Aliqua.
                                    </li>
                                    <li>
                                        Ut Enim Ad Minim Veniam, Quis Nostrud Exercitation Ullamco Laboris Nisi Ut
                                        Aliquip Ex Ea Commodo Consequat.
                                    </li>
                                    <li>
                                        Duis Aute Irure Dolor In Reprehenderit In Voluptate Velit Esse Cillum Dolore Eu
                                        Fugiat Nulla Pariatur.
                                        Excepteur Sint Occaecat Cupidatat Non Proident, Sunt In Culpa Qui Officia
                                        Deserunt Mollit Anim Id Est Laborum.
                                        <br>Lorem Ipsum Dolor Sit Amet, C
                                    </li>
                                </ol>
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
                            <h2 class="site-title">Pertanyaan yang sering diajukan</h2>
                        </div>
                    </div>
                </div>
                <div class="tab-content wow fadeInUp" data-wow-delay=".25s" id="item-tabContent">
                    <div class="container">
                        <div class="accordion" id="faqAccordion">

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne">
                                        Exercitation Ullamco Laboris Nisi Ut Aliquip Ex Ea Commodo Consequat ?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse"
                                    data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        Ini adalah jawaban atau isi dari pertanyaan pertama. Kontennya bisa kamu
                                        sesuaikan.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo">
                                        Exercitation Ullamco Laboris Nisi Ut Aliquip Ex Ea Commodo Consequat ?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse"
                                    data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        Konten jawaban kedua ditampilkan di sini. Kamu bisa menyesuaikan isinya.
                                    </div>
                                </div>
                            </div>

                            <!-- Tambahkan item lainnya -->

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
    </script>
</body>

</html>