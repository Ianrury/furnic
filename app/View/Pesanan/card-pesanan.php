<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Pengguna - E-commerce</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
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
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold text-primary" href="#">
                <i class="fas fa-store me-2"></i>TokoKita
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-home me-1"></i>Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-tags me-1"></i>Kategori</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-fire me-1"></i>Promo</a>
                    </li>
                </ul>
                <div class="d-flex align-items-center">
                    <a href="#" class="position-relative me-3 text-dark">
                        <i class="fas fa-bell fs-5"></i>
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                            3
                        </span>
                    </a>
                    <a href="#" class="position-relative me-3 text-dark">
                        <i class="fas fa-shopping-cart fs-5"></i>
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                            5
                        </span>
                    </a>
                    <div class="dropdown">
                        <a href="#" class="d-flex align-items-center text-decoration-none dropdown-toggle"
                            id="dropdownUser" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="/api/placeholder/50/50" class="rounded-circle" width="32" height="32"
                                alt="Avatar">
                            <span class="ms-2 d-none d-lg-inline-block">Ibu Siti</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="dropdownUser">
                            <li><a class="dropdown-item active" href="#"><i class="fas fa-user me-2"></i>Profil</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fas fa-list me-2"></i>Pesanan</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fas fa-heart me-2"></i>Wishlist</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item text-danger" href="#"><i
                                        class="fas fa-sign-out-alt me-2"></i>Keluar</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container my-4">
        <div class="row">
            <!-- Profile Header -->
            <div class="col-12 mb-4">
                <div class="profile-header">
                    <div class="row align-items-center">
                        <div class="col-md-2 text-center">
                            <img src="/api/placeholder/120/120" alt="Profile Picture"
                                class="profile-avatar mb-3 mb-md-0">
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-center mb-2">
                                <h2 class="mb-0">Ibu Siti Rahayu</h2>
                                <span class="ms-2 badge bg-light text-dark"><i
                                        class="fas fa-check-circle text-primary me-1"></i>Terverifikasi</span>
                            </div>
                            <p class="mb-2"><i class="fas fa-envelope me-2"></i>sitirahayu@email.com</p>
                            <p class="mb-2"><i class="fas fa-phone me-2"></i>+62 812 3456 7890</p>
                            <p class="mb-0"><i class="fas fa-map-marker-alt me-2"></i>Jakarta, Indonesia</p>
                        </div>
                        <div class="col-md-4 text-md-end mt-3 mt-md-0">
                            <div class="mb-2">
                                <span class="badge badge-status me-2"><i class="fas fa-award me-1"></i>Member
                                    Silver</span>
                            </div>
                            <p class="mb-2"><i class="fas fa-shopping-bag me-1"></i>25 Transaksi Berhasil</p>
                            <button class="btn btn-light mt-2"><i class="fas fa-edit me-1"></i>Edit Profil</button>
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
                            <a class="nav-link mb-2" href="#alamat" data-bs-toggle="tab">
                                <i class="fas fa-map-marker-alt me-2"></i>Alamat Tersimpan
                            </a>
                            <a class="nav-link mb-2" href="#pembayaran" data-bs-toggle="tab">
                                <i class="fas fa-credit-card me-2"></i>Metode Pembayaran
                            </a>
                            <a class="nav-link mb-2" href="#keamanan" data-bs-toggle="tab">
                                <i class="fas fa-shield-alt me-2"></i>Keamanan Akun
                            </a>
                        </nav>
                    </div>
                </div>

                <div class="card profile-card">
                    <div class="card-body">
                        <h5 class="card-title">Level Membership</h5>
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span>Silver</span>
                            <span>Gold</span>
                        </div>
                        <div class="progress mb-3">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 65%;"
                                aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="small text-muted">Belanjakan Rp 350.000 lagi untuk mencapai level Gold</p>
                        <div class="d-grid">
                            <button class="btn btn-outline-primary"><i class="fas fa-gem me-1"></i>Lihat
                                Keuntungan</button>
                        </div>
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
                                <span class="edit-icon"><i class="fas fa-edit"></i></span>
                            </div>
                            <div class="card-body">
                                <div class="row mb-3">
                                    <div class="col-md-4">
                                        <p class="text-muted mb-1">Nama Lengkap</p>
                                        <p class="fw-bold">Siti Rahayu</p>
                                    </div>
                                    <div class="col-md-4">
                                        <p class="text-muted mb-1">Tanggal Lahir</p>
                                        <p class="fw-bold">15 Mei 1985</p>
                                    </div>
                                    <div class="col-md-4">
                                        <p class="text-muted mb-1">Jenis Kelamin</p>
                                        <p class="fw-bold">Perempuan</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row mb-3">
                                    <div class="col-md-4">
                                        <p class="text-muted mb-1">Nomor Telepon</p>
                                        <p class="fw-bold">+62 812 3456 7890</p>
                                    </div>
                                    <div class="col-md-4">
                                        <p class="text-muted mb-1">Email</p>
                                        <p class="fw-bold">sitirahayu@email.com</p>
                                    </div>
                                    <div class="col-md-4">
                                        <p class="text-muted mb-1">Bergabung Sejak</p>
                                        <p class="fw-bold">12 Januari 2023</p>
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
                                                        <p class="mb-2">2 Mei 2025 • 3 Produk • Total: Rp 650.000</p>
                                                        <div class="d-flex align-items-center mb-2">
                                                            <img src="/api/placeholder/40/40" class="me-2 rounded"
                                                                alt="Product">
                                                            <span class="text-truncate">Sepatu Running Nike Air Zoom + 2
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
                                                            <span class="badge bg-warning text-dark me-2">Dikirim</span>
                                                            <strong>No. Order: #ORD-2025050096</strong>
                                                        </div>
                                                        <p class="mb-2">29 April 2025 • 1 Produk • Total: Rp 235.000</p>
                                                        <div class="d-flex align-items-center mb-2">
                                                            <img src="/api/placeholder/40/40" class="me-2 rounded"
                                                                alt="Product">
                                                            <span class="text-truncate">Kemeja Formal Pria Slim
                                                                Fit</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 text-md-end mt-3 mt-md-0">
                                                        <button class="btn btn-outline-success mb-2 me-2">Lacak</button>
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
                                                        <p class="mb-2">27 April 2025 • 5 Produk • Total: Rp 1.250.000
                                                        </p>
                                                        <div class="d-flex align-items-center mb-2">
                                                            <img src="/api/placeholder/40/40" class="me-2 rounded"
                                                                alt="Product">
                                                            <span class="text-truncate">iPhone 15 Pro Case + 4 produk
                                                                lainnya</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 text-md-end mt-3 mt-md-0">
                                                        <button class="btn btn-outline-primary mb-2 me-2">Bayar</button>
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
                                                        <p class="mb-2">27 April 2025 • 5 Produk • Total: Rp 1.250.000
                                                        </p>
                                                        <div class="d-flex align-items-center mb-2">
                                                            <img src="/api/placeholder/40/40" class="me-2 rounded"
                                                                alt="Product">
                                                            <span class="text-truncate">iPhone 15 Pro Case + 4 produk
                                                                lainnya</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 text-md-end mt-3 mt-md-0">
                                                        <button class="btn btn-outline-primary mb-2 me-2">Bayar</button>
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
                                                            <span class="badge bg-warning text-dark me-2">Dikirim</span>
                                                            <strong>No. Order: #ORD-2025050096</strong>
                                                        </div>
                                                        <p class="mb-2">29 April 2025 • 1 Produk • Total: Rp 235.000</p>
                                                        <div class="d-flex align-items-center mb-2">
                                                            <img src="/api/placeholder/40/40" class="me-2 rounded"
                                                                alt="Product">
                                                            <span class="text-truncate">Kemeja Formal Pria Slim
                                                                Fit</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 text-md-end mt-3 mt-md-0">
                                                        <button class="btn btn-outline-success mb-2 me-2">Lacak</button>
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
                                                        <p class="mb-2">2 Mei 2025 • 3 Produk • Total: Rp 650.000</p>
                                                        <div class="d-flex align-items-center mb-2">
                                                            <img src="/api/placeholder/40/40" class="me-2 rounded"
                                                                alt="Product">
                                                            <span class="text-truncate">Sepatu Running Nike Air Zoom + 2
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
                                <div class="row">
                                    <!-- Wishlist Item 1 -->
                                    <div class="col-md-6 mb-4">
                                        <div class="card wishlist-item h-100">
                                            <div class="row g-0">
                                                <div class="col-4">
                                                    <img src="/api/placeholder/150/150"
                                                        class="img-fluid rounded-start h-100 object-fit-cover"
                                                        alt="Product">
                                                </div>
                                                <div class="col-8">
                                                    <div class="card-body">
                                                        <h6 class="card-title">Headphone Sony WH-1000XM5</h6>
                                                        <div class="d-flex align-items-center mb-2">
                                                            <span class="text-warning me-1"><i
                                                                    class="fas fa-star"></i></span>
                                                            <span>4.9 (120 ulasan)</span>
                                                        </div>
                                                        <p class="card-text text-primary fw-bold mb-3">Rp 4.599.000</p>
                                                        <div class="d-flex">
                                                            <button class="btn btn-sm btn-primary me-2">Tambah ke
                                                                Keranjang</button>
                                                            <button class="btn btn-sm btn-outline-danger"><i
                                                                    class="fas fa-trash"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Wishlist Item 2 -->
                                    <div class="col-md-6 mb-4">
                                        <div class="card wishlist-item h-100">
                                            <div class="row g-0">
                                                <div class="col-4">
                                                    <img src="/api/placeholder/150/150"
                                                        class="img-fluid rounded-start h-100 object-fit-cover"
                                                        alt="Product">
                                                </div>
                                                <div class="col-8">
                                                    <div class="card-body">
                                                        <h6 class="card-title
