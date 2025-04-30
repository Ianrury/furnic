<?php

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
                    <li class="breadcrumb-item active" aria-current="page">Wishlist Product</li>
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


        <div class="product-area mt-1 product-area-new">
            <div class="container">
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
                                <div class="row row-cols-2 row-cols-md-2 row-cols-lg-3 g-4" id="product-list">
                                    <!-- Ulangi card produk -->

                                    <!-- Akhir satu produk -->
                                </div>
                                <div class="container mt-4">
                                    <div class="d-flex justify-content-center pagination-container"
                                        id="pagination-container">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <div id="toastContainer" class="position-fixed top-0 end-0 p-3" style="z-index: 9999;"></div>

    <!-- footer area -->
    <?php include __DIR__ . '/../templates/footer.php'; ?>
    <!-- footer area end -->


    <!-- modal quick shop-->
    <!-- <div class="modal quickview fade" id="quickview" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
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
    </div> -->
    <!-- modal quick shop end -->


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

        // Data produk (untuk contoh)
        const products = <?= json_encode($model["product"]); ?>.map(product => ({
            id: product.id_product,
            title: product.nama_product,             // Sesuaikan dengan nama kolom produk di PHP
            description: product.deskripsi ?? "Deskripsi tidak tersedia", // Deskripsi produk
            price: product.harga !== null && product.harga !== undefined ? `Rp ${product.harga.toLocaleString()}` : "Rp 0", // Pastikan harga valid
            oldPrice: product.harga ? `Rp ${product.harga + 100000}` : "Rp 0", // Harga lama, asumsikan harga lama = harga produk + 100.000
            rating: 4,  // Anda bisa menentukan rating atau mengambilnya dari data produk jika ada
            sold: product.beli,   // Anda bisa mengubah ini sesuai dengan data yang ada
            image: `assets/img/product/${product.foto}`,  // Gambar produk
            isNew: true  // Anda bisa menambahkan logika untuk menentukan apakah produk baru atau tidak
        }));

        // Variabel untuk pagination
        let currentPage = 1;
        let productsPerPage = 12; // Default, akan berubah berdasarkan viewport

        // Fungsi untuk menentukan jumlah produk per halaman berdasarkan ukuran layar
        function setProductsPerPage() {
            if (window.innerWidth >= 992) { // Laptop (lg)
                // 3 produk per baris, 4 baris = 12 produk
                return 12;
            } else if (window.innerWidth >= 768) { // Tablet (md)
                // 2 produk per baris, 4 baris = 8 produk
                return 8;
            } else {
                // 2 produk per baris, 4 baris = 8 produk untuk mobile
                return 8;
            }
        }

        // Hitung total halaman
        function calculateTotalPages() {
            return Math.ceil(products.length / productsPerPage);
        }

        // Fungsi untuk membuat card produk
        function createProductCard(product) {
            return `
                             <div class="col">
                                <div class="card shadow position-relative rounded-4 p-2 product-card" data-id="${product.id}" style="cursor:pointer;">
                            ${product.isNew ? `
                            <!-- Corner Ribbon -->
                        <div class="position-absolute ribbon-wrapper">
                                                <div class="ribbon text-white text-uppercase fw-bold text-center">
                                                    New Product
                                                </div>
                                    </div>
                    ` : ''}

                    <!-- Product Image -->
                    <div class="text-center pt-3">
                    <img src="${product.image}" class="img-fluid product-image" alt="Product Image">
                    </div>

                    <div class="bodykartu">
                            <div class="d-flex flex-column ">
                                <!-- Product Details -->
                                <div class="">
                                    <!-- <h5 class="">
                                        ${product.title}
                                </h5> -->
                                    <p class="card-title text-truncate  product-title"> ${product.title}
                                    </p>

                                    <p class="card-text text-truncate product-desc">${product.description}</p>
                                    <div class="d-flex gap-1 align-items-center">
                                        ${createStarRating(product.rating)}
                                        <small class="text-muted fst-italic ms-1 sold-text">${product.sold} terjual</small>
                                    </div>
                                </div>

                                <!-- Price Section -->
                                <div class="mt-auto">
                                    <div class="d-flex flex-wrap align-items-baseline">
                                        <div class="me-2">
                                            <span class="fw-bold price">
                                                <sup class="fw-normal">Rp</sup> ${product.price}
                                            </span>
                                        </div>
                                        <div>
                                            <span class="fw-normal text-danger old-price">
                                                <sup>Rp</sup>
                                                <span class="text-decoration-line-through">${product.oldPrice}</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                    <div class="row g-2">
                                                <div class="col-6">
                                                    <button class="btn buy-btn w-100">Beli</button>
                                                </div>
                                                <div class="col-6">
                                                    <button class="btn cart-btn w-100" onclick="masukkanKeranjang()">+ Keranjang</button>
                                                </div>
                                            </div>
                            </div>
                        </div>
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
            const totalPages = calculateTotalPages();
            let paginationHTML = `
    <nav aria-label="Page navigation">
      <ul class="pagination">
        <li class="page-item ${currentPage === 1 ? 'disabled' : ''}">
          <a class="page-link" href="#" aria-label="Previous" data-page="prev">
            <span class="double-arrow">&laquo;</span>
          </a>
        </li>
  `;

            // Menentukan range halaman yang ditampilkan (maksimal 5)
            let startPage = Math.max(1, currentPage - 2);
            let endPage = Math.min(totalPages, startPage + 4);

            // Jika kurang dari 5 halaman untuk ditampilkan di akhir, sesuaikan startPage
            if (endPage - startPage < 4) {
                startPage = Math.max(1, endPage - 4);
            }

            // Tambahkan class untuk container scroll jika total halaman > 5
            const scrollClass = totalPages > 5 ? 'pagination-scroll' : '';

            // Tambahkan halaman ke pagination
            for (let i = startPage; i <= endPage; i++) {
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
            // Gunakan selector yang spesifik dengan ID untuk produk container
            const productContainer = document.querySelector('#product-list');
            const paginationContainer = document.querySelector('#pagination-container');

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
                        if (currentPage < calculateTotalPages()) currentPage++;
                    } else {
                        currentPage = parseInt(pageData);
                    }

                    displayProducts();

                    // Scroll dengan smooth ke bagian atas produk
                    productContainer.scrollIntoView({ behavior: 'smooth' });
                });
            });
        }

        // CSS untuk pagination scroll
        function addPaginationStyles() {
            if (!document.getElementById('pagination-styles')) {
                const style = document.createElement('style');
                style.id = 'pagination-styles';
                style.textContent = `
      .pagination-container {
        overflow-x: auto;
        padding-bottom: 5px;
      }
      
      .pagination-container::-webkit-scrollbar {
        height: 5px;
      }
      
      .pagination-container::-webkit-scrollbar-track {
        background: #f1f1f1;
        border-radius: 5px;
      }
      
      .pagination-container::-webkit-scrollbar-thumb {
        background: #ccc;
        border-radius: 5px;
      }
      
      .pagination-container::-webkit-scrollbar-thumb:hover {
        background: #aaa;
      }
      
      .pagination {
        flex-wrap: nowrap;
        margin-bottom: 0;
      }
      
      @media (max-width: 576px) {
        .pagination .page-link {
          padding: 0.25rem 0.5rem;
          font-size: 0.875rem;
        }
      }
    `;
                document.head.appendChild(style);
            }
        }

        // Persiapkan struktur HTML untuk produk dan pagination jika belum ada
        function prepareHTML() {
            // Temukan container yang sesuai atau buat jika belum ada
            let mainContainer = document.querySelector('#products-with-pagination');

            if (!mainContainer) {
                // Jika tidak ada, buat container utama
                mainContainer = document.createElement('div');
                mainContainer.id = 'products-with-pagination';
                document.body.appendChild(mainContainer);

                // Buat container untuk produk
                const productSection = document.createElement('div');
                productSection.className = 'container';
                productSection.innerHTML = `
      <div id="product-list" class="row row-cols-2 row-cols-md-2 row-cols-lg-3 g-4"></div>
    `;
                mainContainer.appendChild(productSection);

                // Buat container untuk pagination
                const paginationContainer = document.createElement('div');
                paginationContainer.className = 'container mt-4';
                paginationContainer.innerHTML = `
      <div id="pagination-container" class="d-flex justify-content-center pagination-container"></div>
    `;
                mainContainer.appendChild(paginationContainer);
            }
        }

        // Jalankan ketika DOM sudah siap
        document.addEventListener('DOMContentLoaded', function () {
            // Tambahkan styles untuk pagination
            addPaginationStyles();

            // Persiapkan HTML jika diperlukan
            prepareHTML();

            // Set produk per halaman berdasarkan ukuran layar
            productsPerPage = setProductsPerPage();

            // Tampilkan produk dan pagination
            displayProducts();

            // Update saat ukuran layar berubah
            window.addEventListener('resize', function () {
                const newProductsPerPage = setProductsPerPage();

                // Hanya update jika jumlah produk per halaman berubah
                if (newProductsPerPage !== productsPerPage) {
                    productsPerPage = newProductsPerPage;

                    // Jika halaman saat ini melebihi total halaman baru
                    if (currentPage > calculateTotalPages()) {
                        currentPage = calculateTotalPages();
                    }

                    displayProducts();
                }
            });
        });


        // filter data

    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const scrollContainer = document.querySelector('.row.flex-nowrap');
            let scrollPosition = 0;
            const cardWidth = scrollContainer.querySelector('.col-6').offsetWidth;
            const scrollSpeed = 5000; // ms between scrolls

            function autoScroll() {
                if (scrollPosition >= scrollContainer.scrollWidth - scrollContainer.clientWidth) {
                    // Reset to beginning when reaching the end
                    scrollPosition = 0;
                } else {
                    // Move by one card width
                    scrollPosition += cardWidth + 16; // 16px accounts for gutter
                }

                scrollContainer.scrollTo({
                    left: scrollPosition,
                    behavior: 'smooth'
                });

                setTimeout(autoScroll, scrollSpeed);
            }

            // Start the auto-scrolling after 3 seconds
            setTimeout(autoScroll, 3000);

            // Pause scrolling when user interacts with the container
            scrollContainer.addEventListener('mouseenter', function () {
                clearTimeout(window.scrollTimeout);
            });

            scrollContainer.addEventListener('mouseleave', function () {
                window.scrollTimeout = setTimeout(autoScroll, scrollSpeed);
            });

            // Handle touch events for mobile
            scrollContainer.addEventListener('touchstart', function () {
                clearTimeout(window.scrollTimeout);
            });

            scrollContainer.addEventListener('touchend', function () {
                window.scrollTimeout = setTimeout(autoScroll, scrollSpeed);
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

</body>

</html>