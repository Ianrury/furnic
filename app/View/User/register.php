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
                    <div class="register-form">
                            <h3 class="login-title">REGISTER</h3>
                            
                            <form id="formRegister" method="post">

                                <div class="" style="margin: auto 5px;">
                                        <label for="nama_user" class="form-label">Nama Lengkap</label>
                                        <input type="text" class="form-control form-login" id="nama_user" name="nama_user" placeholder="Masukkan Nama Lengkap">
                                </div>

                                <div class="" style="margin: auto 5px;">
                                    <label for="email" class="form-label">Email <span class="required">*</span></label>
                                    <input type="email" class="form-control form-login" id="email" name="email" placeholder="Masukkan Email">
                                </div>

                                <div class="" style="margin: auto 5px;">
                                    <label for="no_telpon" class="form-label">Nomor Telepon</label>
                                        <div class="d-flex gap-1">
                                            <input type="text" class="form-control form-login country-code-input" id="country_code" name="country_code" placeholder="+62" readonly>
                                            <input type="text" class="form-control form-login phone-input" id="no_telpon" name="no_telpon" placeholder="Masukkan Password">
                                        </div>
                                </div>

                                <div class="" style="margin: auto 5px;">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control form-login" id="password" name="password" placeholder="Masukkan Password">
                                </div>

                                <div class="" style="margin: auto 5px;">
                                    <label for="password_confirmation" class="form-label">Ulangi Password</label>
                                    <input type="password" class="form-control form-login" id="password_confirmation" name="password_confirmation" placeholder="Ulangi Password">
                                </div>


                                <button type="submit" class="btn btn-masuk mt-2 w-100">DAFTAR</button>
                                                       <!-- Register Button -->
                                <button type="button" class="btn btn-daftar w-100">
                                <a href="/login">MASUK</a>
                                </button>
                                <!-- Login Button -->
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
    // Deteksi kesamaan password real-time
        $('#password, #password_confirmation').on('input', function () {
            const password = $('#password').val();
            const confirm = $('#password_confirmation').val();

            if (confirm && password !== confirm) {
                $('#password_confirmation').addClass('is-invalid');
                $('#error-password_confirmation').text('Password tidak sama');
            } else {
                $('#password_confirmation').removeClass('is-invalid');
                $('#error-password_confirmation').text('');
            }
        });

            $('#formRegister').on('submit', function (e) {
            e.preventDefault();

            // Reset error
            $('.invalid-feedback').text('');
            $('.form-control').removeClass('is-invalid');

            // Cek password dan konfirmasi sama
            const password = $('#password').val();
            const confirm = $('#password_confirmation').val();

            if (password !== confirm) {
                $('#password_confirmation').addClass('is-invalid');
                $('#error-password_confirmation').text('Password tidak sama');
                return;
            }

            $.ajax({
                url: '/register',
                type: 'POST',
                data: $(this).serialize(),
                dataType: 'json',
                success: function (response) {
                    console.log('Success response:', response);

                    if (response.success) {
                        showToast(response.message, 'success');

                        // Reset form
                        $('#formRegister')[0].reset();
                        $('.form-control').removeClass('is-invalid');

                        // Redirect ke /login
                        setTimeout(() => {
                            window.location.href = "/login";
                        }, 1000);
                    } else {
                        // Handle jika success = false
                        showToast(response.message || 'Terjadi kesalahan.', 'danger');
                    }
                },
                error: function (xhr) {
                    console.log('Error response:', xhr);

                    if (xhr.status === 422) {
                        const res = xhr.responseJSON || JSON.parse(xhr.responseText);
                        const message = res.message || 'Validasi gagal.';

                        // Deteksi input error berdasarkan pesan
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

                    document.getElementById(toastId).addEventListener('hidden.bs.toast', function () {
                        $(this).remove();
                    });
                }, 10);
            }

    </script>

</body>

</html>