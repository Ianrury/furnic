<?php
require_once __DIR__ . '/../../app/env.php';
$apiBaseUrl = env('API_BASE_URL');

?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Detail - PT Furnice Furnishing Indonesia</title>

    <!-- favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/logo/favicon.png">
    <base href="/">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css">

    <!-- Font Awesome untuk ikon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
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

        .container-review {
            max-width: 650px;
            margin: 0 auto;
        }

        .card-review {
            border: none;
            border-radius: 15px;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
        }

        .card-header-review {
            background-color: #6c5ce7;
            color: white;
            border-radius: 15px 15px 0 0 !important;
            font-weight: 600;
            padding: 1rem;
            text-align: center;
        }

        .card-body-review {
            padding: 1.5rem;
        }

        .btn-primary-review {
            background-color: #6c5ce7;
            border-color: #6c5ce7;
            width: 100%;
            padding: 0.6rem;
        }

        .btn-primary-review:hover {
            background-color: #5f50e6;
            border-color: #5f50e6;
        }

        .btn-secondary-review {
            background-color: transparent;
            border-color: #6c757d;
            color: #6c757d;
            width: 100%;
            padding: 0.6rem;
        }

        /* Rating stars styling */
        .rating-review {
            display: flex;
            flex-direction: row-reverse;
            justify-content: center;
            gap: 0.5rem;
        }

        .rating-review input {
            display: none;
        }

        .rating-review label {
            cursor: pointer;
            font-size: 2.5rem;
            color: #ccc;
            transition: color 0.3s;
        }

        .rating-review input:checked~label,
        .rating-review label:hover,
        .rating-review label:hover~label {
            color: #ffc107;
        }

        /* Image upload styling */
        .preview-container-review {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 10px;
        }

        .preview-item-review {
            position: relative;
            width: 100px;
            height: 100px;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .preview-item-review img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .preview-remove-review {
            position: absolute;
            top: 5px;
            right: 5px;
            background: rgba(0, 0, 0, 0.6);
            color: white;
            border-radius: 50%;
            width: 22px;
            height: 22px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            font-size: 14px;
        }

        .custom-file-upload-review {
            border: 2px dashed #ccc;
            border-radius: 10px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 25px;
            cursor: pointer;
            width: 100px;
            height: 100px;
            text-align: center;
            color: #6c757d;
            transition: all 0.3s;
        }

        .custom-file-upload-review:hover {
            border-color: #6c5ce7;
            color: #6c5ce7;
        }

        .toast-review {
            background-color: #fff;
            border-left: 4px solid #6c5ce7;
        }

        .toast-header-review {
            background-color: #f8f9fa;
            color: #6c5ce7;
            font-weight: 600;
        }

        .mb-review {
            margin-bottom: 1.5rem;
        }

        .form-label-review {
            font-weight: 600;
            margin-bottom: 0.5rem;
            display: block;
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
            <h1>Halaman Detail</h1>
            <span class="order-number">Order #FF283759</span>
            <span class="status-badge " id="payment-status">Menunggu Pembayaran</span>
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
                    <div class="order-diskon-row">
                        <div class="order-diskon-label">Diskon</div>
                        <div class="order-diskon-value">IDR 500.000</div>
                    </div>
                    <div class="order-grand-total">
                        <div class="order-grand-total-label">Total</div>
                        <div class="order-grand-total-value">IDR 8.750.000</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container py-5">
        <div class="container-review">
            <div class="card-review">
                <div class="card-body-review">
                    <form id="reviewForm" class="needs-validation" novalidate>
                        <input type="hidden" id="productId" name="productId" value="1">

                        <!-- Rating stars -->
                        <div class="mb-review text-center">
                            <label class="form-label-review mb-3">Berikan Penilaian</label>
                            <div class="rating-review mb-2">
                                <input type="radio" name="rating" id="star5" value="5" required>
                                <label for="star5" class="bi bi-star-fill"></label>
                                <input type="radio" name="rating" id="star4" value="4">
                                <label for="star4" class="bi bi-star-fill"></label>
                                <input type="radio" name="rating" id="star3" value="3">
                                <label for="star3" class="bi bi-star-fill"></label>
                                <input type="radio" name="rating" id="star2" value="2">
                                <label for="star2" class="bi bi-star-fill"></label>
                                <input type="radio" name="rating" id="star1" value="1">
                                <label for="star1" class="bi bi-star-fill"></label>
                            </div>
                            <div class="invalid-feedback">
                                Silakan berikan penilaian bintang
                            </div>
                        </div>

                        <!-- Comment textarea -->
                        <div class="mb-review">
                            <label for="comment" class="form-label-review">Tulis Ulasan</label>
                            <textarea class="form-control" id="comment" name="comment" rows="4"
                                placeholder="Bagikan pengalaman Anda dengan produk ini..." required></textarea>
                            <div class="invalid-feedback">
                                Silakan tulis ulasan Anda
                            </div>
                        </div>

                        <!-- Photo upload -->
                        <div class="mb-review">
                            <label class="form-label-review">Tambahkan Foto (minimal 1 foto)</label>
                            <div>
                                <div class="preview-container-review">
                                    <label for="photo-upload" class="custom-file-upload-review">
                                        <i class="bi bi-camera fs-3"></i>
                                    </label>
                                    <input type="file" id="photo-upload" accept="image/jpeg,image/png" multiple style="display: none;" required>
                                </div>
                                <small class="text-muted mt-2 d-block">Maksimal 3 foto (JPG/PNG)</small>
                            </div>
                        </div>

                        <!-- Submit buttons -->
                        <div class="d-grid gap-2 mt-4">
                            <button type="submit" class="btn btn-primary-review">Kirim Ulasan</button>
                            <button type="button" class="btn btn-secondary-review" onclick="window.history.back()">Kembali</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Toast notification -->
    <div class="toast-container position-fixed bottom-0 end-0 p-3">
        <div id="reviewToast" class="toast toast-review" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header toast-header-review">
                <strong class="me-auto">Notifikasi</strong>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                Ulasan berhasil dikirim! Terima kasih atas feedback Anda.
            </div>
        </div>
    </div>

    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const API_BASE_URL = "<?= $apiBaseUrl ?>";
    </script>
    <script>
        // Array to store uploaded photos
        let uploadedPhotos = [];

        // Add event listeners when DOM is ready
        document.addEventListener('DOMContentLoaded', function() {
            // Set up form validation
            setupFormValidation();

            // Set up photo upload functionality
            setupPhotoUpload();

            // Initial setup for photo preview container
            initPhotoPreviewContainer();
        });

        // Setup photo upload functionality
        function setupPhotoUpload() {
            document.getElementById('photo-upload').addEventListener('change', handleFileSelect);
        }

        // Initialize photo preview container
        function initPhotoPreviewContainer() {
            const container = document.querySelector('.preview-container-review');
            if (!container.querySelector('label.custom-file-upload-review')) {
                // Create and add the upload button if it doesn't exist
                const uploadLabel = document.createElement('label');
                uploadLabel.className = 'custom-file-upload-review';
                uploadLabel.setAttribute('for', 'photo-upload');

                const uploadIcon = document.createElement('i');
                uploadIcon.className = 'bi bi-camera';
                uploadIcon.classList.add('fs-3');
                uploadLabel.appendChild(uploadIcon);

                container.appendChild(uploadLabel);
            }
        }

        // Handle file selection
        function handleFileSelect(event) {
            const files = event.target.files;
            if (!files || !files.length) return;

            // Limit to 3 photos
            if (uploadedPhotos.length + files.length > 3) {
                alert('Maksimal 3 foto yang dapat diunggah');
                // Reset the file input to enable reselection
                event.target.value = '';
                return;
            }

            for (let i = 0; i < files.length; i++) {
                const file = files[i];
                if (!file.type.match('image/jpeg') && !file.type.match('image/png')) {
                    alert('Hanya file JPG atau PNG yang diperbolehkan');
                    continue;
                }

                const reader = new FileReader();
                reader.onload = function(e) {
                    uploadedPhotos.push({
                        file: file,
                        preview: e.target.result
                    });
                    updatePhotoPreview();
                };
                reader.readAsDataURL(file);
            }

            // Reset the file input to enable reselection
            event.target.value = '';
        }

        // Update photo preview
        function updatePhotoPreview() {
            const container = document.querySelector('.preview-container-review');

            // Clear existing previews
            container.innerHTML = '';

            // Create and add the upload button first
            const uploadLabel = document.createElement('label');
            uploadLabel.className = 'custom-file-upload-review';
            uploadLabel.setAttribute('for', 'photo-upload');

            const uploadIcon = document.createElement('i');
            uploadIcon.className = 'bi bi-camera';
            uploadIcon.classList.add('fs-3');
            uploadLabel.appendChild(uploadIcon);

            container.appendChild(uploadLabel);

            // Add photo previews
            uploadedPhotos.forEach((photo, index) => {
                const previewItem = document.createElement('div');
                previewItem.className = 'preview-item-review';

                const img = document.createElement('img');
                img.src = photo.preview;
                img.alt = "Preview foto " + (index + 1);

                const removeBtn = document.createElement('div');
                removeBtn.className = 'preview-remove-review';
                removeBtn.innerHTML = '×';
                removeBtn.onclick = function() {
                    removePhoto(index);
                };

                previewItem.appendChild(img);
                previewItem.appendChild(removeBtn);
                container.appendChild(previewItem);
            });
        }

        // Remove photo at specific index
        function removePhoto(index) {
            if (index >= 0 && index < uploadedPhotos.length) {
                uploadedPhotos.splice(index, 1);
                updatePhotoPreview();
            }
        }

        // Setup form validation
        function setupFormValidation() {
            const form = document.getElementById('reviewForm');

            form.addEventListener('submit', function(event) {
                event.preventDefault();
                event.stopPropagation();

                if (form.checkValidity()) {
                    submitReview();
                }

                form.classList.add('was-validated');
            });
        }

        // Get token from URL
        function getToken() {
            // Assume token is passed in the URL as a parameter or part of the path
            const pathArray = window.location.pathname.split('/');
            const token = pathArray[pathArray.length - 1];
            return token;
        }

        // Submit review to API
        function submitReview() {
            const productId = document.getElementById('productId').value;
            const ratingElement = document.querySelector('input[name="rating"]:checked');

            if (!ratingElement) {
                alert('Silakan berikan penilaian bintang');
                return;
            }

            const rating = ratingElement.value;
            const comment = document.getElementById('comment').value;
            const token = getToken();

            // Create FormData for API submission
            const formData = new FormData();
            formData.append('productId', productId);
            formData.append('rating', rating);
            formData.append('comment', comment);

            // Add photos to FormData
            uploadedPhotos.forEach((photo, index) => {
                formData.append(`photo[${index}]`, photo.file);
            });

            toggleLoadingState(true);

            fetch(`${API_BASE_URL}/review/${token}`, {
                    method: 'POST',
                    body: formData,
                })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Gagal mengirim ulasan');
                    }
                    return response.json();
                })
                .then(data => {
                    showToast('Ulasan berhasil dibuat');

                    setTimeout(() => {
                        resetForm();


                        setTimeout(() => {
                            window.location.href = '/';
                        }, 3000);
                    }, 1500);
                })
                .catch(error => {
                    console.error('Error:', error);
        
                    showToast('Gagal mengirim ulasan. Silakan coba lagi.', true);
                })
                .finally(() => {
                    toggleLoadingState(false);
                });
        }


        function showToast(message, isError = false) {

            let toastElement = document.getElementById('reviewToast');

            if (!toastElement) {
                toastElement = document.createElement('div');
                toastElement.id = 'reviewToast';
                toastElement.className = 'toast align-items-center position-fixed bottom-0 end-0 m-3';
                toastElement.setAttribute('role', 'alert');
                toastElement.setAttribute('aria-live', 'assertive');
                toastElement.setAttribute('aria-atomic', 'true');

                const toastBody = document.createElement('div');
                toastBody.className = 'toast-body';

                toastElement.appendChild(toastBody);
                document.body.appendChild(toastElement);
            }

            // Set toast content and show it
            const toastBody = toastElement.querySelector('.toast-body');
            toastBody.textContent = message;


            if (isError) {
                toastElement.classList.add('bg-danger', 'text-white');
                toastElement.classList.remove('bg-success');
            } else {
                toastElement.classList.add('bg-success', 'text-white');
                toastElement.classList.remove('bg-danger');
            }

            const toast = new bootstrap.Toast(toastElement, {
                delay: 3000
            });
            toast.show();
        }

        function toggleLoadingState(isLoading) {
            const submitBtn = document.querySelector('.btn-primary-review');
            if (isLoading) {
                submitBtn.disabled = true;
                submitBtn.innerHTML = `<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Mengirim...`;
            } else {
                submitBtn.disabled = false;
                submitBtn.innerHTML = 'Kirim Ulasan';
            }
        }

 
        function resetForm() {
            const form = document.getElementById('reviewForm');
            form.reset();
            form.classList.remove('was-validated');

            uploadedPhotos = [];
            updatePhotoPreview();
        }
    </script>
    <script>

        document.getElementById('bank').addEventListener('change', function() {
            const otherBankContainer = document.getElementById('otherBankContainer');
            if (this.value === 'other') {
                otherBankContainer.style.display = 'block';
            } else {
                otherBankContainer.style.display = 'none';
            }
        });


        document.getElementById('paymentProof').addEventListener('change', function() {
            const filePreview = document.getElementById('filePreview');
            const fileName = document.getElementById('fileName');
            const fileSize = document.getElementById('fileSize');

            if (this.files && this.files[0]) {
                const file = this.files[0];
                fileName.textContent = file.name;


                const fileSizeKB = Math.round(file.size / 1024);
                let fileSizeText;

                if (fileSizeKB >= 1024) {
                    fileSizeText = (fileSizeKB / 1024).toFixed(1) + ' MB';
                } else {
                    fileSizeText = fileSizeKB + ' KB';
                }

                fileSize.textContent = fileSizeText;
                filePreview.style.display = 'flex';

    
                document.querySelector('.file-upload-icon span').textContent = 'Ubah File';
                document.querySelector('.file-upload-icon i').classList.remove('fa-cloud-upload-alt');
                document.querySelector('.file-upload-icon i').classList.add('fa-exchange-alt');
            } else {
                filePreview.style.display = 'none';


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
            // Tampilkan input nama bank jika pilih "Lainnya"
            $('#bank').on('change', function() {
                if ($(this).val() === 'other') {
                    $('#otherBankContainer').show();
                } else {
                    $('#otherBankContainer').hide();
                }
            });

            // Format input amount saat diketik
            $('#amount').on('input', function() {
                let value = $(this).val().replace(/\D/g, '');
                let formatted = value.replace(/\B(?=(\d{3})+(?!\d))/g, '.');
                $(this).val(formatted);
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
            orderSummaryElement.insertBefore(orderNumberElement, orderSummaryElement.querySelector('h3').nextSibling);
        }


        function initializePaymentPage() {
 
            const pathSegments = window.location.pathname.split('/');
            const token = pathSegments[pathSegments.length - 1] || '';

            if (!token) {
                console.error('Token tidak ditemukan di URL.');
                document.querySelector('.order-summary').innerHTML = `
            <div class="error-message">
                Token pembayaran tidak valid. Silakan periksa URL atau hubungi customer service.
            </div>
         `;
                return;
            }


            fetch(API_BASE_URL + `/pembayaran/${token}`)
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Gagal mengambil data pembayaran.');
                    }
                    return response.json();
                })
                .then(result => {

                    if (result.status === 'success' && result.data) {
    
                        renderOrderSummary(result.data);
                        if (result.data.is_review) {
                            window.location.href = '/'
                        }
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

                            // Nonaktifkan tombol konfirmasi jika status adalah "konfirmasi"
                            const confirmButton = document.querySelector('.cek-bayar');
                            const deadlineInfo = document.querySelector('.deadline-info');
                            const bankinfo = document.querySelector('.bank-info');
                            if (deadlineInfo && bankinfo) {
                                deadlineInfo.style.display = 'none';
                                bankinfo.style.display = 'none';
                                // confirmButton.disabled = result.data.status === 'waiting';
                            }

                        }
                    } else {
                        throw new Error(result.message || 'Gagal memuat data pembayaran.');
                    }
                })
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