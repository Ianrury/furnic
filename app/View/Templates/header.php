<header class="header bg-info-emphasis" style="height: 122px;">
    <!-- navbar -->
    <div class="main-navigation shadow-bottom-sm mb-4 mt-2">
        <nav class="navbar navbar-expand-lg mb-5 d-flex justify-content-between align-items-center">
            <div class="container position-relative px-0 pb-3">
                <a class="navbar-brand" href="index.php">
                    <img src="assets/img/logo/Logo%20Furnice.png" style="width: 145px;" height="32" alt="logo">
                </a>
                <div class="mobile-menu-right">
                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar"
                        aria-label="Toggle navigation">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>

                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
                    aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <a href="index.html" class="offcanvas-brand" id="offcanvasNavbarLabel">
                            <img src="assets/img/logo/Logo Furnice.png" alt="">
                        </a>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav mx-5 justify-content-around flex-grow-1 text-center">
                            <li class="nav-item">
                                <a class="d-flex justify-content-center align-items-center w-100 h-100 custom-nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'index.php') ? 'active' : ''; ?>"
                                    href="index.php" style="font-size: 14px;"> Beranda</a>
                            </li>
                            <li class="nav-item">
                                <a class="d-flex justify-content-center align-items-center w-100 h-100 custom-nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'product.php') ? 'active' : ''; ?>"
                                    href="product.php" style="font-size: 14px;"> Product</a>
                            </li>
                            <li class="nav-item">
                                <a class="d-flex justify-content-center align-items-center w-100 h-100 custom-nav-link<?php echo (basename($_SERVER['PHP_SELF']) == 'promo.php') ? 'active' : ''; ?>"
                                    href="promo.php" style="font-size: 14px;"> Promo</a>
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
                                    <form class="d-flex" role="search">
                                        <div class="input-group">
                                            <input type="search" class="form-control custom-search-input"
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
                                    <a href="#" class="list-link">
                                        <i class="far fa-user text-dark fa-sm"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="list-link">
                                        <i class="far fa-shopping-cart text-dark fa-sm"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="list-link">
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