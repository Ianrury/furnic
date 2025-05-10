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
                    <li class="breadcrumb-item active" aria-current="page">Keranjang</li>
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
                            <h2 class="site-title">Keranjang Belanja</h2>
                        </div>
                    </div>
                </div>
                <div class="tab-content wow fadeInUp" data-wow-delay=".25s" id="item-tabContent">
                    <div class="container">
                        <div class="row">
                            <!-- List Produk -->
                            <div class="col-md-8">
                                <div class="rounded-2 ms-4 d-flex justify-content-between mb-3">
                                    <div>
                                        <div>
                                            <input class="form-check-input item-checkbox" type="checkbox" id="checkAll">
                                        </div>
                                        <div class="ms-3">
                                            <p style="font-size: 14px;">Pilih Semua</p>
                                        </div>
                                    </div>
                                    <div id="deleteSelectedContainer" class="d-none">
                                        <p id="btnDeleteSelected"
                                            style="font-size: 14px; color: #ff3838; cursor: pointer;">Hapus</p>
                                    </div>
                                </div>
                                <div class="d-flex flex-column gap-3" id="product-list">
                                    <!-- Mulai looping produk di sini -->


                                    <!-- Selesai 1 produk -->
                                </div>
                            </div>

                            <!-- Detail Pembayaran -->
                            <div class="col-md-4">
                                <div class="rounded-2 ms-4 d-flex justify-content-between mb-3" style="opacity: 0;">
                                    <div>
                                        <div>
                                            <input class="form-check-input item-checkbox" type="checkbox" id="checkAll">
                                        </div>
                                        <div class="ms-3">
                                            <p style="font-size: 14px;">Pilih Semua</p>
                                        </div>
                                    </div>
                                    <div id="deleteSelectedContainer" class="d-none">
                                    </div>
                                </div>

                                <div class="rounded-4 p-3 box-shadow-keranjang align-self-start"
                                    style="border: 1px solid #D9D9D9;">
                                    <div>
                                        <h4 class="fw-bold pembayaran">Detail Pembayaran</h4>
                                    </div>
                                    <div class="row align-items-center mt-3">
                                        <div class="col">
                                            <p class="mb-0 text-start subtotal-pembayaran">Subtotal Harga</p>
                                        </div>
                                        <div class="col">
                                            <!-- Subtotal Harga -->
                                            <span id="subtotal-harga" class="fw-bold title-keranjang mb-0 text-start">
                                                <sup class="fw-normal">Rp</sup> 0
                                            </span>
                                        </div>
                                        <p class="font-italic fw-normal" style="font-size: 11px; color: #FF0000;">
                                            Harga di atas belum termasuk potongan promo
                                        </p>
                                    </div>
                                    <div class="row align-items-center mt-3">
                                        <div class="col">
                                            <p class="mb-0 text-start subtotal-pembayaran">Diskon Product</p>
                                        </div>
                                        <div class="col">
                                            <span id="diskon-produk" class="fw-bold title-keranjang mb-0 text-start"
                                                style="color: #FF0000">
                                                <sup class="fw-normal">Rp</sup> 0
                                            </span>
                                        </div>
                                    </div>
                                    <div class="my-3">
                                        <hr class="border-dark border-1 opacity-100">
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <p class="mb-0 text-start pembayaran">Total Pembayaran</p>
                                        </div>
                                        <div class="col">
                                            <span id="total-pembayaran" class="fw-bold title-keranjang mb-0 text-start">
                                                <sup class="fw-normal">Rp</sup> 0
                                            </span>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <button class="btn btn-buy w-100 rounded-3 fw-bold" id="btnbuatpesanan"
                                            style="font-size: 14px;">Buat Pesanan</button>

                                    </div>
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
                        <div class="row flex-nowrap overflow-auto g-4 pb-3" id="expensif">

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
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const API_BASE_URL = "<?= $apiBaseUrl ?>"; // This will be replaced with the actual base URL in your PHP

            // Variable to store selected product IDs
            let selectedProductIds = [];

            // Format currency in Rupiah
            function formatRupiah(angka) {
                return angka.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
            }

            // Format number with thousand separator
            function formatNumber(number) {
                return number.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
            }

            // Truncate text to specific number of words
            function truncateWords(text, wordLimit) {
                if (!text) return '';
                const words = text.trim().split(/\s+/);
                if (words.length <= wordLimit) return text;
                return words.slice(0, wordLimit).join(' ') + '...';
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

            // Fetch cart data from API
            function fetchCartData() {
                const token = localStorage.getItem('auth_token');
                if (!token) {
                    document.getElementById('product-list').innerHTML = '<div class="alert alert-warning">Silakan login terlebih dahulu</div>';
                    return;
                }

                fetch(`${API_BASE_URL}/keranjang`, {
                        headers: {
                            'Authorization': `Bearer ${token}`
                        }
                    })
                    .then(response => response.json())
                    .then(result => {
                        if (result.status === 'error') {
                            document.getElementById('product-list').innerHTML = `<div class="alert alert-danger">${result.message}</div>`;
                            return;
                        }

                        // Render products from API response
                        renderProducts(result.data);

                        // Set up event listeners after rendering products
                        setupEventListeners();

                        // Initialize the UI state
                        updateTotalPembayaran();
                    })
                    .catch(error => {
                        console.error('Error fetching cart data:', error);
                        document.getElementById('product-list').innerHTML = '<div class="alert alert-danger">Gagal memuat data keranjang</div>';
                    });
            }

            // Render products in cart
            function renderProducts(products) {
                const productListElement = document.getElementById('product-list');

                if (!products || products.length === 0) {
                    productListElement.innerHTML = '<div class="alert alert-info">Keranjang belanja Anda kosong</div>';
                    return;
                }

                let html = '';
                products.forEach(item => {
                    // Calculate price with discount
                    const hargaNormal = parseFloat(item.harga);
                    const diskon = parseFloat(item.diskon);
                    let hargaSetelahDiskon = hargaNormal;
                    let nominalDiskon = 0;

                    if (diskon > 0) {
                        nominalDiskon = (diskon / 100) * hargaNormal;
                        hargaSetelahDiskon = hargaNormal - nominalDiskon;
                    }

                    // Determine valid quantity
                    const qty = (item.qty_cart > item.qty_motif) ? item.qty_motif : item.qty_cart;

                    // Calculate total price for this item
                    const total = qty * hargaSetelahDiskon;

                    html += `
            <div class="d-flex gap-3 align-items-start">
                <div class="rounded-2 ms-4">
                    <input class="form-check-input item-checkbox" type="checkbox"
                        id="checkbox-${item.id_cart}" data-id="${item.id_cart}"
                        data-price="${item.harga}" data-discount="${item.diskon}">
                </div>
                <div class="w-100 p-3 d-flex align-items-center justify-content-between rounded-4"
                    style="border: 1px solid #D9D9D9;">
                    <div class="d-flex gap-3 align-items-center">
                        <div class="card shadow position-relative rounded-4 p-2">
                            <!-- Corner Ribbon -->
                            <div class="position-absolute ribbon-wrapper-keranjang">
                                <div class="ribbon-keranjang text-white text-uppercase fw-bold text-center">
                                    New Product
                                </div>
                            </div>
                            <!-- Product Image -->
                            <div class="text-center pt-3">
                                <img src="${item.url_foto}"
                                    class="img-fluid product-image-keranjang"
                                    alt="${item.nama_product}">
                            </div>
                        </div>
                        <div>
                            <h5 class="title-keranjang">${item.nama_product}</h5>
                            <p class="name-keranjang">${truncateWords(item.deskripsi, 5)}</p>
                            <ul class="list-unstyled m-0 p-0">
                                <li class="motif-keranjang">
                                    <span class="label-keranjang">Warna</span> : <span
                                        class="value-keranjang">${item.warna}</span>
                                </li>
                                <li class="motif-keranjang">
                                    <span class="label-keranjang">Motif</span> : <span
                                        class="value-keranjang">${item.motif}</span>
                                </li>
                            </ul>
                            <div class="d-flex flex-wrap align-items-baseline">
                                <div class="me-2">
                                    <span class="fw-bold title-keranjang">
                                        <sup class="fw-normal">Rp</sup>
                                        ${formatNumber(hargaSetelahDiskon)}
                                    </span>
                                </div>
                                <div>
                                    ${diskon > 0 ? `
                                        <div>
                                            <span class="fw-normal text-danger old-price">
                                                <sup>Rp</sup>
                                                <span class="text-decoration-line-through">${formatNumber(hargaNormal)}</span>
                                            </span>
                                        </div>
                                    ` : ''}
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Quantity -->
                    <div class="d-flex align-items-center">
                        <button class="btn-quantity decrease-qty" data-id="${item.id_cart}">
                            <span style="font-size: 20px;">-</span>
                        </button>
                        <span class="mx-4 fw-normal text-black" style="font-size: 14px;"
                            id="qty-${item.id_cart}" data-max="${item.qty_motif}"
                            data-price="${hargaSetelahDiskon}">
                            ${qty}
                        </span>
                        <button class="btn-quantity increase-qty" data-id="${item.id_cart}">
                            <span style="font-size: 20px;">+</span>
                        </button>
                    </div>
                    <!-- Harga total per item -->
                    <div>
                        <span id="total-${item.id_cart}" class="fw-bold title-keranjang total-produk-detail">
                            <sup class="fw-normal">Rp</sup>
                            ${formatNumber(total)}
                        </span>
                    </div>
                </div>
            </div>
        `;
                });

                productListElement.innerHTML = html;
            }

            // Calculate and update the total payment
            function updateTotalPembayaran() {
                let subtotal = 0;
                let totalDiskon = 0;
                let total = 0;
                selectedProductIds = []; // Reset selected products

                document.querySelectorAll('.item-checkbox').forEach(function(checkbox) {
                    if (checkbox.id === 'checkAll') return; // Skip the "Select All" checkbox

                    const id = checkbox.dataset.id;
                    const harga = parseInt(checkbox.dataset.price);
                    const diskonPersen = parseFloat(checkbox.dataset.discount);
                    const qtyElement = document.getElementById('qty-' + id);

                    // Skip if element doesn't exist
                    if (!qtyElement) return;

                    const qty = parseInt(qtyElement.textContent);
                    const diskonNominal = (diskonPersen / 100) * harga;
                    const hargaSetelahDiskon = harga - diskonNominal;

                    // If product is checked, calculate and display its total
                    if (checkbox.checked) {
                        subtotal += harga * qty;
                        totalDiskon += diskonNominal * qty;
                        total += hargaSetelahDiskon * qty;
                        selectedProductIds.push(id); // Add ID to selected products array
                    }

                    // Always update the display of individual product totals
                    const elTotalProduk = document.getElementById('total-' + id);
                    if (elTotalProduk) {
                        elTotalProduk.innerHTML = `<sup class="fw-normal">Rp</sup> ${formatRupiah(hargaSetelahDiskon * qty)}`;
                    }
                });

                // Update totals in the summary section
                const subtotalElement = document.getElementById('subtotal-harga');
                const diskonElement = document.getElementById('diskon-produk');
                const totalElement = document.getElementById('total-pembayaran');

                if (subtotalElement) {
                    subtotalElement.innerHTML = '<sup class="fw-normal">Rp</sup> ' + formatRupiah(subtotal);
                }

                if (diskonElement) {
                    diskonElement.innerHTML = '<sup class="fw-normal">Rp</sup> ' + formatRupiah(totalDiskon);
                }

                if (totalElement) {
                    totalElement.innerHTML = '<sup class="fw-normal">Rp</sup> ' + formatRupiah(total);
                }

                // Show or hide delete button based on selections
                toggleDeleteButton();
            }

            // Toggle visibility of delete button
            function toggleDeleteButton() {
                const deleteContainer = document.getElementById('deleteSelectedContainer');
                if (deleteContainer) {
                    if (selectedProductIds.length > 0) {
                        deleteContainer.classList.remove('d-none');
                    } else {
                        deleteContainer.classList.add('d-none');
                    }
                }
            }

            // Set up all event listeners
            function setupEventListeners() {
                // Handle "Select All" checkbox
                const checkAllBox = document.getElementById('checkAll');
                if (checkAllBox) {
                    checkAllBox.addEventListener('change', function() {
                        const isChecked = this.checked;
                        document.querySelectorAll('.item-checkbox').forEach(function(checkbox) {
                            if (checkbox.id !== 'checkAll') {
                                checkbox.checked = isChecked;
                            }
                        });
                        updateTotalPembayaran();
                    });
                }

                // Handle individual checkboxes
                document.querySelectorAll('.item-checkbox').forEach(function(checkbox) {
                    if (checkbox.id !== 'checkAll') {
                        checkbox.addEventListener('change', function() {
                            updateTotalPembayaran();

                            // Update "Select All" checkbox state
                            const checkboxes = document.querySelectorAll('.item-checkbox:not(#checkAll)');
                            const allChecked = Array.from(checkboxes).every(box => box.checked);
                            const checkAllBox = document.getElementById('checkAll');
                            if (checkAllBox) {
                                checkAllBox.checked = allChecked;
                            }
                        });
                    }
                });

                // Handle quantity increase buttons
                document.querySelectorAll('.increase-qty').forEach(function(btn) {
                    btn.addEventListener('click', function() {
                        const id = btn.dataset.id;
                        const qtyEl = document.getElementById('qty-' + id);
                        let qty = parseInt(qtyEl.textContent);
                        const max = parseInt(qtyEl.dataset.max);

                        if (qty < max) {
                            // Update UI first for better UX
                            qty++;
                            qtyEl.textContent = qty;

                            // Update totals
                            updateTotalPembayaran();

                            // Send AJAX request to update quantity
                            updateCartQuantity(id, 'increase');
                        } else {
                            showToast('Jumlah maksimal tercapai', 'warning');
                        }
                    });
                });

                // Handle quantity decrease buttons
                document.querySelectorAll('.decrease-qty').forEach(function(btn) {
                    btn.addEventListener('click', function() {
                        const id = btn.dataset.id;
                        const qtyEl = document.getElementById('qty-' + id);
                        let qty = parseInt(qtyEl.textContent);

                        if (qty > 1) {
                            // Update UI first for better UX
                            qty--;
                            qtyEl.textContent = qty;

                            // Update totals
                            updateTotalPembayaran();

                            // Send AJAX request to update quantity
                            updateCartQuantity(id, 'decrease');
                        } else {
                            showToast('Jumlah minimal adalah 1', 'warning');
                        }
                    });
                });

                // Handle delete selected products
                const btnDeleteSelected = document.getElementById('btnDeleteSelected');
                if (btnDeleteSelected) {
                    btnDeleteSelected.addEventListener('click', function() {
                        if (selectedProductIds.length > 0) {
                            // Directly call deleteSelectedProducts without confirmation
                            deleteSelectedProducts();
                        }
                    });
                }

                // Handle "Buat Pesanan" button
                const btnBuatPesanan = document.getElementById('btnbuatpesanan');
                if (btnBuatPesanan) {
                    btnBuatPesanan.addEventListener('click', function() {
                        if (!selectedProductIds.length) {
                            showToast('Pilih produk terlebih dahulu', 'danger');
                            return;
                        }

                        const token = localStorage.getItem('auth_token');
                        if (!token) {
                            window.location.href = '/login';
                            return;
                        }

                        const formData = new FormData();
                        formData.append('product_ids', JSON.stringify(selectedProductIds));

                        fetch(API_BASE_URL + '/cekquantity', {
                                method: 'POST',
                                body: formData,
                                headers: {
                                    'Authorization': 'Bearer ' + token
                                }
                            })
                            .then(response => response.json())
                            .then(data => {
                                if (data.status === 'success') {
                                    window.location.href = '/pesanan';
                                } else {
                                    showToast(data.message, 'danger');
                                }
                            })
                            .catch(error => {
                                showToast('Terjadi kesalahan saat memproses.', 'danger');
                                console.error('Error:', error);
                            });
                    });
                }
            }

            // Function to update cart quantity via AJAX
            function updateCartQuantity(cartId, action) {
                const token = localStorage.getItem('auth_token');
                if (!token) {
                    window.location.href = '/login';
                    return;
                }

                // Determine endpoint URL based on action
                const url = action === 'increase' ? '/pleskeranjang' : '/minuskeranjang';

                // Set consistent method to send data
                const formData = new FormData();
                formData.append('product_ids', JSON.stringify([cartId]));

                // Send request to server
                fetch(API_BASE_URL + url, {
                        method: 'POST',
                        body: formData,
                        headers: {
                            'Authorization': 'Bearer ' + token
                        }
                    })
                    .then(response => {
                        if (!response.ok) {
                            throw new Error('Network response was not ok');
                        }
                        return response.json();
                    })
                    .then(data => {
                        if (data.success) {
                            showToast('Jumlah berhasil diperbarui', 'success');
                        } else {
                            showToast(data.message || 'Gagal memperbarui jumlah', 'danger');
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        showToast('Terjadi kesalahan saat memperbarui jumlah', 'danger');
                    });
            }

            // Delete selected products via AJAX
            function deleteSelectedProducts() {
                // Create form data for AJAX request
                const formData = new FormData();
                formData.append('product_ids', JSON.stringify(selectedProductIds));
                const token = localStorage.getItem('auth_token');
                if (!token) {
                    window.location.href = '/login';
                    return;
                }

                fetch(API_BASE_URL + '/deletekeranjang', {
                        method: 'POST',
                        body: formData,
                        headers: {
                            'Authorization': 'Bearer ' + token
                        }
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
                                            const cartContainer = document.querySelector('#product-list');
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

            // Initialize by fetching cart data
            fetchCartData();
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

                            // document.getElementById('id_product').value = product.id_product;
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