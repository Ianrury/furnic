<?php
require_once __DIR__ . '/../../app/env.php';
$apiBaseUrl = env('API_BASE_URL');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <title><?php echo $model['title']; ?> - PT Furnice Furnishing Indonesia</title>

    <link rel="icon" type="image/x-icon" href="assets/img/logo/favicon.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">


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

    <div class="preloader">
        <div class="loader-ripple">
            <div></div>
            <div></div>
        </div>
    </div>

    <?php include __DIR__ . '/../templates/header.php'; ?>

    <div class="search-popup">
        <button class="close-search"><span class="far fa-times"></span></button>
        <form action="#">
            <div class="form-group">
                <input type="search" name="search-field" class="form-control" placeholder="Search Here..." required="">
                <button type="submit"><i class="far fa-search"></i></button>
            </div>
        </form>
    </div>


    <main class="main">

        <div class="hero-section mt-3 hs-1">
            <div class="container ">
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
        <div class="product-area product-area-new">
            <div class="container">
                <div class="row">
                    <div class="col-12 wow fadeInDown mb-0" data-wow-delay=".25s">
                        <div class="site-heading-inline">
                            <h2 class="site-title">Dekorasi Product</h2>
                        </div>
                    </div>
                </div>

                <div class="container-fluid">
                    <div class="tab-content wow fadeInUp" data-wow-delay=".25s" id="item-tabContent">
                        <div class="row row-cols-1 row-cols-md-4 g-3">
                            <div class="col">
                                <div class="card h-100 border-0 overflow-hidden rounded-2 position-relative"
                                    style="height: 300px;">
                                    <img src="assets/img/product/decorasi/kamar-tidur.jpg" class="w-100 h-100"
                                        style="object-fit: cover;" alt="Kamar Tidur">
                                    <div class="position-absolute top-0 start-0 m-2">
                                        <span class="badge bg-white text-dark py-2 px-3 fw-medium rounded-2 shadow-sm">
                                            Kamar Tidur
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="card h-100 border-0 overflow-hidden rounded-2 position-relative"
                                    style="height: 300px;">
                                    <img src="assets/img/product/decorasi/ruang-tamu.jpg" class="w-100 h-100"
                                        style="object-fit: cover;" alt="Ruang Tamu">
                                    <div class="position-absolute top-0 start-0 m-2">
                                        <span class="badge bg-white text-dark py-2 px-3 fw-medium rounded-2 shadow-sm">
                                            Ruang Tamu
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="card h-100 border-0 overflow-hidden rounded-2 position-relative"
                                    style="height: 300px;">
                                    <img src="assets/img/product/decorasi/kantor.jpg" class="w-100 h-100"
                                        style="object-fit: cover;" alt="Kantor">
                                    <div class="position-absolute top-0 start-0 m-2">
                                        <span class="badge bg-white text-dark py-2 px-3 fw-medium rounded-2 shadow-sm">
                                            Kantor
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="card h-100 border-0 overflow-hidden rounded-2 position-relative"
                                    style="height: 300px;">
                                    <img src="assets/img/product/decorasi/ruang-santai.jpg" class="w-100 h-100"
                                        style="object-fit: cover;" alt="Ruang Santai">
                                    <div class="position-absolute top-0 start-0 m-2">
                                        <span class="badge bg-white text-dark py-2 px-3 fw-medium rounded-2 shadow-sm">
                                            Ruang Santai
                                        </span>
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
                            <h2 class="site-title">Produk </h2>
                        </div>
                    </div>
                </div>
                <div class="tab-content wow fadeInUp" data-wow-delay=".25s" id="item-tabContent">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 m-0 p-0" style="opacity: 1 !important; background-color: white;">
                                <p class="fw-semibold text-dark" style="font-size: 14px;">Urutkan berdasarkan</p>

                                <div class=" " style="width: 250px;">
                                    <div class="mb-3">
                                        <button id="resetFilter" class="btn btn-secondary btn-sm mt-1"
                                            style="font-size: 11px; padding-right: 27px; padding-left: 27px;padding-top: 1px; padding-bottom: 1px; background-color: #D9D9D9; border: #D9D9D9;">Reset</button>
                                    </div>

                                    <hr>

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

                                    <div class="mb-3">
                                        <h6 class="fw-bold text-dark mb-2" style="font-size: 15px;">Kategori</h6>
                                        <div class="row">
                                            <?php foreach (array_chunk($model['category'], 2) as $chunk): ?>
                                                <?php foreach ($chunk as $cat): ?>
                                                    <div class="col-6">
                                                        <div class="form-check custom-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="<?= strtolower($cat['nama']); ?>" name="kategori[]"
                                                                value="<?= $cat['id_kategori']; ?>">
                                                            <label class="form-check-label"
                                                                for="<?= strtolower($cat['nama']); ?>">
                                                                <?= htmlspecialchars($cat['nama']); ?>
                                                            </label>
                                                        </div>
                                                    </div>
                                                <?php endforeach; ?>
                                            <?php endforeach; ?>
                                        </div>

                                    </div>

                                    <hr>

                                    <div class="mb-3">
                                        <h6 class="fw-bold text-dark mb-2" style="font-size: 15px;">Harga</h6>
                                        <div class="input-group input-group-sm mb-3">
                                            <span class="input-group-text fw-bold"
                                                style="font-size: 10px; background-color: #D9D9D9;">Rp</span>
                                            <input type="text" class="form-control harga-input text-black"
                                                name="harga_min" id="harga_min" placeholder="Masukkan harga minimum">
                                        </div>
                                        <div class="input-group input-group-sm mb-3">
                                            <span class="input-group-text fw-bold"
                                                style="font-size: 10px; background-color: #D9D9D9;">Rp</span>
                                            <input type="text" class="form-control harga-input text-black"
                                                name="harga_max" id="harga_max" placeholder="Masukkan harga maksimum">
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-9">
                                <div id="loading-spinner" class="text-center mb-3" style="display: none;">
                                    <div class="spinner-border text-primary" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                </div>

                                <div class="row row-cols-2 row-cols-md-2 row-cols-lg-3 g-4" id="product-list">
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
        <div class="product-area product-area-new">
            <div class="container">
                <div class="row">
                    <div class="col-12 wow fadeInDown mb-0" data-wow-delay=".25s">
                        <div class="site-heading-inline">
                            <h2 class="site-title">Rekomendasi Produk</h2>
                        </div>
                    </div>
                </div>
                <div class="tab-content wow fadeInUp" data-wow-delay=".25s" id="item-tabContent">
                    <div class="container">
                        <div class="row flex-nowrap overflow-auto g-4 pb-3" id="product-terbaru">

                        </div>
                    </div>
                </div>
            </div>
        </div>


    </main>


    <?php include __DIR__ . '/../templates/footer.php'; ?>

    <?php include __DIR__ . '/../Scripts/script.php'; ?>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const offcanvasToggler = document.getElementById('offcanvasToggler');
            const offcanvasNavbar = document.getElementById('offcanvasNavbar');

            offcanvasNavbar.addEventListener('show.bs.offcanvas', function() {
                document.querySelectorAll('.offcanvas-backdrop').forEach(el => el.remove());
            });

            offcanvasNavbar.addEventListener('shown.bs.offcanvas', function() {
                const backdrops = document.querySelectorAll('.offcanvas-backdrop');
                backdrops.forEach(backdrop => {
                    backdrop.classList.remove('show');
                    backdrop.style.display = 'none';
                });
            });

            offcanvasNavbar.addEventListener('hidden.bs.offcanvas', function() {
                document.querySelectorAll('.offcanvas-backdrop').forEach(el => el.remove());
            });
        });
    </script>

    <script>
        const API_BASE_URL = "<?= $apiBaseUrl ?>";

        $.ajax({
            url: API_BASE_URL + '/product-terbaru',
            type: 'GET',
            dataType: 'json',
            success: function(response) {
                if (response.status === 'success') {
                    const produk = response.data;
                    $('#product-terbaru').html('');

                    if (produk.length > 0) {
                        produk.forEach(function(product) {
                            const harga = product.harga;
                            const totalPromo = product.total_promo;
                            const diskonNominal = totalPromo > 0 ? (harga * (totalPromo / 100)) : 0;
                            const hargaSetelahDiskon = harga - diskonNominal;

                            let ribbonHTML = `
                        <div class="position-absolute ribbon-wrapper">
                            <div class="ribbon text-white text-uppercase fw-bold text-center" style="background-color: #2B4779; color: #FFFFFF;">New Product</div>
                        </div>`;

                            if (product.qty <= 0) {
                                ribbonHTML = `
                        <div class="position-absolute ribbon-wrapper">
                            <div class="ribbon text-uppercase fw-bold text-center" 
                                style="background-color: #FF0000; color: #FFFFFF;">Out of Stock</div>
                        </div>`;
                            }

                            const html = `
                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="card shadow position-relative rounded-4 p-2 product-card" data-id="${product.id_product}" data-slug="${product.slug}" 
                                data-token="${product.token}" style="cursor:pointer;">  
                                ${ribbonHTML}
                                <div class="text-center pt-3">
                                    <img src="${product.url_foto ?? ''}" class="img-fluid product-image" alt="Product Image">
                                </div>
                                <div class="bodykartu">
                                    <div class="d-flex flex-column">
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
                                        <div class="mt-auto">
                                            <div class="d-flex flex-wrap align-items-baseline">
                                                <div class="me-2">
                                                    <span class="fw-bold price">
                                                        <sup class="fw-normal">Rp</sup>${Number(hargaSetelahDiskon).toLocaleString('id-ID')}
                                                    </span>
                                                </div>
                                                ${diskonNominal > 0 ? `
                                                    <div>
                                                        <span class="fw-normal text-danger old-price">
                                                            <sup>Rp</sup><span class="text-decoration-line-through">${Number(harga).toLocaleString('id-ID')}</span>
                                                        </span>
                                                    </div>
                                                ` : ''}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>`;
                            $('#product-terbaru').append(html);
                        });
                    } else {
                        $('#product-terbaru').html('<p>Tidak ada produk terbaru yang tersedia.</p>');
                    }
                } else {
                    showToast('Gagal memuat produk terbaru', 'danger');
                }
            },
            error: function() {
                showToast('Terjadi kesalahan saat mengambil data produk.', 'danger');
            }
        });
        document.addEventListener('DOMContentLoaded', function() {
            const searchModal = document.getElementById('searchModal');
            searchModal.addEventListener('shown.bs.modal', function() {
                searchModal.querySelector('input').focus();
            });
        });


        const resetBtn = document.getElementById('resetFilter');
        const checkboxes = document.querySelectorAll('input[type="checkbox"]');
        const hargaInputs = document.querySelectorAll('.harga-input');
        const productList = document.getElementById('product-list');
        const spinner = document.getElementById('loading-spinner');

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

        function formatRupiah(angka) {
            return angka.replace(/\D/g, '')
                .replace(/\B(?=(\d{3})+(?!\d))/g, '.');
        }

        document.querySelectorAll('.harga-input').forEach(input => {
            input.addEventListener('input', function() {
                const cleaned = this.value.replace(/\./g, '');
                this.value = formatRupiah(cleaned);
                debounceApplyFilter();
            });
        });

        let debounceTimeout;

        function debounceApplyFilter() {
            clearTimeout(debounceTimeout);
            debounceTimeout = setTimeout(applyFilter, 500);
        }

        function applyFilter() {
            spinner.style.display = 'block';
            productList.innerHTML = '';

            const formData = new FormData();

            checkboxes.forEach(cb => {
                if (cb.checked) {
                    formData.append(cb.name || cb.id, cb.value || 'on');
                }
            });

            const hargaMin = document.getElementById('harga_min').value.replace(/\./g, '');
            const hargaMax = document.getElementById('harga_max').value.replace(/\./g, '');

            if (hargaMin) formData.append('harga_min', hargaMin);
            if (hargaMax) formData.append('harga_max', hargaMax);

            fetch(API_BASE_URL + '/filter', {
                    method: 'POST',
                    body: formData
                }).then(res => res.json())
                .then(data => {
                    const paginationContainer = document.querySelector('#pagination-container');
                    paginationContainer.innerHTML = '';
                    spinner.style.display = 'none';
                    productList.innerHTML = data.html;
                }).catch(err => {
                    spinner.style.display = 'none';
                    document.querySelector('#pagination-container').innerHTML = '';
                    alert("Gagal memuat produk.");
                    console.error(err);
                });
        }

        checkboxes.forEach(cb => {
            cb.addEventListener('change', () => {
                updateResetButtonState();
                applyFilter();
            });
        });

        hargaInputs.forEach(input => {
            input.addEventListener('input', () => {
                updateResetButtonState();
                applyFilter();
            });
        });

        resetBtn.addEventListener('click', function() {
            checkboxes.forEach(cb => cb.checked = false);
            hargaInputs.forEach(input => input.value = '');
            updateResetButtonState();
            applyFilter();
        });

        let products = [];
        let currentPage = 1;
        let totalPages = 1;
        let productsPerPage = 12;

        function calculateTotalPages() {
            return Math.ceil(products.length / productsPerPage);
        }

        function setProductsPerPage() {
            if (window.innerWidth < 576) {
                return 6;
            } else if (window.innerWidth < 992) {
                return 8;
            } else {
                return 12;
            }
        }

        // Load products on page load
        loadProducts();

        function loadProducts() {
            $.ajax({
                url: API_BASE_URL + '/full-product',
                type: 'GET',
                dataType: 'json',
                success: function(response) {
                    if (response.status === 'success') {
                        const allProductsRaw = response.FullProduck;
                        processProducts(allProductsRaw);

                        displayProducts();
                    } else {
                        console.error('Terjadi kesalahan:', response.message);
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Terjadi kesalahan:', error);
                }
            });
        }



        function processProducts(allProductsRaw) {
            const topBestSellerIds = allProductsRaw
                .filter(p => p.qty > 0)
                .sort((a, b) => b.beli - a.beli)
                .slice(0, 3)
                .map(p => p.id_product);

            products = allProductsRaw.map(product => {
                const harga = Number(product.harga) || 0;
                const promoPersen = Number(product.total_promo) || 0;

                const potongan = Math.round(harga * (promoPersen / 100));
                const hargaSetelahDiskon = harga - potongan;

                const createdDate = new Date(product.created_at);
                const today = new Date();
                const diffTime = Math.abs(today - createdDate);
                const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24));

                let ribbon = null;

                if (product.qty <= 0) {
                    ribbon = {
                        text: 'Out of Stock',
                        bg: '#FF0000',
                        color: '#FFFFFF'
                    };
                } else if (promoPersen > 0) {
                    ribbon = {
                        text: 'Sale',
                        bg: '#FFFB2D',
                        color: '#FF0000'
                    };
                } else if (diffDays <= 7) {
                    ribbon = {
                        text: 'New Product',
                        bg: '#2B4779',
                        color: '#FFFFFF'
                    };
                }

                return {
                    id: product.id_product,
                    title: product.nama_product,
                    description: product.deskripsi ?? "Deskripsi tidak tersedia",
                    price: hargaSetelahDiskon.toLocaleString('id-ID'),
                    oldPrice: harga.toLocaleString('id-ID'),
                    potongan: potongan.toLocaleString('id-ID'),
                    promo: promoPersen,
                    rating: product.rating ?? 4,
                    sold: product.beli ?? 0,
                    stock: product.qty,
                    slug: product.slug,
                    token: product.token,
                    image: product.url_foto,
                    created_at: product.created_at,
                    ribbon
                };
            });

            totalPages = Math.ceil(products.length / productsPerPage);
        }

        function createProductCard(product) {
            return `
            <div class="col">
                <div class="card shadow position-relative rounded-4 p-2 product-card" data-id="${product.id}"  data-slug="${product.slug}" 
     data-token="${product.token}" style="cursor:pointer;">

                    ${product.ribbon ? `
                        <div class="position-absolute ribbon-wrapper">
                            <div class="ribbon text-uppercase fw-bold text-center"
                                style="background-color: ${product.ribbon.bg}; color: ${product.ribbon.color};">
                                ${product.ribbon.text}
                            </div>
                        </div>` : ''
                    }

                    <div class="text-center pt-3">
                        <img src="${product.image}" class="img-fluid product-image" alt="Product Image">
                    </div>

                    <div class="bodykartu">
                        <div class="d-flex flex-column">
                            <p class="card-title text-truncate product-title">${product.title}</p>
                            <p class="card-text text-truncate product-desc">${product.description}</p>
                            <div class="d-flex gap-1 align-items-center">
                                ${createStarRating(product.rating)}
                                <small class="text-muted fst-italic ms-1 sold-text">${product.sold} terjual</small>
                            </div>

                            <div class="mt-auto">
                                <div class="d-flex flex-wrap align-items-baseline">
                                    <div class="me-2">
                                        <span class="fw-bold price">
                                            <sup class="fw-normal">Rp</sup> ${product.price}
                                        </span>
                                    </div>
                                    ${product.promo > 0 ? `
                                    <div>
                                        <span class="fw-normal text-danger old-price">
                                            <sup>Rp</sup>
                                            <span class="text-decoration-line-through">${product.oldPrice}</span>
                                        </span>
                                    </div>` : ''}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                `;
        }

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

            let startPage = Math.max(1, currentPage - 2);
            let endPage = Math.min(totalPages, startPage + 4);

            if (endPage - startPage < 4) {
                startPage = Math.max(1, endPage - 4);
            }

            const scrollClass = totalPages > 5 ? 'pagination-scroll' : '';

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

        function displayProducts() {
            const productContainer = document.querySelector('#product-list');
            const paginationContainer = document.querySelector('#pagination-container');

            if (!productContainer || !paginationContainer) return;

            const startIndex = (currentPage - 1) * productsPerPage;
            const endIndex = Math.min(startIndex + productsPerPage, products.length);
            const currentProducts = products.slice(startIndex, endIndex);

            let productsHTML = '';
            currentProducts.forEach(product => {
                productsHTML += createProductCard(product);
            });

            productContainer.innerHTML = productsHTML;

            paginationContainer.innerHTML = createPagination();

            const pageLinks = paginationContainer.querySelectorAll('.page-link');
            pageLinks.forEach(link => {
                link.addEventListener('click', function(e) {
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

                    productContainer.scrollIntoView({
                        behavior: 'smooth'
                    });
                });
            });
        }

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

        function prepareHTML() {
            let mainContainer = document.querySelector('#products-with-pagination');

            if (!mainContainer) {
                mainContainer = document.createElement('div');
                mainContainer.id = 'products-with-pagination';
                document.body.appendChild(mainContainer);

                const productSection = document.createElement('div');
                productSection.className = 'container';
                productSection.innerHTML = `
                <div id="product-list" class="row row-cols-2 row-cols-md-2 row-cols-lg-3 g-4"></div>
                `;
                mainContainer.appendChild(productSection);

                const paginationContainer = document.createElement('div');
                paginationContainer.className = 'container mt-4';
                paginationContainer.innerHTML = `
                <div id="pagination-container" class="d-flex justify-content-center pagination-container"></div>
                `;
                mainContainer.appendChild(paginationContainer);
            }
        }

        document.addEventListener('DOMContentLoaded', function() {
            addPaginationStyles();

            prepareHTML();

            productsPerPage = setProductsPerPage();

            displayProducts();

            window.addEventListener('resize', function() {
                const newProductsPerPage = setProductsPerPage();

                if (newProductsPerPage !== productsPerPage) {
                    productsPerPage = newProductsPerPage;

                    if (currentPage > calculateTotalPages()) {
                        currentPage = calculateTotalPages();
                    }

                    displayProducts();
                }
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const scrollContainer = document.querySelector('.row.flex-nowrap');
            let scrollPosition = 0;
            const scrollSpeed = 5000;

            function autoScroll() {
                if (scrollPosition >= scrollContainer.scrollWidth - scrollContainer.clientWidth) {
                    scrollPosition = 0;
                } else {
                    scrollPosition += cardWidth + 16;
                }

                scrollContainer.scrollTo({
                    left: scrollPosition,
                    behavior: 'smooth'
                });

                setTimeout(autoScroll, scrollSpeed);
            }

            setTimeout(autoScroll, 3000);

            scrollContainer.addEventListener('mouseenter', function() {
                clearTimeout(window.scrollTimeout);
            });

            scrollContainer.addEventListener('mouseleave', function() {
                window.scrollTimeout = setTimeout(autoScroll, scrollSpeed);
            });

            // Handle touch events for mobile
            scrollContainer.addEventListener('touchstart', function() {
                clearTimeout(window.scrollTimeout);
            });

            scrollContainer.addEventListener('touchend', function() {
                window.scrollTimeout = setTimeout(autoScroll, scrollSpeed);
            });
        });
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
    </script>

</body>

</html>