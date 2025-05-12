<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Pembayaran - PT Furnice Furnishing Indonesia</title>

    <!-- favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/logo/favicon.png">
    <base href="/">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css">

    <!-- Font Awesome untuk ikon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <style>
        :root {
            --primary-color: #1e3a8a;
            --primary-light: #3b82f6;
            --success-color: #10b981;
            --warning-color: #f59e0b;
            --danger-color: #ef4444;
            --highlight-color: #dbeafe;
            --gray-light: #f3f4f6;
            --gray-medium: #e5e7eb;
            --text-dark: #1f2937;
            --text-medium: #4b5563;
            --text-light: #6b7280;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f9fafb;
            color: var(--text-dark);
            line-height: 1.6;
        }

        .payment-container {
            max-width: 700px;
            margin: 2rem auto;
            padding: 0 1rem;
        }

        .logo-container {
            text-align: center;
            margin-bottom: 1.5rem;
        }

        .logo {
            height: 60px;
            margin-bottom: 0.5rem;
        }

        .payment-header {
            text-align: center;
            margin-bottom: 2rem;
        }

        .payment-header h1 {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--primary-color);
            margin-bottom: 0.75rem;
        }

        .order-number {
            display: inline-block;
            background-color: var(--primary-color);
            color: white;
            font-weight: 600;
            padding: 0.35rem 1rem;
            border-radius: 50px;
            font-size: 0.9rem;
        }

        .payment-section {
            background-color: white;
            border-radius: 16px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            padding: 2rem;
            margin-bottom: 2rem;
            overflow: hidden;
            position: relative;
        }

        .payment-section::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(90deg, var(--primary-color), var(--primary-light));
        }

        .payment-amount {
            background-color: var(--highlight-color);
            border-radius: 12px;
            padding: 1.5rem;
            margin-bottom: 2rem;
            text-align: center;
            position: relative;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(59, 130, 246, 0.1);
        }

        .payment-amount::after {
            content: "";
            position: absolute;
            right: -20px;
            bottom: -20px;
            width: 120px;
            height: 120px;
            background-color: rgba(219, 234, 254, 0.4);
            border-radius: 50%;
            z-index: 1;
        }

        .payment-amount-label {
            font-size: 1rem;
            color: var(--text-medium);
            margin-bottom: 0.5rem;
            font-weight: 500;
        }

        .payment-amount-value {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--primary-color);
            position: relative;
            z-index: 2;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
        }

        .deadline-info {
            display: flex;
            align-items: center;
            background-color: white;
            border-radius: 12px;
            padding: 1.25rem;
            margin-bottom: 2rem;
            border: 1px solid var(--gray-medium);
            position: relative;
            overflow: hidden;
        }

        .deadline-info::before {
            content: "";
            position: absolute;
            left: 0;
            top: 0;
            bottom: 0;
            width: 5px;
            background-color: var(--warning-color);
        }

        .deadline-icon {
            color: var(--warning-color);
            margin-right: 1rem;
            animation: pulse 1.5s infinite;
            font-size: 1.5rem;
        }

        .deadline-text {
            flex-grow: 1;
        }

        .deadline-title {
            font-weight: 600;
            color: var(--text-medium);
            margin-bottom: 0.5rem;
            font-size: 0.95rem;
        }

        .deadline-time {
            font-weight: 700;
            color: var(--text-dark);
            display: flex;
            align-items: center;
            margin-bottom: 0.75rem;
        }

        .timer-unit {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-right: 0.75rem;
        }

        .timer-digit {
            display: inline-block;
            background-color: var(--gray-light);
            border-radius: 8px;
            padding: 0.4rem 0.6rem;
            min-width: 2.5rem;
            text-align: center;
            color: var(--danger-color);
            font-weight: bold;
            font-size: 1.25rem;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .timer-label {
            margin-top: 0.25rem;
            font-size: 0.7rem;
            color: var(--text-light);
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .timer-separator {
            margin: 0 0.1rem;
            font-size: 1.25rem;
            font-weight: bold;
            color: var(--text-light);
            align-self: flex-start;
            margin-top: 0.4rem;
        }

        .deadline-progress {
            margin-top: 0.5rem;
            height: 6px;
            background-color: var(--gray-light);
            border-radius: 3px;
            overflow: hidden;
        }

        .deadline-progress-bar {
            height: 100%;
            background: linear-gradient(90deg, var(--warning-color), var(--danger-color));
            width: 75%;
            transition: width 1s linear;
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.1);
            }

            100% {
                transform: scale(1);
            }
        }

        .payment-methods {
            display: flex;
            justify-content: center;
            margin: 1.5rem 0;
            flex-wrap: wrap;
        }

        .payment-method {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 60px;
            height: 40px;
            background-color: white;
            border-radius: 8px;
            margin: 0 0.5rem;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .payment-method img {
            max-width: 80%;
            max-height: 60%;
        }

        .bank-info {
            background-color: white;
            padding: 1.5rem;
            border-radius: 12px;
            margin-bottom: 2rem;
            border: 1px solid var(--gray-medium);
            position: relative;
        }

        .bank-info::before {
            content: "";
            position: absolute;
            left: 0;
            top: 0;
            bottom: 0;
            width: 5px;
            background-color: var(--primary-color);
        }

        .bank-info h3 {
            margin-top: 0;
            color: var(--primary-color);
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 1.25rem;
            padding-bottom: 0.75rem;
            border-bottom: 1px solid var(--gray-medium);
        }

        .bank-detail {
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
        }

        .bank-detail-label {
            font-weight: 500;
            color: var(--text-medium);
            width: 35%;
            font-size: 0.95rem;
        }

        .bank-detail-value {
            font-weight: 600;
            width: 65%;
            font-size: 1rem;
            display: flex;
            align-items: center;
        }

        .bank-logo {
            width: 60px;
            height: 30px;
            object-fit: contain;
            margin-right: 0.75rem;
        }

        .form-section {
            background-color: white;
            border-radius: 16px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            padding: 2rem;
            position: relative;
            overflow: hidden;
        }

        .form-section::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(90deg, var(--success-color), var(--primary-light));
        }

        .form-section h3 {
            color: var(--text-dark);
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 1.5rem;
            text-align: center;
            position: relative;
            padding-bottom: 0.75rem;
        }

        .form-section h3::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 3px;
            background-color: var(--success-color);
            border-radius: 2px;
        }

        .form-label {
            color: var(--text-medium);
            font-weight: 500;
            font-size: 0.95rem;
            margin-bottom: 0.5rem;
        }

        .form-control,
        .form-select {
            font-size: 1rem;
            padding: 0.65rem 0.85rem;
            border-radius: 10px;
            border: 1px solid var(--gray-medium);
            transition: all 0.3s;
            background-color: var(--gray-light);
        }

        .form-control:focus,
        .form-select:focus {
            border-color: var(--primary-light);
            box-shadow: 0 0 0 0.25rem rgba(59, 130, 246, 0.25);
            background-color: white;
        }

        .file-upload {
            position: relative;
            display: inline-block;
            width: 100%;
        }

        .file-upload-label {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem 1rem;
            background-color: var(--gray-light);
            border: 2px dashed var(--primary-light);
            border-radius: 12px;
            cursor: pointer;
            transition: all 0.3s;
            height: 120px;
        }

        .file-upload-label:hover {
            background-color: rgba(219, 234, 254, 0.5);
        }

        .file-upload-icon {
            display: flex;
            flex-direction: column;
            align-items: center;
            color: var(--primary-light);
            font-size: 1rem;
        }

        .file-upload-icon i {
            font-size: 2.2rem;
            margin-bottom: 0.75rem;
        }

        .file-upload input[type="file"] {
            position: absolute;
            top: 0;
            left: 0;
            opacity: 0;
            width: 100%;
            height: 100%;
            cursor: pointer;
        }

        .file-preview {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 1rem;
            padding: 0.75rem;
            background-color: var(--gray-light);
            border-radius: 10px;
            display: none;
        }

        .file-preview-icon {
            color: var(--success-color);
            font-size: 1.5rem;
            margin-right: 0.75rem;
        }

        .file-preview-details {
            flex-grow: 1;
        }

        .file-preview-name {
            font-weight: 500;
            margin-bottom: 0.25rem;
            font-size: 0.9rem;
            color: var(--text-dark);
        }

        .file-preview-size {
            font-size: 0.8rem;
            color: var(--text-light);
        }

        .file-preview-remove {
            color: var(--danger-color);
            cursor: pointer;
            font-size: 1.25rem;
            transition: all 0.2s;
        }

        .file-preview-remove:hover {
            transform: scale(1.1);
        }

        .copy-button {
            background-color: var(--gray-light);
            border: none;
            border-radius: 6px;
            padding: 0.35rem 0.75rem;
            font-size: 0.85rem;
            margin-left: 0.75rem;
            cursor: pointer;
            transition: all 0.2s;
            display: flex;
            align-items: center;
            color: var(--text-medium);
        }

        .copy-button i {
            margin-right: 0.3rem;
        }

        .copy-button:hover {
            background-color: var(--gray-medium);
            color: var(--primary-color);
        }

        .copy-success {
            display: flex;
            align-items: center;
            color: var(--success-color);
            font-size: 0.85rem;
            margin-left: 0.75rem;
            font-weight: 500;
            display: none;
        }

        .copy-success i {
            margin-right: 0.3rem;
        }

        .btn-primary {
            background: linear-gradient(90deg, var(--primary-color), var(--primary-light));
            border: none;
            font-size: 1.1rem;
            padding: 0.75rem 1.5rem;
            border-radius: 10px;
            font-weight: 600;
            transition: all 0.3s;
            position: relative;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(30, 58, 138, 0.3);
        }

        .btn-primary::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, rgba(255, 255, 255, 0), rgba(255, 255, 255, 0.3), rgba(255, 255, 255, 0));
            transform: translateX(-100%);
            transition: transform 0.6s;
        }

        .btn-primary:hover::after {
            transform: translateX(100%);
        }

        .btn-primary:hover,
        .btn-primary:focus,
        .btn-primary:active {
            background: linear-gradient(90deg, var(--primary-color), var(--primary-color)) !important;
            box-shadow: 0 4px 20px rgba(30, 58, 138, 0.4) !important;
            transform: translateY(-2px);
        }

        .order-summary {
            margin-bottom: 2rem;
            background-color: white;
            border-radius: 12px;
            padding: 1.5rem;
            border: 1px solid var(--gray-medium);
        }

        .order-summary h3 {
            color: var(--text-dark);
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 1rem;
            padding-bottom: 0.75rem;
            border-bottom: 1px solid var(--gray-medium);
        }

        .order-item {
            display: flex;
            margin-bottom: 1rem;
            padding-bottom: 1rem;
            border-bottom: 1px dashed var(--gray-medium);
        }

        .order-item:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }

        .order-item-image {
            width: 70px;
            height: 70px;
            border-radius: 8px;
            object-fit: cover;
            margin-right: 1rem;
            background-color: var(--gray-light);
        }

        .order-item-details {
            flex-grow: 1;
        }

        .order-item-name {
            font-weight: 600;
            font-size: 1rem;
            margin-bottom: 0.25rem;
        }

        .order-item-variant {
            font-size: 0.85rem;
            color: var(--text-light);
            margin-bottom: 0.5rem;
        }

        .order-item-price {
            font-weight: 600;
            color: var(--primary-color);
        }

        .order-totals {
            margin-top: 1rem;
            padding-top: 1rem;
            border-top: 1px solid var(--gray-medium);
        }

        .order-total-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 0.5rem;
        }

        .order-total-label {
            font-weight: 500;
            color: var(--text-medium);
        }

        .order-total-value {
            font-weight: 600;
        }

        .order-grand-total {
            display: flex;
            justify-content: space-between;
            margin-top: 0.75rem;
            padding-top: 0.75rem;
            border-top: 1px dashed var(--gray-medium);
        }

        .order-grand-total-label {
            font-weight: 600;
            font-size: 1.1rem;
            color: var(--text-dark);
        }

        .order-grand-total-value {
            font-weight: 700;
            font-size: 1.1rem;
            color: var(--primary-color);
        }

        .status-badge {
            display: inline-block;
            padding: 0.35rem 0.75rem;
            border-radius: 50px;
            font-size: 0.85rem;
            font-weight: 600;
            margin-left: 0.75rem;
        }

        .status-pending {
            background-color: rgba(245, 158, 11, 0.15);
            color: var(--warning-color);
        }

        @media (max-width: 767px) {
            .payment-container {
                padding: 0 0.75rem;
                margin: 1rem auto;
            }

            .payment-section,
            .form-section {
                padding: 1.5rem;
                border-radius: 12px;
            }

            .deadline-time {
                flex-wrap: wrap;
            }

            .timer-unit {
                margin-bottom: 0.5rem;
            }

            .order-item {
                flex-direction: column;
            }

            .order-item-image {
                margin-bottom: 0.75rem;
                margin-right: 0;
            }

            .bank-detail {
                flex-direction: column;
                align-items: flex-start;
            }

            .bank-detail-label,
            .bank-detail-value {
                width: 100%;
            }

            .bank-detail-label {
                margin-bottom: 0.25rem;
            }

            .bank-detail-value {
                margin-bottom: 0.5rem;
            }

            .copy-button,
            .copy-success {
                margin-left: 0;
                margin-top: 0.5rem;
            }
        }
    </style>
