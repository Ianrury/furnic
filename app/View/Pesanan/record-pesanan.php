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
        :root {
            --primary-color: #294478;
            --primary-light: #3d5d99;
            --primary-dark: #1a2e54;
            --status-pending: #ffc107;
            --status-confirm: #6f42c1;
            --status-processing: #0dcaf0;
            --status-shipping: #fd7e14;
            --status-completed: #198754;
            --status-canceled: #dc3545;
        }

        body {
            background-color: #f5f5f5;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            /* padding: 20px; */
        }

        .order-card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 3px 15px rgba(0, 0, 0, 0.08);
            overflow: hidden;
            transition: all 0.3s ease;
            margin-bottom: 20px;
            position: relative;
            background-color: white;
        }

        .order-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.12);
        }

        .status-label {
            position: absolute;
            top: 0;
            right: 0;
            padding: 6px 18px;
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
            color: white;
            border-bottom-left-radius: 10px;
            z-index: 1;
            letter-spacing: 0.5px;
        }

        .status-pending {
            background-color: var(--status-pending);
        }

        .status-confirm {
            background-color: var(--status-confirm);
        }

        .status-processing {
            background-color: var(--status-processing);
        }

        .status-shipping {
            background-color: var(--status-shipping);
        }

        .status-completed {
            background-color: var(--status-completed);
        }

        .status-canceled {
            background-color: var(--status-canceled);
        }

        .order-header {
            background-color: var(--primary-color);
            color: white;
            padding: 15px 20px;
            font-weight: 600;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .order-id {
            font-size: 16px;
        }

        .order-date {
            font-size: 13px;
            opacity: 0.9;
            margin-top: 3px;
        }

        .order-icon {
            background-color: rgba(255, 255, 255, 0.2);
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
        }

        .order-body {
            padding: 20px;
        }

        .order-detail {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
            font-size: 14px;
        }

        .order-detail-label {
            color: #6c757d;
            font-weight: 500;
        }

        .order-detail-value {
            font-weight: 600;
            color: #212529;
        }

        .payment-countdown {
            background-color: #fff8e1;
            padding: 12px 15px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            margin: 15px 0;
            border-left: 4px solid var(--status-pending);
        }

        .countdown-timer {
            font-weight: 700;
            color: var(--status-pending);
            margin-left: 10px;
            letter-spacing: 0.5px;
        }

        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            border-radius: 50px;
            padding: 8px 24px;
            font-weight: 500;
            transition: all 0.2s ease;
        }

        .btn-primary:hover {
            background-color: var(--primary-light);
            border-color: var(--primary-light);
            transform: translateY(-2px);
            box-shadow: 0 4px 10px rgba(41, 68, 120, 0.3);
        }

        .btn-outline-primary {
            color: var(--primary-color);
            border-color: var(--primary-color);
            border-radius: 50px;
            padding: 8px 24px;
            font-weight: 500;
        }

        .btn-outline-primary:hover {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }

        .btn-pay {
            background-color: var(--status-pending);
            border-color: var(--status-pending);
            color: #212529;
            font-weight: 600;
            border-radius: 50px;
            padding: 8px 24px;
            transition: all 0.2s ease;
        }

        .btn-pay:hover {
            background-color: #e6a800;
            border-color: #e6a800;
            color: #212529;
            transform: translateY(-2px);
            box-shadow: 0 4px 10px rgba(255, 193, 7, 0.3);
        }

        .progress-container {
            margin: 20px 0;
        }

        .progress {
            height: 6px;
            border-radius: 3px;
            margin-bottom: 8px;
            background-color: #e9ecef;
        }

        .progress-bar {
            border-radius: 3px;
        }

        .progress-steps {
            display: flex;
            justify-content: space-between;
            position: relative;
        }

        .progress-step {
            text-align: center;
            font-size: 12px;
            color: #6c757d;
            position: relative;
            width: 20%;
        }

        .progress-step.active {
            color: var(--primary-color);
            font-weight: 600;
        }

        .progress-step::before {
            content: '';
            display: block;
            width: 15px;
            height: 15px;
            background-color: #e9ecef;
            border-radius: 50%;
            margin: 0 auto 5px;
            border: 2px solid #fff;
            box-shadow: 0 0 0 2px #e9ecef;
        }

        .progress-step.active::before {
            background-color: var(--primary-color);
            box-shadow: 0 0 0 2px rgba(41, 68, 120, 0.3);
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
                    <li class="breadcrumb-item active" aria-current="page">Pesanan</li>
                </ol>
            </nav>
        </div>
    </nav>

    <!-- popup search end -->


    <main class="main">
        <div class="product-area product-area-new">
            <div class="container">
                <div class="row">
                    <div class="col-12 wow fadeInDown mb-0" data-wow-delay=".25s">
                        <div class="site-heading-inline">
                            <h2 class="site-title">Pesanan Saya</h2>
                        </div>
                    </div>
                </div>
                <div class="tab-content wow fadeInUp" data-wow-delay=".25s" id="item-tabContent">
                    <div class="container" id="pemesanan_list">

                    </div>
                </div>
            </div>
        </div>
    </main>


    <!-- footer area -->
    <?php include __DIR__ . '/../templates/footer.php'; ?>
    <!-- footer area end -->



    <!-- js -->

    <!-- js end -->
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
    <!-- SweetAlert2 CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>
<script>
    const API_BASE_URL = "<?= $apiBaseUrl ?>";
</script>

<script>
    const token = localStorage.getItem('auth_token');
    // Fungsi untuk memformat mata uang
    function formatRupiah(angka) {
        return 'Rp ' + new Intl.NumberFormat('id-ID').format(angka);
    }

    // Fungsi untuk memformat tanggal dengan jam
    function formatTanggalDenganJam(tanggal) {
        return new Date(tanggal).toLocaleString('id-ID', {
            day: 'numeric',
            month: 'long',
            year: 'numeric',
            hour: '2-digit',
            minute: '2-digit'
        });
    }

    // Fungsi untuk mendapatkan metode pengiriman
    function getMetodePengiriman(pesanan) {
        if (pesanan.jenis_pengiriman && pesanan.jenis_pengiriman.nama) {
            return pesanan.jenis_pengiriman.nama;
        }

        if (pesanan.toko) {
            return 'Ambil di Tempat';
        }

        return 'Belum Ditentukan';
    }

    // Fungsi untuk membuat kartu pesanan yang lebih responsif dan user-friendly
    function buatKartuPesanan(pesanan) {
        const sisaWaktu = hitungSisaWaktuPembayaran(pesanan.limit_payment);
        const metodePengiriman = getMetodePengiriman(pesanan);
        const isBatal = pesanan.isbatal === 1 || pesanan.isbatal === true;

        // Status info dengan penambahan status dibatalkan
        const statusInfo = {
            'waiting': {
                label: 'Menunggu',
                warna: 'warning',
                ikon: 'fa-clock'
            },
            'belum bayar': {
                label: 'Belum Bayar',
                warna: 'danger',
                ikon: 'fa-money-bill-wave'
            },
            'konfirmasi': {
                label: 'Konfirmasi',
                warna: 'primary',
                ikon: 'fa-check-circle'
            },
            'dikirim': {
                label: 'Dikirim',
                warna: 'success',
                ikon: 'fa-truck'
            },
            'completed': {
                label: 'Selesai',
                warna: 'success',
                ikon: 'fa-check-double'
            },
            'batal': {
                label: 'Dibatalkan',
                warna: 'secondary',
                ikon: 'fa-ban'
            }
        };

        // Tentukan status berdasarkan isbatal atau status_pesanan
        let status = (pesanan.status_pesanan || pesanan.status_pembayaran || '').toLowerCase();
        if (isBatal) {
            status = 'batal';
        }

        const infoStatus = statusInfo[status] || statusInfo['waiting'];

        return `
    <div class="col-12 col-md-6 col-lg-4 mb-3">
        <div class="card h-100 shadow-sm border-${infoStatus.warna}">
            <div class="card-header bg-${infoStatus.warna} text-white d-flex justify-content-between align-items-center py-2 px-3">
                <small>
                    <i class="fas ${infoStatus.ikon} me-2"></i>
                    ${infoStatus.label}
                </small>
                <small class="badge bg-light text-dark">#${pesanan.nomor_pesanan}</small>
            </div>
            <div class="card-body py-2 px-3">
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <small class="text-muted">
                        <strong>${formatTanggalDenganJam(pesanan.tanggal_pesanan)}</strong>
                    </small>
                    <small class="text-muted">${metodePengiriman}</small>
                </div>
                
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <small>
                        <i class="fas fa-box me-2"></i>
                        ${pesanan.products ? pesanan.products.length : 0} Product
                    </small>
                    <h6 class="mb-0 text-primary">${formatRupiah(pesanan.total_harga)}</h6>
                </div>

                ${(status === 'waiting' || status === 'belum bayar') && !isBatal ? `
                <div class="alert ${sisaWaktu.isExpired ? 'alert-secondary' : 'alert-danger'} py-2 px-3 mb-2" role="alert">
                    <div class="d-flex justify-content-between align-items-center">
                        <small><i class="fas fa-hourglass-half me-2"></i>Batas Pembayaran</small>
                        <small id="countdown-${pesanan.nomor_pesanan}" 
                               class="countdown-timer" 
                               data-limit="${pesanan.limit_payment}">
                            ${sisaWaktu.formatted}
                        </small>
                    </div>
                </div>
                ` : ''}

                ${isBatal ? `
                <div class="alert alert-secondary py-2 px-3 mb-2" role="alert">
                    <div class="d-flex justify-content-between align-items-center">
                        <small><i class="fas fa-ban me-2"></i>Status Pesanan</small>
                        <small>Sudah Dibatalkan</small>
                    </div>
                </div>
                ` : ''}

                <div class="d-grid gap-2">
                    ${(status === 'waiting' || status === 'belum bayar') && !isBatal ? `
                    <button onclick="batalPembayaran('${pesanan.nomor_pesanan}')" 
                            class="btn btn-sm btn-outline-danger ${sisaWaktu.isExpired ? 'disabled' : ''}"
                            ${sisaWaktu.isExpired ? 'disabled' : ''}>
                        <i class="fas fa-times-circle me-2"></i>Batalkan
                    </button>
                    <a href="/pembayaran/${pesanan.payment_token}" 
                       class="btn btn-sm btn-primary ${sisaWaktu.isExpired ? 'disabled' : ''}">
                        <i class="fas fa-money-bill-wave me-2"></i>Bayar Sekarang
                    </a>
                    ` : ''}
                    
                    ${status === 'dikirim' && !isBatal ? `
                    <button class="btn btn-sm btn-outline-success">
                        <i class="fas fa-truck me-2"></i>Lacak Pengiriman
                    </button>
                    ` : ''}
                </div>
            </div>
        </div>
    </div>
`;
    }

    // Fungsi untuk membatalkan pembayaran
    function batalPembayaran(nomorPesanan) {
        // Periksa apakah SweetAlert tersedia
        if (typeof Swal === 'undefined') {
            if (confirm('Apakah Anda yakin ingin membatalkan pesanan ' + nomorPesanan + '?')) {
                lanjutkanPembatalan(nomorPesanan);
            }
            return;
        }

        try {
            const swalResult = Swal.fire({
                title: 'Batalkan Pesanan?',
                text: 'Apakah Anda yakin ingin membatalkan pesanan ini?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Ya, Batalkan',
                cancelButtonText: 'Tidak'
            });

            // Handle different versions of SweetAlert
            if (swalResult && typeof swalResult.then === 'function') {
                swalResult.then((result) => {
                    if (result && result.isConfirmed) {
                        lanjutkanPembatalan(nomorPesanan);
                    }
                }).catch(err => {
                    console.error('SweetAlert error:', err);
                    // Fallback to simple confirmation if SweetAlert fails
                    if (confirm('Apakah Anda yakin ingin membatalkan pesanan ' + nomorPesanan + '?')) {
                        lanjutkanPembatalan(nomorPesanan);
                    }
                });
            } else {
                // SweetAlert might be an older version or customized
                // Go ahead with cancellation after a simple confirmation
                if (confirm('Apakah Anda yakin ingin membatalkan pesanan ' + nomorPesanan + '?')) {
                    lanjutkanPembatalan(nomorPesanan);
                }
            }
        } catch (error) {
            console.error('Error in SweetAlert handling:', error);
            // Final fallback
            if (confirm('Apakah Anda yakin ingin membatalkan pesanan ' + nomorPesanan + '?')) {
                lanjutkanPembatalan(nomorPesanan);
            }
        }
    }

    // Fungsi lanjutan untuk proses pembatalan
    function lanjutkanPembatalan(nomorPesanan) {
        // Ambil token yang telah diperbarui untuk menghindari masalah token kedaluwarsa
        const token = localStorage.getItem('auth_token');

        $.ajax({
            url: API_BASE_URL + '/batal-pembayaran',
            type: 'POST',
            dataType: 'json',
            headers: {
                'Authorization': 'Bearer ' + token,
                'Content-Type': 'application/json'
            },
            data: JSON.stringify({
                nomor_pesanan: nomorPesanan
            }),
            success: function(response) {
                if (response.status === 'success') {
                    if (typeof Swal !== 'undefined') {
                        try {
                            Swal.fire({
                                icon: 'success',
                                title: 'Pembatalan Berhasil',
                                text: 'Pesanan berhasil dibatalkan.',
                                confirmButtonText: 'OK'
                            });
                        } catch (e) {
                            alert('Pembatalan berhasil');
                        }
                    } else {
                        alert('Pembatalan berhasil');
                    }

                    // Refresh daftar pesanan
                    fetchOrders();
                } else {
                    if (typeof Swal !== 'undefined') {
                        try {
                            Swal.fire({
                                icon: 'error',
                                title: 'Gagal Membatalkan',
                                text: response.message || 'Terjadi kesalahan saat membatalkan pesanan.',
                                confirmButtonText: 'Tutup'
                            });
                        } catch (e) {
                            alert('Gagal membatalkan: ' + (response.message || 'Terjadi kesalahan'));
                        }
                    } else {
                        alert('Gagal membatalkan: ' + (response.message || 'Terjadi kesalahan'));
                    }
                }
            },
            error: function(xhr, status, error) {
                if (typeof Swal !== 'undefined') {
                    try {
                        Swal.fire({
                            icon: 'error',
                            title: 'Kesalahan Jaringan',
                            text: 'Silakan coba lagi nanti.',
                            confirmButtonText: 'Tutup'
                        });
                    } catch (e) {
                        alert('Kesalahan Jaringan: Silakan coba lagi nanti.');
                    }
                } else {
                    alert('Kesalahan Jaringan: Silakan coba lagi nanti.');
                }
            }
        });
    }

    // Fungsi untuk menampilkan daftar pesanan
    function tampilkanDaftarPesanan(dataPesanan) {
        const containerPesanan = $('#pemesanan_list');
        containerPesanan.empty();

        // Siapkan array untuk pesanan dibatalkan
        const pesananDibatalkan = dataPesanan.semua.filter(pesanan => pesanan.isbatal === 1 || pesanan.isbatal === true);

        // Filter semua kategori untuk menghilangkan pesanan yang sudah dibatalkan
        const filterBatal = pesanan => pesanan.isbatal !== 1 && pesanan.isbatal !== true;

        const kategoriBaru = {
            menunggu: dataPesanan.menunggu.filter(filterBatal),
            konfirmasi: dataPesanan.konfirmasi.filter(filterBatal),
            dikirim: dataPesanan.dikirim.filter(filterBatal),
            selesai: dataPesanan.selesai.filter(filterBatal),
            batal: pesananDibatalkan
        };

        containerPesanan.html(`
    <div class="row mb-3">
    <div class="col-12">
        <nav>
            <div class="nav nav-pills nav-fill" id="nav-tab" role="tablist">
                <button class="nav-link active" id="nav-menunggu-tab" data-bs-toggle="tab" 
                        data-status="menunggu" type="button" role="tab">
                    Menunggu (${kategoriBaru.menunggu.length})
                </button>
                <button class="nav-link" id="nav-konfirmasi-tab" data-bs-toggle="tab" 
                        data-status="konfirmasi" type="button" role="tab">
                    Dikonfirmasi (${kategoriBaru.konfirmasi.length})
                </button>
                <button class="nav-link" id="nav-dikirim-tab" data-bs-toggle="tab" 
                        data-status="dikirim" type="button" role="tab">
                    Dikirim (${kategoriBaru.dikirim.length})
                </button>
                <button class="nav-link" id="nav-selesai-tab" data-bs-toggle="tab" 
                        data-status="selesai" type="button" role="tab">
                    Selesai (${kategoriBaru.selesai.length})
                </button>
                <button class="nav-link" id="nav-batal-tab" data-bs-toggle="tab" 
                        data-status="batal" type="button" role="tab">
                    Dibatalkan (${kategoriBaru.batal.length})
                </button>
            </div>
        </nav>
    </div>
        </div>
        <div class="row" id="pesanan-container">
            ${kategoriBaru.menunggu.map(buatKartuPesanan).join('')}
        </div>
    `);

        // Event listener untuk tab
        $('.nav-link').on('click', function() {
            const status = $(this).data('status');
            const pesananDifilter = kategoriBaru[status];

            $('#pesanan-container').html(
                pesananDifilter.length > 0 ?
                pesananDifilter.map(buatKartuPesanan).join('') :
                `
    <div class="col-12 text-center py-5">
        <h6 class="text-muted">Tidak ada pesanan</h6>
        <small class="text-muted">Anda belum memiliki pesanan pada kategori ini</small>
    </div>
    `
            );

            startCountdowns();
        });

        startCountdowns();
    }

    // Fungsi untuk membuat kartu pesanan
    function buatKartuPesanan(pesanan) {
        // Tentukan badge dan status berdasarkan status pesanan
        let badgeClass = 'bg-primary';
        let badgeText = 'Menunggu Pembayaran';
        let countdownHtml = '';

        // Cek jika pesanan dibatalkan
        if (pesanan.isbatal === 1 || pesanan.isbatal === true) {
            badgeClass = 'bg-danger';
            badgeText = 'Dibatalkan';
        }
        // Cek status pesanan
        else {
            switch (pesanan.status_pesanan) {
                case 'waiting':
                    badgeClass = 'bg-primary';
                    badgeText = 'Menunggu Pembayaran';
                    break;
                case 'menunggu verifikasi':
                    badgeClass = 'bg-info text-white';
                    badgeText = 'Menunggu Verifikasi';
                    break;
                case 'konfirmasi':
                    badgeClass = 'bg-info text-white';
                    badgeText = 'Dikonfirmasi';
                    break;
                case 'dikirim':
                    badgeClass = 'bg-warning text-dark';
                    badgeText = 'Dikirim';
                    break;
                case 'completed':
                    badgeClass = 'bg-success';
                    badgeText = 'Selesai';
                    break;
            }
        }

        // Tambahkan countdown jika status waiting dan belum dibayar
        if (pesanan.status_pesanan === 'waiting' && pesanan.status_pembayaran === 'belum bayar' && pesanan.limit_payment) {
            countdownHtml = `
            <div class="alert alert-danger mt-2" role="alert">
                <small>
                    <i class="fas fa-clock me-1"></i> Bayar sebelum: 
                    <span class="countdown-timer fw-bold" data-limit="${pesanan.limit_payment}">
                        ${hitungSisaWaktuPembayaran(pesanan.limit_payment).formatted}
                    </span>
                </small>
            </div>
        `;
        }
        // Tambahkan info sudah dibayar untuk status menunggu verifikasi
        else if (pesanan.status_pesanan === 'menunggu verifikasi' && pesanan.status_pembayaran === 'sudah bayar') {
            countdownHtml = `
            <div class="alert alert-info mt-2" role="alert">
                <small>
                    <i class="fas fa-check-circle me-1"></i> Pembayaran sedang diverifikasi 
                    <span class="countdown-timer fw-bold" data-limit="${pesanan.tanggal_pesanan}">
                        00:00:00
                    </span>
                </small>
            </div>
        `;
        }

        // Format tanggal
        const tanggalPesanan = formatTanggal(pesanan.tanggal_pesanan);
        const totalHarga = formatRupiah(pesanan.total_harga);

        // Ambil info produk
        const produk = pesanan.products[0];
        const gambarProduk = produk.foto_produk || '/assets/images/no-image.jpg';
        const namaProduk = produk.nama_product;

        // Tambahkan info produk tambahan jika ada lebih dari 1
        let produkTambahan = '';
        if (pesanan.products.length > 1) {
            produkTambahan = `<small class="text-muted">+${pesanan.products.length - 1} produk lainnya</small>`;
        }

        // Buat tombol tindakan berdasarkan status
        let tombolTindakan = '';

        // Untuk pesanan yang dibatalkan
        if (pesanan.isbatal === 1 || pesanan.isbatal === true) {
            tombolTindakan = `
            <a href="/detail/pesanan/${pesanan.payment_token}" class="btn btn-outline-secondary btn-sm w-100 mb-2">
                Lihat Detail
            </a>
        `;
        }
        // Untuk pesanan menunggu pembayaran (waiting & belum bayar)
        else if (pesanan.status_pesanan === 'waiting' && pesanan.status_pembayaran === 'belum bayar') {
            const isTimeExpired = hitungSisaWaktuPembayaran(pesanan.limit_payment).isExpired;


            tombolTindakan = `
            <a href="/pembayaran/${pesanan.payment_token}" class="btn btn-primary btn-sm w-100 mb-2" ${isTimeExpired ? 'disabled' : ''}>
                Bayar Sekarang
            </a>
            <a href="/detail/pesanan/${pesanan.payment_token}" class="btn btn-outline-secondary btn-sm w-100 mb-2">
                Lihat Detail
            </a>
            <button onclick="batalkanPesanan('${pesanan.payment_token}')" class="btn btn-outline-danger btn-sm w-100" ${isTimeExpired ? 'disabled' : ''}>
                Batalkan
            </button>
        `;
        }
        // Untuk pesanan menunggu verifikasi (sudah bayar)
        else if (pesanan.status_pesanan === 'menunggu verifikasi' && pesanan.status_pembayaran === 'sudah bayar') {
            tombolTindakan = `
       
            <a href="/detail/pesanan/${pesanan.payment_token}" class="btn btn-outline-secondary btn-sm w-100 mb-2">
                Lihat Detail
            </a>
         
        `;
        }
        // Untuk pesanan dikonfirmasi
        else if (pesanan.status_pesanan === 'konfirmasi') {
            tombolTindakan = `
            <a href="/detail/pesanan/${pesanan.payment_token}" class="btn btn-outline-secondary btn-sm w-100 mb-2">
                Lihat Detail
            </a>
        `;
        }
        // Untuk pesanan dikirim
        else if (pesanan.status_pesanan === 'dikirim') {
            tombolTindakan = `
            <button onclick="terimaBarang('${pesanan.payment_token}')" class="btn btn-success btn-sm w-100 mb-2">
                Terima Barang
            </button>
            <a href="/detail/pesanan/${pesanan.payment_token}" class="btn btn-outline-secondary btn-sm w-100">
                Lihat Detail
            </a>
        `;
        }
        // Untuk pesanan selesai
        else if (pesanan.status_pesanan === 'completed') {
            let tombolUlasan = '';

            // Tampilkan tombol ulasan jika belum direview
            if (pesanan.is_review === 0) {
                tombolUlasan = `
                <a href="/review/${pesanan.payment_token}" class="btn btn-outline-primary btn-sm w-100 mb-2">
                    Beri Ulasan
                </a>
            `;
            }

            tombolTindakan = `
            ${tombolUlasan}
            <a href="/detail/pesanan/${pesanan.payment_token}" class="btn btn-outline-secondary btn-sm w-100">
                Lihat Detail
            </a>
        `;
        }

        // Buat kartu pesanan
        return `
    <div class="col-12 mb-3">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8 col-lg-9">
                        <div class="d-flex align-items-center mb-2">
                            <span class="badge ${badgeClass} me-2">${badgeText}</span>
                            <strong>No. Pesanan: ${pesanan.nomor_pesanan}</strong>
                        </div>
                        <p class="mb-1">${tanggalPesanan} • ${pesanan.products.length} Produk • Total: ${totalHarga}</p>
                        ${countdownHtml}
                        <div class="d-flex align-items-center mt-3">
                            <img src="${gambarProduk}" alt="${namaProduk}" class="img-thumbnail me-3" style="width: 70px; height: 70px; object-fit: cover;">
                            <div>
                                <p class="mb-0 fw-medium">${namaProduk}</p>
                                ${produkTambahan}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3 mt-3 mt-md-0">
                        ${tombolTindakan}
                    </div>
                </div>
            </div>
        </div>
    </div>
    `;
    }

    // Fungsi untuk menghitung sisa waktu pembayaran
    function hitungSisaWaktuPembayaran(limitPembayaran) {
        // Tambahkan zona waktu Jakarta secara eksplisit
        const waktuBatas = new Date(`${limitPembayaran} GMT+0700`);
        const waktuSekarang = new Date();

        const selisih = waktuBatas - waktuSekarang;

        if (selisih > 0) {
            const hari = Math.floor(selisih / (1000 * 60 * 60 * 24));
            const jam = Math.floor((selisih % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const menit = Math.floor((selisih % (1000 * 60 * 60)) / (1000 * 60));
            const detik = Math.floor((selisih % (1000 * 60)) / 1000);

            return {
                total: selisih,
                formatted: hari > 0 ?
                    `${hari}d ${jam}j ${menit}m` : `${jam}j ${menit}m ${detik}d`,
                isExpired: false
            };
        }
        return {
            total: 0,
            formatted: 'Timeout',
            isExpired: true
        };
    }


    // Fungsi untuk format tanggal
    function formatTanggal(tanggalString) {
        const tanggal = new Date(tanggalString);

        const hari = String(tanggal.getDate()).padStart(2, '0');
        const bulan = getNamaBulan(tanggal.getMonth() + 1);
        const tahun = tanggal.getFullYear();

        return `${hari} ${bulan} ${tahun}`;
    }

    // Fungsi untuk mendapatkan nama bulan
    function getNamaBulan(bulan) {
        const namaBulan = [
            'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
            'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
        ];

        return namaBulan[bulan - 1];
    }

    // Fungsi untuk format rupiah
    function formatRupiah(angka) {
        return new Intl.NumberFormat('id-ID', {
            style: 'currency',
            currency: 'IDR',
            minimumFractionDigits: 0,
            maximumFractionDigits: 0
        }).format(angka);
    }

    // Fungsi untuk memulai countdown
    function startCountdowns() {
        // Hapus interval lama untuk menghindari memory leak
        $('.countdown-timer').each(function() {
            const interval = $(this).data('interval');
            if (interval) {
                clearInterval(interval);
            }
        });

        $('.countdown-timer').each(function() {
            const $this = $(this);
            const limitPayment = $this.data('limit');
            const alertContainer = $this.closest('.alert');
            const batalButton = $this.closest('.card-body').find('button.btn-outline-danger');
            const bayarButton = $this.closest('.card-body').find('a.btn-primary');

            // Skip untuk pesanan menunggu verifikasi (countdown selalu 00:00:00)
            if ($this.text().trim() === '00:00:00') {
                return;
            }

            function updateCountdown() {
                const sisaWaktu = hitungSisaWaktuPembayaran(limitPayment);
                $this.text(sisaWaktu.formatted);

                // Jika waktu habis
                if (sisaWaktu.isExpired) {
                    alertContainer.removeClass('alert-danger').addClass('alert-secondary');
                    $this.text('Timeout');

                    // Nonaktifkan tombol batalkan dan bayar
                    batalButton.prop('disabled', true).addClass('disabled');
                    bayarButton.prop('disabled', true).addClass('disabled');
                }
            }

            // Update countdown setiap detik
            const countdownInterval = setInterval(updateCountdown, 1000);
            updateCountdown();

            $this.data('interval', countdownInterval);
        });
    }

    // Fungsi untuk batalkan pesanan
    function batalkanPesanan(token) {
        Swal.fire({
            title: 'Batalkan Pesanan',
            text: 'Apakah Anda yakin ingin membatalkan pesanan ini?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Ya, Batalkan',
            cancelButtonText: 'Tidak',
            confirmButtonColor: '#dc3545',
            cancelButtonColor: '#6c757d',
        }).then((result) => {
            if (result.isConfirmed) {
                // Tampilkan loading
                Swal.fire({
                    title: 'Memproses...',
                    text: 'Sedang membatalkan pesanan',
                    allowOutsideClick: false,
                    didOpen: () => {
                        Swal.showLoading();
                    }
                });

                // Kirim request ke server
                $.ajax({
                    url: API_BASE_URL + '/batalkanPesanan',
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        payment_token: token
                    },
                    headers: {
                        'Authorization': 'Bearer ' + token
                    },
                    success: function(response) {
                        if (response.status === 'success') {
                            Swal.fire({
                                title: 'Berhasil',
                                text: 'Pesanan berhasil dibatalkan',
                                icon: 'success',
                                confirmButtonColor: '#28a745'
                            }).then(() => {
                                // Muat ulang pesanan
                                fetchOrders();
                            });
                        } else {
                            Swal.fire({
                                title: 'Gagal',
                                text: response.message || 'Gagal membatalkan pesanan',
                                icon: 'error',
                                confirmButtonColor: '#dc3545'
                            });
                        }
                    },
                    error: function() {
                        Swal.fire({
                            title: 'Error',
                            text: 'Terjadi kesalahan saat menghubungi server',
                            icon: 'error',
                            confirmButtonColor: '#dc3545'
                        });
                    }
                });
            }
        });
    }

    // Fungsi untuk terima barang
    function terimaBarang(token) {
        Swal.fire({
            title: 'Terima Barang',
            text: 'Apakah Anda sudah menerima pesanan ini?',
            icon: 'question',
            showCancelButton: true,
            confirmButtonText: 'Ya, Sudah Diterima',
            cancelButtonText: 'Belum',
            confirmButtonColor: '#28a745',
            cancelButtonColor: '#6c757d',
        }).then((result) => {
            if (result.isConfirmed) {
                // Tampilkan loading
                Swal.fire({
                    title: 'Memproses...',
                    text: 'Sedang memproses konfirmasi penerimaan',
                    allowOutsideClick: false,
                    didOpen: () => {
                        Swal.showLoading();
                    }
                });

                // Kirim request ke server
                $.ajax({
                    url: API_BASE_URL + '/terimaBarang',
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        payment_token: token
                    },
                    headers: {
                        'Authorization': 'Bearer ' + token
                    },
                    success: function(response) {
                        if (response.status === 'success') {
                            Swal.fire({
                                title: 'Berhasil',
                                text: 'Pesanan telah dikonfirmasi diterima',
                                icon: 'success',
                                confirmButtonColor: '#28a745'
                            }).then(() => {
                                // Muat ulang pesanan
                                fetchOrders();
                            });
                        } else {
                            Swal.fire({
                                title: 'Gagal',
                                text: response.message || 'Gagal mengonfirmasi penerimaan',
                                icon: 'error',
                                confirmButtonColor: '#dc3545'
                            });
                        }
                    },
                    error: function() {
                        Swal.fire({
                            title: 'Error',
                            text: 'Terjadi kesalahan saat menghubungi server',
                            icon: 'error',
                            confirmButtonColor: '#dc3545'
                        });
                    }
                });
            }
        });
    }

    // Fungsi untuk mengambil pesanan
    function fetchOrders() {
        // Tampilkan loading indicator
        $('#pemesanan_list').html(`
    <div class="text-center py-5">
        <div class="spinner-border text-primary" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
        <p class="mt-2">Memuat data pesanan...</p>
    </div>
  `);

        // Tambahkan header SweetAlert untuk menghindari error
        if (typeof Swal === 'undefined') {
            window.Swal = {
                fire: function(options) {
                    if (options.then) options.then();
                }
            };
        }

        $.ajax({
            url: API_BASE_URL + '/getAllPesanan',
            type: 'GET',
            dataType: 'json',
            headers: {
                'Authorization': 'Bearer ' + token
            },
            success: function(response) {
                if (response.status === 'success') {
                    tampilkanDaftarPesanan(response.data);
                } else {
                    $('#pemesanan_list').html(`
            <div class="alert alert-danger" role="alert">
                <i class="fas fa-exclamation-triangle me-2"></i>
                Gagal memuat pesanan: ${response.message}
            </div>
        `);
                }
            },
            error: function(xhr, status, error) {
                $('#pemesanan_list').html(`
        <div class="alert alert-danger" role="alert">
            <i class="fas fa-exclamation-triangle me-2"></i>
            Terjadi kesalahan saat memuat pesanan. Silakan coba lagi.
            <button class="btn btn-sm btn-outline-danger mt-2" onclick="fetchOrders()">
                <i class="fas fa-sync-alt me-2"></i>Coba Lagi
            </button>
        </div>
    `);
            }
        });
    }

    // Panggil fetchOrders saat halaman dimuat
    $(document).ready(function() {
        // Set global API base URL jika belum diset
        if (typeof API_BASE_URL === 'undefined') {
            window.API_BASE_URL = '/api'; // Default API base URL
        }

        // Ambil token dari localStorage
        const token = localStorage.getItem('auth_token');

        // Periksa apakah token tersedia
        if (!token) {
            $('#pemesanan_list').html(`
            <div class="alert alert-warning" role="alert">
                <i class="fas fa-exclamation-circle me-2"></i>
                Anda belum login. Silakan login untuk melihat pesanan Anda.
                <div class="mt-2">
                    <a href="/login" class="btn btn-sm btn-primary">
                        <i class="fas fa-sign-in-alt me-2"></i>Login
                    </a>
                </div>
            </div>
        `);
            return;
        }

        fetchOrders();
    });
</script>

</html>