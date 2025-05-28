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

        .password-container {
            position: relative;
            margin: auto 5px;
        }



        .eye-icon {
            position: absolute;
            right: 10px;
            top: 35px;
            cursor: pointer;
            color: #6c757d;
        }
    </style>

</head>

<body style="overflow: hidden;">

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





    <main class="main">
        <div class="container-fluid login-container">
            <div class="row">

                <div class="col-md-7 image-container">
                    <img src="assets/img/login/foto-login.PNG" alt="Woman with child on sofa with laptop">
                </div>


                <div class="col-12 col-md-5 form-container">
                    <div class="wrapper">
                        <div class="login-form">
                            <h3 class="login-title">MASUK</h3>

                            <form id="loginForm" method="post">

                                <div class="" style="margin: auto 5px;">
                                    <label for="email" class="form-label">Email <span class="required">*</span></label>
                                    <input type="email" class="form-control form-login" id="email" name="email" placeholder="Masukkan Email">
                                </div>


                                <div class="password-container">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control form-login" id="password" name="password" placeholder="Masukkan Password" style="margin-bottom: 0px;">
                                    <i class="eye-icon" id="togglePassword" onclick="togglePasswordVisibility()">
                                        <!-- Eye icon (closed by default) -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" id="eyeIcon">
                                            <path id="eyeSlash" d="M13.359 11.238C15.06 9.72 16 8 16 8s-3-5.5-8-5.5a7.028 7.028 0 0 0-2.79.588l.77.771A5.944 5.944 0 0 1 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.134 13.134 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755-.165.165-.337.328-.517.486l.708.709z" />
                                            <path id="eyeSlash2" d="M11.297 9.176a3.5 3.5 0 0 0-4.474-4.474l.823.823a2.5 2.5 0 0 1 2.829 2.829l.822.822zm-2.943 1.299.822.822a3.5 3.5 0 0 1-4.474-4.474l.823.823a2.5 2.5 0 0 0 2.829 2.829z" />
                                            <path id="eyeSlash3" d="M3.35 5.47c-.18.16-.353.322-.518.487A13.134 13.134 0 0 0 1.172 8l.195.288c.335.48.83 1.12 1.465 1.755C4.121 11.332 5.881 12.5 8 12.5c.716 0 1.39-.133 2.02-.36l.77.772A7.029 7.029 0 0 1 8 13.5C3 13.5 0 8 0 8s.939-1.721 2.641-3.238l.708.709zm10.296 8.884-12-12 .708-.708 12 12-.708.708z" />
                                            <path id="eye" class="hidden" d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                            <path id="eyeDot" class="hidden" d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                        </svg>
                                    </i>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <p><a href="/forgot-password" style="font-size: 10px;">Lupa Kata Sandi?</a></p>
                                </div>


                                <button type="submit" class="btn btn-masuk w-100" id="btnLogin">
                                    <span class="spinner-border spinner-border-sm me-2 d-none" role="status" aria-hidden="true" id="loginSpinner"></span>
                                    MASUK
                                </button>

                                <button type="button" class="btn btn-daftar w-100">
                                    <a href="/register">REGISTER</a>
                                </button>
                                <hr class="hr-tebal">


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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function togglePasswordVisibility() {
            const passwordInput = document.getElementById('password');
            const eyeIcon = document.getElementById('eyeIcon');
            const eyeOpen = document.getElementById('eye');
            const eyeOpenDot = document.getElementById('eyeDot');
            const eyeSlash = document.getElementById('eyeSlash');
            const eyeSlash2 = document.getElementById('eyeSlash2');
            const eyeSlash3 = document.getElementById('eyeSlash3');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                eyeOpen.classList.remove('hidden');
                eyeOpenDot.classList.remove('hidden');
                eyeSlash.classList.add('hidden');
                eyeSlash2.classList.add('hidden');
                eyeSlash3.classList.add('hidden');
            } else {
                passwordInput.type = 'password';
                eyeOpen.classList.add('hidden');
                eyeOpenDot.classList.add('hidden');
                eyeSlash.classList.remove('hidden');
                eyeSlash2.classList.remove('hidden');
                eyeSlash3.classList.remove('hidden');
            }
        }

        const style = document.createElement('style');
        style.textContent = `
            .hidden {
                display: none;
            }
        `;
        document.head.appendChild(style);
    </script>
    <script>
        const API_BASE_URL = "<?= $apiBaseUrl ?>";
        $('#loginForm').on('submit', function(e) {
            e.preventDefault();

            $('.invalid-feedback').text('');
            $('.form-control').removeClass('is-invalid');


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

                                if (
                                    referrerPath.includes('/register') ||
                                    referrerPath.includes('/user/verifikasi') ||
                                    referrerPath.includes('/reset-password')
                                ) {
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

                    $('#btnLogin').attr('disabled', false);
                    $('#loginSpinner').addClass('d-none');
                }
            });
        });


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