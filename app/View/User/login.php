<?php
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
            font-family: 'Roboto';
        }

        .product-area-new {
            font-family: 'inter';
        }
    </style>

</head>

<body style="overflow: hidden;">

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




    <main class="main">
        <div class="container-fluid login-container">
            <div class="row">
                <!-- Image Section (hidden on mobile) -->
                <div class="col-md-7 image-container">
                    <img src="assets/img/login/foto-login.PNG" alt="Woman with child on sofa with laptop">
                </div>

                <!-- Login Form Section -->
                <div class="col-12 col-md-5 form-container">
                    <div class="wrapper">
                        <div class="login-form">
                            <h3 class="login-title">MASUK</h3>

                            <form id="loginForm" method="post">
                                <!-- Email Field -->
                                <div class="" style="margin: auto 5px;">
                                    <label for="email" class="form-label">Email <span class="required">*</span></label>
                                    <input type="email" class="form-control form-login" id="email" name="email" placeholder="Masukkan Email">
                                </div>

                                <!-- Password Field -->
                                <div class="" style="margin: auto 5px;">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control form-login" id="password" name="password" placeholder="Masukkan Password" style="margin-bottom: 0px;">
                                </div>
                                <div class="d-flex justify-content-end">
                                    <p><a href="/forgot-password" style="font-size: 10px;">Lupa Kata Sandi?</a></p>
                                </div>

                                <!-- Remember Me Checkbox -->
                                <!-- <div class="checkbox-wrapper">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="remember">
                                        <label class="form-check-label text-tetap text-black" for="remember" style="font-size: 14px;">Tetap Login</label>
                                    </div>
                                </div> -->

                                <!-- Login Button -->
                                <button type="submit" class="btn btn-masuk w-100" id="btnLogin">
                                    <span class="spinner-border spinner-border-sm me-2 d-none" role="status" aria-hidden="true" id="loginSpinner"></span>
                                    MASUK
                                </button>

                                <!-- Register Button -->
                                <button type="button" class="btn btn-daftar w-100">
                                    <a href="/register">REGISTER</a>
                                </button>
                                <hr class="hr-tebal">
                                <!-- Google Login Button -->
                                <!-- <button type="button" class="btn btn-google w-100">
                                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/google/google-original.svg" alt="Google logo">
                                    Continue with Google
                                </button> -->

                                <!-- Help Text -->
                                <div class="help-text">
                                    Butuh bantuan? Kunjungi <a href="#" class="link">FAQ kami</a> atau <a href="#" class="link">hubungi kami</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="toastContainer" class="position-fixed top-0 end-0 p-3" style="z-index: 9999;">
            <div id="liveToast" class="toast hide" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <img src="..." class="rounded me-2" alt="...">
                    <strong class="me-auto">Bootstrap</strong>
                    <small>11 mins ago</small>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    Hello, world! This is a toast message.
                </div>
            </div>
        </div>
    </main>

    <!-- js -->
    <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
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
        const API_BASE_URL = "<?= $apiBaseUrl ?>";
        $('#loginForm').on('submit', function(e) {
            e.preventDefault();

            // Reset error
            $('.invalid-feedback').text('');
            $('.form-control').removeClass('is-invalid');

            // Disable tombol & tampilkan spinner
            $('#btnLogin').attr('disabled', true);
            $('#loginSpinner').removeClass('d-none');

            $.ajax({
                url: API_BASE_URL + '/login',
                type: 'POST',
                data: $(this).serialize(),
                dataType: 'json',
                success: function(response) {
                    if (response.success) {
                        localStorage.setItem('auth_token', response.token);
                        showToast(response.message, 'success');

                        setTimeout(() => {
                            const referrer = document.referrer;
                            const currentHost = window.location.origin;
                            if (referrer && referrer.startsWith(currentHost)) {
                                const referrerPath = new URL(referrer).pathname;

                                if (referrerPath.includes('/register')) {
                                    window.location.href = "/";
                                } else {
                                    window.history.back();
                                }
                            } else {
                                window.location.href = "/";
                            }
                        }, 2000);
                    } else {
                        showToast(response.message || 'Login gagal.', 'danger');
                        $('#btnLogin').attr('disabled', false);
                        $('#loginSpinner').addClass('d-none');
                    }
                },
                error: function(xhr) {
                    if (xhr.status === 422) {
                        const res = JSON.parse(xhr.responseText);
                        const message = res.message;

                        if (message.toLowerCase().includes('email')) {
                            $('#email').addClass('is-invalid');
                            $('#error-email').text(message);
                        } else if (message.toLowerCase().includes('password')) {
                            $('#password').addClass('is-invalid');
                            $('#error-password').text(message);
                        }

                        showToast(message, 'danger');
                    } else {
                        showToast('Terjadi kesalahan server. Silakan coba lagi.', 'danger');
                    }

                    // Kembalikan tombol
                    $('#btnLogin').attr('disabled', false);
                    $('#loginSpinner').addClass('d-none');
                }
            });
        });


        // === TOAST FUNCTION ===
        function showToast(message, type = 'danger') {
            const toastId = 'toast-' + Date.now();
            const toastHtml = `
                <div id="${toastId}" class="toast align-items-center text-bg-${type} border-0 shadow" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="5000">
                    <div class="d-flex">
                        <div class="toast-body">${message}</div>
                        <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                </div>`;

            const $toast = $(toastHtml);
            $('#toastContainer').append($toast);

            // Tunda sedikit biar toast masuk DOM dulu
            setTimeout(() => {
                const toast = new bootstrap.Toast(document.getElementById(toastId));
                toast.show();

                document.getElementById(toastId).addEventListener('hidden.bs.toast', function() {
                    $(this).remove();
                });
            }, 10);
        }
    </script>
</body>

</html>