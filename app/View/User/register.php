<?php
require_once __DIR__ . '/../../app/env.php';
$apiBaseUrl = env('API_BASE_URL');

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">


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

        .password-field {
            position: relative;
        }

        .eye-icon {
            position: absolute;
            right: 10px;
            top: 38px;
            cursor: pointer;
            color: #666;
        }

        .eye-icon:hover {
            color: #333;
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
    <?php include __DIR__ . '/../templates/header.php'; ?>





    <main class="main">
        <div class="container-fluid login-container">
            <div class="row">
                <div class="col-md-7 image-container">
                    <img src="assets/img/login/foto-login.PNG" alt="Woman with child on sofa with laptop">
                </div>


                <div class="col-12 col-md-5 form-container">
                    <div class="wrapper">
                        <div class="register-form">
                            <h3 class="login-title">REGISTER</h3>

                            <form id="formRegister" method="post">

                                <div class="" style="margin: auto 5px;">
                                    <label for="nama" class="form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control form-login" id="nama_user" name="nama" placeholder="Masukkan Nama Lengkap">
                                </div>

                                <div class="" style="margin: auto 5px;">
                                    <label for="email" class="form-label">Email <span class="required">*</span></label>
                                    <input type="email" class="form-control form-login" id="email" name="email" placeholder="Masukkan Email">
                                </div>

                                <div class="form-group" style="margin: auto 5px;">
                                    <label for="no_telpon" class="form-label">Nomor Telepon</label>
                                    <input type="text" class="form-control form-login phone-input" id="no_telpon" name="no_hp" placeholder="Masukkan No Telepon">
                                    <div class="invalid-feedback" id="phone-error">
                                        Nomor telepon hanya boleh berisi angka
                                    </div>
                                </div>

                                <div class="form-group password-field" style="margin: auto 5px;">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control form-login" id="password" name="kata_sandi" placeholder="Masukkan Password">
                                    <span class="eye-icon" id="togglePassword">
                                        <i class="fas fa-eye-slash"></i>
                                    </span>
                                </div>

                                <div class="form-group password-field" style="margin: auto 5px;">
                                    <label for="password_confirmation" class="form-label">Ulangi Password</label>
                                    <input type="password" class="form-control form-login" id="password_confirmation" name="password_confirmation" placeholder="Ulangi Password">
                                    <span class="eye-icon" id="toggleConfirmPassword">
                                        <i class="fas fa-eye-slash"></i>
                                    </span>
                                </div>


                                <button type="submit" class="btn btn-masuk mt-2 w-100" id="btnSubmit">
                                    <span class="spinner-border spinner-border-sm me-2 d-none" role="status" aria-hidden="true" id="btnSpinner"></span>
                                    DAFTAR
                                </button>

                                <button type="button" class="btn btn-daftar w-100">
                                    <a href="/login">MASUK</a>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="toastContainer" class="position-fixed top-0 end-0 p-3" style="z-index: 9999;">
            <div id="liveToast" class="toast hide" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
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
        function setupPasswordToggle(toggleId, passwordId) {
            const togglePassword = document.getElementById(toggleId);
            const password = document.getElementById(passwordId);

            togglePassword.addEventListener('click', function() {

                const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
                password.setAttribute('type', type);

                const icon = this.querySelector('i');
                icon.classList.toggle('fa-eye');
                icon.classList.toggle('fa-eye-slash');
            });
        }

        setupPasswordToggle('togglePassword', 'password');
        setupPasswordToggle('toggleConfirmPassword', 'password_confirmation');
    </script>
    <script>
        const phoneInput = document.getElementById('no_telpon');
        const phoneError = document.getElementById('phone-error');
        phoneInput.addEventListener('input', function(e) {

            const sanitizedValue = this.value.replace(/\D/g, '');


            if (this.value !== sanitizedValue) {
                this.classList.add('invalid');
                phoneError.style.display = 'block';
            } else {
                this.classList.remove('invalid');
                phoneError.style.display = 'none';
            }
            this.value = sanitizedValue;
        });
    </script>
    <script>
        $('#password, #password_confirmation').on('input', function() {
            const password = $('#password').val();
            const confirm = $('#password_confirmation').val();
            const formatRegex = /^[a-zA-Z0-9]{2,8}$/;

            const hasLetter = /[a-zA-Z]/.test(password);
            const hasNumber = /[0-9]/.test(password);

            if (password) {
                if (!formatRegex.test(password)) {
                    $('#password').addClass('is-invalid');
                    $('#error-password').text('Password harus 2-8 karakter, hanya huruf dan angka.');
                } else if (!(hasLetter && hasNumber)) {
                    $('#password').addClass('is-invalid');
                    $('#error-password').text('Password harus mengandung minimal satu huruf dan satu angka.');
                } else {
                    $('#password').removeClass('is-invalid');
                    $('#error-password').text('');
                }
            }

            if (confirm && password !== confirm) {
                $('#password_confirmation').addClass('is-invalid');
                $('#error-password_confirmation').text('Password tidak sama');
            } else {
                $('#password_confirmation').removeClass('is-invalid');
                $('#error-password_confirmation').text('');
            }
        });


        const API_BASE_URL = "<?= $apiBaseUrl ?>";

        $('#formRegister').on('submit', function(e) {
            e.preventDefault();

            $('.invalid-feedback').text('');
            $('.form-control').removeClass('is-invalid');

            const password = $('#password').val();
            const confirm = $('#password_confirmation').val();

            if (password.length < 8) {
                $('#password').addClass('is-invalid');
                $('#error-password').text('Password minimal 8 karakter.');
                showToast('Password minimal 8 karakter.', 'danger');
                return;
            }

            let combinationCount = 0;
            if (/[a-z]/.test(password)) combinationCount++; 
            if (/[A-Z]/.test(password)) combinationCount++; 
            if (/[0-9]/.test(password)) combinationCount++; 
            if (/[^a-zA-Z0-9]/.test(password)) combinationCount++; 

            if (combinationCount < 2) {
                $('#password').addClass('is-invalid');
                $('#error-password').text('Password harus mengandung minimal 2 jenis karakter (huruf besar, huruf kecil, angka, simbol).');
                showToast('Password harus mengandung minimal 2 jenis karakter.', 'danger');
                return;
            }

            if (password !== confirm) {
                $('#password_confirmation').addClass('is-invalid');
                $('#error-password_confirmation').text('Password tidak sama.');
                showToast('Password dan konfirmasi tidak sama.', 'danger');
                return;
            }

            $('#btnSubmit').attr('disabled', true);
            $('#btnSpinner').removeClass('d-none');

            $.ajax({
                url: API_BASE_URL + '/register',
                type: 'POST',
                data: $('#formRegister').serialize(),
                dataType: 'json',
                success: function(response) {
                    if (response.success) {
                        showToast(response.message, 'success');

                        $('#formRegister')[0].reset();
                        $('.form-control').removeClass('is-invalid');

                        setTimeout(() => {
                            window.location.href = "/login";
                        }, 2000);
                    } else {
                        showToast(response.message || 'Terjadi kesalahan.', 'danger');
                        $('#btnSubmit').attr('disabled', false);
                        $('#btnSpinner').addClass('d-none');
                    }
                },
                error: function(xhr) {
                    if (xhr.status === 422) {
                        const res = xhr.responseJSON || JSON.parse(xhr.responseText);
                        const message = res.message || 'Validasi gagal.';

                        if (message.toLowerCase().includes('email')) {
                            $('#email').addClass('is-invalid');
                            $('#error-email').text(message);
                        } else if (message.toLowerCase().includes('password')) {
                            $('#password').addClass('is-invalid');
                            $('#error-password').text(message);
                        } else if (message.toLowerCase().includes('nama')) {
                            $('#nama_user').addClass('is-invalid');
                            $('#error-nama_user').text(message);
                        } else if (message.toLowerCase().includes('telpon')) {
                            $('#no_telpon').addClass('is-invalid');
                            $('#error-no_telpon').text(message);
                        }

                        showToast(message, 'danger');
                    } else {
                        const errorMessage = xhr.responseJSON?.message || 'Terjadi kesalahan server. Silakan coba lagi.';
                        showToast(errorMessage, 'danger');
                    }

                    $('#btnSubmit').attr('disabled', false);
                    $('#btnSpinner').addClass('d-none');
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