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
                    <div class="container">

                        <!-- Pesanan Belum Bayar (Full Width) -->
                        <div class="row">
                            <div class="col-12">
                                <div class="order-card">
                                    <div class="status-label status-pending">Belum Bayar</div>
                                    <div class="order-header">
                                        <div>
                                            <div class="order-id">Pesanan #ORD123456</div>
                                            <div class="order-date">4 Mei 2025</div>
                                        </div>
                                        <div class="order-icon">
                                            <i class="fas fa-shopping-bag"></i>
                                        </div>
                                    </div>
                                    <div class="order-body">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="order-detail">
                                                            <span class="order-detail-label">Total Produk</span>
                                                            <span class="order-detail-value">3 item</span>
                                                        </div>
                                                        <div class="order-detail">
                                                            <span class="order-detail-label">Total Harga</span>
                                                            <span class="order-detail-value">Rp 450.000</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="order-detail">
                                                            <span class="order-detail-label">Metode Bayar</span>
                                                            <span class="order-detail-value">Transfer Bank</span>
                                                        </div>
                                                        <div class="order-detail">
                                                            <span class="order-detail-label">Pengiriman</span>
                                                            <span class="order-detail-value">JNE Regular</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="payment-countdown">
                                                            <i class="fas fa-clock"></i>
                                                            <span class="countdown-timer">23:45:12</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 text-md-end mt-3 mt-md-0">
                                                <button class="btn btn-pay me-2">
                                                    <i class="fas fa-money-bill me-1"></i> Bayar Sekarang
                                                </button>
                                                <button class="btn btn-outline-primary">
                                                    <i class="fas fa-info-circle me-1"></i> Detail
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pesanan Dikonfirmasi Admin (Full Width) -->
                        <div class="row">
                            <div class="col-12">
                                <div class="order-card">
                                    <div class="status-label status-confirm">Dikonfirmasi</div>
                                    <div class="order-header">
                                        <div>
                                            <div class="order-id">Pesanan #ORD789012</div>
                                            <div class="order-date">3 Mei 2025</div>
                                        </div>
                                        <div class="order-icon">
                                            <i class="fas fa-clipboard-check"></i>
                                        </div>
                                    </div>
                                    <div class="order-body">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="order-detail">
                                                            <span class="order-detail-label">Total Produk</span>
                                                            <span class="order-detail-value">2 item</span>
                                                        </div>
                                                        <div class="order-detail">
                                                            <span class="order-detail-label">Total Harga</span>
                                                            <span class="order-detail-value">Rp 1.250.000</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="progress-container">
                                                            <div class="progress">
                                                                <div class="progress-bar bg-primary" role="progressbar"
                                                                    style="width: 20%;" aria-valuenow="20"
                                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                            <div class="progress-steps">
                                                                <div class="progress-step active">
                                                                    <div class="progress-dot"></div>
                                                                    <div>Konfirmasi</div>
                                                                </div>
                                                                <div class="progress-step">
                                                                    <div class="progress-dot"></div>
                                                                    <div>Dikemas</div>
                                                                </div>
                                                                <div class="progress-step">
                                                                    <div class="progress-dot"></div>
                                                                    <div>Dikirim</div>
                                                                </div>
                                                                <div class="progress-step">
                                                                    <div class="progress-dot"></div>
                                                                    <div>Sampai</div>
                                                                </div>
                                                                <div class="progress-step">
                                                                    <div class="progress-dot"></div>
                                                                    <div>Selesai</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 text-md-end mt-3 mt-md-0">
                                                <button class="btn btn-primary">
                                                    <i class="fas fa-info-circle me-1"></i> Detail Pesanan
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pesanan Sedang Dikemas (Full Width) -->
                        <div class="row">
                            <div class="col-12">
                                <div class="order-card">
                                    <div class="status-label status-processing">Dikemas</div>
                                    <div class="order-header">
                                        <div>
                                            <div class="order-id">Pesanan #ORD456789</div>
                                            <div class="order-date">2 Mei 2025</div>
                                        </div>
                                        <div class="order-icon">
                                            <i class="fas fa-box"></i>
                                        </div>
                                    </div>
                                    <div class="order-body">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="order-detail">
                                                            <span class="order-detail-label">Total Produk</span>
                                                            <span class="order-detail-value">1 item</span>
                                                        </div>
                                                        <div class="order-detail">
                                                            <span class="order-detail-label">Total Harga</span>
                                                            <span class="order-detail-value">Rp 850.000</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="progress-container">
                                                            <div class="progress">
                                                                <div class="progress-bar bg-primary" role="progressbar"
                                                                    style="width: 40%;" aria-valuenow="40"
                                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                            <div class="progress-steps">
                                                                <div class="progress-step active">
                                                                    <div class="progress-dot"></div>
                                                                    <div>Konfirmasi</div>
                                                                </div>
                                                                <div class="progress-step active">
                                                                    <div class="progress-dot"></div>
                                                                    <div>Dikemas</div>
                                                                </div>
                                                                <div class="progress-step">
                                                                    <div class="progress-dot"></div>
                                                                    <div>Dikirim</div>
                                                                </div>
                                                                <div class="progress-step">
                                                                    <div class="progress-dot"></div>
                                                                    <div>Sampai</div>
                                                                </div>
                                                                <div class="progress-step">
                                                                    <div class="progress-dot"></div>
                                                                    <div>Selesai</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 text-md-end mt-3 mt-md-0">
                                                <button class="btn btn-primary">
                                                    <i class="fas fa-info-circle me-1"></i> Detail Pesanan
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pesanan Dikirim (Full Width) -->
                        <div class="row">
                            <div class="col-12">
                                <div class="order-card">
                                    <div class="status-label status-shipping">Dikirim</div>
                                    <div class="order-header">
                                        <div>
                                            <div class="order-id">Pesanan #ORD234567</div>
                                            <div class="order-date">1 Mei 2025</div>
                                        </div>
                                        <div class="order-icon">
                                            <i class="fas fa-truck"></i>
                                        </div>
                                    </div>
                                    <div class="order-body">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="order-detail">
                                                            <span class="order-detail-label">Total Produk</span>
                                                            <span class="order-detail-value">4 item</span>
                                                        </div>
                                                        <div class="order-detail">
                                                            <span class="order-detail-label">Total Harga</span>
                                                            <span class="order-detail-value">Rp 2.150.000</span>
                                                        </div>
                                                        <div class="order-detail">
                                                            <span class="order-detail-label">No. Resi</span>
                                                            <span class="order-detail-value">JNE123456789</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="progress-container">
                                                            <div class="progress">
                                                                <div class="progress-bar bg-primary" role="progressbar"
                                                                    style="width: 60%;" aria-valuenow="60"
                                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                            <div class="progress-steps">
                                                                <div class="progress-step active">
                                                                    <div class="progress-dot"></div>
                                                                    <div>Konfirmasi</div>
                                                                </div>
                                                                <div class="progress-step active">
                                                                    <div class="progress-dot"></div>
                                                                    <div>Dikemas</div>
                                                                </div>
                                                                <div class="progress-step active">
                                                                    <div class="progress-dot"></div>
                                                                    <div>Dikirim</div>
                                                                </div>
                                                                <div class="progress-step">
                                                                    <div class="progress-dot"></div>
                                                                    <div>Sampai</div>
                                                                </div>
                                                                <div class="progress-step">
                                                                    <div class="progress-dot"></div>
                                                                    <div>Selesai</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 text-md-end mt-3 mt-md-0">
                                                <button class="btn btn-primary">
                                                    <i class="fas fa-truck me-1"></i> Lacak Pengiriman
                                                </button>
                                                <button class="btn btn-outline-primary mt-2 mt-md-0 ms-md-2">
                                                    <i class="fas fa-info-circle me-1"></i> Detail
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pesanan Selesai (Full Width) -->
                        <div class="row">
                            <div class="col-12">
                                <div class="order-card">
                                    <div class="status-label status-completed">Selesai</div>
                                    <div class="order-header">
                                        <div>
                                            <div class="order-id">Pesanan #ORD345678</div>
                                            <div class="order-date">28 April 2025</div>
                                        </div>
                                        <div class="order-icon">
                                            <i class="fas fa-check-circle"></i>
                                        </div>
                                    </div>
                                    <div class="order-body">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="order-detail">
                                                            <span class="order-detail-label">Total Produk</span>
                                                            <span class="order-detail-value">2 item</span>
                                                        </div>
                                                        <div class="order-detail">
                                                            <span class="order-detail-label">Total Harga</span>
                                                            <span class="order-detail-value">Rp 750.000</span>
                                                        </div>
                                                        <div class="order-detail">
                                                            <span class="order-detail-label">Selesai pada</span>
                                                            <span class="order-detail-value">3 Mei 2025</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="progress-container">
                                                            <div class="progress">
                                                                <div class="progress-bar bg-primary" role="progressbar"
                                                                    style="width: 100%;" aria-valuenow="100"
                                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                            <div class="progress-steps">
                                                                <div class="progress-step active">
                                                                    <div class="progress-dot"></div>
                                                                    <div>Konfirmasi</div>
                                                                </div>
                                                                <div class="progress-step active">
                                                                    <div class="progress-dot"></div>
                                                                    <div>Dikemas</div>
                                                                </div>
                                                                <div class="progress-step active">
                                                                    <div class="progress-dot"></div>
                                                                    <div>Dikirim</div>
                                                                </div>
                                                                <div class="progress-step active">
                                                                    <div class="progress-dot"></div>
                                                                    <div>Sampai</div>
                                                                </div>
                                                                <div class="progress-step active">
                                                                    <div class="progress-dot"></div>
                                                                    <div>Selesai</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 text-md-end mt-3 mt-md-0">
                                                <button class="btn btn-primary">
                                                    <i class="fas fa-star me-1"></i> Beri Ulasan
                                                </button>
                                                <button class="btn btn-outline-primary mt-2 mt-md-0 ms-md-2">
                                                    <i class="fas fa-info-circle me-1"></i> Detail
                                                </button>
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
    </main>


    <!-- footer area -->
    <?php include __DIR__ . '/../templates/footer.php'; ?>
    <!-- footer area end -->



    <!-- js -->

    <!-- js end -->
    <!-- <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script> -->
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
</body>

</html>