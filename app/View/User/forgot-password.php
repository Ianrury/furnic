<?php
function base_url($path = '')
{
    return '/' . ltrim($path, '/');
}
require_once __DIR__ . '/../../app/env.php';
$apiBaseUrl = env('API_BASE_URL');

?>


<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $model['title']; ?> - PT Furnice Furnishing Indonesia</title>

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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css">

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

        .forgot-password-form {
            width: 100%;
            max-width: 350px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            overflow: hidden;
            animation: fadeIn 0.5s ease-in-out;
        }

        .form-header {
            background: linear-gradient(135deg, #6366f1 0%, #4f46e5 100%);
            color: white;
            padding: 15px;
            text-align: center;
            position: relative;
        }

        .form-body {
            padding: 18px;
        }

        .form-icon-bg {
            width: 60px;
            height: 60px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 10px;
        }

        .form-icon-bg i {
            font-size: 28px;
        }

        .form-submit {
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

        .form-submit:hover {
            background: linear-gradient(135deg, #4f46e5 0%, #4338ca 100%);
            transform: translateY(-1px);
            box-shadow: 0 3px 10px rgba(79, 70, 229, 0.3);
        }

        .form-input {
            height: 40px;
            font-size: 14px;
            border: 1px solid #e2e8f0;
            border-radius: 6px;
            transition: all 0.3s;
        }

        .form-input:focus {
            border-color: #6366f1;
            box-shadow: 0 0 0 2px rgba(99, 102, 241, 0.15);
        }

        .form-header h2 {
            font-size: 1.25rem;
            margin-bottom: 5px;
        }

        .form-header p {
            font-size: 0.85rem;
        }

        .form-label {
            font-size: 0.85rem;
            margin-bottom: 0.25rem;
        }

        /* Toast Styles */
        .custom-toast {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 9999;
            max-width: 300px;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.15);
            animation: slideIn 0.3s ease-out;
            font-size: 0.85rem;
        }

        .toast-header {
            padding: 12px 15px;
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .toast-success .toast-header {
            background-color: #10b981;
            color: white;
        }

        .toast-error .toast-header {
            background-color: #ef4444;
            color: white;
        }

        .toast-body {
            padding: 12px 15px;
            background-color: white;
        }

        .toast-icon {
            width: 24px;
            height: 24px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            margin-right: 10px;
        }

        .toast-success .toast-icon {
            background-color: rgba(255, 255, 255, 0.2);
        }

        .toast-error .toast-icon {
            background-color: rgba(255, 255, 255, 0.2);
        }

        .toast-close {
            background: none;
            border: none;
            color: white;
            opacity: 0.7;
            font-size: 18px;
            cursor: pointer;
            padding: 0;
            width: 24px;
            height: 24px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: opacity 0.3s;
        }

        .toast-close:hover {
            opacity: 1;
        }

        .toast-progress {
            height: 3px;
            background-color: rgba(255, 255, 255, 0.3);
            position: relative;
        }

        .toast-progress-bar {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            background-color: rgba(255, 255, 255, 0.7);
            animation: progressShrink 5s linear forwards;
        }

        @keyframes progressShrink {
            0% {
                width: 100%;
            }

            100% {
                width: 0%;
            }
        }

        @keyframes slideIn {
            from {
                transform: translateX(100%);
                opacity: 0;
            }

            to {
                transform: translateX(0);
                opacity: 1;
            }
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

        .loading-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.8);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 10;
            border-radius: 8px;
            display: none;
        }

        .spinner {
            width: 35px;
            height: 35px;
            border: 3px solid rgba(79, 70, 229, 0.2);
            border-radius: 50%;
            border-top-color: #4f46e5;
            animation: spin 0.8s linear infinite;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }
    </style>
</head>

<body>
    <div class="forgot-password-form">
        <form id="forgotPasswordForm">
            <div class="form-header">
                <div class="form-icon-bg">
                    <i class="fas fa-key"></i>
                </div>
                <h2>Lupa Kata Sandi</h2>
                <p class="mb-0">Masukkan email Anda untuk reset kata sandi</p>
            </div>
            <div class="form-body">
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control form-input" id="email" name="email"
                        placeholder="Masukkan email Anda" required>
                    <div class="form-text small text-muted">Kami akan mengirimkan link reset kata sandi ke email Anda.
                    </div>
                </div>

                <div class="d-grid">
                    <button type="submit" class="form-submit" id="submitButton">
                        <span class="d-flex align-items-center justify-content-center">
                            <i class="fas fa-paper-plane me-2"></i>
                            Kirim Link Reset
                        </span>
                    </button>
                </div>

                <div class="mt-3 text-center">
                    <a href="/login" class="text-decoration-none text-primary small">
                        <i class="fas fa-arrow-left me-1"></i> Kembali ke Login
                    </a>
                </div>
            </div>

        
            <div class="loading-overlay" id="loadingOverlay">
                <div class="spinner"></div>
            </div>
        </form>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>

    <script>
        const API_BASE_URL = "<?= $apiBaseUrl ?>";
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('forgotPasswordForm');
            const loadingOverlay = document.getElementById('loadingOverlay');

           
            function showToast(type, title, message, duration = 5000) {
             
                const existingToasts = document.querySelectorAll('.custom-toast');
                existingToasts.forEach(toast => {
                    toast.remove();
                });

                
                const toastContainer = document.createElement('div');
                toastContainer.className = `custom-toast toast-${type}`;

              
                let icon = type === 'success' ? 'check' : 'exclamation-triangle';

                toastContainer.innerHTML = `
                    <div class="toast-header">
                        <div class="d-flex align-items-center">
                            <div class="toast-icon">
                                <i class="fas fa-${icon}"></i>
                            </div>
                            <strong>${title}</strong>
                        </div>
                        <button type="button" class="toast-close">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                    <div class="toast-body">
                        ${message}
                    </div>
                    <div class="toast-progress">
                        <div class="toast-progress-bar"></div>
                    </div>
                `;

            
                document.body.appendChild(toastContainer);

                const closeButton = toastContainer.querySelector('.toast-close');
                closeButton.addEventListener('click', function() {
                    toastContainer.remove();
                });

         
                setTimeout(() => {
                    if (document.body.contains(toastContainer)) {
                        toastContainer.style.animation = 'slideIn 0.3s ease-out reverse forwards';
                        setTimeout(() => {
                            if (document.body.contains(toastContainer)) {
                                toastContainer.remove();
                            }
                        }, 300);
                    }
                }, duration);
            }


            form.addEventListener('submit', function(e) {
                e.preventDefault();

                loadingOverlay.style.display = 'flex';

                const email = document.getElementById('email').value;

                fetch( API_BASE_URL + '/forgot-password', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/x-www-form-urlencoded',
                            'X-Requested-With': 'XMLHttpRequest'
                        },
                        body: `email=${encodeURIComponent(email)}`
                    })
                    .then(response => response.json())
                    .then(data => {
            
                        loadingOverlay.style.display = 'none';

                        if (data.success) {
    
                            showToast('success', 'Berhasil', data.message);


                            form.reset();
                        } else {
                
                            showToast('error', 'Gagal', data.message);
                        }
                    })
                    .catch(error => {
       
                        loadingOverlay.style.display = 'none';

                        showToast('error', 'Error', 'Terjadi kesalahan, silakan coba lagi.');
                        console.error('Error:', error);
                    });
            });
        });
    </script>
</body>

</html>