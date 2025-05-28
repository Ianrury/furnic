<?php
$token = $_GET['token'] ?? null;
require_once __DIR__ . '/../../app/env.php';
$apiBaseUrl = env('API_BASE_URL');

?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- title -->
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
        body {
            background-color: #f8f9fa;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            padding: 15px;
        }

        .password-form {
            width: 100%;
            max-width: 350px;
            background-color: white;
            border-radius: 8px;
            border: 1px solid #95a5a6 !important;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            overflow: hidden;
            animation: fadeIn 0.5s ease-in-out;
        }

        .password-header {
            background: linear-gradient(135deg, #6366f1 0%, #4f46e5 100%);
            color: white;
            padding: 15px;
            text-align: center;
            position: relative;
        }

        .password-body {
            padding: 18px;
        }

        .password-input-group {
            position: relative;
            margin-bottom: 15px;
        }

        .password-input {
            height: 40px;
            padding-right: 40px;
            font-size: 14px;
            border: 1px solid #e2e8f0;
            border-radius: 6px;
            transition: all 0.3s;
        }

        .password-input:focus {
            border-color: #6366f1;
            box-shadow: 0 0 0 2px rgba(99, 102, 241, 0.15);
        }

        .password-toggle {
            position: absolute;
            right: 12px;
            top: 50%;
            transform: translateY(-50%);
            border: none;
            background: none;
            color: #6b7280;
            cursor: pointer;
            font-size: 14px;
            padding: 3px;
            transition: color 0.3s;
        }

        .password-toggle:hover {
            color: #4f46e5;
        }

        .password-submit {
            background: linear-gradient(135deg, #6366f1 0%, #4f46e5 100%);
            color: white;
            border: none;
            border-radius: 6px;
            padding: 10px;
            font-weight: 600;
            letter-spacing: 0.5px;
            width: 100%;
            margin-top: 8px;
            transition: all 0.3s;
            font-size: 14px;
        }

        .password-submit:hover {
            background: linear-gradient(135deg, #4f46e5 0%, #4338ca 100%);
            transform: translateY(-1px);
            box-shadow: 0 3px 10px rgba(79, 70, 229, 0.3);
        }

        .password-badge {
            position: absolute;
            top: -5px;
            left: 50%;
            transform: translateX(-50%);
            background-color: white;
            border-radius: 25px;
            padding: 3px 10px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
        }

        .password-badge span {
            color: #4f46e5;
            font-weight: 600;
            font-size: 12px;
        }

        .password-icon-bg {
            width: 60px;
            height: 60px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 10px;
        }

        .password-icon-bg i {
            font-size: 28px;
        }

        .password-strength {
            height: 4px;
            border-radius: 4px;
            margin-top: 4px;
            transition: all 0.3s;
            background-color: #e2e8f0;
        }

        .password-hint {
            font-size: 12px;
            color: #6b7280;
            margin-top: 8px;
            margin-bottom: 15px;
        }

        .strength-text {
            font-size: 11px;
            color: #6b7280;
            margin-top: 3px;
            transition: all 0.3s;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(8px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .password-feedback {
            display: none;
            animation: fadeIn 0.3s ease-in-out;
            font-size: 11px;
        }

        .success-animation {
            width: 100%;
            display: none;
            text-align: center;
            animation: fadeIn 0.5s ease-in-out;
        }

        .success-icon {
            width: 60px;
            height: 60px;
            background-color: #10b981;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 15px auto;
            position: relative;
        }

        .success-icon i {
            font-size: 30px;
            color: white;
        }

        .success-message {
            margin-top: 15px;
            color: #10b981;
            font-weight: 600;
            font-size: 14px;
        }

        .password-header h2 {
            font-size: 1.25rem;
            margin-bottom: 5px;
        }

        .password-header p {
            font-size: 0.85rem;
        }

        .form-label {
            font-size: 0.85rem;
            margin-bottom: 0.25rem;
        }

        .password-feedback .d-flex {
            margin-bottom: 0.25rem !important;
        }

        .success-animation p {
            font-size: 0.85rem;
        }

        .toast-container {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 9999;
        }

        .toast {
            min-width: 250px;
            max-width: 350px;
            background-color: white;
            color: #333;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            margin-bottom: 10px;
            overflow: hidden;
            animation: slideInRight 0.3s ease-out;
        }

        .toast-header {
            display: flex;
            align-items: center;
            padding: 0.5rem 0.75rem;
            background-color: rgba(0, 0, 0, 0.03);
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
        }

        .toast-body {
            padding: 0.75rem;
        }

        .toast-success {
            border-left: 4px solid #10b981;
        }

        .toast-error {
            border-left: 4px solid #ef4444;
        }

        @keyframes slideInRight {
            from {
                transform: translateX(100%);
                opacity: 0;
            }

            to {
                transform: translateX(0);
                opacity: 1;
            }
        }

        @keyframes fadeOut {
            from {
                opacity: 1;
            }

            to {
                opacity: 0;
            }
        }

        .fade-out {
            animation: fadeOut 0.5s ease-out forwards;
        }

        .btn-login {
            background-color: #10b981;
            color: white;
            border: none;
            border-radius: 6px;
            font-weight: 600;
            letter-spacing: 0.5px;
            transition: all 0.3s;
            font-size: 14px;
            padding: 8px 16px;
            margin-top: 10px;
            text-decoration: none;
            display: inline-block;
        }

        .btn-login:hover {
            background-color: #0d9268;
            transform: translateY(-1px);
            box-shadow: 0 3px 10px rgba(16, 185, 129, 0.3);
            color: white;
        }
    </style>
</head>

<body>
    <div class="toast-container" id="toastContainer"></div>

    <div class="password-form">
        <form id="changePasswordForm">
            <input type="hidden" name="token" value="<?= htmlspecialchars($token) ?>">
            <div class="password-header">
                <div class="password-icon-bg">
                    <i class="fas fa-lock"></i>
                </div>
                <h2>Ubah Kata Sandi</h2>
                <p class="mb-0">Buat kata sandi baru yang aman</p>
            </div>
            <div class="password-body">
                <div class="password-input-group">
                    <label for="newPassword" class="form-label">Kata Sandi Baru</label>
                    <div class="input-group">
                        <input type="password" class="form-control password-input" id="newPassword" name="password"
                            placeholder="Masukkan kata sandi baru" required>
                        <button type="button" class="password-toggle" id="togglePassword">
                            <i class="far fa-eye"></i>
                        </button>
                    </div>
                    <div class="password-strength" id="passwordStrength"></div>
                    <div class="d-flex justify-content-between align-items-center mt-1">
                        <small class="text-muted">Kekuatan:</small>
                        <small class="strength-text" id="strengthText">Belum dimasukkan</small>
                    </div>
                    <div class="password-feedback mt-2" id="passwordFeedback">
                        <div class="d-flex align-items-center mb-1">
                            <i class="fas fa-check-circle me-2" id="lengthCheck" style="color: #cbd5e0;"></i>
                            <small>Minimal 8 karakter</small>
                        </div>
                        <div class="d-flex align-items-center mb-1">
                            <i class="fas fa-check-circle me-2" id="upperCheck" style="color: #cbd5e0;"></i>
                            <small>Memiliki huruf kapital</small>
                        </div>
                        <div class="d-flex align-items-center mb-1">
                            <i class="fas fa-check-circle me-2" id="numberCheck" style="color: #cbd5e0;"></i>
                            <small>Memiliki angka</small>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="fas fa-check-circle me-2" id="specialCheck" style="color: #cbd5e0;"></i>
                            <small>Memiliki karakter khusus</small>
                        </div>
                    </div>
                </div>

                <div class="d-grid">
                    <button type="submit" class="password-submit" id="submitButton">
                        <span class="d-flex align-items-center justify-content-center">
                            <i class="fas fa-save me-2"></i>
                            Simpan Kata Sandi
                        </span>
                    </button>
                </div>

                <div class="success-animation" id="successAnimation">
                    <div class="success-icon">
                        <i class="fas fa-check"></i>
                    </div>
                    <div class="success-message">Kata sandi berhasil diubah!</div>
                    <p class="text-muted">Silahkan melakukan login ulang</p>
                    <a href="/login" class="btn-login">
                        <i class="fas fa-sign-in-alt me-2"></i>
                        Halaman Login
                    </a>
                </div>
            </div>
        </form>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
    <script>
        const API_BASE_URL = "<?= $apiBaseUrl ?>";
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const passwordInput = document.getElementById('newPassword');
            const toggleButton = document.getElementById('togglePassword');
            const strengthBar = document.getElementById('passwordStrength');
            const strengthText = document.getElementById('strengthText');
            const passwordFeedback = document.getElementById('passwordFeedback');
            const lengthCheck = document.getElementById('lengthCheck');
            const upperCheck = document.getElementById('upperCheck');
            const numberCheck = document.getElementById('numberCheck');
            const specialCheck = document.getElementById('specialCheck');
            const form = document.getElementById('changePasswordForm');
            const successAnimation = document.getElementById('successAnimation');

            function showToast(message, type = 'success') {
                const toastContainer = document.getElementById('toastContainer');

                const toast = document.createElement('div');
                toast.className = `toast toast-${type} show`;
                toast.setAttribute('role', 'alert');
                toast.setAttribute('aria-live', 'assertive');
                toast.setAttribute('aria-atomic', 'true');

                const toastHeader = document.createElement('div');
                toastHeader.className = 'toast-header';

                const icon = document.createElement('i');
                icon.className = type === 'success' ? 'fas fa-check-circle me-2 text-success' : 'fas fa-exclamation-circle me-2 text-danger';

                const title = document.createElement('strong');
                title.className = 'me-auto';
                title.textContent = type === 'success' ? 'Berhasil' : 'Gagal';

                const closeButton = document.createElement('button');
                closeButton.type = 'button';
                closeButton.className = 'btn-close';
                closeButton.setAttribute('data-bs-dismiss', 'toast');
                closeButton.setAttribute('aria-label', 'Close');
                closeButton.addEventListener('click', () => {
                    toast.classList.add('fade-out');
                    setTimeout(() => {
                        toastContainer.removeChild(toast);
                    }, 500);
                });

                const toastBody = document.createElement('div');
                toastBody.className = 'toast-body';
                toastBody.textContent = message;

                toastHeader.appendChild(icon);
                toastHeader.appendChild(title);
                toastHeader.appendChild(closeButton);

                toast.appendChild(toastHeader);
                toast.appendChild(toastBody);

                toastContainer.appendChild(toast);

                setTimeout(() => {
                    toast.classList.add('fade-out');
                    setTimeout(() => {
                        if (toastContainer.contains(toast)) {
                            toastContainer.removeChild(toast);
                        }
                    }, 500);
                }, 5000);
            }

            toggleButton.addEventListener('click', function() {
                const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                passwordInput.setAttribute('type', type);

                const eyeIcon = toggleButton.querySelector('i');
                eyeIcon.classList.toggle('fa-eye');
                eyeIcon.classList.toggle('fa-eye-slash');
            });

            passwordInput.addEventListener('input', function() {
                const password = passwordInput.value;
                passwordFeedback.style.display = 'block';

                let strength = 0;
                const hasLength = password.length >= 8;
                const hasUpperCase = /[A-Z]/.test(password);
                const hasNumber = /[0-9]/.test(password);
                const hasSpecial = /[!@#$%^&*(),.?":{}|<>]/.test(password);

                lengthCheck.style.color = hasLength ? '#10b981' : '#cbd5e0';
                upperCheck.style.color = hasUpperCase ? '#10b981' : '#cbd5e0';
                numberCheck.style.color = hasNumber ? '#10b981' : '#cbd5e0';
                specialCheck.style.color = hasSpecial ? '#10b981' : '#cbd5e0';

                if (hasLength) strength += 25;
                if (hasUpperCase) strength += 25;
                if (hasNumber) strength += 25;
                if (hasSpecial) strength += 25;

                strengthBar.style.width = strength + '%';

                if (strength < 25) {
                    strengthBar.style.backgroundColor = '#ef4444'; 
                    strengthText.textContent = 'Sangat Lemah';
                    strengthText.style.color = '#ef4444';
                } else if (strength < 50) {
                    strengthBar.style.backgroundColor = '#f59e0b'; 
                    strengthText.textContent = 'Lemah';
                    strengthText.style.color = '#f59e0b';
                } else if (strength < 75) {
                    strengthBar.style.backgroundColor = '#3b82f6'; 
                    strengthText.textContent = 'Sedang';
                    strengthText.style.color = '#3b82f6';
                } else {
                    strengthBar.style.backgroundColor = '#10b981'; 
                    strengthText.textContent = 'Kuat';
                    strengthText.style.color = '#10b981';
                }

                if (password === '') {
                    strengthBar.style.width = '0%';
                    strengthText.textContent = 'Belum dimasukkan';
                    strengthText.style.color = '#6b7280';
                }
            });

            form.addEventListener('submit', function(e) {
                e.preventDefault();

                const submitButton = document.getElementById('submitButton');
                submitButton.disabled = true;
                submitButton.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i> Memproses...';

                const formData = new FormData(form);

                fetch(API_BASE_URL + '/reset-password', {
                        method: 'POST',
                        body: formData
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            showToast('Anda berhasil update sandi, lakukan login ulang', 'success');

                            passwordInput.parentElement.parentElement.style.display = 'none';
                            document.querySelector('.d-grid').style.display = 'none';
                            successAnimation.style.display = 'block';
                            setTimeout(function() {
                                window.location.href = '/login';
                            }, 5000);
                        } else {
                            showToast(data.message, 'error');
                            submitButton.disabled = false;
                            submitButton.innerHTML = '<i class="fas fa-save me-2"></i> Simpan Kata Sandi';
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        showToast('Terjadi kesalahan. Silakan coba lagi.', 'error');
                        submitButton.disabled = false;
                        submitButton.innerHTML = '<i class="fas fa-save me-2"></i> Simpan Kata Sandi';
                    });
            });
        });
    </script>
</body>

</html>