</head>

<body>
    <div class="payment-container">
        <div class="logo-container">
            <!-- Placeholder logo - replace with actual logo -->
            <img src="assets/img/logo/Logo%20Furnice.png" width="120" height="60" alt="Furnice Logo" class="logo">
        </div>

        <div class="payment-header">
            <h1>Halaman Pembayaran</h1>
            <span class="order-number">Order #FF283759</span>
            <span class="status-badge status-pending">Menunggu Pembayaran</span>
        </div>

        <div class="payment-section">
            <!-- Jumlah yang harus dibayar dengan highlight -->
            <div class="payment-amount">
                <div class="payment-amount-label">Total Pembayaran</div>
                <div class="payment-amount-value">IDR 8.750.000</div>
            </div>

            <!-- Informasi deadline pembayaran -->
            <div class="deadline-info">
                <i class="fas fa-clock deadline-icon"></i>
                <div class="deadline-text">
                    <div class="deadline-title">Batas Waktu Pembayaran</div>
                    <div class="deadline-time" id="countdown">
                        <div class="timer-unit">
                            <span id="hours" class="timer-digit">23</span>
                            <span class="timer-label">Jam</span>
                        </div>
                        <div class="timer-separator">:</div>
                        <div class="timer-unit">
                            <span id="minutes" class="timer-digit">45</span>
                            <span class="timer-label">Menit</span>
                        </div>
                        <div class="timer-separator">:</div>
                        <div class="timer-unit">
                            <span id="seconds" class="timer-digit">18</span>
                            <span class="timer-label">Detik</span>
                        </div>
                    </div>
                    <div class="deadline-progress">
                        <div class="deadline-progress-bar" id="progress-bar"></div>
                    </div>
                </div>
            </div>

            <!-- Informasi rekening bank -->
            <div class="bank-info">
                <h3>Informasi Rekening</h3>
                <div class="bank-detail">
                    <div class="bank-detail-label">Bank</div>
                    <div class="bank-detail-value">
                        <img src="assets/img/logo/bca.png" width="60" height="30" alt="BCA Logo" class="bank-logo">
                        BCA
                    </div>
                </div>
                <div class="bank-detail">
                    <div class="bank-detail-label">Nama Rekening</div>
                    <div class="bank-detail-value">PT Furnice Furnishing Indonesia</div>
                </div>
                <div class="bank-detail">
                    <div class="bank-detail-label">No. Rekening</div>
                    <div class="bank-detail-value">
                        <span id="account-number">8840123456</span>
                        <button class="copy-button" onclick="copyToClipboard('account-number')">
                            <i class="fas fa-copy"></i> Salin
                        </button>
                        <span class="copy-success" id="copy-success-account">
                            <i class="fas fa-check-circle"></i> Disalin!
                        </span>
                    </div>
                </div>
                <div class="bank-detail">
                    <div class="bank-detail-label">Nominal</div>
                    <div class="bank-detail-value">
                        <span id="nominal-transfer">8.750.000</span>
                        <button class="copy-button" onclick="copyToClipboard('nominal-transfer')">
                            <i class="fas fa-copy"></i> Salin
                        </button>
                        <span class="copy-success" id="copy-success-nominal">
                            <i class="fas fa-check-circle"></i> Disalin!
                        </span>
                    </div>
                </div>
            </div>

            <!-- Ringkasan order -->
            <div class="order-summary">
                <h3>Ringkasan Pesanan</h3>
                <div class="order-item">
                    <img src="/api/placeholder/70/70" alt="Produk" class="order-item-image">
                    <div class="order-item-details">
                        <div class="order-item-name">Sofa Scandinavian 3 Seater</div>
                        <div class="order-item-variant">Warna: Abu-abu, Material: Fabric</div>
                        <div class="order-item-price">IDR 6.500.000</div>
                    </div>
                </div>
                <div class="order-item">
                    <img src="/api/placeholder/70/70" alt="Produk" class="order-item-image">
                    <div class="order-item-details">
                        <div class="order-item-name">Coffee Table Minimalis</div>
                        <div class="order-item-variant">Material: Kayu Jati, Finishing: Natural</div>
                        <div class="order-item-price">IDR 1.750.000</div>
                    </div>
                </div>
                <div class="order-totals">
                    <div class="order-total-row">
                        <div class="order-total-label">Subtotal</div>
                        <div class="order-total-value">IDR 8.250.000</div>
                    </div>
                    <div class="order-total-row">
                        <div class="order-total-label">Pengiriman</div>
                        <div class="order-total-value">IDR 500.000</div>
                    </div>
                    <div class="order-grand-total">
                        <div class="order-grand-total-label">Total</div>
                        <div class="order-grand-total-value">IDR 8.750.000</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Form konfirmasi pembayaran -->
        <div class="form-section">
            <h3>Konfirmasi Pembayaran</h3>
            <form id="payment-form" enctype="multipart/form-data">
                <input type="hidden" name="token" value="dummy_token">

                <div class="mb-3">
                    <label for="bank" class="form-label">Bank Pengirim</label>
                    <select id="bank" name="bank" class="form-select" required>
                        <option value="">Pilih Bank</option>
                        <option value="bca">BCA</option>
                        <option value="bni">BNI</option>
                        <option value="bri">BRI</option>
                        <option value="mandiri">Mandiri</option>
                        <option value="other">Lainnya</option>
                    </select>
                </div>

                <div class="mb-3" id="otherBankContainer" style="display: none;">
                    <label for="otherBank" class="form-label">Nama Bank Lainnya</label>
                    <input type="text" id="otherBank" name="other_bank" class="form-control"
                        placeholder="Masukkan nama bank">
                </div>

                <div class="mb-3">
                    <label for="accountNumber" class="form-label">Nomor Rekening Pengirim</label>
                    <input type="text" id="accountNumber" name="account_number" class="form-control"
                        placeholder="Masukkan nomor rekening" required>
                </div>

                <div class="mb-3">
                    <label for="accountName" class="form-label">Nama Pemilik Rekening</label>
                    <input type="text" id="accountName" name="account_name" class="form-control"
                        placeholder="Masukkan nama pemilik rekening" required>
                </div>

                <div class="mb-3">
                    <label for="amount" class="form-label">Jumlah Transfer (Rp)</label>
                    <input type="number" id="amount" name="amount" class="form-control"
                        placeholder="Masukkan jumlah transfer" value="8750000" required>
                </div>

                <div class="mb-4">
                    <label class="form-label">Bukti Pembayaran</label>
                    <div class="file-upload">
                        <label for="paymentProof" class="file-upload-label">
                            <div class="file-upload-icon">
                                <i class="fas fa-cloud-upload-alt"></i>
                                <span>Unggah Bukti Pembayaran</span>
                            </div>
                        </label>
                        <input type="file" id="paymentProof" name="payment_proof" accept="image/*" required>
                    </div>
                    <div id="filePreview" class="file-preview">
                        <i class="fas fa-file-image file-preview-icon"></i>
                        <div class="file-preview-details">
                            <div class="file-preview-name" id="fileName">bukti_transfer.jpg</div>
                            <div class="file-preview-size" id="fileSize">320 KB</div>
                        </div>
                        <i class="fas fa-times file-preview-remove" id="removeFile"></i>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary w-100">
                    <i class="fas fa-check-circle me-2"></i>Konfirmasi Pembayaran
                </button>
            </form>
        </div>
    </div>

    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script>
        // Show/hide other bank input
        document.getElementById('bank').addEventListener('change', function() {
            const otherBankContainer = document.getElementById('otherBankContainer');
            if (this.value === 'other') {
                otherBankContainer.style.display = 'block';
            } else {
                otherBankContainer.style.display = 'none';
            }
        });

        // File upload preview
        document.getElementById('paymentProof').addEventListener('change', function() {
            const filePreview = document.getElementById('filePreview');
            const fileName = document.getElementById('fileName');
            const fileSize = document.getElementById('fileSize');

            if (this.files && this.files[0]) {
                const file = this.files[0];
                fileName.textContent = file.name;

                // Format file size
                const fileSizeKB = Math.round(file.size / 1024);
                let fileSizeText;

                if (fileSizeKB >= 1024) {
                    fileSizeText = (fileSizeKB / 1024).toFixed(1) + ' MB';
                } else {
                    fileSizeText = fileSizeKB + ' KB';
                }

                fileSize.textContent = fileSizeText;
                filePreview.style.display = 'flex';

                // Change the upload label text
                document.querySelector('.file-upload-icon span').textContent = 'Ubah File';
                document.querySelector('.file-upload-icon i').classList.remove('fa-cloud-upload-alt');
                document.querySelector('.file-upload-icon i').classList.add('fa-exchange-alt');
            } else {
                filePreview.style.display = 'none';

                // Reset the upload label text
                document.querySelector('.file-upload-icon span').textContent = 'Unggah Bukti Pembayaran';
                document.querySelector('.file-upload-icon i').classList.remove('fa-exchange-alt');
                document.querySelector('.file-upload-icon i').classList.add('fa-cloud-upload-alt');
            }
        });

        // Remove file
        document.getElementById('removeFile').addEventListener('click', function() {
            const fileInput = document.getElementById('paymentProof');
            fileInput.value = '';
            document.getElementById('filePreview').style.display = 'none';

            // Reset the upload icon
            document.querySelector('.file-upload-icon span').textContent = 'Unggah Bukti Pembayaran';
            document.querySelector('.file-upload-icon i').classList.remove('fa-exchange-alt');
            document.querySelector('.file-upload-icon i').classList.add('fa-cloud-upload-alt');
        });

        // Copy to clipboard function
        function copyToClipboard(elementId) {
            const element = document.getElementById(elementId);
            const text = element.innerText;

            navigator.clipboard.writeText(text.replace(/\./g, '')).then(() => {
                // Show success message
                const successElement = document.getElementById(`copy-success-${elementId === 'account-number' ? 'account' : 'nominal'}`);
                successElement.style.display = 'flex';

                // Hide after 2 seconds
                setTimeout(() => {
                    successElement.style.display = 'none';
                }, 2000);
            });
        }

        // Form submission
        document.getElementById('payment-form').addEventListener('submit', function(e) {
            e.preventDefault();

            // Show loading state on button
            const submitButton = this.querySelector('button[type="submit"]');
            const originalText = submitButton.innerHTML;
            submitButton.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Memproses...';
            submitButton.disabled = true;

            // Simulate AJAX request with dummy response
            setTimeout(() => {
                // Reset button
                submitButton.innerHTML = originalText;
                submitButton.disabled = false;

                // Show success alert
                alert('Pembayaran berhasil dikonfirmasi! Terima kasih.');

                // Redirect would happen here in production
                // window.location.href = 'order_success.php?token=dummy_token';
            }, 2000);
        });

        function initCountdown() {
            const token = new URLSearchParams(window.location.search).get('token') || '';

            fetch(`/get-limit-payment?token=${token}`)
                .then(res => res.json())
                .then(data => {
                    if (data.status !== 'success') {
                        document.getElementById("countdown").innerHTML = `
                    <span class="text-danger">${data.message}</span>
                `;
                        return;
                    }

                    // Ambil deadline dari server sebagai string Jakarta
                    const deadlineStr = data.limit_payment; // Contoh: "2025-05-06 11:21:53"

                    // Pisahkan tanggal dan waktu
                    const deadlineJakarta = new Date(deadlineStr); // ISO format langsung bisa dipakai

                    if (isNaN(deadlineJakarta.getTime())) {
                        document.getElementById("countdown").innerHTML = `
        <span class="text-danger">Format waktu tidak valid</span>
    `;
                        return;
                    }

                    // Waktu sekarang
                    // const now = new Date();
                    // const totalTime = deadlineJakarta.getTime() - now.getTime();


                    // Buat objek Date sebagai waktu UTC berdasarkan waktu Jakarta
                    // const deadlineJakarta = new Date(Date.UTC(
                    //     parseInt(year),
                    //     parseInt(month) - 1,
                    //     parseInt(day),
                    //     parseInt(hour) - 7, // Koreksi -7 jam ke UTC
                    //     parseInt(minute),
                    //     parseInt(second)
                    // ));

                    // Waktu sekarang
                    const now = new Date();
                    const totalTime = deadlineJakarta.getTime() - now.getTime();

                    // Format untuk debugging
                    const jakartaOptions = {
                        timeZone: 'Asia/Jakarta',
                        hour12: false
                    };
                    const formattedNow = now.toLocaleString('en-US', jakartaOptions);
                    const formattedDeadline = deadlineJakarta.toLocaleString('en-US', jakartaOptions);

                    console.log(`Current time (Jakarta): ${formattedNow}`);
                    console.log(`Deadline (Jakarta): ${formattedDeadline}`);
                    console.log(`Time remaining: ${Math.floor(totalTime / 1000 / 60 / 60)} hours, ${Math.floor((totalTime / 1000 / 60) % 60)} minutes`);

                    updateCountdown();

                    const countdownInterval = setInterval(updateCountdown, 1000);

                    function updateCountdown() {
                        const currentTime = new Date().getTime();
                        const distance = deadlineJakarta.getTime() - currentTime;

                        if (distance <= 0) {
                            clearInterval(countdownInterval);
                            document.getElementById("countdown").innerHTML = `
                        <div class="timer-unit">
                            <span class="timer-digit text-danger">00</span>
                            <span class="timer-label">Jam</span>
                        </div>
                        <div class="timer-separator">:</div>
                        <div class="timer-unit">
                            <span class="timer-digit text-danger">00</span>
                            <span class="timer-label">Menit</span>
                        </div>
                        <div class="timer-separator">:</div>
                        <div class="timer-unit">
                            <span class="timer-digit text-danger">00</span>
                            <span class="timer-label">Detik</span>
                        </div>
                    `;
                            document.getElementById("progress-bar").style.width = "0%";

                            // Batalkan pesanan otomatis
                            fetch(`/get-batal-pesanan?token=${token}`)
                                .then(res => res.json())
                                .then(result => {
                                    alert(result.message);
                                });
                            return;
                        }

                        const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                        const seconds = Math.floor((distance % (1000 * 60)) / 1000);

                        document.getElementById("hours").textContent = String(hours).padStart(2, '0');
                        document.getElementById("minutes").textContent = String(minutes).padStart(2, '0');
                        document.getElementById("seconds").textContent = String(seconds).padStart(2, '0');

                        const progressPercentage = (distance / totalTime) * 100;
                        document.getElementById("progress-bar").style.width = progressPercentage + "%";

                        if (distance < 3600000) {
                            document.querySelectorAll(".timer-digit").forEach(digit => {
                                digit.classList.add("text-danger");
                            });
                        }
                    }
                })
                .catch(error => {
                    console.error("Error fetching deadline:", error);
                    document.getElementById("countdown").innerHTML = `
                <span class="text-danger">Error loading countdown timer</span>
            `;
                });
        }

        window.addEventListener('load', initCountdown);


        // HTML structure needed for this timer:
        /*
        <div id="countdown">
            <div class="timer-unit">
                <span id="hours" class="timer-digit">00</span>
                <span class="timer-label">Jam</span>
            </div>
            <div class="timer-separator">:</div>
            <div class="timer-unit">
                <span id="minutes" class="timer-digit">00</span>
                <span class="timer-label">Menit</span>
            </div>
            <div class="timer-separator">:</div>
            <div class="timer-unit">
                <span id="seconds" class="timer-digit">00</span>
                <span class="timer-label">Detik</span>
            </div>
        </div>
        <div class="progress">
            <div id="progress-bar" class="progress-bar" role="progressbar"></div>
        </div>
        */

        // Show file preview on page load for demo purposes
        window.addEventListener('load', function() {
            document.getElementById('filePreview').style.display = 'none';
        });
    </script>
</body>

</html>