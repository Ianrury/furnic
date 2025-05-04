<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $model['title']; ?> - PT Furnice Furnishing Indonesia</title>

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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css">
    <!-- Font Awesome untuk ikon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        :root {
            --primary-color: #294478;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: white;
            color: #333;
        }

        .custom-container {
            max-width: 540px;
            /* Bootstrap's sm container width */
            margin: 2rem auto;
        }

        .card {
            border: none;
            border-radius: 0.5rem;
            box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
            border: 1px solid #95a5a6 !important;

        }

        .card-header {
            background-color: var(--primary-color);
            color: white;
            padding: 0.75rem 1rem;
            border-radius: 0.5rem 0.5rem 0 0;
            font-weight: 600;
        }

        .bank-info {
            background-color: #f8f9fa;
            padding: 0.75rem;
            border-radius: 0.375rem;
            margin-bottom: 1rem;
            border-left: 3px solid var(--primary-color);
            font-size: 0.875rem;
        }

        .bank-info h5 {
            margin-top: 0;
            color: var(--primary-color);
            font-size: 1rem;
        }

        .bank-detail {
            margin-bottom: 0.25rem;
        }

        .bank-detail span {
            font-weight: 600;
        }

        .form-label {
            color: var(--primary-color);
            font-weight: 500;
            font-size: 0.875rem;
            margin-bottom: 0.375rem;
        }

        .form-control,
        .form-select {
            font-size: 0.875rem;
            padding: 0.375rem 0.75rem;
            border-radius: 0.375rem;
            height: calc(1.5em + 0.75rem + 2px);
        }

        .form-control:focus,
        .form-select:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.25rem rgba(41, 68, 120, 0.25);
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
            padding: 0.75rem;
            background-color: white;
            border: 2px dashed var(--primary-color);
            border-radius: 0.375rem;
            cursor: pointer;
            transition: all 0.3s;
            height: 70px;
        }

        .file-upload-label:hover {
            background-color: rgba(41, 68, 120, 0.05);
        }

        .file-upload-icon {
            display: flex;
            flex-direction: column;
            align-items: center;
            color: var(--primary-color);
            font-size: 0.875rem;
        }

        .file-upload-icon svg {
            width: 30px;
            height: 30px;
            margin-bottom: 0.5rem;
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

        .file-name {
            margin-top: 0.5rem;
            font-size: 0.75rem;
            color: #6c757d;
            text-align: center;
            display: none;
        }

        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            font-size: 0.875rem;
            padding: 0.375rem 0.75rem;
        }

        .btn-primary:hover,
        .btn-primary:focus,
        .btn-primary:active {
            background-color: #1c325a !important;
            border-color: #1c325a !important;
            box-shadow: 0 0 0 0.25rem rgba(41, 68, 120, 0.25) !important;
        }

        .mb-3 {
            margin-bottom: 0.75rem !important;
        }
    </style>
</head>

<body>
    <div class="custom-container px-3">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Halaman Pembayaran</h5>
            </div>
            <div class="card-body p-3">
                <div class="bank-info">
                    <h5 class="mb-2">Informasi Rekening</h5>
                    <p class="bank-detail mb-1"><span>Bank:</span> BCA</p>
                    <p class="bank-detail mb-1"><span>Nama Rekening:</span> PT Pembayaran Digital</p>
                    <p class="bank-detail mb-0"><span>No. Rekening:</span> 8840123456</p>
                </div>

                <form id="payment-form">
                    <div class="mb-3">
                        <label for="bank" class="form-label">Bank Pengirim</label>
                        <select id="bank" class="form-select form-select-sm" required>
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
                        <input type="text" id="otherBank" class="form-control form-control-sm"
                            placeholder="Masukkan nama bank">
                    </div>

                    <div class="mb-3">
                        <label for="accountNumber" class="form-label">Nomor Rekening Pengirim</label>
                        <input type="text" id="accountNumber" class="form-control form-control-sm"
                            placeholder="Masukkan nomor rekening" required>
                    </div>

                    <div class="mb-3">
                        <label for="accountName" class="form-label">Nama Pemilik Rekening</label>
                        <input type="text" id="accountName" class="form-control form-control-sm"
                            placeholder="Masukkan nama pemilik rekening" required>
                    </div>

                    <div class="mb-3">
                        <label for="amount" class="form-label">Jumlah Transfer (Rp)</label>
                        <input type="number" id="amount" class="form-control form-control-sm"
                            placeholder="Masukkan jumlah transfer" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Bukti Pembayaran</label>
                        <div class="file-upload">
                            <label for="paymentProof" class="file-upload-label">
                                <div class="file-upload-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                        <polyline points="17 8 12 3 7 8"></polyline>
                                        <line x1="12" y1="3" x2="12" y2="15"></line>
                                    </svg>
                                    <span>Unggah Bukti Pembayaran</span>
                                </div>
                            </label>
                            <input type="file" id="paymentProof" accept="image/*" required>
                            <div id="fileName" class="file-name"></div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary w-100">Konfirmasi Pembayaran</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script>
        // Show/hide other bank input
        document.getElementById('bank').addEventListener('change', function () {
            const otherBankContainer = document.getElementById('otherBankContainer');
            if (this.value === 'other') {
                otherBankContainer.style.display = 'block';
            } else {
                otherBankContainer.style.display = 'none';
            }
        });

        // Show file name after selection
        document.getElementById('paymentProof').addEventListener('change', function () {
            const fileName = document.getElementById('fileName');
            if (this.files && this.files[0]) {
                fileName.textContent = this.files[0].name;
                fileName.style.display = 'block';

                // Change the upload icon to show it's selected
                const uploadIcon = document.querySelector('.file-upload-icon svg');
                uploadIcon.innerHTML = `
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                        <polyline points="22 4 12 14.01 9 11.01"></polyline>
                    </svg>
                `;

                // Change the text
                document.querySelector('.file-upload-icon span').textContent = 'File Terpilih';
            } else {
                fileName.style.display = 'none';
            }
        });

        // Form submission
        document.getElementById('payment-form').addEventListener('submit', function (e) {
            e.preventDefault();
            // Here you would normally send the data to your server
            alert('Pembayaran berhasil dikonfirmasi! Terima kasih.');
        });
    </script>
</body>

</html>