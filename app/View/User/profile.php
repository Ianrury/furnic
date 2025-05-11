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
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .profile-header {
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            color: white;
            border-radius: 15px;
            padding: 30px;
            margin-bottom: 20px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        .profile-avatar {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            border: 5px solid white;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            object-fit: cover;
        }

        .alamat-item {
            position: relative;
        }

        .label-utama {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: #198754;
            /* Bootstrap's success color */
            color: white;
            font-size: 0.7rem;
            padding: 2px 8px;
            border-radius: 4px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            z-index: 1;
        }

        .profile-card {
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s;
        }

        .profile-card:hover {
            transform: translateY(-5px);
        }

        .nav-pills .nav-link.active {
            background-color: #6a11cb;
        }

        .nav-pills .nav-link {
            color: #495057;
            border-radius: 10px;
            margin-right: 5px;
            margin-bottom: 10px;
        }

        .badge-status {
            background-color: #2575fc;
            padding: 8px 15px;
            border-radius: 20px;
            font-weight: 500;
        }

        .order-item {
            transition: all 0.3s;
        }

        .order-item:hover {
            background-color: #f1f3f9;
        }

        .btn-primary {
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            border: none;
            border-radius: 8px;
            padding: 10px 20px;
        }

        .btn-outline-primary {
            border-color: #6a11cb;
            color: #6a11cb;
            border-radius: 8px;
            padding: 10px 20px;
        }

        .btn-outline-primary:hover {
            background-color: #6a11cb;
            color: white;
        }

        .wishlist-item {
            transition: all 0.3s ease;
        }

        .wishlist-item:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .progress {
            height: 10px;
            border-radius: 5px;
        }

        .edit-icon {
            cursor: pointer;
            color: #6a11cb;
        }

        .card-header {
            background-color: rgba(106, 17, 203, 0.05);
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
                    <li class="breadcrumb-item"><a href="#">User</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Profile</li>
                </ol>
            </nav>
        </div>
    </nav>

    <!-- popup search end -->


    <main class="main">
        <div class="container my-4">
            <div class="row">
                <!-- Profile Header -->
                <div class="col-12 mb-4">
                    <div class="profile-header">
                        <div class="row align-items-center">
                            <div class="col-md-2 text-center">
                                <img src="assets/img/product/UT M01 2.png" alt="Profile Picture" class="profile-avatar">

                            </div>
                            <div class="col-md-6">
                                <div class="d-flex align-items-center mb-2">
                                    <h2 class="mb-0">
                                        <i class="fas fa-user me-2"></i>
                                        <span id="name-header"> Ibu Siti Rahayu</span>
                                    </h2>
                                    <span class="ms-2 badge bg-light text-dark">
                                        <i class="fas fa-check-circle text-primary me-1"></i>Terverifikasi
                                    </span>
                                </div>
                                <p class="mb-2">
                                    <i class="fas fa-envelope me-2"></i><span id="email-header">sitirahayu@email.com</span>
                                </p>
                                <p class="mb-2">
                                    <i class="fas fa-phone me-2"></i><span id="phone-header">+62 812 3456 7890</span>
                                </p>
                                <p class="mb-0"><i class="fas fa-map-marker-alt me-2"></i> <span>Indonesia</span></p>
                            </div>
                            <div class="col-md-4 text-md-end mt-3 mt-md-0">
                                <div class="mb-2">
                                    <span class="badge badge-status me-2"><i class="fas fa-award me-1"></i>Member
                                        Silver</span>
                                </div>
                                <p class="mb-2" id="count-order">
                                    <i class="fas fa-shopping-bag me-1"></i><span id="successful-payment-count">0</span> Transaksi Berhasil
                                </p>
                                <button class="btn btn-light mt-2 trigger-tab-akun"><i class="fas fa-edit me-1"></i>Edit Profil</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Left Sidebar -->
                <div class="col-md-3 mb-4">
                    <div class="card profile-card mb-4">
                        <div class="card-header bg-white">
                            <h5 class="mb-0">Menu Profil</h5>
                        </div>
                        <div class="card-body p-0">
                            <nav class="nav nav-pills flex-column p-3">
                                <a class="nav-link active mb-2" href="#informasi-pribadi" data-bs-toggle="tab">
                                    <i class="fas fa-user-circle me-2"></i>Informasi Pribadi
                                </a>
                                <a class="nav-link mb-2" href="#riwayat-pesanan" data-bs-toggle="tab">
                                    <i class="fas fa-shopping-bag me-2"></i>Riwayat Pesanan
                                </a>
                                <a class="nav-link mb-2" href="#wishlist" data-bs-toggle="tab">
                                    <i class="fas fa-heart me-2"></i>Wishlist
                                </a>
                                <a class="nav-link mb-2" href="#alamat-tersimpan" data-bs-toggle="tab">
                                    <i class="fas fa-map-marker-alt me-2"></i>Alamat Tersimpan
                                </a>
                                <a class="nav-link mb-2" href="#pembayaran" data-bs-toggle="tab">
                                    <i class="fas fa-credit-card me-2"></i>Metode Pembayaran
                                </a>
                                <a class="nav-link mb-2" id="nav-akun-tab" href="#pengaturan-akun" data-bs-toggle="tab">
                                    <i class="fas fa-shield-alt me-2"></i>Keamanan Akun
                                </a>
                            </nav>
                        </div>
                    </div>
                </div>

                <!-- Main Content -->
                <div class="col-md-9">
                    <div class="tab-content">
                        <!-- Informasi Pribadi -->
                        <div class="tab-pane fade show active" id="informasi-pribadi">
                            <div class="card profile-card mb-4">
                                <div class="card-header bg-white d-flex justify-content-between align-items-center">
                                    <h5 class="mb-0">Informasi Pribadi</h5>
                                    <span class="edit-icon trigger-tab-akun"><i class="fas fa-edit"></i></span>
                                </div>
                                <div class="card-body">
                                    <div class="row mb-3">
                                        <div class="col-md-4">
                                            <p class="text-muted mb-1">Nama Lengkap</p>
                                            <p class="fw-bold" id="user-nama"></p>
                                        </div>
                                        <div class="col-md-4">
                                            <p class="text-muted mb-1">Tanggal Lahir</p>
                                            <p class="fw-bold" id="user-tanggal-lahir"></p>
                                        </div>
                                        <div class="col-md-4">
                                            <p class="text-muted mb-1">Jenis Kelamin</p>
                                            <p class="fw-bold" id="user-jenis-kelamin"></p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row mb-3">
                                        <div class="col-md-4">
                                            <p class="text-muted mb-1">Nomor Telepon</p>
                                            <p class="fw-bold" id="user-phone"></p>
                                        </div>
                                        <div class="col-md-4">
                                            <p class="text-muted mb-1">Email</p>
                                            <p class="fw-bold" id="user-email"></p>
                                        </div>
                                        <div class="col-md-4">
                                            <p class="text-muted mb-1">Bergabung Sejak</p>
                                            <p class="fw-bold" id="user-bergabung"></p>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="card profile-card">
                                <div class="card-header bg-white d-flex justify-content-between align-items-center">
                                    <h5 class="mb-0">Preferensi</h5>
                                    <span class="edit-icon"><i class="fas fa-edit"></i></span>
                                </div>
                                <div class="card-body">
                                    <div class="row mb-3">
                                        <div class="col-md-4">
                                            <p class="text-muted mb-1">Bahasa</p>
                                            <p class="fw-bold">Bahasa Indonesia</p>
                                        </div>
                                        <div class="col-md-4">
                                            <p class="text-muted mb-1">Mata Uang</p>
                                            <p class="fw-bold">Rupiah (IDR)</p>
                                        </div>
                                        <div class="col-md-4">
                                            <p class="text-muted mb-1">Notifikasi Email</p>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" id="emailNotif" checked>
                                                <label class="form-check-label" for="emailNotif">Aktif</label>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <p class="text-muted mb-1">Notifikasi Promo</p>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" id="promoNotif" checked>
                                                <label class="form-check-label" for="promoNotif">Aktif</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <p class="text-muted mb-1">Newsletter</p>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" id="newsletter">
                                                <label class="form-check-label" for="newsletter">Tidak Aktif</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <p class="text-muted mb-1">Tema Aplikasi</p>
                                            <select class="form-select">
                                                <option selected>Light</option>
                                                <option>Dark</option>
                                                <option>System</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Riwayat Pesanan -->
                        <div class="tab-pane fade" id="riwayat-pesanan">
                            <div class="card profile-card mb-4">
                                <div class="card-header bg-white">
                                    <h5 class="mb-0">Riwayat Pesanan</h5>
                                </div>
                                <div class="card-body">
                                    <ul class="nav nav-pills mb-3" id="orderTabs" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="all-orders-tab" data-bs-toggle="pill"
                                                data-bs-target="#all-orders" type="button">Semua (25)</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="pending-orders-tab" data-bs-toggle="pill"
                                                data-bs-target="#pending-orders" type="button">Menunggu (2)</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="shipped-orders-tab" data-bs-toggle="pill"
                                                data-bs-target="#shipped-orders" type="button">Dikirim (1)</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="completed-orders-tab" data-bs-toggle="pill"
                                                data-bs-target="#completed-orders" type="button">Selesai (22)</button>
                                        </li>
                                    </ul>

                                    <div class="tab-content" id="orderTabsContent">
                                        <div class="tab-pane fade show active" id="all-orders">
                                            <!-- Order Item 1 -->
                                            <div class="card mb-3 order-item">
                                                <div class="card-body">
                                                    <div class="row align-items-center">
                                                        <div class="col-md-8">
                                                            <div class="d-flex align-items-center mb-3">
                                                                <span class="badge bg-success me-2">Selesai</span>
                                                                <strong>No. Order: #ORD-2025050123</strong>
                                                            </div>
                                                            <p class="mb-2">2 Mei 2025 • 3 Produk • Total: Rp 650.000
                                                            </p>
                                                            <div class="d-flex align-items-center mb-2">
                                                                <img src="assets/img/product/UT M01 2.png"
                                                                    class="me-2 rounded" alt="Product" width="50"
                                                                    height="50">
                                                                <span class="text-truncate">Sepatu Running Nike Air Zoom
                                                                    + 2
                                                                    produk lainnya</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 text-md-end mt-3 mt-md-0">
                                                            <button class="btn btn-outline-primary mb-2 me-2">Beli
                                                                Lagi</button>
                                                            <button class="btn btn-primary">Detail</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Order Item 2 -->
                                            <div class="card mb-3 order-item">
                                                <div class="card-body">
                                                    <div class="row align-items-center">
                                                        <div class="col-md-8">
                                                            <div class="d-flex align-items-center mb-3">
                                                                <span
                                                                    class="badge bg-warning text-dark me-2">Dikirim</span>
                                                                <strong>No. Order: #ORD-2025050096</strong>
                                                            </div>
                                                            <p class="mb-2">29 April 2025 • 1 Produk • Total: Rp 235.000
                                                            </p>
                                                            <div class="d-flex align-items-center mb-2">
                                                                <img src="assets/img/product/UT M01 2.png"
                                                                    class="me-2 rounded" alt="Product" width="50"
                                                                    height="50">
                                                                <span class="text-truncate">Kemeja Formal Pria Slim
                                                                    Fit</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 text-md-end mt-3 mt-md-0">
                                                            <button
                                                                class="btn btn-outline-success mb-2 me-2">Lacak</button>
                                                            <button class="btn btn-primary">Detail</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Order Item 3 -->
                                            <div class="card mb-3 order-item">
                                                <div class="card-body">
                                                    <div class="row align-items-center">
                                                        <div class="col-md-8">
                                                            <div class="d-flex align-items-center mb-3">
                                                                <span class="badge bg-primary me-2">Menunggu
                                                                    Pembayaran</span>
                                                                <strong>No. Order: #ORD-2025050075</strong>
                                                            </div>
                                                            <p class="mb-2">27 April 2025 • 5 Produk • Total: Rp
                                                                1.250.000
                                                            </p>
                                                            <div class="d-flex align-items-center mb-2">
                                                                <img src="assets/img/product/UT M01 2.png"
                                                                    class="me-2 rounded" alt="Product" width="50"
                                                                    height="50">
                                                                <span class="text-truncate">iPhone 15 Pro Case + 4
                                                                    produk
                                                                    lainnya</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 text-md-end mt-3 mt-md-0">
                                                            <button
                                                                class="btn btn-outline-primary mb-2 me-2">Bayar</button>
                                                            <button class="btn btn-primary">Detail</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="text-center mt-4">
                                                <button class="btn btn-outline-primary">Lihat Semua Pesanan</button>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="pending-orders">
                                            <!-- Pending Orders will be here -->
                                            <div class="card mb-3 order-item">
                                                <div class="card-body">
                                                    <div class="row align-items-center">
                                                        <div class="col-md-8">
                                                            <div class="d-flex align-items-center mb-3">
                                                                <span class="badge bg-primary me-2">Menunggu
                                                                    Pembayaran</span>
                                                                <strong>No. Order: #ORD-2025050075</strong>
                                                            </div>
                                                            <p class="mb-2">27 April 2025 • 5 Produk • Total: Rp
                                                                1.250.000
                                                            </p>
                                                            <div class="d-flex align-items-center mb-2">
                                                                <img src="assets/img/product/UT M01 2.png"
                                                                    class="me-2 rounded" alt="Product" width="50"
                                                                    height="50">
                                                                <span class="text-truncate">iPhone 15 Pro Case + 4
                                                                    produk
                                                                    lainnya</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 text-md-end mt-3 mt-md-0">
                                                            <button
                                                                class="btn btn-outline-primary mb-2 me-2">Bayar</button>
                                                            <button class="btn btn-primary">Detail</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="shipped-orders">
                                            <!-- Shipped Orders will be here -->
                                            <div class="card mb-3 order-item">
                                                <div class="card-body">
                                                    <div class="row align-items-center">
                                                        <div class="col-md-8">
                                                            <div class="d-flex align-items-center mb-3">
                                                                <span
                                                                    class="badge bg-warning text-dark me-2">Dikirim</span>
                                                                <strong>No. Order: #ORD-2025050096</strong>
                                                            </div>
                                                            <p class="mb-2">29 April 2025 • 1 Produk • Total: Rp 235.000
                                                            </p>
                                                            <div class="d-flex align-items-center mb-2">
                                                                <img src="assets/img/product/UT M01 2.png"
                                                                    class="me-2 rounded" alt="Product" width="50"
                                                                    height="50">
                                                                <span class="text-truncate">Kemeja Formal Pria Slim
                                                                    Fit</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 text-md-end mt-3 mt-md-0">
                                                            <button
                                                                class="btn btn-outline-success mb-2 me-2">Lacak</button>
                                                            <button class="btn btn-primary">Detail</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="completed-orders">
                                            <!-- Completed Orders will be here -->
                                            <div class="card mb-3 order-item">
                                                <div class="card-body">
                                                    <div class="row align-items-center">
                                                        <div class="col-md-8">
                                                            <div class="d-flex align-items-center mb-3">
                                                                <span class="badge bg-success me-2">Selesai</span>
                                                                <strong>No. Order: #ORD-2025050123</strong>
                                                            </div>
                                                            <p class="mb-2">2 Mei 2025 • 3 Produk • Total: Rp 650.000
                                                            </p>
                                                            <div class="d-flex align-items-center mb-2">
                                                                <img src="assets/img/product/UT M01 2.png"
                                                                    class="me-2 rounded" alt="Product" width="50"
                                                                    height="50">
                                                                <span class="text-truncate">Sepatu Running Nike Air Zoom
                                                                    + 2
                                                                    produk lainnya</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 text-md-end mt-3 mt-md-0">
                                                            <button class="btn btn-outline-primary mb-2 me-2">Beli
                                                                Lagi</button>
                                                            <button class="btn btn-primary">Detail</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Wishlist -->
                        <div class="tab-pane fade" id="wishlist">
                            <div class="card profile-card">
                                <div class="card-header bg-white">
                                    <h5 class="mb-0">Wishlist Saya</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row" id="wishlist-list">

                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- Alamat Tersimpan -->
                        <div class="tab-pane fade" id="alamat-tersimpan">
                            <div class="card profile-card">
                                <div class="card-header bg-white">
                                    <h5 class="mb-0">Alamat Tersimpan</h5>
                                </div>
                                <div class="card-body">
                                    <div class="mb-2">
                                        <button class="btn btn-sm btn-primary px-2" data-bs-toggle="modal" data-bs-target="#tambahAlamatModal">Tambah Alamat</button>
                                    </div>
                                    <div class="row" id="alamat-list">

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="pengaturan-akun">
                            <div class="card profile-card mb-4">
                                <form id="edit-akun" method="post">
                                    <div class="card-header bg-white">
                                        <h5 class="mb-0">Pengaturan Akun</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="username" class="form-label">Username</label>
                                                <input type="text" class="form-control" id="username" value="budi123">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="email" class="form-label">Email</label>
                                                <input type="email" class="form-control" id="email"
                                                    value="oBZ7g@example.com">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                                                <input type="date" class="form-control" id="tanggal_lahir"
                                                    value="">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                                <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                                                    <option value="">-- Pilih Jenis Kelamin --</option>
                                                    <option value="Laki-laki">Laki-laki</option>
                                                    <option value="Perempuan">Perempuan</option>
                                                </select>
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label for="phone" class="form-label">Nomor Telepon</label>
                                                <input type="text" class="form-control" id="phone"
                                                    value="+62 812-3456-7890">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="password" class="form-label">Password</label>
                                                <input type="password" class="form-control" id="password">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer d-flex justify-content-end">
                                        <button class="btn btn-primary" id="submit-btn">Simpan Perubahan</button>
                                    </div>
                                </form>
                            </div>
                            <div class="card profile-card mb-4">
                                <div class="card-header bg-white">
                                    <h5 class="mb-0">Keamanan Akun</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="two-factor-auth" class="form-label">Autentikasi Dua Faktor</label>
                                            <select class="form-select" id="two-factor-auth">
                                                <option value="enabled">Diaktifkan</option>
                                                <option value="disabled">Dinonaktifkan</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="security-question" class="form-label">Pertanyaan
                                                Keamanan</label>
                                            <select class="form-select" id="security-question">
                                                <option value="">Pilih Pertanyaan</option>
                                                <option value="pet">Nama hewan peliharaan pertama Anda?</option>
                                                <option value="school">Sekolah dasar Anda?</option>
                                                <option value="city">Kota tempat lahir Anda?</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer d-flex justify-content-end">
                                    <button class="btn btn-primary">Simpan Perubahan</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- editalamat -->
    <div class="modal fade bd-example-modal-lg" id="editAlamatModal" tabindex="-1" role="dialog"
        aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-black" id="exampleModalLabel">Tambah Alamat</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="formeditAlamat" method="post">
                        <input type="hidden" name="id_alamat" id="id_alamat">
                        <div>
                            <label for="provinsi-edit" class="form-label">Provinsi <span class="required">*</span></label>
                            <input type="text" class="form-control form-login" id="provinsi-edit" name="provinsi-edit" placeholder="Contoh: Jawa Tengah">
                        </div>

                        <div>
                            <label for="kabupaten-edit" class="form-label">Kabupaten <span class="required">*</span></label>
                            <input type="text" class="form-control form-login" id="kabupaten-edit" name="kabupaten-edit" placeholder="Contoh: Kabupaten Semarang">
                        </div>

                        <div>
                            <label for="kecamatan-edit" class="form-label">Kecamatan <span class="required">*</span></label>
                            <input type="text" class="form-control form-login" id="kecamatan-edit" name="kecamatan-edit" placeholder="Contoh: Ungaran Barat">
                        </div>

                        <div>
                            <label for="kelurahan-edit" class="form-label">Kelurahan <span class="required">*</span></label>
                            <input type="text" class="form-control form-login" id="kelurahan-edit" name="kelurahan-edit" placeholder="Contoh: Leyangan">
                        </div>

                        <div>
                            <label for="detail_rumah-edit" class="form-label">Detail Rumah <span class="required">*</span></label>
                            <input type="text" class="form-control form-login" id="detail_rumah-edit" name="detail_rumah-edit" placeholder="Contoh: Rumah warna biru, dekat masjid">
                        </div>

                        <div>
                            <label for="detail_alamat-edit" class="form-label">Alamat Lengkap <span class="required">*</span></label>
                            <textarea class="form-control form-login p-1" id="detail_alamat-edit" name="detail_alamat-edit" rows="3"
                                placeholder="Contoh: Jl. Raya Salatiga No. 15, RT 02 RW 01, Leyangan, Ungaran Barat, Kab. Semarang, Jawa Tengah"></textarea>
                        </div>

                        <button type="submit" class="btn btn-masuk mt-2 w-100" id="submit-btn-alamat-edit">Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <div class="modal fade bd-example-modal-lg" id="tambahAlamatModal" tabindex="-1" role="dialog"
        aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-black" id="exampleModalLabel">Tambah Alamat</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="formTambahAlamat" method="post">
                        <div>
                            <label for="provinsi" class="form-label">Provinsi <span class="required">*</span></label>
                            <input type="text" class="form-control form-login" id="provinsi" name="provinsi" placeholder="Contoh: Jawa Tengah">
                        </div>

                        <div>
                            <label for="kabupaten" class="form-label">Kabupaten <span class="required">*</span></label>
                            <input type="text" class="form-control form-login" id="kabupaten" name="kabupaten" placeholder="Contoh: Kabupaten Semarang">
                        </div>

                        <div>
                            <label for="kecamatan" class="form-label">Kecamatan <span class="required">*</span></label>
                            <input type="text" class="form-control form-login" id="kecamatan" name="kecamatan" placeholder="Contoh: Ungaran Barat">
                        </div>

                        <div>
                            <label for="kelurahan" class="form-label">Kelurahan <span class="required">*</span></label>
                            <input type="text" class="form-control form-login" id="kelurahan" name="kelurahan" placeholder="Contoh: Leyangan">
                        </div>

                        <div>
                            <label for="detail_rumah" class="form-label">Detail Rumah <span class="required">*</span></label>
                            <input type="text" class="form-control form-login" id="detail_rumah" name="detail_rumah" placeholder="Contoh: Rumah warna biru, dekat masjid">
                        </div>

                        <div>
                            <label for="detail_alamat" class="form-label">Alamat Lengkap <span class="required">*</span></label>
                            <textarea class="form-control form-login p-1" id="detail_alamat" name="detail_alamat" rows="3"
                                placeholder="Contoh: Jl. Raya Salatiga No. 15, RT 02 RW 01, Leyangan, Ungaran Barat, Kab. Semarang, Jawa Tengah"></textarea>
                        </div>

                        <button type="submit" class="btn btn-masuk mt-2 w-100" id="submit-btn-alamat">Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>

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
    <script>
        $(document).ready(function() {
            $('.trigger-tab-akun').on('click', function() {
                console.log("clicked");

                // Ambil elemen tab target
                var tabEl = document.querySelector('#nav-akun-tab');

                // Gunakan Bootstrap Tab API untuk show
                var tab = new bootstrap.Tab(tabEl);
                tab.show();
            });
        });
    </script>

    <script>
        const API_BASE_URL = "<?= $apiBaseUrl ?>";
    </script>
    <script>
        function addMainAddressLabel(addressElement, isMain = false) {
            if (isMain) {
                const label = document.createElement('span');
                label.className = 'label-utama';
                label.textContent = 'Utama';
                addressElement.appendChild(label);
            }
        }
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const token = localStorage.getItem('auth_token');
            const productList = document.getElementById('product-list');

            if (!token) {
                productList.innerHTML = '<div class="alert alert-warning">Silakan login terlebih dahulu</div>';
                return;
            }

            fetch(`${API_BASE_URL}/user/index`, {
                    method: 'GET',
                    headers: {
                        'Authorization': `Bearer ${token}`,
                        'Content-Type': 'application/json'
                    }
                })
                .then(response => response.json())
                .then(result => {
                    if (result.status !== 'success') {
                        productList.innerHTML = `<div class="alert alert-danger">${result.message || 'Terjadi kesalahan'}</div>`;
                        return;
                    }

                    const user = result.data.user;
                    const successful_payment_count = result.data.successful_payment_count;

                    console.log("Successful Payment Count:", successful_payment_count); // Debugging nilai successful_payment_count

                    // Set value ke form
                    document.getElementById('username').value = user.nama || '';
                    document.getElementById('email').value = user.email || '';
                    document.getElementById('tanggal_lahir').value = user.tanggal_lahir || '';
                    document.getElementById('jenis_kelamin').value = user.jenis_kelamin || '';
                    document.getElementById('phone').value = user.no_hp || '';
                    document.getElementById('password').value = ''; // Tidak ditampilkan demi keamanan

                    // Menampilkan data ke elemen HTML
                    document.getElementById('user-nama').textContent = user.nama || 'N/A';
                    document.getElementById('user-tanggal-lahir').textContent = user.tanggal_lahir || 'N/A';
                    document.getElementById('user-jenis-kelamin').textContent = user.jenis_kelamin || 'N/A';
                    document.getElementById('user-phone').textContent = user.no_hp || 'N/A';
                    document.getElementById('user-email').textContent = user.email || 'N/A';
                    document.getElementById('user-bergabung').textContent = user.created_at ? new Date(user.created_at).toLocaleDateString() : 'N/A';

                    document.getElementById('name-header').textContent = user.nama || 'N/A';
                    document.getElementById('phone-header').textContent = user.no_hp || 'N/A';
                    document.getElementById('email-header').textContent = user.email || 'N/A';

                    // Menangani successful_payment_count dengan lebih tepat
                    const countText = successful_payment_count !== null && successful_payment_count !== undefined ? successful_payment_count : 0;
                    document.getElementById('successful-payment-count').textContent = countText;
                })


                .catch(error => {
                    console.error('Error fetching user data:', error);
                    productList.innerHTML = '<div class="alert alert-danger">Gagal memuat data user</div>';
                });

            fetch(`${API_BASE_URL}/alamat`, {
                    method: 'GET',
                    headers: {
                        'Authorization': `Bearer ${token}`,
                        'Content-Type': 'application/json'
                    }
                })
                .then(response => response.json())
                .then(result => {
                    if (result.status !== 'success') {
                        document.getElementById('alamat-list').innerHTML = `<div class="alert alert-danger">${result.message || 'Terjadi kesalahan'}</div>`;
                        return;
                    }

                    const alamatList = result.data;
                    const alamatContainer = document.getElementById('alamat-list');
                    alamatContainer.innerHTML = ''; // Clear existing content

                    // Loop through the alamat data and create HTML for each item
                    alamatList.forEach(alamat => {
                        const alamatItem = document.createElement('div');
                        alamatItem.classList.add('col-md-6', 'mb-4');

                        // Create card content
                        alamatItem.innerHTML = `
            <div class="card alamat-item h-100">
                ${alamat.utama ? '<span class="label-utama">Utama</span>' : ''}
                <div class="row g-0">
                    <div class="col-12">
                        <div class="card-body">
                            <h6 class="card-title">${alamat.provinsi}</h6>
                            <p class="card-text">
                                ${alamat.detail_alamat}
                            </p>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card-footer d-flex justify-content-between">
                            <button class="btn btn-sm btn-primary tombol-edit" data-bs-toggle="modal" data-bs-target="#editAlamatModal" data-id="${alamat.id}">Edit</button>
                            <button class="btn btn-sm btn-outline-danger tombol-delete" data-id="${alamat.id}">
    <i class="fas fa-trash"></i>
</button>
                        </div>
                    </div>
                </div>
            </div>
        `;

                        alamatContainer.appendChild(alamatItem);
                    });
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Terjadi kesalahan saat mengupdate data');
                });

        });

        // Menangani tombol Edit
        $(document).on('click', '.tombol-edit', function() {
            const alamatId = $(this).data('id'); // Mendapatkan ID alamat dari atribut data-id
            const token = localStorage.getItem('auth_token');
            const productList = document.getElementById('product-list');

            if (!token) {
                productList.innerHTML = '<div class="alert alert-warning">Silakan login terlebih dahulu</div>';
                return;
            }
            // Mengambil data alamat dari server
            document.getElementById('id_alamat').value = alamatId;
            $.ajax({
                url: `${API_BASE_URL}/alamat/edit/${alamatId}`, // Endpoint API untuk mengambil data alamat
                method: 'GET',
                headers: {
                    'Authorization': `Bearer ${token}`,
                    'Content-Type': 'application/json'
                },
                contentType: 'application/json', // Tentukan tipe konten sebagai JSON
                success: function(response) {
                    if (response.status === 'success') {
                        const alamat = response.data;

                        // Isi modal dengan data alamat yang diterima
                        $('#provinsi-edit').val(alamat.provinsi);
                        $('#kabupaten-edit').val(alamat.kabupaten);
                        $('#kecamatan-edit').val(alamat.kecamatan);
                        $('#kelurahan-edit').val(alamat.kelurahan);
                        $('#detail_rumah-edit').val(alamat.detail_rumah);
                        $('#detail_alamat-edit').val(alamat.detail_alamat);

                        // Set title modal sesuai dengan alamat
                        $('#editAlamatModal .modal-title').text('Edit Alamat');
                    } else {
                        alert(response.message || 'Gagal memuat data alamat');
                    }
                },
                error: function() {
                    alert('Terjadi kesalahan saat menghubungi server');
                }
            });
        });

        document.addEventListener("DOMContentLoaded", function() {
            const form = document.getElementById('formeditAlamat');
            const submitButton = document.getElementById('submit-btn-alamat-edit');

            form.addEventListener('submit', function(event) {
                event.preventDefault();

                const token = localStorage.getItem('auth_token');
                // const alamatId = form.getAttribute('data-id'); // Pastikan Anda set attribute ini saat buka modal edit

                // Ambil data dari form
                const provinsi = document.getElementById('provinsi-edit').value;
                const kabupaten = document.getElementById('kabupaten-edit').value;
                const kecamatan = document.getElementById('kecamatan-edit').value;
                const kelurahan = document.getElementById('kelurahan-edit').value;
                const detail_rumah = document.getElementById('detail_rumah-edit').value;
                const detail_alamat = document.getElementById('detail_alamat-edit').value;

                // Validasi sederhana
                if (!provinsi || !kabupaten || !kecamatan || !kelurahan || !detail_alamat || !detail_rumah) {
                    alert('Semua field wajib diisi!');
                    return;
                }

                const dataToSend = {
                    provinsi,
                    kabupaten,
                    kecamatan,
                    kelurahan,
                    detail_rumah,
                    detail_alamat,
                    utama: 0 // Bisa ganti 1 jika alamat utama
                };
                const alamatId = document.getElementById('id_alamat').value;
                // console.log(alamatId);
                fetch(`${API_BASE_URL}/alamat/update/${alamatId}`, {
                        method: 'POST',
                        headers: {
                            'Authorization': `Bearer ${token}`,
                            'Content-Type': 'application/json'
                        },
                        body: JSON.stringify(dataToSend)
                    })
                    .then(response => response.json())
                    .then(result => {
                        if (result.status === 'success') {
                            alert('Alamat Berhasil Diupdate');
                            window.location.reload();
                        } else {
                            alert('Gagal mengupdate alamat: ' + result.message);
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        alert('Terjadi kesalahan saat mengupdate alamat');
                    });
            });
        });

        document.addEventListener("DOMContentLoaded", function() {
            const token = localStorage.getItem('auth_token');
            if (!token) {
                window.location.href = '/login'; // Sesuaikan dengan lokasi halaman login kamu
                return;
            }

            $.ajax({
                url: API_BASE_URL + '/product/wishlist',
                type: 'GET',
                dataType: 'json',
                headers: {
                    'Authorization': 'Bearer ' + token
                },
                success: function(response) {
                    if (response.status === 'success') {
                        console.log('Data produk wishlist:', response.data);
                        const allProductsRaw = response.data;
                        const wishlistContainer = $('#wishlist-list');
                        wishlistContainer.empty(); // Kosongkan dulu isi sebelumnya

                        allProductsRaw.forEach(product => {
                            const html = `
                    <div class="col-md-6 mb-4">
                        <div class="card wishlist-item h-100">
                            <div class="row g-0">
                                <div class="col-4">
                                    <img src="${product.url_foto}" width="150" height="150"
                                        class="img-fluid rounded-start h-100 object-fit-cover"
                                        alt="${product.nama_product}">
                                </div>
                                <div class="col-8">
                                    <div class="card-body">
                                        <h6 class="card-title">${product.nama_product}</h6>
                                        <div class="d-flex align-items-center mb-2">
                                            <span class="text-warning me-1"><i class="fas fa-star"></i></span>
                                            <span>4.9 (120 ulasan)</span>
                                        </div>
                                        <p class="card-text text-primary fw-bold mb-3">Rp ${formatRupiah(product.harga)}</p>
                                        <div class="d-flex">
                                            <button class="btn btn-sm btn-primary me-2 product-card" data-id="${product.id_product}" data-slug="${product.slug}" 
                       data-token="${product.token}" style="cursor:pointer;">Tambah ke Keranjang</button>
                                            <button class="btn btn-sm btn-outline-danger tombol-delete-wishlist" data-id_product="${product.id_product}">
                      <i class="fas fa-trash"></i>
                           </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>`;

                            wishlistContainer.append(html);
                        });
                    } else {
                        console.error('Terjadi kesalahan:', response.message);
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Terjadi kesalahan:', error);
                }
            });

            function formatRupiah(angka) {
                return angka.toString().replace(/\B(?=(\d{3})+(?!\d))/g, '.');
            }
        })
        document.addEventListener("DOMContentLoaded", function() {
            document.addEventListener("click", function(e) {
                if (e.target.closest(".tombol-delete-wishlist")) {
                    const button = e.target.closest(".tombol-delete-wishlist");
                    const id = button.getAttribute("data-id_product");
                    const token = localStorage.getItem("auth_token");

                    if (confirm("Yakin ingin menghapus alamat ini?")) {
                        fetch(`${API_BASE_URL}/product/wishlist/delete/${id}`, {
                                method: 'GET',
                                headers: {
                                    'Authorization': `Bearer ${token}`,
                                    'Content-Type': 'application/json',
                                },
                            })
                            .then(response => response.json())
                            .then(result => {
                                if (result.status === "success") {
                                    alert("Product Wislist berhasil dihapus");
                                    window.location.reload();
                                } else {
                                    alert("Gagal menghapus: " + result.message);
                                }
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
                }
            });
        });

        document.addEventListener("DOMContentLoaded", function() {
            document.addEventListener("click", function(e) {
                if (e.target.closest(".tombol-delete")) {
                    const button = e.target.closest(".tombol-delete");
                    const id = button.getAttribute("data-id");
                    const token = localStorage.getItem("auth_token");

                    if (confirm("Yakin ingin menghapus alamat ini?")) {
                        fetch(`${API_BASE_URL}/alamat/delete/${id}`, {
                                method: 'POST',
                                headers: {
                                    'Authorization': `Bearer ${token}`,
                                    'Content-Type': 'application/json',
                                },
                                body: JSON.stringify({
                                    id: id
                                })
                            })
                            .then(response => response.json())
                            .then(result => {
                                if (result.status === "success") {
                                    alert("Alamat berhasil dihapus");
                                    window.location.reload();
                                } else {
                                    alert("Gagal menghapus: " + result.message);
                                }
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
                }
            });
        });



        document.addEventListener("DOMContentLoaded", function() {
            const form = document.getElementById('edit-akun');
            const submitButton = document.getElementById('submit-btn');

            form.addEventListener('submit', function(event) {
                event.preventDefault(); // Menghentikan pengiriman form

                // Ambil data dari form
                const username = document.getElementById('username').value.trim();
                const email = document.getElementById('email').value.trim();
                const tanggal_lahir = document.getElementById('tanggal_lahir').value;
                const jenis_kelamin = document.getElementById('jenis_kelamin').value;
                const phone = document.getElementById('phone').value.trim();
                const password = document.getElementById('password').value.trim();



                // Validasi form
                if (!username || !email || !tanggal_lahir || !jenis_kelamin || !phone) {
                    alert('Semua kolom wajib diisi');
                    return;
                }

                const token = localStorage.getItem('auth_token');
                const dataToUpdate = {
                    nama: username,
                    email: email,
                    tanggal_lahir: tanggal_lahir,
                    jenis_kelamin: jenis_kelamin,
                    no_hp: phone,
                    password: password || undefined
                };

                // Kirim data dengan fetch
                fetch(`${API_BASE_URL}/user/edit`, {
                        method: 'POST',
                        headers: {
                            'Authorization': `Bearer ${token}`,
                            'Content-Type': 'application/json'
                        },
                        body: JSON.stringify(dataToUpdate)
                    })
                    .then(response => response.json())
                    .then(result => {
                        if (result.status === 'success') {
                            alert('Data berhasil diupdate');
                            window.location.reload(); // Refresh halaman setelah berhasil
                        } else {
                            alert('Gagal mengupdate data: ' + result.message);
                        }
                    })
                    .catch(error => {
                        if (error.message.includes('Token tidak ditemukan') || error.message.includes('Token tidak valid, silakan login ulang')) {
                            // Token tidak valid, hapus token dan redirect ke login
                            localStorage.removeItem('auth_token');
                            alert("Sesi Anda telah habis. Silakan login ulang.");
                            window.location.href = '/login'; // Ganti sesuai path halaman login
                            return;
                        }
                        console.error('Error:', error);
                        alert('Terjadi kesalahan saat mengupdate data');
                    });
            });
        });



        document.addEventListener("DOMContentLoaded", function() {
            const form = document.getElementById('formTambahAlamat');
            const submitButton = document.getElementById('submit-btn-alamat');

            form.addEventListener('submit', function(event) {
                event.preventDefault();

                const token = localStorage.getItem('auth_token');

                const provinsi = document.getElementById('provinsi').value.trim();
                const kabupaten = document.getElementById('kabupaten').value.trim();
                const kecamatan = document.getElementById('kecamatan').value.trim();
                const kelurahan = document.getElementById('kelurahan').value.trim();
                const detail_alamat = document.getElementById('detail_alamat').value.trim(); // Pastikan ini sesuai dengan nama input
                const detail_rumah = document.getElementById('detail_rumah').value.trim();

                if (!provinsi || !kabupaten || !kecamatan || !kelurahan || !detail_alamat || !detail_rumah) {
                    alert('Semua field wajib diisi!');
                    return;
                }

                const dataToSend = {
                    provinsi,
                    kabupaten,
                    kecamatan,
                    kelurahan,
                    detail_alamat,
                    detail_rumah,
                    utama: 0 // Default bukan alamat utama
                };

                fetch(`${API_BASE_URL}/alamat/create`, {
                        method: 'POST',
                        headers: {
                            'Authorization': `Bearer ${token}`,
                            'Content-Type': 'application/json'
                        },
                        body: JSON.stringify(dataToSend)
                    })
                    .then(response => response.json())
                    .then(result => {
                        if (result.status === 'success') {
                            alert('Alamat Berhasil Ditambahkan');
                            window.location.reload();
                        } else {
                            alert('Gagal menambahkan alamat: ' + result.message);
                        }
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