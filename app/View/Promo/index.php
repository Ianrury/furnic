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
        <div class="hero-section mt-3 hs-1">
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
        <div class="product-area product-area-new">
            <div class="container">
                <div class="row">
                    <div class="col-12 wow fadeInDown mb-0 d-flex justify-content-between" data-wow-delay=".25s">
                        <div class="site-heading-inline">
                            <h2 class="site-title">Promo Terbaru</h2>
                        </div>
                        <a href="#" class="small view-more">View More <i class="fas fa-angle-double-right"></i></a>
                    </div>
                </div>
                <div class="tab-content wow fadeInUp" data-wow-delay=".25s" id="item-tabContent">
                    <div class="container">
                        <div class="row row-cols-2 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 new-product">
                            <?php if (!empty($model['product'])): ?>
                                <?php foreach ($model['product'] as $product): ?>
                                    <div class="col">
                                        <div class="card shadow position-relative rounded-4 p-2 product-card"
                                            data-id="<?= $product['id_product'] ?>" style="cursor:pointer;">
                                            <!-- Corner Ribbon -->
                                            <div class="position-absolute ribbon-wrapper">
                                                <div class="ribbon text-uppercase fw-bold text-center"
                                                    style="color: #FF0000;background-color: #FFFB2D;">
                                                    Sale
                                                </div>
                                            </div>

                                            <!-- Product Image -->
                                            <div class="text-center pt-3">
                                                <img src="assets/img/product/kursi/<?= htmlspecialchars($product['foto']) ?>"
                                                    class="img-fluid product-image" alt="Product Image">
                                            </div>
                                            <div class="bodykartu">
                                                <div class="d-flex flex-column">
                                                    <!-- Product Details -->
                                                    <div>
                                                        <p class="card-title text-truncate  product-title">
                                                            <?= htmlspecialchars($product['nama_product']) ?>
                                                        </p>
                                                        <p class="card-text text-truncate product-desc">
                                                            <?= htmlspecialchars($product['deskripsi']) ?>
                                                        </p>
                                                        <div class="d-flex gap-1 align-items-center">
                                                            <i class="bi bi-star-fill text-warning small-icon"></i>
                                                            <i class="bi bi-star-fill text-warning small-icon"></i>
                                                            <i class="bi bi-star-fill text-warning small-icon"></i>
                                                            <i class="bi bi-star-fill text-warning small-icon"></i>
                                                            <i class="bi bi-star-fill text-warning small-icon"></i>
                                                            <small
                                                                class="text-muted fst-italic ms-1 sold-text"><?= $product['qty'] ?>
                                                                terjual</small>
                                                        </div>
                                                    </div>

                                                    <!-- Price Section -->
                                                    <div class="mt-auto">
                                                        <div class="d-flex flex-wrap align-items-baseline">
                                                            <div class="me-2">
                                                                <span class="fw-bold price">
                                                                    <sup class="fw-normal">Rp</sup>
                                                                    <?= number_format($product['harga'] ?? 0, 0, ',', '.') ?>
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="fw-normal text-danger old-price">
                                                                    <sup>Rp</sup>
                                                                    <span
                                                                        class="text-decoration-line-through"><?= number_format(($product['harga'] ?? 0) + 100000, 0, ',', '.') ?></span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <p class="text-center">Promo tidak tersedia.</p>
                            <?php endif; ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="newsletter-area pt-40">
            <div>
                <div class="container wow fadeInUp rounded-4" data-wow-delay=".25s">
                    <img src="assets/img/gallery/promo-bca.jpg" width="100%" alt="">
                </div>
            </div>
        </div>

        <!-- popular item -->
        <div class="product-area product-area-new">
            <div class="container">
                <div class="row">
                    <div class="col-12 wow fadeInDown mb-0" data-wow-delay=".25s">
                        <div class="site-heading-inline">
                            <h2 class="site-title">Promo Furnice</h2>
                        </div>
                    </div>
                </div>
                <div class="tab-content wow fadeInUp" data-wow-delay=".25s" id="item-tabContent">
                    <div class="container" id="product-pagination-container">
                        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 g-4  ">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- popular item end -->

        <!-- newsletter area -->
        <div class="newsletter-area pt-40">
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
        const products = [
            {
                title: "CT-IMP Matto Light Brown",
                description: "Meja ruang tamu aesthetic.",
                price: "500.000",
                oldPrice: "600.000",
                rating: 5,
                sold: 300,
                image: "assets/img/gallery/promo1.jpg",
                isNew: true
            },
            {
                title: "Scandinavian Coffee Table",
                description: "Meja kopi minimalis modern.",
                price: "450.000",
                oldPrice: "550.000",
                rating: 4,
                sold: 250,
                image: "assets/img/gallery/promo2.jpg",
                isNew: false
            },
            {
                title: "Woody Chair Classic",
                description: "Kursi kayu dengan bantalan nyaman.",
                price: "350.000",
                oldPrice: "400.000",
                rating: 5,
                sold: 420,
                image: "assets/img/gallery/promo3.jpg",
                isNew: true
            },
            {
                title: "Sofa Corner Premium",
                description: "Sofa sudut untuk ruang keluarga.",
                price: "2.500.000",
                oldPrice: "3.000.000",
                rating: 5,
                sold: 150,
                image: "assets/img/gallery/promo4.jpg",
                isNew: false
            },
            {
                title: "Minimalist Side Table",
                description: "Meja samping dengan laci.",
                price: "275.000",
                oldPrice: "325.000",
                rating: 4,
                sold: 180,
                image: "assets/img/gallery/promo5.jpg",
                isNew: false
            },
            {
                title: "Dining Chair White",
                description: "Kursi makan putih elegan.",
                price: "225.000",
                oldPrice: "300.000",
                rating: 4,
                sold: 320,
                image: "assets/img/gallery/promo3.jpg",
                isNew: true
            },
            {
                title: "Rattan Accent Chair",
                description: "Kursi rotan untuk ruang tamu.",
                price: "450.000",
                oldPrice: "550.000",
                rating: 5,
                sold: 200,
                image: "assets/img/gallery/promo4.jpg",
                isNew: false
            },
            {
                title: "Modern TV Cabinet",
                description: "Kabinet TV dengan penyimpanan.",
                price: "1.200.000",
                oldPrice: "1.500.000",
                rating: 5,
                sold: 120,
                image: "assets/img/gallery/promo3.jpg",
                isNew: true
            },
            {
                title: "Storage Ottoman",
                description: "Ottoman dengan penyimpanan.",
                price: "350.000",
                oldPrice: "400.000",
                rating: 4,
                sold: 180,
                image: "assets/img/gallery/promo5.jpg",
                isNew: false
            },
            {
                title: "Round Dining Table",
                description: "Meja makan bulat untuk 4 orang.",
                price: "750.000",
                oldPrice: "900.000",
                rating: 5,
                sold: 90,
                image: "assets/img/gallery/promo4.jpg",
                isNew: true
            },
            {
                title: "Bedside Table Oak",
                description: "Meja samping tempat tidur kayu oak.",
                price: "320.000",
                oldPrice: "380.000",
                rating: 4,
                sold: 220,
                image: "assets/img/gallery/promo2.jpg",
                isNew: false
            },
            {
                title: "Bar Stool Black",
                description: "Kursi bar hitam tinggi.",
                price: "280.000",
                oldPrice: "350.000",
                rating: 4,
                sold: 150,
                image: "assets/img/gallery/promo4.jpg",
                isNew: true
            },
            {
                title: "Office Desk White",
                description: "Meja kerja putih dengan laci.",
                price: "850.000",
                oldPrice: "950.000",
                rating: 5,
                sold: 80,
                image: "assets/img/gallery/promo4.jpg",
                isNew: false
            },
            {
                title: "Bathroom Cabinet",
                description: "Kabinet kamar mandi dengan cermin.",
                price: "420.000",
                oldPrice: "500.000",
                rating: 4,
                sold: 110,
                image: "assets/img/gallery/promo4.jpg",
                isNew: true
            },
            {
                title: "Bookshelf Modern",
                description: "Rak buku minimalis modern.",
                price: "650.000",
                oldPrice: "750.000",
                rating: 5,
                sold: 95,
                image: "assets/img/gallery/promo4.jpg",
                isNew: false
            },
            {
                title: "Kitchen Island Small",
                description: "Pulau dapur kecil dengan penyimpanan.",
                price: "900.000",
                oldPrice: "1.100.000",
                rating: 5,
                sold: 70,
                image: "assets/img/gallery/promo4.jpg",
                isNew: true
            }
        ];

        // Variabel untuk pagination
        let currentPage = 1;
        const productsPerPage = 4; // Menampilkan 8 produk per halaman untuk ukuran laptop
        const totalPages = Math.ceil(products.length / productsPerPage);

        // Fungsi untuk membuat card produk
        function createProductCard(product) {
            return `
    <div class="col">
      <div class="card shadow position-relative h-100 rounded-4 overflow-hidden">
        <!-- Full card image without overlays -->
        <img src="${product.image}" class="card-img w-100 h-100 object-fit-cover" alt="Product Image">
      </div>
    </div>
  `;
        }
        // Fungsi untuk membuat rating bintang
        function createStarRating(rating) {
            let stars = '';
            for (let i = 0; i < 5; i++) {
                if (i < rating) {
                    stars += '<i class="bi bi-star-fill text-warning small-icon"></i>';
                } else {
                    stars += '<i class="bi bi-star text-warning small-icon"></i>';
                }
            }
            return stars;
        }

        // Fungsi untuk membuat pagination
        function createPagination() {
            let paginationHTML = `
            <nav aria-label="Page navigation">
            <ul class="pagination">
                <li class="page-item ${currentPage === 1 ? 'disabled' : ''}">
                <a class="page-link" href="#" aria-label="Previous" data-page="prev">
                    <span class="double-arrow">&laquo;</span>
                </a>
                </li>
        `;

            for (let i = 1; i <= totalPages; i++) {
                paginationHTML += `
      <li class="page-item ${currentPage === i ? 'active' : ''}">
        <a class="page-link" href="#" data-page="${i}">${i}</a>
      </li>
    `;
            }

            paginationHTML += `
        <li class="page-item ${currentPage === totalPages ? 'disabled' : ''}">
          <a class="page-link" href="#" aria-label="Next" data-page="next">
            <span class="double-arrow-right">&raquo;</span>
          </a>
        </li>
      </ul>
    </nav>
  `;

            return paginationHTML;
        }

        // Fungsi untuk menampilkan produk pada halaman tertentu
        function displayProducts() {
            const productContainer = document.querySelector('#product-pagination-container .row');
            const paginationContainer = document.getElementById('pagination-container');

            if (!productContainer || !paginationContainer) return;

            // Hitung produk untuk halaman saat ini
            const startIndex = (currentPage - 1) * productsPerPage;
            const endIndex = Math.min(startIndex + productsPerPage, products.length);
            const currentProducts = products.slice(startIndex, endIndex);

            // Buat HTML untuk produk
            let productsHTML = '';
            currentProducts.forEach(product => {
                productsHTML += createProductCard(product);
            });

            // Tampilkan produk
            productContainer.innerHTML = productsHTML;

            // Tampilkan pagination
            paginationContainer.innerHTML = createPagination();

            // Tambahkan event listener untuk pagination
            const pageLinks = paginationContainer.querySelectorAll('.page-link');
            pageLinks.forEach(link => {
                link.addEventListener('click', function (e) {
                    e.preventDefault();
                    const pageData = this.getAttribute('data-page');

                    if (pageData === 'prev') {
                        if (currentPage > 1) currentPage--;
                    } else if (pageData === 'next') {
                        if (currentPage < totalPages) currentPage++;
                    } else {
                        currentPage = parseInt(pageData);
                    }

                    displayProducts();

                    // Scroll dengan smooth ke bagian atas produk
                    productContainer.scrollIntoView({ behavior: 'smooth' });
                });
            });
        }

        // Jalankan ketika DOM sudah siap
        document.addEventListener('DOMContentLoaded', function () {
            // Gunakan selector yang lebih spesifik
            const productContainer = document.querySelector('#product-pagination-container .row');

            if (!productContainer) return;

            const productSection = productContainer.parentElement;

            // Tambahkan container untuk pagination jika belum ada
            if (!document.getElementById('pagination-container')) {
                const paginationContainer = document.createElement('div');
                paginationContainer.id = 'pagination-container';
                paginationContainer.className = 'mt-4 d-flex justify-content-center';
                productSection.appendChild(paginationContainer);
            }

            // Tampilkan produk dan pagination
            displayProducts();
        });

        //categoty product
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