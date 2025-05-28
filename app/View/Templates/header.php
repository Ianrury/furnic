<?php
function is_active($route)
{
    $current_path = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
    $target_path = trim($route, '/');
    if ($target_path === '') {
        return $current_path === '' ? 'active' : '';
    }
    return strpos($current_path, $target_path) === 0 ? 'active' : '';
}


?>


<header class="header bg-info-emphasis">
    <div class="main-navigation shadow-bottom-sm  mt-2">
        <nav class="navbar navbar-expand-lg  d-flex justify-content-between align-items-center">
            <div class="container position-relative px-0">
                <a class="navbar-brand" href="/">
                    <img src="assets/img/logo/Logo%20Furnice.png" class="ms-2" alt="logo">
                </a>
                <div class="mobile-menu-right">
                    <div class="d-flex justify-content-between align-items-center gap-3 gap-sm-3 gap-md-4 gap-lg-5">
                        <a href="#" class="list-link position-relative auth-link" data-url="/keranjang">
                            <i class="fas fa-shopping-cart fa-sm" style="font-size: 17px; margin-top: 20px;color: #5c86b8"></i>
                            <span id="cart-badge" class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                0
                            </span>
                        </a>

                        <div class="search-button-container" data-bs-toggle="modal" data-bs-target="#searchModal">
                            <div class="search-button d-flex align-items-center justify-content-center">
                                <div class="search-icon-wrapper">
                                    <i class="fa fa-search" style="color: #5c86b8;"></i>
                                </div>
                            </div>
                        </div>


                        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar"
                            aria-label="Toggle navigation">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>

                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
                    aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <a href="/" class="offcanvas-brand" id="offcanvasNavbarLabel">
                            <img src="assets/img/logo/Logo Furnice.png" alt="">
                        </a>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav mx-4 justify-content-evenly flex-grow-1 text-center">
                            <li class="nav-item">
                                <a class="d-flex justify-content-center home-link align-items-center w-100 h-100 custom-nav-link <?= is_active('/') ?>"
                                    href="/" style="font-size: 14px;">Beranda</a>
                            </li>

                            <li class="nav-item">
                                <a class="d-flex justify-content-center home-link align-items-center w-100 h-100 custom-nav-link <?= is_active('product') ?>"
                                    href="/product" style="font-size: 14px;">Produk</a>
                            </li>

                            <li class="nav-item">
                                <a class="d-flex justify-content-center home-link align-items-center w-100 h-100 custom-nav-link <?= is_active('promo') ?>"
                                    href="/promo" style="font-size: 14px;">Promo</a>
                            </li>

                            <li class="nav-item">
                                <a class="d-flex justify-content-center home-link align-items-center w-100 h-100 custom-nav-link <?= is_active('lokasi') ?>"
                                    href="/lokasi" style="font-size: 14px;">Lokasi Toko</a>
                            </li>
                            <li class="nav-item navbar-toggler" style="margin-top: 10px;">
                                <a class="d-flex justify-content-center home-link align-items-center w-100 h-100 custom-nav-link <?= is_active('profile') ?>"
                                    href="/profile" style="font-size: 14px;">Profile</a>
                            </li>
                            <li class="nav-item navbar-toggler" style="margin-top: 10px;">
                                <a class="d-flex justify-content-center home-link align-items-center w-100 h-100 custom-nav-link <?= is_active('pesanan') ?>"
                                    href="/pesanan/detail" style="font-size: 14px;">Pesanan</a>
                            </li>
                            <li class="nav-item navbar-toggler" style="margin-top: 10px;">
                                <a class="d-flex justify-content-center home-link align-items-center w-100 h-100 custom-nav-link <?= is_active('keranjang') ?>"
                                    href="/keranjang" style="font-size: 14px;">Keranjang</a>
                            </li>
                            <li class="nav-item navbar-toggler" style="margin-top: 10px;">
                                <a class="d-flex justify-content-center home-link align-items-center w-100 h-100 custom-nav-link <?= is_active('logout') ?>"
                                    href="/logout" style="font-size: 14px;">Keluar</a>
                            </li>
                        </ul>
                        <div class="d-none d-md-block hide-on-930">
                            <ul class=" nav-right-list">
                                <li class="me-3">
                                    <form class="d-flex w-100" action="/product/hasil" role="search">
                                        <div class="input-group">
                                            <input type="search" name="search" class="form-control custom-search-input"
                                                placeholder="Cari" aria-label="Search"
                                                style="height: 30px; font-size: 14px; width: 200px;">
                                            <button class="btn custom-search-button" type="submit"
                                                style="height: 30px; padding: 0 10px; display: flex; align-items: center;">
                                                <i class="fa fa-search" style="font-size: 14px;"></i>
                                            </button>
                                        </div>
                                    </form>
                                </li>

                                <li class="me-2">
                                    <a href="#" class="nav-link d-flex align-items-center justify-content-center"
                                        role="button" data-bs-toggle="dropdown" aria-expanded="false"
                                        style="font-size: 20px;">
                                        <i class="far fa-user text-dark fa-sm"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end shadow-sm border-0 custom-dropdown small p-0">
                                        <li>
                                            <a class="dropdown-item d-flex align-items-center gap-2" href="/profile">
                                                <i class="fas fa-user-circle text-primary"></i> Profile
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item d-flex align-items-center gap-2" href="/pesanan/detail">
                                                <i class="fas fa-box text-success"></i> Pesanan
                                            </a>
                                        </li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li>
                                            <a class="dropdown-item d-flex align-items-center gap-2" href="#" id="logoutButton">
                                                <i class="fas fa-sign-out-alt text-danger"></i> Keluar
                                            </a>
                                        </li>
                                    </ul>

                                </li>

                                <li style="position: relative;">
                                    <a href="#" class="list-link position-relative auth-link" data-url="/keranjang">
                                        <i class="far fa-shopping-cart text-dark fa-sm"></i>
                                        <span id="cart-badge" class="cart-badge-count">0</span>
                                    </a>
                                </li>
                                <li class="auth-login-container" style="position: relative;">
                                    <div class="auth-login-container" style="position: relative;">
                                        <a href="/login" class="auth-login-button-3">
                                            <svg class="auth-login-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"></path>
                                                <polyline points="10 17 15 12 10 7"></polyline>
                                                <line x1="15" y1="12" x2="3" y2="12"></line>
                                            </svg>
                                            Login
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>

