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
                                    <div class="px-4 py-3 border rounded shadow-sm">
                                        <div>
                                            <h4 class="text-black text-header-informasi">Alamat Penerima</h4>
                                        </div>
                                        <div class="text-alamat-rumah my-2">
                                            <!-- <p id="display_detail"></p>
                                            <p id="display_nama"></p>
                                            <p id="display_hp"></p>
                                            <p id="display_alamat"></p>
                                            <p id="display_email" class="d-none"></p> -->
                                            <div id="alamat-content">
                                                <!-- Delivery content will be loaded here -->
                                            </div>
                                        </div>
                                        <div>
                                            <a href="/profile">
                                                <button class="button-edit">Tambah Alamat</button>
                                            </a>
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
                                                <div id="pengiriman-content">
                                                    <!-- Delivery content will be loaded here -->
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
                                        <div id="product-list" class="mb-4">
                                            <!-- Products will be dynamically loaded here -->
                                        </div>
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
                                                <div class="px-4 py-3 mb-4 border rounded shadow-sm">
                                                    <h1 class="fw-bold text-black" style="font-size: 16px;">Detail Rincian Pembayaran</h1>
                                                    <div class="order-summary">
                                                        <div class="summary-label">Subtotal Harga</div>
                                                        <div class="summary-value">
                                                            <span class="currency-symbol">Rp</span>
                                                            <span id="subtotal">0</span>
                                                        </div>

                                                        <div class="summary-label">Total Diskon</div>
                                                        <div class="summary-value">
                                                            <span class="currency-symbol">Rp</span>
                                                            <span id="total-diskon">0</span>
                                                        </div>

                                                        <div class="summary-label">Total Ongkir</div>
                                                        <div class="summary-value">
                                                            <span class="currency-symbol">Rp</span>
                                                            <span id="total-ongkir">0</span>
                                                        </div>
                                                    </div>
                                                    <hr class="hr-tebal" style="margin-top: 10px;">
                                                    <div class="order-summary" style="font-weight: bold;">
                                                        <div class="summary-label">Total Pembayaran</div>
                                                        <div class="summary-value">
                                                            <span class="currency-symbol">Rp</span>
                                                            <span id="total-pembayaran">0</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="px-4 py-3">
                                            <form id="formBayar" method="post">
                                                <input type="text" id="id_toko" value="" hidden>
                                                <input type="text" id="id_pengiriman" value="" hidden>
                                                <button type="submit" id="payButton" class="btn btn-buy w-100 rounded-3 fw-bold position-relative" style="font-size: 14px;">
                                                    <span id="buttonText">Bayar</span>
                                                    <span id="buttonSpinner" class="spinner-border spinner-border-sm position-absolute" style="display: none; right: 10px;" role="status" aria-hidden="true"></span>
                                                </button>
                                            </form>
                                        </div>
                                        <!-- Selesai 1 produk -->
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

            <!-- <div class="modal fade bd-example-modal-lg" id="editAlamatModal" tabindex="-1" role="dialog"
                aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        ...
                    </div>
                </div>
            </div> -->


            <div id="toastContainer" class="position-fixed top-0 end-0 p-3" style="z-index: 9999;"></div>
    </main>


    <!-- footer area -->
    <?php include __DIR__ . '/../templates/footer.php'; ?>
    <!-- footer area end -->

    <!-- js -->
    <?php include __DIR__ . '/../Scripts/script.php'; ?>
    <!-- js end -->
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

        $('#myModal').on('shown.bs.modal', function() {
            $('#myInput').trigger('focus')
        })
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

    <!-- Script -->
    <script>
        let tokoList = [];
        let jenisPengiriman = [];
        const btnAntar = document.getElementById('btn-antar');
        const btnAmbil = document.getElementById('btn-ambil');
        const content = document.getElementById('pengiriman-content');
        const idTokoInput = document.getElementById('id_toko');
        const idPengirimanInput = document.getElementById('id_pengiriman');
        const ongkirEl = document.getElementById('total-ongkir');
        const totalPembayaranEl = document.getElementById('total-pembayaran');
        const baseTotal = [];

        function formatRupiah(angka) {
            return new Intl.NumberFormat('id-ID').format(angka);
        }

        function renderContent(type) {
            if (type === 'antar') {
                let html = `<h6 class="text-black header-pilih-jasa">Pilih jasa Pengiriman</h6>`;
                jenisPengiriman.forEach(p => {
                    const harga = parseInt(p.harga_setelah_diskon);
                    html += `
                    <div class="d-flex justify-content-between align-items-center w-100 mt-2">
                        <div class="d-flex align-items-center gap-2">
                            <input type="radio" name="jenis_pengiriman" value="${p.id}" data-harga="${harga}" onchange="selectPengiriman(this)">
                            <div class="text-detail-jasa">${p.nama}</div>
                        </div>
                        <div class="d-flex align-items-center gap-3">
                            ${p.diskon > 0 ? `<div class="text-danger old-price fw-normal"><sup>Rp</sup><span class="text-decoration-line-through">${formatRupiah(p.harga)}</span></div>` : ''}
                            <div class="text-nominal text-black">${harga === 0 ? 'gratis' : 'Rp ' + formatRupiah(harga)}</div>
                        </div>
                    </div>`;
                });
                content.innerHTML = html;
            } else {
                let html = `<h6 class="text-black header-pilih-jasa">Pilih Lokasi Pengambilan</h6>`;
                tokoList.forEach(toko => {
                    html += `
                    <div class="d-flex align-items-start gap-2 w-100 mt-2">
                        <input type="radio" name="lokasi_toko" value="${toko.id}" onchange="selectToko(this)" style="margin-top: 4px;">
                        <div class="d-flex flex-column">
                            <div class="text-detail-jasa">${toko.nama}</div>
                            <div class="text-detail-jasa">${toko.alamat}</div>
                        </div>
                    </div>`;
                });
                content.innerHTML = html;
            }
        }

        function selectPengiriman(el) {
            const harga = parseInt(el.dataset.harga);
            idPengirimanInput.value = el.value;
            ongkirEl.innerText = formatRupiah(harga);
            totalPembayaranEl.innerText = formatRupiah(baseTotal + harga);
        }

        function selectToko(el) {
            idTokoInput.value = el.value;
            ongkirEl.innerText = '0';
            totalPembayaranEl.innerText = formatRupiah(baseTotal);
        }

        btnAntar.addEventListener('click', () => {
            renderContent('antar');
            btnAntar.classList.add('active');
            btnAmbil.classList.remove('active');
            idTokoInput.value = '';
            idPengirimanInput.value = '';
            ongkirEl.innerText = '0';
            totalPembayaranEl.innerText = formatRupiah(baseTotal);
        });

        btnAmbil.addEventListener('click', () => {
            renderContent('ambil');
            btnAmbil.classList.add('active');
            btnAntar.classList.remove('active');
            idTokoInput.value = '';
            idPengirimanInput.value = '';
            ongkirEl.innerText = '0';
            totalPembayaranEl.innerText = formatRupiah(baseTotal);
        });

  
        renderContent('antar');
    </script>
    <script>
        
        function displayAddresses(addresses) {
         
            addresses.sort((a, b) => {
                return b.utama - a.utama;
            });

            const alamatContentElement = document.getElementById('alamat-content');
            alamatContentElement.innerHTML = ''; 
            addresses.forEach(address => {
                const addressElement = document.createElement('div');
                addressElement.className = 'd-flex align-items-start gap-2 w-100 mt-2';

                const radioInput = document.createElement('input');
                radioInput.type = 'radio';
                radioInput.name = 'lokasi_alamat';
                radioInput.value = address.id;
                radioInput.style.marginTop = '4px';
                radioInput.checked = address.utama === 1;
                radioInput.onchange = function() {
                    selectAlamat(this);
                };

            
                const textContainer = document.createElement('div');
                textContainer.className = 'd-flex flex-column';

                const addressLine1 = document.createElement('div');
                addressLine1.className = 'text-detail-jasa';
                addressLine1.textContent = `${address.detail_alamat}`;

                const addressLine2 = document.createElement('div');
                addressLine2.className = 'text-detail-jasa';
                addressLine2.textContent = `${address.kelurahan}, ${address.kecamatan}, ${address.kabupaten}, ${address.provinsi}`;

     
                textContainer.appendChild(addressLine1);
                textContainer.appendChild(addressLine2);

                addressElement.appendChild(radioInput);
                addressElement.appendChild(textContainer);

                alamatContentElement.appendChild(addressElement);
            });
        }

        function selectAlamat(radioElement) {
            const addressId = radioElement.value;
            const token = localStorage.getItem('auth_token');

            if (!token) {
                window.location.href = '/login';
                return;
            }

            const dataToSend = {
                address_id: addressId
            };

            fetch(`${API_BASE_URL}/update-alamat`, {
                    method: 'POST',
                    headers: {
                        'Authorization': `Bearer ${token}`,
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify(dataToSend)
                })
                .then(response => response.json())
                .then(result => {
                 
                    const allRadios = document.querySelectorAll('input[name="lokasi_alamat"]');
                    allRadios.forEach(radio => {
                        const parentDiv = radio.closest('.d-flex');
                        if (radio.value === addressId) {
                         
                            radio.checked = true;
                        }
                    });
                })
                .catch(error => {
                    if (error.message.includes('Token tidak ditemukan') || error.message.includes('Token tidak valid, silakan login ulang')) {
                
                        localStorage.removeItem('auth_token');
                        alert("Sesi Anda telah habis. Silakan login ulang.");
                        window.location.href = '/login';
                        return;
                    }
                    console.error('Error:', error);
                    alert('Terjadi kesalahan saat mengupdate data');
                });
        }

    
        document.addEventListener('DOMContentLoaded', function() {
            const token = localStorage.getItem('auth_token');
            if (!token) {
                window.location.href = '/login';
                return;
            }

            fetch(`${API_BASE_URL}/alamat`, {
                    method: 'GET',
                    headers: {
                        'Authorization': `Bearer ${token}`,
                        'Content-Type': 'application/json'
                    }
                })
                .then(response => response.json())
                .then(result => {
                    displayAddresses(result.data);
                })
                .catch(error => {
                    if (error.message.includes('Token tidak ditemukan') || error.message.includes('Token tidak valid, silakan login ulang')) {
            
                        localStorage.removeItem('auth_token');
                        alert("Sesi Anda telah habis. Silakan login ulang.");
                        window.location.href = '/login';
                        return;
                    }
                    console.error('Error:', error);
                });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('formBayar').addEventListener('submit', function(e) {
                e.preventDefault(); 
                const payButton = document.getElementById('payButton');
                const buttonText = document.getElementById('buttonText');
                const buttonSpinner = document.getElementById('buttonSpinner');
                if (payButton.getAttribute('data-loading') === 'true') {
                    return;
                }

                payButton.setAttribute('data-loading', 'true');
                payButton.classList.add('disabled');
                buttonText.textContent = 'Memproses...';
                buttonSpinner.style.display = 'inline-block';

                const token = localStorage.getItem('auth_token');
                if (!token) {
                    window.location.href = '/login';
                    return;
                }

                // Get cart_ids from localStorage
                const cartIds = localStorage.getItem('cart_ids');
                if (cartIds === null) {
                    // kembali ke product
                    window.location.href = '/product';
                    return;
                }

                const idToko = document.getElementById('id_toko').value;
                const idPengiriman = document.getElementById('id_pengiriman').value;

                // Validation
                if (!idToko && !idPengiriman) {
                    showToast('Pilih toko atau jenis pengiriman terlebih dahulu', 'danger');
                    // Reset button state
                    resetButtonState();
                    return;
                }

                // Create FormData object
                const formData = new FormData();
                formData.append('id_toko', idToko);
                formData.append('id_pengiriman', idPengiriman);

                // Send data to server
                fetch(`${API_BASE_URL}/pesanan?cart_ids=${cartIds}`, {
                        method: 'POST',
                        headers: {
                            'Authorization': 'Bearer ' + token
                        },
                        body: formData
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.status === 'success') {
                            // reset storage carg
                            const cartIds = localStorage.getItem('cart_ids');
                            localStorage.removeItem('cart_ids');
                            showToast(data.message || 'Pesanan berhasil dibuat', 'success');
                            // cek disini
                            setTimeout(() => {
                                window.location.href = data.redirect_url || '/pembayaran';
                            }, 1500);
                        } else {
                            // Reset button state on error
                            resetButtonState();

                            // Check if we need to redirect to cart page
                            if (data.message === 'Return to keranjang') {
                                showToast('Keranjang kosong, silakan pilih produk terlebih dahulu', 'danger');
                                setTimeout(() => {
                                    window.location.href = '/keranjang';
                                }, 1500);
                            } else {
                                showToast(data.message || 'Terjadi kesalahan', 'danger');
                            }
                            if (data.message === "Alamat belum ditambahkan") {
                                window.location.href = '/profile';
                            }
                        }
                    })
                    .catch(error => {
                        resetButtonState();
                        showToast('Terjadi kesalahan dalam mengirim data', 'danger');
                        console.error('Error:', error);
                    });

                // Function to reset button state
                function resetButtonState() {
                    payButton.removeAttribute('data-loading');
                    payButton.classList.remove('disabled');
                    buttonText.textContent = 'Bayar';
                    buttonSpinner.style.display = 'none';
                }
            });

            function showToast(message, type = 'danger') {
                const toastId = 'toast-' + Date.now();
                const toastHTML = `
                <div id="${toastId}" class="toast align-items-center text-bg-${type} border-0 shadow" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="3000">
                    <div class="d-flex">
                        <div class="toast-body">${message}</div>
                        <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                </div>
            `;

                const toastContainer = document.getElementById('toastContainer');
                toastContainer.insertAdjacentHTML('beforeend', toastHTML);

                const toastElement = new bootstrap.Toast(document.getElementById(toastId));
                toastElement.show();
            }
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const token = localStorage.getItem('auth_token');
            if (!token) {
                window.location.href = '/login';
                return;
            }


            const cartIds = localStorage.getItem('cart_ids');
            if (cartIds === null) {
                window.location.href = '/product';
                return;
            }

            fetch(`${API_BASE_URL}/pesanan/index?cart_ids=${cartIds}`, {
                    method: 'GET',
                    headers: {
                        'Authorization': 'Bearer ' + token
                    },
                })
                .then(res => res.json())
                .then(response => {
                    const data = response.data;
                    if (!data || !data.user) {
                        window.location.href = '/product';
                        console.error("User data is missing or undefined");
                        return;
                    }

                    // Fill user data
                    populateUserData(data.user);

                    // Render products
                    renderProducts(data.products);

                    // Set up delivery methods
                    setupDeliveryMethods(data.jenisPengiriman, data.toko, data.subtotal - data.total_diskon);

                    // Update payment summary
                    updatePaymentSummary(data.subtotal, data.total_diskon, data.total_pembayaran);
                })
                .catch(error => {
                    console.error("FETCH ERROR:", error.message);
                });

            // Handle form submission
            document.getElementById('formBayar').addEventListener('submit', function(e) {
                e.preventDefault();

                const idToko = document.getElementById('id_toko').value;
                const idPengiriman = document.getElementById('id_pengiriman').value;

                // if (!idToko && !idPengiriman) {
                //     alert('Silakan pilih metode pengiriman terlebih dahulu');
                //     return;
                // }

                // Submit payment logic here
                // Add your payment processing code
            });
        });

        function populateUserData(user) {
            // document.getElementById('display_detail').textContent = user.detail ? ucFirst(user.detail) : '';
            // document.getElementById('display_nama').textContent = user.nama || '';
            // document.getElementById('display_hp').textContent = user.no_hp || '';
            // document.getElementById('display_alamat').textContent = user.alamat || '';
            // document.getElementById('display_email').textContent = user.email || '';
        }

        function renderProducts(products) {
            const productListElement = document.getElementById('product-list');
            let productHTML = '';

            products.forEach(item => {
                const hargaNormal = parseInt(item.harga);
                const diskon = parseInt(item.diskon);
                let hargaSetelahDiskon = hargaNormal;
                let nominalDiskon = 0;

                if (diskon > 0) {
                    nominalDiskon = (diskon / 100) * hargaNormal;
                    hargaSetelahDiskon = hargaNormal - nominalDiskon;
                }

        
                const validQty = (parseInt(item.qty_cart) > parseInt(item.qty_motif)) ?
                    parseInt(item.qty_motif) : parseInt(item.qty_cart);
                const totalItemPrice = validQty * hargaSetelahDiskon;

                productHTML += `
        <div class="w-100 p-4 pt-0 d-flex align-items-center border-bottom pb-3">
            <!-- Product Column -->
            <div style="width: 50%;" class="d-flex gap-3 align-items-center">
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
                    <h5 class="title-keranjang">
                        ${item.nama_product}
                    </h5>
                    <p class="name-keranjang">
                    ${truncateWords(item.deskripsi, 6)}
                    </p>
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
                    
                    <!-- Shop Name Card -->
                    <div class="shop-name-card bg-light rounded p-1 mt-1 mb-2">
                        <small class="text-muted">
                            <i class="fas fa-store me-1"></i>${item.nama_toko || "Toko Furnic"}
                        </small>
                    </div>
                    
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
                                    <span class="text-decoration-line-through">
                                        ${formatNumber(hargaNormal)}
                                    </span>
                                </span>
                            </div>` : ''}
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quantity Column -->
            <div style="width: 15%; text-align: center;">
                <span class="fw-normal text-black" style="font-size: 14px;"
                    id="qty-${item.id_cart}"
                    data-max="${item.qty_motif}"
                    data-price="${hargaSetelahDiskon}">
                    ${validQty}
                </span>
            </div>

            <!-- Price Column -->
            <div style="width: 15%; text-align: center;">
                <span class="fw-bold title-keranjang">
                    <sup class="fw-normal">Rp</sup>
                    ${formatNumber(hargaSetelahDiskon)}
                </span>
            </div>

            <!-- Total Column -->
            <div style="width: 20%; text-align: center;">
                <span id="total-${item.id_cart}"
                    class="fw-bold title-keranjang total-produk-detail">
                    <sup class="fw-normal">Rp</sup>
                    ${formatNumber(totalItemPrice)}
                </span>
            </div>
        </div>`;
            });

            productListElement.innerHTML = productHTML;
        }

        function potongDeskripsi(teks, jumlahKata = 10) {
            const kata = teks.split(' ');
            if (kata.length <= jumlahKata) return teks;
            return kata.slice(0, jumlahKata).join(' ') + '...';
        }

        function truncateWords(text, wordLimit) {
            if (!text) return '';
            const words = text.trim().split(/\s+/);
            if (words.length <= wordLimit) return text;
            return words.slice(0, wordLimit).join(' ') + '...';
        }


        function setupDeliveryMethods(jenisPengiriman, tokoList, baseTotal) {
            const btnAntar = document.getElementById('btn-antar');
            const btnAmbil = document.getElementById('btn-ambil');
            const content = document.getElementById('pengiriman-content');
            const idTokoInput = document.getElementById('id_toko');
            const idPengirimanInput = document.getElementById('id_pengiriman');
            const ongkirEl = document.getElementById('total-ongkir');
            const totalPembayaranEl = document.getElementById('total-pembayaran');

            // Simpan seleksi yang dipilih user
            let selectedPengirimanId = '';
            let selectedTokoId = '';
            let currentMode = 'antar'; // Default mode

            function renderContent(type) {
                currentMode = type;

                if (type === 'antar') {
                    let html = `<h6 class="text-black header-pilih-jasa">Pilih jasa Pengiriman</h6>`;
                    jenisPengiriman.forEach(p => {
                        const harga = parseInt(p.harga_setelah_diskon);
                        const originalHarga = parseInt(p.harga);
                        const isChecked = p.id.toString() === selectedPengirimanId ? 'checked' : '';

                        html += `
                <div class="d-flex justify-content-between align-items-center w-100 mt-2">
                    <div class="d-flex align-items-center gap-2">
                        <input type="radio" name="jenis_pengiriman" id="pengiriman_${p.id}" 
                               value="${p.id}" data-harga="${harga}" ${isChecked}
                               onchange="selectPengiriman(this)">
                        <div class="text-detail-jasa">${p.nama}</div>
                    </div>
                    <div class="d-flex align-items-center gap-3">
                        ${p.diskon > 0 ? `<div class="text-danger old-price fw-normal"><sup>Rp</sup><span class="text-decoration-line-through">${formatNumber(originalHarga)}</span></div>` : ''}
                        <div class="text-nominal text-black">${harga === 0 ? 'gratis' : 'Rp ' + formatNumber(harga)}</div>
                    </div>
                </div>`;
                    });
                    content.innerHTML = html;

                    // Jika ada pengiriman yang sudah dipilih sebelumnya, update total
                    if (selectedPengirimanId) {
                        const selectedPengiriman = jenisPengiriman.find(p => p.id.toString() === selectedPengirimanId);
                        if (selectedPengiriman) {
                            const harga = parseInt(selectedPengiriman.harga_setelah_diskon);
                            ongkirEl.innerText = formatNumber(harga);
                            totalPembayaranEl.innerText = formatNumber(baseTotal + harga);
                        }
                    }
                } else {
                    let html = `<h6 class="text-black header-pilih-jasa">Pilih Lokasi Pengambilan</h6>`;
                    tokoList.forEach(toko => {
                        const isChecked = toko.id.toString() === selectedTokoId ? 'checked' : '';

                        html += `
                <div class="d-flex align-items-start gap-2 w-100 mt-2">
                    <input type="radio" name="lokasi_toko" value="${toko.id}" ${isChecked}
                           onchange="selectToko(this)" style="margin-top: 4px;">
                    <div class="d-flex flex-column">
                        <div class="text-detail-jasa">${toko.nama}</div>
                        <div class="text-detail-jasa">${toko.alamat || 'Alamat tidak tersedia'}</div>
                    </div>
                </div>`;
                    });
                    content.innerHTML = html;

                    // Jika ada toko yang sudah dipilih sebelumnya, update total
                    if (selectedTokoId) {
                        ongkirEl.innerText = '0';
                        totalPembayaranEl.innerText = formatNumber(baseTotal);
                    }
                }
            }

            window.selectPengiriman = function(el) {
                const harga = parseInt(el.dataset.harga);
                selectedPengirimanId = el.value;
                idPengirimanInput.value = el.value;
                idTokoInput.value = '';
                selectedTokoId = ''; // Reset toko selection when pengiriman is selected
                ongkirEl.innerText = formatNumber(harga);
                totalPembayaranEl.innerText = formatNumber(baseTotal + harga);
            };

            window.selectToko = function(el) {
                selectedTokoId = el.value;
                idTokoInput.value = el.value;
                idPengirimanInput.value = '';
                selectedPengirimanId = ''; // Reset pengiriman selection when toko is selected
                ongkirEl.innerText = '0';
                totalPembayaranEl.innerText = formatNumber(baseTotal);
            };

            btnAntar.addEventListener('click', () => {
                if (currentMode !== 'antar') {
                    renderContent('antar');
                    btnAntar.classList.add('active');
                    btnAmbil.classList.remove('active');

                    // Jika tidak ada pengiriman yang dipilih, reset nilainya
                    if (!selectedPengirimanId) {
                        idTokoInput.value = '';
                        idPengirimanInput.value = '';
                        ongkirEl.innerText = '0';
                        totalPembayaranEl.innerText = formatNumber(baseTotal);
                    }
                }
            });

            btnAmbil.addEventListener('click', () => {
                if (currentMode !== 'ambil') {
                    renderContent('ambil');
                    btnAmbil.classList.add('active');
                    btnAntar.classList.remove('active');

                    // Jika tidak ada toko yang dipilih, reset nilainya
                    if (!selectedTokoId) {
                        idTokoInput.value = '';
                        idPengirimanInput.value = '';
                        ongkirEl.innerText = '0';
                        totalPembayaranEl.innerText = formatNumber(baseTotal);
                    }
                }
            });

            // Render default antar saat load
            renderContent('antar');
        }

        function updatePaymentSummary(subtotal, totalDiskon, totalPembayaran) {
            document.getElementById('subtotal').innerText = formatNumber(subtotal);
            document.getElementById('total-diskon').innerText = formatNumber(totalDiskon);
            document.getElementById('total-pembayaran').innerText = formatNumber(totalPembayaran);
        }

        function formatNumber(number) {
            return new Intl.NumberFormat('id-ID').format(number);
        }

        function ucFirst(string) {
            return string.charAt(0).toUpperCase() + string.slice(1);
        }
    </script>


    <!-- <script>
        $('#formEditUser').on('submit', function(e) {
            e.preventDefault();

            const nama = $('#nama_user').val().trim();
            const email = $('#email').val().trim();
            const no_hp = $('#no_telpon').val().trim();
            const alamat = $('#Alamat').val().trim();
            const detail = $('#detail').val().trim();

            if (!nama || !email || !no_hp || !alamat || !detail) {
                showToast('Semua field wajib diisi.', 'danger');
                return;
            }

            if (!/^8[0-9]{7,12}$/.test(no_hp)) {
                showToast('Nomor HP harus dimulai dengan angka 8 dan berisi 8-13 digit.', 'danger');
                return;
            }

            const formData = $(this).serialize();

            $.ajax({
                url: '/user/update',
                method: 'POST',
                data: formData,
                success: function(response) {
                    try {
                        const res = JSON.parse(response);
                        if (res.status === 'success') {
                            // Ambil data dari form
                            const nama = $('#nama_user').val();
                            const email = $('#email').val();
                            const no_hp = $('#no_telpon').val();
                            const alamat = $('#Alamat').val();
                            const detail = $('#detail').val();


                            $('#editAlamatModal').modal('hide');
                            // $('#formEditUser')[0].reset();
                            showToast(res.message, 'success');

                            // Update tampilan data di luar modal
                            // $('#display_nama').text(nama);
                            // $('#display_email').text(email);
                            // $('#display_hp').text('+62' + no_hp.replace(/^0+/, '')); // hapus 0 di depan
                            // $('#display_alamat').text(alamat);
                            // $('#display_detail').text(detail);
                        } else {
                            showToast(res.message || 'Gagal update.', 'danger');
                        }
                    } catch (err) {
                        console.error(err);
                        showToast('Terjadi kesalahan pada server.', 'danger');
                    }
                },
                error: function() {
                    showToast('Gagal terhubung ke server.', 'danger');
                }
            });


        });

        const input = document.getElementById('no_telpon');
        // Batasi hanya angka
        input.addEventListener('input', function() {
            this.value = this.value.replace(/\D/g, ''); // hapus karakter non-angka
        });

        function showToast(message, type = 'danger') {
            const toastId = 'toast-' + Date.now();
            const toastHTML = `
                <div id="${toastId}" class="toast align-items-center text-bg-${type} border-0 shadow" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="3000">
                    <div class="d-flex">
                        <div class="toast-body">${message}</div>
                        <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                </div>
            `;

            const toastContainer = document.getElementById('toastContainer');
            toastContainer.insertAdjacentHTML('beforeend', toastHTML);

            const toastElement = new bootstrap.Toast(document.getElementById(toastId));
            toastElement.show();
        }
    </script> -->
</body>

</html>