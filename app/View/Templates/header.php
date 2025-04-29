<?php
function is_active($route)
{
    $current_path = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
    $target_path = trim($route, '/');

    // Khusus untuk route '/'
    if ($target_path === '') {
        return $current_path === '' ? 'active' : '';
    }

    // Untuk selain '/', cocokkan awal URL
    return strpos($current_path, $target_path) === 0 ? 'active' : '';
}
?>


<header class="header bg-info-emphasis">
    <!-- navbar -->
    <div class="main-navigation shadow-bottom-sm  mt-2">
        <nav class="navbar navbar-expand-lg  d-flex justify-content-between align-items-center">
            <div class="container position-relative px-0">
                <a class="navbar-brand" href="/">
                    <img src="assets/img/logo/Logo%20Furnice.png" alt="logo">
                </a>
                <div class="mobile-menu-right">
                    <div class="d-flex justify-content-between align-items-center gap-3 gap-sm-3 gap-md-4 gap-lg-5">
                        <!-- Search Button -->
                        <div class="search-button-container" data-bs-toggle="modal" data-bs-target="#searchModal">
                            <div class="search-button d-flex align-items-center justify-content-center">
                                <div class="search-icon-wrapper">
                                    <i class="fa fa-search"></i>
                                </div>
                            </div>
                        </div>

                        <!-- Menu Toggle Button -->
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
                        <ul class="navbar-nav mx-auto justify-content-around flex-grow-1 text-center">
                            <li class="nav-item">
                                <a class="d-flex justify-content-center home-link align-items-center w-100 h-100 custom-nav-link <?= is_active('/') ?>"
                                    href="/" style="font-size: 14px;">Home</a>
                            </li>

                            <li class="nav-item">
                                <a class="d-flex justify-content-center align-items-center w-100 h-100 custom-nav-link <?= is_active('product') ?>"
                                    href="/product" style="font-size: 14px;">Product</a>
                            </li>

                            <li class="nav-item">
                                <a class="d-flex justify-content-center align-items-center w-100 h-100 custom-nav-link <?= is_active('promo') ?>"
                                    href="/promo" style="font-size: 14px;">Promo</a>
                            </li>

                            <li class="nav-item">
                                <a class="d-flex justify-content-center align-items-center w-100 h-100 custom-nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'dekorasi.php') ? 'active' : ''; ?>"
                                    href="dekorasi.php" style="font-size: 14px;"> Dekorasi</a>
                            </li>
                            <li class="nav-item">
                                <a class="d-flex justify-content-center align-items-center w-100 h-100 custom-nav-link<?php echo (basename($_SERVER['PHP_SELF']) == 'lokasi_store.php') ? 'active' : ''; ?>"
                                    href="lokasi_store.php" style="font-size: 14px;"> Lokasi Store</a>
                            </li>
                        </ul>

                        <!-- nav-right -->
                        <div class="nav-right">
                            <ul class="nav-right-list">
                                <li class="me-3">
                                    <form class="d-flex" action="/product/hasil" role="search">
                                        <div class="input-group">
                                            <input type="search" name="search" class="form-control custom-search-input"
                                                placeholder="Cari" aria-label="Search"
                                                style="height: 30px; font-size: 14px;">
                                            <button class="btn custom-search-button" type="submit"
                                                style="height: 30px; padding: 0 10px; display: flex; align-items: center;">
                                                <i class="fa fa-search" style="font-size: 14px;"></i>
                                            </button>
                                        </div>
                                    </form>
                                </li>
                                <li>
                                    <a href="/users/logout" class="list-link">
                                        <i class="far fa-user text-dark fa-sm"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="/keranjang" class="list-link">
                                        <i class="far fa-shopping-cart text-dark fa-sm"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="/product/wishlist" class="list-link">
                                        <i class="far fa-heart text-dark fa-sm"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!-- navbar end -->
</header>

<!-- Search Modal -->
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
                    <!-- <i class="bi bi-mic-fill voice-search-icon"></i> -->
                </div>
                <button type="button" class="btn-close ms-3" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body pt-2">
                <!-- Section Title -->
                <div class="search-section-title mb-2 ps-2">
                    <span class="text-muted fs-7">Pencarian Terakhir</span>
                </div>

                <!-- Recent Searches -->
                <div class="search-suggestions">
                    <div class="search-item">
                        <i class="bi bi-clock-history search-icon"></i>
                        <span>kulkas 2 pintu</span>
                        <i class="bi bi-x-lg delete-search ms-auto"></i>
                    </div>
                    <div class="search-item">
                        <i class="bi bi-clock-history search-icon"></i>
                        <span>kipas angin dinding</span>
                        <i class="bi bi-x-lg delete-search ms-auto"></i>
                    </div>
                    <div class="search-item">
                        <i class="bi bi-clock-history search-icon"></i>
                        <span>parfum pria</span>
                        <i class="bi bi-x-lg delete-search ms-auto"></i>
                    </div>

                    <!-- Popular Searches Section -->
                    <div class="search-section-title mt-3 mb-2 ps-2">
                        <span class="text-muted fs-7">Pencarian Populer</span>
                    </div>

                    <div class="search-item">
                        <i class="bi bi-graph-up-arrow search-icon trending-icon"></i>
                        <span>cushion</span>
                    </div>
                    <div class="search-item">
                        <i class="bi bi-graph-up-arrow search-icon trending-icon"></i>
                        <span>dompet pria</span>
                    </div>
                    <div class="search-item">
                        <i class="bi bi-graph-up-arrow search-icon trending-icon"></i>
                        <span>minyak goreng 2l</span>
                    </div>

                    <!-- Tips Section -->
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