">Laptop ASUS ROG Zephyrus G14</h6>
                                                        <div class="d-flex align-items-center mb-2">
                                                            <span class="text-warning me-1"><i
                                                                    class="fas fa-star"></i></span>
                                                            <span>4.8 (85 ulasan)</span>
                                                        </div>
                                                        <p class="card-text text-primary fw-bold mb-3">Rp 22.999.000</p>
                                                        <div class="d-flex">
                                                            <button class="btn btn-sm btn-primary me-2">Tambah ke
                                                                Keranjang</button>
                                                            <button class="btn btn-sm btn-outline-danger"><i
                                                                    class="fas fa-trash"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Wishlist Item 3 -->
                                    <div class="col-md-6 mb-4">
                                        <div class="card wishlist-item h-100">
                                            <div class="row g-0">
                                                <div class="col-4">
                                                    <img src="/api/placeholder/150/150"
                                                        class="img-fluid rounded-start h-100 object-fit-cover"
                                                        alt="Product">
                                                </div>
                                                <div class="col-8">
                                                    <div class="card-body">
                                                        <h6
                                                            class="card-title                                                        ">
                                                            Smartphone Samsung Galaxy S22</h6>
                                                        <div class="d-flex align-items-center mb-2">
                                                            <span class="text-warning me-1"><i
                                                                    class="fas fa-star"></i></span>
                                                            <span>4.7 (200 ulasan)</span>
                                                        </div>
                                                        <p class="card-text text-primary fw-bold mb-3">Rp 12.999.000</p>
                                                        <div class="d-flex">
                                                            <button class="btn btn-sm btn-primary me-2">Tambah ke
                                                                Keranjang</button>
                                                            <button class="btn btn-sm btn-outline-danger"><i
                                                                    class="fas fa-trash"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Wishlist Item 4 -->
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
                                <div class="row">
                                    <!-- Alamat Item 1 -->
                                    <div class="col-md-6 mb-4">
                                        <div class="card alamat-item h-100">
                                            <div class="row g-0">
                                                <div class="col-12">
                                                    <div class="card-body">
                                                        <h6 class="card-title">Budi Santoso</h6>
                                                        <p class="card-text">Jl. Raya Serpong No.10, RT.2/RW.1,
                                                            Serpong,<br>
                                                            Kota Tangerang Selatan, Banten 15310</p>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="card-footer d-flex justify-content-between">
                                                        <button class="btn btn-sm btn-primary">Edit</button>
                                                        <button class="btn btn-sm btn-outline-danger"><i
                                                                class="fas fa-trash"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Alamat Item 2 -->
                                    <div class="col-md-6 mb-4">
                                        <div class="card alamat-item h-100">
                                            <div class="row g-0">
                                                <div class="col-12">
                                                    <div class="card-body">
                                                        <h6 class="card-title


                                                            ">Siti Rahayu</h6>
                                                        <p class="card-text">Jl. Raya Bogor No.20, RT.3/RW.2, Bogor,<br>

                                                            Jawa Barat 16110</p>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="card-footer d-flex justify-content-between">
                                                        <button class="btn btn-sm btn-primary">Edit</button>
                                                        <button class="btn btn-sm btn-outline-danger"><i
                                                                class="fas fa-trash"></i></button>
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
            </div>
        </div>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>