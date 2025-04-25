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
                <div class="login-form">
                    <h3 class="login-title">REGISTER</h3>
                    
                    <form action="/login" method="post">
                        <!-- Email Field -->
                        <div class="mb-3">
                            <label for="email" class="form-label">Email <span class="required">*</span></label>
                            <input type="email" class="form-control form-login" id="email" name="email" placeholder="Masukkan Email">
                        </div>
                        
                        <!-- Password Field -->
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control form-login" id="password" name="password" placeholder="Masukkan Password" style="margin-bottom: 0px;">
                        </div>
                        
                        <!-- Remember Me Checkbox -->
                        <div class="checkbox-wrapper">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="remember">
                                <label class="form-check-label text-tetap text-black" for="remember" style="font-size: 14px;">Tetap Login</label>
                            </div>
                            <p><a href="#" style="font-size: 12px;">Lupa Kata Sandi?</a></p>
                        </div>
                        
                        <!-- Login Button -->
                        <button type="submit" class="btn btn-masuk w-100">MASUK</button>
                        
                        <!-- Register Button -->
                        <button type="button" class="btn btn-daftar w-100">DAFTAR</button>
                        <hr class="hr-tebal">
                        <!-- Google Login Button -->
                        <button type="button" class="btn btn-google w-100">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/google/google-original.svg" alt="Google logo">
                            Continue with Google
                        </button>
                        
                        <!-- Help Text -->
                        <div class="help-text">
                            Butuh bantuan? Kunjungi <a href="#" class="link">FAQ kami</a> atau <a href="#" class="link">hubungi kami</a>
                        </div>
                    </form>
                </div>
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
        document.addEventListener('DOMContentLoaded', function() {
          const loginForm = document.querySelector('form[action="/login"]');
    
        loginForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Clear previous error messages
            clearErrorMessages();
            
            // Get form inputs
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            const remember = document.getElementById('remember').checked ? 1 : 0;
            
            // Validate form inputs
            let isValid = true;
            
            if (!email) {
                showErrorMessage('email', 'Email tidak boleh kosong');
                isValid = false;
            } else if (!isValidEmail(email)) {
                showErrorMessage('email', 'Format email tidak valid');
                isValid = false;
            }
            
            if (!password) {
                showErrorMessage('password', 'Password tidak boleh kosong');
                isValid = false;
            }
            
            if (!isValid) {
                return false;
            }
            
            // Send Ajax request
            const xhr = new XMLHttpRequest();
            xhr.open('POST', '/login', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
            
            xhr.onload = function() {
                if (xhr.status >= 200 && xhr.status < 300) {
                    try {
                        const response = JSON.parse(xhr.responseText);

                        if (response.success) {
                            // Redirect on success
                            window.location.href = response.redirect || '/';
                        } else if (response.error) {
                            // Tampilkan pesan error
                            showGeneralError(response.error);
                        }
                    } catch (e) {
                        // Jika respons bukan JSON atau ada kesalahan lainnya
                        console.log('Error parsing response:', e);
                        showGeneralError('Terjadi kesalahan pada server. Silakan coba lagi nanti.');
                    }
                } else {
                    showGeneralError('Terjadi kesalahan pada server. Silakan coba lagi nanti.');
                }
            };     
            xhr.onerror = function() {
                showGeneralError('Gagal terhubung ke server. Periksa koneksi internet Anda.');
            };
            
            // Prepare data
            const data = 'email=' + encodeURIComponent(email) + 
                        '&password=' + encodeURIComponent(password) +
                        '&remember=' + encodeURIComponent(remember);
            
            xhr.send(data);
        });
        
        // Helper functions
        function showErrorMessage(inputId, message) {
            const inputElement = document.getElementById(inputId);
            const errorElement = document.createElement('div');
            errorElement.className = 'invalid-feedback d-block';
            errorElement.textContent = message;
            
            inputElement.classList.add('is-invalid');
            inputElement.parentNode.appendChild(errorElement);
        }
        
        function showGeneralError(message) {
            const errorAlert = document.createElement('div');
            errorAlert.className = 'alert alert-danger mt-3';
            errorAlert.textContent = message;
            
            // Insert at the top of the form
            loginForm.prepend(errorAlert);
        }
        
        function clearErrorMessages() {
            // Remove all error messages
            const errorMessages = document.querySelectorAll('.invalid-feedback, .alert-danger');
            errorMessages.forEach(function(element) {
                element.remove();
            });
            
            // Remove invalid class from inputs
            const invalidInputs = document.querySelectorAll('.is-invalid');
            invalidInputs.forEach(function(input) {
                input.classList.remove('is-invalid');
            });
        }
        
        function isValidEmail(email) {
            const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return re.test(email);
            }
        });
    </script>
</body>

</html>