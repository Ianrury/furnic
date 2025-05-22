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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">


    <title><?php echo $model['title']; ?> - PT Furnice Furnishing Indonesia</title>
    <base href="/">

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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
    <!-- Select2 Bootstrap 5 Theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
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


    <div class="preloader">
        <div class="loader-ripple">
            <div></div>
            <div></div>
        </div>
    </div>

    <?php include __DIR__ . '/../templates/header.php'; ?>


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


    <main class="main">
        <div class="container my-4">
            <div class="row">

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

                                <a class="nav-link mb-2" href="#alamat-tersimpan" data-bs-toggle="tab">
                                    <i class="fas fa-map-marker-alt me-2"></i>Alamat Tersimpan
                                </a>

                                <a class="nav-link mb-2" id="nav-akun-tab" href="#pengaturan-akun" data-bs-toggle="tab">
                                    <i class="fas fa-shield-alt me-2"></i>Keamanan Akun
                                </a>
                            </nav>
                        </div>
                    </div>
                </div>

                <div class="col-md-9">
                    <div class="tab-content">

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


                        <div class="tab-pane fade" id="riwayat-pesanan">
                            <div class="card profile-card mb-4">
                                <div class="card-header bg-white">
                                    <h5 class="mb-0">Riwayat Pesanan</h5>
                                </div>

                                <div class="card-body" id="order-list">
                                    <ul class="nav nav-pills mb-3" id="orderTabs" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="all-orders-tab" data-bs-toggle="pill"
                                                data-bs-target="#all-orders" type="button">Semua (<span id="all-orders-count">0</span>)</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="pending-orders-tab" data-bs-toggle="pill"
                                                data-bs-target="#pending-orders" type="button">Menunggu (<span id="pending-orders-count">0</span>)</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="confirmed-orders-tab" data-bs-toggle="pill"
                                                data-bs-target="#confirmed-orders" type="button">Dikonfirmasi (<span id="confirmed-orders-count">0</span>)</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="shipped-orders-tab" data-bs-toggle="pill"
                                                data-bs-target="#shipped-orders" type="button">Dikirim (<span id="shipped-orders-count">0</span>)</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="completed-orders-tab" data-bs-toggle="pill"
                                                data-bs-target="#completed-orders" type="button">Selesai (<span id="completed-orders-count">0</span>)</button>
                                        </li>
                                    </ul>

                                    <div class="tab-content" id="orderTabsContent">

                                        <div class="tab-pane fade show active" id="all-orders">
                                            <div id="all-orders-container"></div>

                                        </div>

                                        <div class="tab-pane fade" id="pending-orders">
                                            <div id="pending-orders-container"></div>
                                        </div>


                                        <div class="tab-pane fade" id="confirmed-orders">
                                            <div id="confirmed-orders-container"></div>
                                        </div>


                                        <div class="tab-pane fade" id="shipped-orders">
                                            <div id="shipped-orders-container"></div>
                                        </div>


                                        <div class="tab-pane fade" id="completed-orders">
                                            <div id="completed-orders-container"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="tab-pane fade" id="wishlist" style="visibility: hidden;">
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
                    <h5 class="modal-title text-black" id="exampleModalLabel">Edit Alamat</h5>
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
                        <!-- Hidden inputs to store the actual text values -->
                        <input type="hidden" id="provinsi" name="provinsi">
                        <input type="hidden" id="kabupaten" name="kabupaten">
                        <input type="hidden" id="kecamatan" name="kecamatan">
                        <input type="hidden" id="kelurahan" name="kelurahan">

                        <div>
                            <label for="select2-provinsi" class="form-label">Provinsi <span class="required">*</span></label>
                            <select class="form-control form-login" id="select2-provinsi">
                                <!-- Options will be loaded dynamically -->
                            </select>
                        </div>

                        <div>
                            <label for="select2-kabupaten" class="form-label">Kabupaten <span class="required">*</span></label>
                            <select class="form-control form-login" id="select2-kabupaten">
                                <!-- Options will be loaded dynamically -->
                            </select>
                        </div>

                        <div>
                            <label for="select2-kecamatan" class="form-label">Kecamatan <span class="required">*</span></label>
                            <select class="form-control form-login" id="select2-kecamatan">
                                <!-- Options will be loaded dynamically -->
                            </select>
                        </div>

                        <div>
                            <label for="select2-kelurahan" class="form-label">Kelurahan <span class="required">*</span></label>
                            <select class="form-control form-login" id="select2-kelurahan">
                                <!-- Options will be loaded dynamically -->
                            </select>
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
    <div id="toastContainer" class="position-fixed top-0 end-0 p-3" style="z-index: 9999;"></div>

    <?php include __DIR__ . '/../templates/footer.php'; ?>

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.trigger-tab-akun').on('click', function() {

                var tabEl = document.querySelector('#nav-akun-tab');


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


                    document.getElementById('username').value = user.nama || '';
                    document.getElementById('email').value = user.email || '';
                    document.getElementById('tanggal_lahir').value = user.tanggal_lahir || '';
                    document.getElementById('jenis_kelamin').value = user.jenis_kelamin || '';
                    document.getElementById('phone').value = user.no_hp || '';
                    document.getElementById('password').value = '';


                    document.getElementById('user-nama').textContent = user.nama || 'N/A';
                    document.getElementById('user-tanggal-lahir').textContent = user.tanggal_lahir || 'N/A';
                    document.getElementById('user-jenis-kelamin').textContent = user.jenis_kelamin || 'N/A';
                    document.getElementById('user-phone').textContent = user.no_hp || 'N/A';
                    document.getElementById('user-email').textContent = user.email || 'N/A';
                    document.getElementById('user-bergabung').textContent = user.created_at ? new Date(user.created_at).toLocaleDateString() : 'N/A';

                    document.getElementById('name-header').textContent = user.nama || 'N/A';
                    document.getElementById('phone-header').textContent = user.no_hp || 'N/A';
                    document.getElementById('email-header').textContent = user.email || 'N/A';


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
                    alamatContainer.innerHTML = '';

                    alamatList.forEach(alamat => {
                        const alamatItem = document.createElement('div');
                        alamatItem.classList.add('col-md-6', 'mb-4');


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


        $(document).on('click', '.tombol-edit', function() {
            const alamatId = $(this).data('id');
            const token = localStorage.getItem('auth_token');
            const productList = document.getElementById('product-list');

            if (!token) {
                productList.innerHTML = '<div class="alert alert-warning">Silakan login terlebih dahulu</div>';
                return;
            }

            document.getElementById('id_alamat').value = alamatId;
            $.ajax({
                url: `${API_BASE_URL}/alamat/edit/${alamatId}`,
                method: 'GET',
                headers: {
                    'Authorization': `Bearer ${token}`,
                    'Content-Type': 'application/json'
                },
                contentType: 'application/json',
                success: function(response) {
                    if (response.status === 'success') {
                        const alamat = response.data;

                        $('#provinsi-edit').val(alamat.provinsi);
                        $('#kabupaten-edit').val(alamat.kabupaten);
                        $('#kecamatan-edit').val(alamat.kecamatan);
                        $('#kelurahan-edit').val(alamat.kelurahan);
                        $('#detail_rumah-edit').val(alamat.detail_rumah);
                        $('#detail_alamat-edit').val(alamat.detail_alamat);

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

                const provinsi = document.getElementById('provinsi-edit').value;
                const kabupaten = document.getElementById('kabupaten-edit').value;
                const kecamatan = document.getElementById('kecamatan-edit').value;
                const kelurahan = document.getElementById('kelurahan-edit').value;
                const detail_rumah = document.getElementById('detail_rumah-edit').value;
                const detail_alamat = document.getElementById('detail_alamat-edit').value;


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
                    utama: 0
                };
                const alamatId = document.getElementById('id_alamat').value;
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
                window.location.href = '/login';
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
                        const allProductsRaw = response.data;
                        const wishlistContainer = $('#wishlist-list');
                        wishlistContainer.empty();

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
                                        <span>${parseFloat(product.avg_rating).toFixed(1)} (${product.review_count} ulasan)</span>
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
                event.preventDefault();

                const username = document.getElementById('username').value.trim();
                const email = document.getElementById('email').value.trim();
                const tanggal_lahir = document.getElementById('tanggal_lahir').value;
                const jenis_kelamin = document.getElementById('jenis_kelamin').value;
                const phone = document.getElementById('phone').value.trim();
                const password = document.getElementById('password').value.trim();




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

                fetch(`${API_BASE_URL}/user/edit`, {
                        method: 'POST',
                        headers: {
                            'Authorization': `Bearer ${token}`,
                            'Content-Type': 'application/json'
                        },
                        body: JSON.stringify(dataToUpdate)
                    })
                    .then(async response => {
                        const result = await response.json();

                        if (!response.ok) {
                            throw new Error(result.message || 'Terjadi kesalahan saat mengupdate data');
                        }

                        if (result.status === 'success') {
                            showToast('Data berhasil diupdate', 'success');
                            setTimeout(() => window.location.reload(), 1500); // Tunggu toast selesai dulu
                        } else {
                            showToast('Gagal mengupdate data: ' + result.message, 'danger');
                        }
                    })
                    .catch(error => {
                        if (error.message.includes('Token tidak ditemukan') || error.message.includes('Token tidak valid')) {
                            localStorage.removeItem('auth_token');
                            showToast("Sesi Anda telah habis. Silakan login ulang.", 'danger');
                            setTimeout(() => {
                                window.location.href = '/login';
                            }, 1500);
                            return;
                        }

                        showToast('Terjadi kesalahan: ' + error.message, 'danger');
                    });

            });
        });
    </script>

    <script>
        const token = localStorage.getItem('auth_token');

        function formatDate(dateString) {
            const date = new Date(dateString);
            const day = date.getDate().toString().padStart(2, '0');
            const month = (date.getMonth() + 1).toString().padStart(2, '0');
            const year = date.getFullYear();
            return `${day} ${getMonthName(month)} ${year}`;
        }


        function getMonthName(month) {
            const monthNames = {
                '01': 'Januari',
                '02': 'Februari',
                '03': 'Maret',
                '04': 'April',
                '05': 'Mei',
                '06': 'Juni',
                '07': 'Juli',
                '08': 'Agustus',
                '09': 'September',
                '10': 'Oktober',
                '11': 'November',
                '12': 'Desember'
            };
            return monthNames[month] || month;
        }

        function formatCurrency(amount) {
            return new Intl.NumberFormat('id-ID', {
                style: 'currency',
                currency: 'IDR',
                minimumFractionDigits: 0,
                maximumFractionDigits: 0
            }).format(amount);
        }

        function createOrderCard(order) {

            let badgeClass = 'bg-primary';
            let badgeText = 'Menunggu Pembayaran';


            if (order.isbatal === 1) {
                badgeClass = 'bg-danger';
                badgeText = 'Dibatalkan';
            } else {

                switch (order.status_pesanan) {
                    case 'waiting':
                        badgeClass = 'bg-primary';
                        badgeText = 'Menunggu Pembayaran';
                        break;
                    case 'menunggu verifikasi':
                        badgeClass = 'bg-info';
                        badgeText = 'Menunggu Verifikasi';
                        break;
                    case 'konfirmasi':
                        badgeClass = 'bg-info';
                        badgeText = 'Konfirmasi';
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


            const productNames = order.products.map(p => p.nama_product);
            const productDescription = productNames.length > 1 ?
                `${productNames[0]} + ${productNames.length - 1} produk lainnya` :
                productNames[0];


            let actionButtons = `<a href="/detail/pesanan/${order.payment_token}">
                                    <button class="btn btn-primary">Detail</button>
                                 </a>`;


            if (order.status_pesanan === 'waiting' && order.status_pembayaran !== 'sudah bayar' && order.isbatal !== 1) {
                actionButtons = `<button onclick="goToPayment('${order.payment_token}')" class="btn btn-outline-primary mb-2 me-2">Bayar</button>
                                ${actionButtons}`;
            }


            if (order.status_pesanan === 'completed' && order.isbatal !== 1) {

                if (!order.is_review) {
                    actionButtons = `<button onclick="openReviewModal('${order.payment_token}')" class="btn btn-outline-success mb-2 me-2">Beri Ulasan</button>
                        ${actionButtons}`;
                }
            }
            return `
         <div class="card mb-3 order-item">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <div class="d-flex align-items-center mb-3">
                            <span class="badge ${badgeClass} me-2">${badgeText}</span>
                            <strong>No. Order: ${order.nomor_pesanan}</strong>
                        </div>
                        <p class="mb-2">${formatDate(order.tanggal_pesanan)} • ${order.products.length} Produk • Total: ${formatCurrency(order.total_harga)}</p>
                        <div class="d-flex align-items-center mb-2">
                            <img src="${order.products[0].foto_produk}" class="me-2 rounded" alt="Product" width="50" height="50">
                            <span class="text-truncate">${productDescription}</span>
                        </div>
                    </div>
                    <div class="col-md-4 text-md-end mt-3 mt-md-0">
                        ${actionButtons}
                    </div>
                </div>
            </div>
            </div>
         `;
        }

        function renderOrders(orders) {

            const containers = {
                'all': document.getElementById('all-orders-container'),
                'pending': document.getElementById('pending-orders-container'),
                'konfirmasi': document.getElementById('confirmed-orders-container'),
                'dikirim': document.getElementById('shipped-orders-container'),
                'completed': document.getElementById('completed-orders-container'),
                'canceled': document.getElementById('canceled-orders-container'),
                'verification': document.getElementById('verification-orders-container')
            };

            const countElements = {
                'all': document.getElementById('all-orders-count'),
                'pending': document.getElementById('pending-orders-count'),
                'konfirmasi': document.getElementById('confirmed-orders-count'),
                'dikirim': document.getElementById('shipped-orders-count'),
                'completed': document.getElementById('completed-orders-count'),
                'canceled': document.getElementById('canceled-orders-count'),
                'verification': document.getElementById('verification-orders-count')
            };


            Object.values(containers).forEach(container => {
                if (container) container.innerHTML = '';
            });


            const groupedOrders = {
                'all': orders,

                'pending': orders.filter(o => (o.status_pesanan === 'waiting' && o.status_pembayaran !== 'sudah bayar') ||
                    (o.status_pesanan === 'menunggu verifikasi') && o.isbatal !== 1),
                'verification': orders.filter(o => false),
                'konfirmasi': orders.filter(o => o.status_pesanan === 'konfirmasi' && o.isbatal !== 1),
                'dikirim': orders.filter(o => o.status_pesanan === 'dikirim' && o.isbatal !== 1),
                'completed': orders.filter(o => o.status_pesanan === 'completed' && o.isbatal !== 1),
                'canceled': orders.filter(o => o.isbatal === 1)
            };


            Object.keys(groupedOrders).forEach(status => {
                const ordersForStatus = groupedOrders[status];

                if (!containers[status] || !countElements[status]) return;


                countElements[status].textContent = ordersForStatus.length;


                if (ordersForStatus.length === 0) {
                    containers[status].innerHTML = '<div class="alert alert-info">Tidak ada pesanan</div>';
                } else {
                    ordersForStatus.forEach(order => {
                        const orderCard = createOrderCard(order);
                        containers[status].innerHTML += orderCard;
                    });
                }
            });
        }

        function goToPayment(token) {
            window.location.href = `/pembayaran/${token}`;
        }

        function openReviewModal(paymentToken) {
            window.location.href = `/review/${paymentToken}`;
        }

        function showReviewModal(orderData, orderNumber, paymentToken) {
            let productsHtml = '';

            orderData.products.forEach((product, index) => {
                productsHtml += `
                <div class="review-product-item mb-3 p-3 border rounded">
                    <div class="d-flex">
                        <img src="${product.foto_produk}" class="me-3 rounded" alt="${product.nama_product}" width="80" height="80">
                        <div>
                            <h6>${product.nama_product}</h6>
                            <div class="mb-2">
                                <div class="rating-stars" id="rating-${index}">
                                    <i class="fas fa-star rating-star" data-value="1"></i>
                                    <i class="fas fa-star rating-star" data-value="2"></i>
                                    <i class="fas fa-star rating-star" data-value="3"></i>
                                    <i class="fas fa-star rating-star" data-value="4"></i>
                                    <i class="fas fa-star rating-star" data-value="5"></i>
                                    <input type="hidden" name="product_rating_${product.id}" id="product-rating-${index}" value="0">
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" id="review-text-${index}" placeholder="Bagaimana pengalaman Anda menggunakan produk ini?" rows="2"></textarea>
                                <input type="hidden" name="product_id_${index}" value="${product.id}">
                            </div>
                        </div>
                    </div>
                </div>
                `;
            });

            const modalHtml = `
            <div class="modal fade" id="reviewModal" tabindex="-1" aria-labelledby="reviewModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="reviewModalLabel">Beri Ulasan Untuk Pesanan #${orderNumber}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form id="review-form">
                                <input type="hidden" name="order_number" value="${orderNumber}">
                                <input type="hidden" name="payment_token" value="${paymentToken}">
                                
                                ${productsHtml}
                                
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <button type="button" class="btn btn-primary" id="submit-review">Kirim Ulasan</button>
                        </div>
                    </div>
                </div>
            </div>
            `;


            if ($('#reviewModal').length === 0) {
                $('body').append(modalHtml);
            } else {
                $('#reviewModal').replaceWith(modalHtml);
            }

            const reviewModal = new bootstrap.Modal(document.getElementById('reviewModal'));
            reviewModal.show();


            $('.rating-star').on('click', function() {
                const value = $(this).data('value');
                const ratingContainer = $(this).parent();
                const hiddenInput = ratingContainer.find('input[type="hidden"]');


                hiddenInput.val(value);


                ratingContainer.find('.rating-star').each(function() {
                    if ($(this).data('value') <= value) {
                        $(this).addClass('text-warning');
                    } else {
                        $(this).removeClass('text-warning');
                    }
                });
            });


            $('#submit-review').on('click', function() {
                submitReview(orderData);
            });
        }


        function submitReview(orderData) {

            const reviews = [];
            let isValid = true;

            orderData.products.forEach((product, index) => {
                const rating = parseInt($(`#product-rating-${index}`).val());
                const reviewText = $(`#review-text-${index}`).val().trim();

                if (rating === 0) {
                    alert(`Mohon berikan rating untuk produk "${product.nama_product}"`);
                    isValid = false;
                    return false;
                }

                if (reviewText === '') {
                    alert(`Mohon berikan ulasan untuk produk "${product.nama_product}"`);
                    isValid = false;
                    return false;
                }

                reviews.push({
                    product_id: product.id,
                    rating: rating,
                    review: reviewText
                });
            });

            if (!isValid) return;

            const reviewData = {
                order_number: $('#review-form input[name="order_number"]').val(),
                payment_token: $('#review-form input[name="payment_token"]').val(),
                reviews: reviews
            };


            $.ajax({
                url: API_BASE_URL + '/submitReview',
                type: 'POST',
                dataType: 'json',
                contentType: 'application/json',
                data: JSON.stringify(reviewData),
                headers: {
                    'Authorization': 'Bearer ' + token
                },
                success: function(response) {
                    if (response.status === 'success') {

                        const reviewModal = bootstrap.Modal.getInstance(document.getElementById('reviewModal'));
                        reviewModal.hide();

                        alert('Terima kasih! Ulasan Anda telah berhasil dikirim.');
                        fetchOrders();
                    } else {
                        console.error('Terjadi kesalahan:', response.message);
                        alert('Gagal mengirim ulasan: ' + response.message);
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Terjadi kesalahan:', error);
                    alert('Terjadi kesalahan saat mengirim ulasan');
                }
            });
        }

        function fetchOrders() {
            $.ajax({
                url: API_BASE_URL + '/getAllPesanan',
                type: 'GET',
                dataType: 'json',
                headers: {
                    'Authorization': 'Bearer ' + token
                },
                success: function(response) {
                    if (response.status === 'success') {
                        renderOrders(response.data.semua);
                    } else {
                        console.error('Terjadi kesalahan:', response.message);
                        alert('Gagal memuat pesanan');
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Terjadi kesalahan:', error);
                    alert('Terjadi kesalahan saat memuat pesanan');
                }
            });
        }

        $(document).ready(function() {
            fetchOrders();


            const style = document.createElement('style');
            style.textContent = `
                .rating-stars {
                    cursor: pointer;
                    font-size: 1.5rem;
                }
                .rating-star {
                    color: #ccc;
                }
                .rating-star.text-warning {
                    color: #ffc107;
                }
                .review-product-item {
                    background-color: #f8f9fa;
                }
            `;
            document.head.appendChild(style);
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

    <script>
        var urlProvinsi = "https://ibnux.github.io/data-indonesia/provinsi.json";
        var urlKabupaten = "https://ibnux.github.io/data-indonesia/kabupaten/";
        var urlKecamatan = "https://ibnux.github.io/data-indonesia/kecamatan/";
        var urlKelurahan = "https://ibnux.github.io/data-indonesia/kelurahan/";

        function clearOptions(id) {
            $('#' + id).empty().trigger('change');
        }

        function loadProvinsi(selectId) {
            console.log('Load Provinsi...');
            $.getJSON(urlProvinsi, function(res) {
                res = $.map(res, function(obj) {
                    obj.text = obj.nama;
                    return obj;
                });

                var data = [{
                    id: "",
                    text: "- Pilih Provinsi -",
                }].concat(res);

                $("#" + selectId).select2({
                    dropdownAutoWidth: true,
                    width: '100%',
                    data: data,
                    dropdownParent: $("#tambahAlamatModal") // Fix untuk modal
                });
            });
        }

        function loadKabupaten(provinsiId, selectId) {
            console.log('Load Kabupaten di provinsi ' + provinsiId + '...');
            $.getJSON(urlKabupaten + provinsiId + ".json", function(res) {
                res = $.map(res, function(obj) {
                    obj.text = obj.nama;
                    return obj;
                });

                var data = [{
                    id: "",
                    text: "- Pilih Kabupaten -"
                }].concat(res);

                $("#" + selectId).select2({
                    dropdownAutoWidth: true,
                    width: '100%',
                    data: data,
                    dropdownParent: $("#tambahAlamatModal") // Fix untuk modal
                });
            });
        }

        function loadKecamatan(kabupatenId, selectId) {
            console.log('Load Kecamatan di kabupaten ' + kabupatenId + '...');
            $.getJSON(urlKecamatan + kabupatenId + ".json", function(res) {
                res = $.map(res, function(obj) {
                    obj.text = obj.nama;
                    return obj;
                });

                var data = [{
                    id: "",
                    text: "- Pilih Kecamatan -"
                }].concat(res);

                $("#" + selectId).select2({
                    dropdownAutoWidth: true,
                    width: '100%',
                    data: data,
                    dropdownParent: $("#tambahAlamatModal") // Fix untuk modal
                });
            });
        }

        function loadKelurahan(kecamatanId, selectId) {
            console.log('Load Kelurahan di kecamatan ' + kecamatanId + '...');
            $.getJSON(urlKelurahan + kecamatanId + ".json", function(res) {
                res = $.map(res, function(obj) {
                    obj.text = obj.nama;
                    return obj;
                });

                var data = [{
                    id: "",
                    text: "- Pilih Kelurahan -"
                }].concat(res);

                $("#" + selectId).select2({
                    dropdownAutoWidth: true,
                    width: '100%',
                    data: data,
                    dropdownParent: $("#tambahAlamatModal") // Fix untuk modal
                });
            });
        }

        function updateAlamatLengkap() {
            const provinsi = $("#select2-provinsi option:selected").text();
            const kabupaten = $("#select2-kabupaten option:selected").text();
            const kecamatan = $("#select2-kecamatan option:selected").text();
            const kelurahan = $("#select2-kelurahan option:selected").text();
            const detailRumah = $("#detail_rumah").val();

            // Update hidden fields with the text values
            if (provinsi && provinsi !== "- Pilih Provinsi -") {
                $("#provinsi").val(provinsi);
            }

            if (kabupaten && kabupaten !== "- Pilih Kabupaten -") {
                $("#kabupaten").val(kabupaten);
            }

            if (kecamatan && kecamatan !== "- Pilih Kecamatan -") {
                $("#kecamatan").val(kecamatan);
            }

            if (kelurahan && kelurahan !== "- Pilih Kelurahan -") {
                $("#kelurahan").val(kelurahan);
            }

            // Only update if all fields are selected (not the default "- Pilih X -" options)
            if (provinsi && kabupaten && kecamatan && kelurahan &&
                provinsi !== "- Pilih Provinsi -" &&
                kabupaten !== "- Pilih Kabupaten -" &&
                kecamatan !== "- Pilih Kecamatan -" &&
                kelurahan !== "- Pilih Kelurahan -") {

                let alamatLengkap = `${detailRumah ? detailRumah + ', ' : ''}${kelurahan}, ${kecamatan}, ${kabupaten}, ${provinsi}`;
                $("#detail_alamat").val(alamatLengkap);
            }
        }

        // Inisialisasi Select2 setelah modal terbuka
        $('#tambahAlamatModal').on('shown.bs.modal', function() {
            // Initialize Select2 dropdowns
            loadProvinsi('select2-provinsi');
        });

        document.addEventListener("DOMContentLoaded", function() {
            // Set up event listeners
            $(document).on('change', '#select2-provinsi', function() {
                var provinsi = $(this).val();
                clearOptions('select2-kabupaten');
                clearOptions('select2-kecamatan');
                clearOptions('select2-kelurahan');

                if (provinsi) {
                    loadKabupaten(provinsi, 'select2-kabupaten');
                }

                updateAlamatLengkap();
            });

            $(document).on('change', '#select2-kabupaten', function() {
                var kabupaten = $(this).val();
                clearOptions('select2-kecamatan');
                clearOptions('select2-kelurahan');

                if (kabupaten) {
                    loadKecamatan(kabupaten, 'select2-kecamatan');
                }

                updateAlamatLengkap();
            });

            $(document).on('change', '#select2-kecamatan', function() {
                var kecamatan = $(this).val();
                clearOptions('select2-kelurahan');

                if (kecamatan) {
                    loadKelurahan(kecamatan, 'select2-kelurahan');
                }

                updateAlamatLengkap();
            });

            $(document).on('change', '#select2-kelurahan', function() {
                updateAlamatLengkap();
            });

            $('#detail_rumah').on('input', function() {
                updateAlamatLengkap();
            });

            // Form submission
            $('#formTambahAlamat').on('submit', function(e) {
                e.preventDefault();

                const token = localStorage.getItem('auth_token');

                // Get values from hidden input fields (which contain actual text values)
                const provinsi = $("#provinsi").val().trim();
                const kabupaten = $("#kabupaten").val().trim();
                const kecamatan = $("#kecamatan").val().trim();
                const kelurahan = $("#kelurahan").val().trim();
                const detail_alamat = $("#detail_alamat").val().trim();
                const detail_rumah = $("#detail_rumah").val().trim();

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
                    utama: 0
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
</body>

</html>