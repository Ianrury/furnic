<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Pembayaran</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 0;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .header {
            background-color: #1A3385;
            color: white;
            text-align: center;
            padding: 25px 20px;
            position: relative;
        }

        .header-accent {
            height: 5px;
            background: #F54712;
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
        }

        .logo {
            max-width: 120px;
            height: auto;
            margin-bottom: 15px;
        }

        .header h1 {
            margin: 0;
            font-size: 28px;
            font-weight: 600;
            color: white;
        }

        .header p {
            margin: 10px 0 0;
            font-size: 16px;
            opacity: 0.9;
        }

        .content {
            padding: 30px 25px;
        }

        h2 {
            color: #1A3385;
            border-bottom: 2px solid #F54712;
            padding-bottom: 10px;
            margin-top: 30px;
            font-size: 20px;
        }

        .order-details {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 6px;
            margin: 20px 0;
            border-left: 4px solid #1A3385;
        }

        .order-number {
            background-color: #1A3385;
            color: white;
            padding: 8px 15px;
            border-radius: 4px;
            display: inline-block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        .product-item {
            border-bottom: 1px solid #eaeaea;
            padding: 15px 0;
            display: flex;
            justify-content: space-between;
        }

        .product-item:last-child {
            border-bottom: none;
        }

        .product-name {
            font-weight: 600;
            color: #1A3385;
        }

        .product-qty {
            background-color: #F54712;
            color: white;
            padding: 2px 8px;
            border-radius: 12px;
            font-size: 14px;
            margin-left: 8px;
        }

        .product-price {
            text-align: right;
        }

        .discount {
            color: #F54712;
            font-weight: 500;
        }

        .summary {
            margin-top: 20px;
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 6px;
            border-left: 4px solid #F54712;
        }

        .total-row {
            display: flex;
            justify-content: space-between;
            padding: 8px 0;
            font-weight: 500;
        }

        .total-divider {
            border-top: 1px dashed #ddd;
            margin: 10px 0;
        }

        .final-total-row {
            display: flex;
            justify-content: space-between;
            padding: 15px 0 5px;
            font-weight: 700;
            font-size: 18px;
        }

        .total-price {
            color: #F54712;
            font-size: 20px;
        }

        .shipping-info {
            margin: 20px 0;
            padding: 20px;
            background-color: #f8f9fa;
            border-radius: 6px;
            border-left: 4px solid #1A3385;
        }

        .address-box {
            background-color: white;
            border: 1px dashed #1A3385;
            padding: 12px;
            border-radius: 4px;
            margin-top: 10px;
        }

        .cta-button {
            display: block;
            background: linear-gradient(to right, #F54712, #ff7846);
            color: white;
            font-weight: bold;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
            border-radius: 6px;
            margin: 30px auto;
            max-width: 250px;
            box-shadow: 0 4px 8px rgba(245, 71, 18, 0.2);
            transition: all 0.3s ease;
        }

        .timeline {
            display: flex;
            justify-content: space-between;
            margin: 30px 0;
            position: relative;
        }

        .timeline:before {
            content: '';
            position: absolute;
            top: 15px;
            left: 20px;
            right: 20px;
            height: 3px;
            background-color: #eaeaea;
            z-index: 1;
        }

        .timeline-step {
            width: 33%;
            text-align: center;
            position: relative;
            z-index: 2;
        }

        .timeline-dot {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background-color: #1A3385;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 10px;
            color: white;
            font-weight: bold;
        }

        .timeline-step.active .timeline-dot {
            background-color: #F54712;
            box-shadow: 0 0 0 5px rgba(245, 71, 18, 0.2);
        }

        .contact {
            background-color: #1A3385;
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 6px;
            margin-top: 30px;
        }

        .contact a {
            color: #F54712;
            font-weight: bold;
            text-decoration: none;
        }

        .footer {
            text-align: center;
            padding: 20px;
            border-top: 1px solid #eaeaea;
            color: #757575;
            font-size: 14px;
        }

        .social-icons {
            margin: 15px 0;
        }

        .social-icon {
            display: inline-block;
            width: 32px;
            height: 32px;
            background-color: #1A3385;
            border-radius: 50%;
            margin: 0 5px;
            font-size: 18px;
            line-height: 32px;
            color: white;
            text-align: center;
            text-decoration: none;
        }

        @media only screen and (max-width: 600px) {
            .container {
                width: 100%;
                border-radius: 0;
            }

            .timeline:before {
                left: 10px;
                right: 10px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <img src="https://via.placeholder.com/120x60?text=LOGO" alt="Logo Toko" class="logo">
            <h1>Konfirmasi Pembayaran</h1>
            <p>Terima kasih telah berbelanja di toko kami!</p>
            <div class="header-accent"></div>
        </div>

        <div class="content">
            <p>Halo <strong>{NAMA_PELANGGAN}</strong>,</p>
            <p>Pesanan Anda telah kami terima dan sedang diproses. Berikut adalah detail pesanan Anda:</p>

            <div class="order-details">
                <div class="order-number">Nomor Pesanan: {NOMOR_PESANAN}</div>
                <p><strong>Tanggal Pesanan:</strong> {TANGGAL_PESANAN}</p>
                <p><strong>Status:</strong> <span style="color: #F54712; font-weight: bold;">Menunggu Pembayaran</span>
                </p>
                <p><strong>Batas Waktu Pembayaran:</strong> {BATAS_PEMBAYARAN}</p>
            </div>

            <div class="timeline">
                <div class="timeline-step active">
                    <div class="timeline-dot">1</div>
                    <div>Pesanan Dibuat</div>
                </div>
                <div class="timeline-step">
                    <div class="timeline-dot">2</div>
                    <div>Pembayaran</div>
                </div>
                <div class="timeline-step">
                    <div class="timeline-dot">3</div>
                    <div>Pengiriman</div>
                </div>
            </div>

            <h2>Produk yang Dipesan</h2>
            <div class="product-items">
                <div class="product-item">
                    <div>
                        <span class="product-name">Nama Produk 1</span>
                        <span class="product-qty">×2</span>
                    </div>
                    <div class="product-price">
                        <div>Harga: Rp 200.000</div>
                        <div class="discount">Diskon: Rp 40.000</div>
                        <div><strong>Total: Rp 360.000</strong></div>
                    </div>
                </div>
                <div class="product-item">
                    <div>
                        <span class="product-name">Nama Produk 2</span>
                        <span class="product-qty">×1</span>
                    </div>
                    <div class="product-price">
                        <div>Harga: Rp 150.000</div>
                        <div><strong>Total: Rp 150.000</strong></div>
                    </div>
                </div>
            </div>

            <div class="shipping-info">
                <h2>Informasi Pengiriman</h2>
                <p><strong>Metode Pengiriman:</strong> JNE Regular</p>
                <p><strong>Biaya Pengiriman:</strong> Rp 20.000</p>
                <p><strong>Diskon Pengiriman:</strong> Rp 5.000</p>
                <p><strong>Alamat Pengiriman:</strong></p>
                <div class="address-box">
                    Jl. Contoh Alamat No. 123<br>
                    Kecamatan Contoh, Kota Contoh<br>
                    Provinsi Contoh, 12345<br>
                    Indonesia
                </div>
            </div>

            <div class="summary">
                <h2>Ringkasan Pembayaran</h2>
                <div class="total-row">
                    <span>Subtotal Produk:</span>
                    <span>Rp 510.000</span>
                </div>
                <div class="total-row">
                    <span>Diskon Produk:</span>
                    <span>Rp 40.000</span>
                </div>
                <div class="total-row">
                    <span>Biaya Pengiriman:</span>
                    <span>Rp 15.000</span>
                </div>
                <div class="total-divider"></div>
                <div class="final-total-row">
                    <span>Total Pembayaran:</span>
                    <span class="total-price">Rp 485.000</span>
                </div>
            </div>

            <a href="https://example.com/pembayaran/{NOMOR_PESANAN}" class="cta-button">
                LAKUKAN PEMBAYARAN SEKARANG
            </a>

            <p style="text-align: center; color: #F54712; font-weight: bold;">
                Harap melakukan pembayaran sebelum <strong>{BATAS_PEMBAYARAN}</strong>
            </p>
            <p style="text-align: center;">
                untuk menghindari pembatalan otomatis.
            </p>

            <div class="contact">
                <p>Jika Anda memiliki pertanyaan, silakan hubungi kami di:</p>
                <p>Email: <a href="mailto:cs@tokoanda.com">cs@tokoanda.com</a> | Telepon: (021) 1234-5678</p>
            </div>
        </div>

        <div class="footer">
            <div class="social-icons">
                <a href="#" class="social-icon">f</a>
                <a href="#" class="social-icon">in</a>
                <a href="#" class="social-icon">ig</a>
            </div>
            <p>&copy; 2025 Toko Anda. Semua hak dilindungi.</p>
            <p>Ini adalah email otomatis, mohon tidak membalas email ini.</p>
        </div>
    </div>
</body>

</html>