<div class="modal fade no-backdrop" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel"
    data-bs-backdrop="false">
    <div class="modal-dialog modal-dialog-centered m-auto">
        <div class="modal-content rounded-4 border-0">
            <div class="modal-header border-0 pb-0">
                <div class="search-input-wrapper w-100">
                    <i class="bi bi-search search-input-icon"></i>
                    <form action="/product/hasil" method="get">
                        <input type="text" class="form-control modal-search-input" name="search"
                            placeholder="Cari di Furnice" autofocus>
                    </form>
                </div>
                <button type="button" class="btn-close ms-3" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body pt-2">
                <div class="search-suggestions">
                    <div class="search-item mt-3 border-top pt-3">
                        <i class="bi bi-lightbulb-fill tips-icon"></i>
                        <div class="d-flex justify-content-between w-100 align-items-center">
                            <span class="ms-2">Tips & Trik Pencarian</span>
                            <span class="text-success fw-medium">Pelajari</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const token = localStorage.getItem('auth_token');
        if (!token) return;

        fetch(API_BASE_URL + '/nominal-keranjang', {
                method: 'GET',
                headers: {
                    'Authorization': 'Bearer ' + token
                }
            })
            .then(res => res.json())
            .then(data => {
                if (data.status === 'success') {
                    const nominal = data.total_nominal || 0;

                    const cartBadge = document.getElementById('cart-badge');
                    if (cartBadge) cartBadge.innerText = nominal;

                    const badgeElements = document.getElementsByClassName('cart-badge-count');
                    for (let el of badgeElements) {
                        el.innerText = nominal;
                    }
                } else {
                    console.error('Gagal ambil nominal keranjang:', data.message);
                }
            })
            .catch(err => {
                console.error('Error fetch nominal keranjang:', err);
            });



    });




    document.querySelectorAll('.auth-link').forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const token = localStorage.getItem('auth_token');
            if (!token) {
                window.location.href = '/login';
            } else {
                const targetUrl = this.getAttribute('data-url');
                window.location.href = targetUrl;
            }
        });
    });

    document.addEventListener('DOMContentLoaded', function() {
        const token = localStorage.getItem('auth_token');

        if (token) {
            const loginContainer = document.querySelector('.auth-login-container');
            if (loginContainer) {
                loginContainer.style.display = 'none';
            }
            const loginContainers = document.querySelectorAll('.auth-login-container');
            loginContainers.forEach(container => {
                container.style.display = 'none';
            });

            const loginLi = document.querySelector('li.auth-login-container');
            if (loginLi) {
                loginLi.style.display = 'none';
            }
        }
    });

    document.addEventListener('DOMContentLoaded', function() {
        const logoutButton = document.getElementById('logoutButton');

        if (logoutButton) {
            logoutButton.addEventListener('click', function(e) {
                e.preventDefault();
                localStorage.clear();
                window.location.href = '/login';
            });
        }
    });
</script>