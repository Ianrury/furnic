<?php
require_once __DIR__ . '/../../app/env.php';
$apiBaseUrl = env('API_BASE_URL');

?>
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

        .btn-disabled {
            background-color: #ccc;
            border-color: #ccc;
            cursor: not-allowed;
            pointer-events: none;
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
            <span class="order-number">Order #0</span>
            <span class="status-badge " id="payment-status">-</span>
        </div>

        <div class="payment-section">
            <!-- Jumlah yang harus dibayar dengan highlight -->
            <div class="payment-amount">
                <div class="payment-amount-label">Total Pembayaran</div>
                <div class="payment-amount-value" id="total-amount">0</div>
            </div>

            <!-- Informasi deadline pembayaran -->
            <div class="deadline-info">
                <i class="fas fa-clock deadline-icon"></i>
                <div class="deadline-text">
                    <div class="deadline-title">Batas Waktu Pembayaran</div>
                    <div class="deadline-time" id="countdown">
                        <div class="timer-unit">
                            <span id="hours" class="timer-digit">0</span>
                            <span class="timer-label">Jam</span>
                        </div>
                        <div class="timer-separator">:</div>
                        <div class="timer-unit">
                            <span id="minutes" class="timer-digit">0</span>
                            <span class="timer-label">Menit</span>
                        </div>
                        <div class="timer-separator">:</div>
                        <div class="timer-unit">
                            <span id="seconds" class="timer-digit">0</span>
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
                        <span id="nominal-transfer">-</span>
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
                        <div class="order-item-name">-</div>
                        <div class="order-item-variant">-</div>
                        <div class="order-item-price">IDR 0</div>
                    </div>
                </div>
                <div class="order-item">
                    <img src="/api/placeholder/70/70" alt="Produk" class="order-item-image">
                    <div class="order-item-details">
                        <div class="order-item-name">-</div>
                        <div class="order-item-variant">-</div>
                        <div class="order-item-price">IDR 0</div>
                    </div>
                </div>
                <div class="order-totals">
                    <div class="order-total-row">
                        <div class="order-total-label">Subtotal</div>
                        <div class="order-total-value">IDR -</div>
                    </div>
                    <div class="order-diskon-row">
                        <div class="order-diskon-label">Diskon</div>
                        <div class="order-diskon-value">IDR -</div>
                    </div>
                    <div class="order-grand-total">
                        <div class="order-grand-total-label">Total</div>
                        <div class="order-grand-total-value">IDR -</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Form konfirmasi pembayaran -->
        <div class="form-section">
            <h3>Konfirmasi Pembayaran</h3>
            <form id="payment-form" enctype="multipart/form-data">
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
                    <input type="text" id="amount" name="amount" class="form-control"
                        placeholder="Masukkan jumlah transfer" value="" required>
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

                <button type="submit" id="confirmPayment" class="btn btn-primary w-100 cek-bayar">
                    <i class="fas fa-check-circle me-2"></i>Konfirmasi Pembayaran
                </button>
            </form>
        </div>
    </div>

    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        const API_BASE_URL = "<?= $apiBaseUrl ?>";
    </script>
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


        // window.addEventListener('load', initCountdown);


        // Show file preview on page load for demo purposes
        window.addEventListener('load', function() {
            document.getElementById('filePreview').style.display = 'none';
        });
    </script>
    <script>
        $(document).ready(function() {
            const pathSegments = window.location.pathname.split('/');
            const token = pathSegments[pathSegments.length - 1] || '';

            // Tampilkan input nama bank jika pilih "Lainnya"
            $('#bank').on('change', function() {
                if ($(this).val() === 'other') {
                    $('#otherBankContainer').show();
                } else {
                    $('#otherBankContainer').hide();
                }
            });

            // Format input nominal dan validasi tidak melebihi subtotal
            const subtotalText = $('.order-total-value').text().trim();
            const subtotalValue = parseInt(subtotalText.replace(/[^0-9]/g, ''));

            $('#amount').on('input', function() {
                let value = $(this).val().replace(/\D/g, '');
                let numValue = parseInt(value || '0');

                if (numValue > subtotalValue) {
                    numValue = subtotalValue;
                    value = String(subtotalValue);

                    if (!$('#amount-error').length) {
                        $(this).after('<div id="amount-error" class="text-danger small mt-1">Jumlah transfer tidak boleh melebihi subtotal</div>');
                    }
                } else {
                    $('#amount-error').remove();
                }

                let formatted = numValue.toString().replace(/\B(?=(\d{3})+(?!\d))/g, '.');
                $(this).val(formatted);
            });

            // Validasi dan preview file bukti pembayaran
            $('#paymentProof').on('change', function() {
                const file = this.files[0];
                if (file) {
                    const fileName = file.name;
                    const fileSize = Math.round(file.size / 1024) + ' KB';
                    $('#fileName').text(fileName);
                    $('#fileSize').text(fileSize);
                    $('#filePreview').show();

                    const validExtensions = ['jpg', 'jpeg', 'png'];
                    const fileExtension = fileName.split('.').pop().toLowerCase();

                    if (!validExtensions.includes(fileExtension)) {
                        Swal.fire('Format File Tidak Valid', 'Hanya file JPG dan PNG yang diperbolehkan', 'error');
                        $(this).val('');
                        $('#filePreview').hide();
                    }
                } else {
                    $('#filePreview').hide();
                }
            });

            // Hapus file bukti
            $('#removeFile').on('click', function() {
                $('#paymentProof').val('');
                $('#filePreview').hide();
            });

            // Submit form
            $('#payment-form').on('submit', function(e) {
                e.preventDefault();

                const amountValue = parseInt($('#amount').val().replace(/\./g, '') || '0');
                if (amountValue > subtotalValue) {
                    Swal.fire('Error', 'Jumlah transfer tidak boleh melebihi subtotal', 'error');
                    return;
                }

                const file = $('#paymentProof')[0].files[0];
                if (file) {
                    const validExtensions = ['jpg', 'jpeg', 'png'];
                    const fileExtension = file.name.split('.').pop().toLowerCase();

                    if (!validExtensions.includes(fileExtension)) {
                        Swal.fire('Error', 'Hanya file JPG dan PNG yang diperbolehkan', 'error');
                        return;
                    }
                }

                Swal.fire({
                    title: 'Konfirmasi Pembayaran?',
                    text: "Pastikan semua data sudah benar!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Ya, kirim!',
                    cancelButtonText: 'Batal',
                    reverseButtons: true
                }).then((result) => {
                    if (result.isConfirmed) {
                        const form = $('#payment-form')[0];
                        const formData = new FormData(form);

                        if ($('#bank').val() === 'other') {
                            formData.set('bank', $('#otherBank').val());
                        }

                        formData.set('amount', amountValue);

                        $.ajax({
                            url: API_BASE_URL + `/store-pembayaran/${token}`,
                            type: 'POST',
                            data: formData,
                            contentType: false,
                            processData: false,
                            cache: false,
                            beforeSend: function() {
                                $('#confirmPayment').prop('disabled', true).text('Mengirim...');
                            },
                            success: function(response) {
                                Swal.fire({
                                    title: 'Berhasil!',
                                    text: 'Pembayaran telah dikirim.',
                                    icon: 'success',
                                    confirmButtonText: 'OK'
                                }).then(() => {
                                    window.location.href = '/product';
                                });

                                $('#payment-form')[0].reset();
                                $('#otherBankContainer').hide();
                            },
                            error: function(xhr) {
                                Swal.fire('Gagal!', 'Terjadi kesalahan saat mengirim pembayaran.', 'error');
                                $('#confirmPayment').prop('disabled', false).html('<i class="fas fa-check-circle me-2"></i>Konfirmasi Pembayaran');
                            }
                        });
                    }
                });
            });
        });
    </script>


    <script>
        // Fungsi untuk format mata uang Rupiah
        function formatRupiah(angka) {
            return new Intl.NumberFormat('id-ID', {
                style: 'currency',
                currency: 'IDR',
                minimumFractionDigits: 0,
                maximumFractionDigits: 0
            }).format(angka);
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
                    hari,
                    jam,
                    menit,
                    detik,
                    formatted: hari > 0 ?
                        `${hari}d ${jam}j ${menit}m` : `${jam}j ${menit}m ${detik}d`,
                    isExpired: false
                };
            }
            return {
                total: 0,
                hari: 0,
                jam: 0,
                menit: 0,
                detik: 0,
                formatted: 'Timeout',
                isExpired: true
            };
        }


        // Fungsi untuk memperbarui tampilan countdown timer
        function updateCountdown(limitPembayaran) {
            const countdownElement = document.getElementById('countdown');
            const progressBarElement = document.getElementById('progress-bar');
            const hoursElement = document.getElementById('hours');
            const minutesElement = document.getElementById('minutes');
            const secondsElement = document.getElementById('seconds');

            const totalTime = 24 * 60 * 60 * 1000;
            let interval;

            const updateTimer = () => {
                const timeLeft = hitungSisaWaktuPembayaran(limitPembayaran);

                if (timeLeft.isExpired) {
                    hoursElement.textContent = '00';
                    minutesElement.textContent = '00';
                    secondsElement.textContent = '00';
                    progressBarElement.style.width = '0%';

                    countdownElement.classList.add('expired');

                    const confirmButton = document.getElementById('confirmPayment');
                    if (confirmButton) {
                        confirmButton.disabled = true;
                        confirmButton.classList.add('btn-disabled');
                        confirmButton.innerHTML = `<i class="fas fa-times-circle me-2"></i>Waktu Habis`;
                    }

                    clearInterval(interval);
                    return;
                }

                // Update tampilan timer
                hoursElement.textContent = String(timeLeft.jam).padStart(2, '0');
                minutesElement.textContent = String(timeLeft.menit).padStart(2, '0');
                secondsElement.textContent = String(timeLeft.detik).padStart(2, '0');

                // Update progress bar
                const progressPercentage = (timeLeft.total / totalTime) * 100;
                progressBarElement.style.width = `${progressPercentage}%`;

                if (progressPercentage < 25) {
                    progressBarElement.style.backgroundColor = '#FF5252'; // Merah
                } else if (progressPercentage < 50) {
                    progressBarElement.style.backgroundColor = '#FFC107'; // Kuning
                } else {
                    progressBarElement.style.backgroundColor = '#4CAF50'; // Hijau
                }
            };

            // Jalankan pertama kali
            updateTimer();

            // Set interval tiap detik
            interval = setInterval(updateTimer, 1000);

            return interval;
        }


        // Fungsi untuk menampilkan ringkasan pesanan
        // Fungsi untuk menampilkan ringkasan pesanan
        function renderOrderSummary(orderData) {
            const orderSummaryElement = document.querySelector('.order-summary');
            const orderItemsContainer = orderSummaryElement.querySelector(':scope > h3').nextElementSibling;
            // Hapus item-item contoh yang sudah ada
            const existingItems = orderSummaryElement.querySelectorAll('.order-item');
            existingItems.forEach(item => item.remove());

            // Tambahkan item-item produk dari data
            orderData.products.forEach(product => {
                const orderItemElement = document.createElement('div');
                orderItemElement.className = 'order-item';
                orderItemElement.innerHTML = `
            <img src="${product.foto}" alt="${product.nama_product}" class="order-item-image">
            <div class="order-item-details">
                <div class="order-item-name">${product.nama_product}</div>
                <div class="order-item-variant">
                    ${product.motif_product ? 'Motif: ' + product.motif_product + ', ' : ''}
                    ${product.material_product ? 'Material: ' + product.material_product : ''}
                    ${product.qty_pemesanan > 1 ? ` (${product.qty_pemesanan} item)` : ''}
                </div>
                <div class="order-item-price">${formatRupiah(product.total_harga)}</div>
            </div>
        `;
                orderSummaryElement.insertBefore(orderItemElement, orderSummaryElement.querySelector('.order-totals'));
            });

            // Update total-total
            const totalsContainer = orderSummaryElement.querySelector('.order-totals');
            totalsContainer.innerHTML = `
        <div class="order-total-row">
            <div class="order-total-label">Subtotal</div>
            <div class="order-total-value">${formatRupiah(orderData.harga_sebelum_diskon || orderData.total_belanja + orderData.total_diskon_pemesanan)}</div>
        </div>
        ${orderData.total_diskon_pemesanan > 0 ? `
        <div class="order-total-row">
            <div class="order-total-label">Diskon</div>
            <div class="order-total-value">${formatRupiah(orderData.total_diskon_pemesanan)}</div>
        </div>
        ` : ''}
        <div class="order-grand-total">
            <div class="order-grand-total-label">Total</div>
            <div class="order-grand-total-value">${formatRupiah(orderData.total_belanja)}</div>
        </div>
     `;

            document.getElementById('total-amount').textContent = formatRupiah(orderData.total_belanja);
            document.getElementById('nominal-transfer').textContent = formatRupiah(orderData.total_belanja);
            // document.getElementById('amount').value(orderData.total_belanja);


            // Tambahkan nomor pesanan
            const orderNumberElement = document.createElement('div');
            orderNumberElement.className = 'order-number';
            // orderNumberElement.innerHTML = `<span>Nomor Pesanan:</span> ${orderData.nomor_pesanan}`;
            orderSummaryElement.insertBefore(orderNumberElement, orderSummaryElement.querySelector('h3').nextSibling);
        }

        // Fungsi utama untuk inisialisasi halaman pembayaran
        function initializePaymentPage() {
            // Ambil token dari path URL terakhir
            const pathSegments = window.location.pathname.split('/');
            const token = pathSegments[pathSegments.length - 1] || '';

            if (!token) {
                console.error('Token tidak ditemukan di URL.');
                // Tampilkan pesan error ke user
                document.querySelector('.order-summary').innerHTML = `
            <div class="error-message">
                Token pembayaran tidak valid. Silakan periksa URL atau hubungi customer service.
            </div>
        `;
                return;
            }

            // Fetch data pembayaran dari API
            fetch(API_BASE_URL + `/pembayaran/${token}`)
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Gagal mengambil data pembayaran.');
                    }
                    return response.json();
                })
                .then(result => {
                    console.log(result);
                    // Ambil elemen input
                    const amountInput = document.getElementById('amount');

                    // Ambil nilai total belanja
                    const total = result.data.total_belanja;

                    // Format angka ke format rupiah dengan titik
                    const formatted = total.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");

                    // Set nilai input
                    amountInput.value = formatted;

                    // Buat input tidak bisa diedit atau diklik
                    amountInput.readOnly = true; // Tidak bisa diketik
                    amountInput.style.pointerEvents = 'none'; // Tidak bisa diklik/focus
                    amountInput.style.backgroundColor = '#f1f1f1'; // Optional: ubah warna agar terlihat disabled
                    // Update status and order number
                    if (result.status === 'success' && result.data) {
                        // Check if order is canceled or already reviewed
                        if (result.data.is_batal == 1 || result.data.is_review == 1) {
                            // Show modal alert for canceled or reviewed
                            showStatusModal(result.data);
                            return; // Stop further processing
                        }

                        // Check if status is "konfirmasi"
                        if (result.data.status === 'konfirmasi') {
                            // Show payment confirmation modal
                            showStatusModal(result.data);
                            return; // Stop further processing
                        }

                        // Continue with normal processing if not canceled/reviewed/confirmed
                        // Render ringkasan pesanan
                        renderOrderSummary(result.data);

                        // Inisialisasi countdown
                        updateCountdown(result.data.limit_payment);

                        // Update order number
                        const orderNumberElement = document.querySelector('.order-number');
                        if (orderNumberElement) {
                            orderNumberElement.textContent = `Order #${result.data.nomor_pesanan}`;
                        }

                        // Update status pesanan jika ada
                        if (result.data.status) {
                            const statusElement = document.getElementById('payment-status');
                            if (statusElement) {
                                // Update existing status element
                                statusElement.className = 'status-badge ' + result.data.status;
                                statusElement.textContent = result.data.status === 'waiting' ? 'Menunggu Pembayaran' : result.data.status;
                            }

                            // Nonaktifkan tombol konfirmasi jika status lain
                            const confirmButton = document.querySelector('.cek-bayar');
                            if (confirmButton && result.data.status !== 'waiting') {
                                confirmButton.disabled = true;
                                confirmButton.classList.add('disabled');
                                confirmButton.title = 'Status pembayaran sudah berubah';
                            }
                        }
                    } else {
                        throw new Error(result.message || 'Gagal memuat data pembayaran.');
                    }
                })

            // Add this function to show the modal
            function showStatusModal(data) {
                // Create modal HTML if it doesn't exist
                if (!document.getElementById('statusModal')) {
                    const modalHTML = `
        <div class="modal fade" id="statusModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="statusModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" style="max-width: 280px;">
                <div class="modal-content border-0 shadow-lg rounded-4">
                    <div class="modal-body text-center p-4">
                        <div class="status-icon mb-3">
                            <i class="fas fa-info-circle fa-3x text-primary"></i>
                        </div>
                        <h5 id="statusMessage" class="mb-2 fw-bold"></h5>
                        <p id="statusDetail" class="text-muted small mb-3"></p>
                        <div class="order-info mb-3">
                            <span class="badge bg-light text-dark">Order #<span id="modalOrderNumber"></span></span>
                        </div>
                        <button type="button" class="btn btn-primary w-100" id="backToProductBtn">Kembali ke Produk</button>
                    </div>
                </div>
            </div>
        </div>
        `;

                    // Append modal to body
                    const modalContainer = document.createElement('div');
                    modalContainer.innerHTML = modalHTML;
                    document.body.appendChild(modalContainer.firstElementChild);
                }

                // Set modal content based on status
                const modalOrderNumber = document.getElementById('modalOrderNumber');
                const statusMessage = document.getElementById('statusMessage');
                const statusDetail = document.getElementById('statusDetail');
                const statusIcon = document.querySelector('.status-icon i');
                const backButton = document.getElementById('backToProductBtn');

                if (modalOrderNumber) modalOrderNumber.textContent = data.nomor_pesanan;

                if (data.is_batal == 1) {
                    // Case: Pesanan dibatalkan
                    if (statusMessage) statusMessage.textContent = 'Pesanan Dibatalkan';
                    if (statusDetail) statusDetail.textContent = 'Pesanan ini telah dibatalkan dan tidak dapat diproses lebih lanjut.';
                    if (statusIcon) {
                        statusIcon.className = 'fas fa-times-circle fa-3x text-danger';
                    }
                } else if (data.is_review == 1) {
                    // Case: Pesanan sudah direview
                    if (statusMessage) statusMessage.textContent = 'Pesanan Sudah Direview';
                    if (statusDetail) statusDetail.textContent = 'Anda telah memberikan review untuk pesanan ini.';
                    if (statusIcon) {
                        statusIcon.className = 'fas fa-check-circle fa-3x text-success';
                    }
                } else if (data.status === 'konfirmasi') {
                    // Case: Pesanan sudah dikonfirmasi pembayarannya
                    if (statusMessage) statusMessage.textContent = 'Pembayaran Dikonfirmasi';
                    if (statusDetail) statusDetail.textContent = 'Anda sudah membayar. Silahkan menunggu konfirmasi dari admin.';
                    if (statusIcon) {
                        statusIcon.className = 'fas fa-money-check-alt fa-3x text-success';
                    }
                }

                // Show the modal with animation
                const statusModal = new bootstrap.Modal(document.getElementById('statusModal'), {
                    backdrop: 'static',
                    keyboard: false
                });
                statusModal.show();

                // Add entrance animation
                const modalContent = document.querySelector('.modal-content');
                if (modalContent) {
                    modalContent.classList.add('animate__animated', 'animate__zoomIn');
                    modalContent.addEventListener('animationend', function() {
                        modalContent.classList.remove('animate__animated', 'animate__zoomIn');
                    });
                }

                // Automatically redirect after a short delay
                setTimeout(() => {
                    window.location.href = '/product';
                }, 3000);

                // Add click event for immediate redirect
                if (backButton) {
                    backButton.addEventListener('click', function() {
                        window.location.href = '/product';
                    });
                }
            }

            // Add necessary CSS for animations
            (function() {
                const style = document.createElement('style');
                style.textContent = `
        @keyframes zoomIn {
            from {
                opacity: 0;
                transform: scale3d(0.3, 0.3, 0.3);
            }
            50% {
                opacity: 1;
            }
        }
        
        .animate__animated {
            animation-duration: 0.5s;
            animation-fill-mode: both;
        }
        
        .animate__zoomIn {
            animation-name: zoomIn;
        }
        
        #statusModal .modal-content {
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
        }
        
        #statusModal .status-icon {
            display: inline-block;
            width: 70px;
            height: 70px;
            line-height: 70px;
            border-radius: 50%;
            background-color: rgba(0,123,255,0.1);
            margin-bottom: 1rem;
        }
        
        #statusModal #backToProductBtn {
            border-radius: 8px;
            font-weight: 600;
            padding: 8px;
        }
        
        #statusModal .badge {
            padding: 6px 12px;
            border-radius: 20px;
            font-weight: normal;
        }
        
        #statusModal {
            z-index: 2000;
        }
    `;
                document.head.appendChild(style);
            })()
            .catch(error => {
                console.error('Terjadi kesalahan:', error);
                // Tampilkan pesan error ke user
                document.querySelector('.order-summary').innerHTML = `
                    <div class="error-message">
                        ${error.message || 'Terjadi kesalahan saat memuat data pembayaran.'}
                    </div>
                `;
            });

        }

        // Jalankan fungsi inisialisasi saat dokumen selesai dimuat
        document.addEventListener('DOMContentLoaded', initializePaymentPage);
    </script>
</body>

</html>