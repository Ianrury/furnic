<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Importa\Furnic\PHP\FFI\App\Router;
use Importa\Furnic\PHP\FFI\Config\Database;
use Importa\Furnic\PHP\FFI\Controller\HomeController;
use Importa\Furnic\PHP\FFI\Controller\KeranjangController;
use Importa\Furnic\PHP\FFI\Controller\NotFoundController;
use Importa\Furnic\PHP\FFI\Controller\PesananController;
use Importa\Furnic\PHP\FFI\Controller\ProductController;
use Importa\Furnic\PHP\FFI\Controller\PromoController;
use Importa\Furnic\PHP\FFI\Controller\UserController;
use Importa\Furnic\PHP\FFI\Middleware\MustNotLoginMiddleware;
use Importa\Furnic\PHP\FFI\Middleware\MustLoginMiddleware;


Database::getConnection('test');

// Controller HomeController
Router::add('GET', '/', HomeController::class, 'index');

// Controller UserController
Router::add('GET', '/login', UserController::class, 'login', [MustNotLoginMiddleware::class]);
Router::add('POST', '/login', UserController::class, 'postLogin', [MustNotLoginMiddleware::class]);
Router::add('GET', '/register', UserController::class, 'register', [MustNotLoginMiddleware::class]);
Router::add('POST', '/register', UserController::class, 'postRegister', [MustNotLoginMiddleware::class]);
Router::add('GET', '/logout', UserController::class, 'logout', [MustLoginMiddleware::class]);
Router::add('POST', '/user/edit', UserController::class, 'EditUser', [MustLoginMiddleware::class]);
Router::add('POST', '/user/update', UserController::class, 'UpdateUser', [MustLoginMiddleware::class]);
Router::add('GET', '/reset-password', UserController::class, 'ubahsandi');
Router::add('POST', '/reset-password', UserController::class, 'ubahsandiPost');
Router::add('GET', '/forgot-password', UserController::class, 'forgotPassword');
Router::add('POST', '/forgot-password', UserController::class, 'postForgotPassword');

Router::add('GET', '/profile', UserController::class, 'profile');





// Controller ProductController
Router::add('GET', '/product', ProductController::class, 'index');
Router::add('GET', '/product/detail/{id}', ProductController::class, 'detail');
Router::add('GET', '/product/hasil', ProductController::class, 'pencarian');
Router::add('GET', '/product/wishlist', ProductController::class, 'wishlist');
Router::add('POST', '/filter', ProductController::class, 'filterProduct');
Router::add('POST', '/filter/wislist', ProductController::class, 'filterProductWislist');
Router::add('POST', '/filter/pencarian', ProductController::class, 'filterProductPencaian');



Router::add('GET', '/lokasi', ProductController::class, 'lokasi');

Router::add('GET', '/pesanan/detail', ProductController::class, 'card_pesanan');



// Contooller kerangjang 
Router::add('GET', '/keranjang', KeranjangController::class, 'index');
Router::add('POST', '/keranjang', KeranjangController::class, 'createKeranjang');
Router::add('POST', '/deletekeranjang', KeranjangController::class, 'deleteKeranjang'); 
Router::add('POST', '/cekquantity', KeranjangController::class, 'cekQuantity'); 
Router::add('POST', '/pleskeranjang', KeranjangController::class, 'PlesQtyKeranjang');
Router::add('POST', '/minuskeranjang', KeranjangController::class, 'MinusQtyKeranjang');
Router::add('POST', '/createPesanan', KeranjangController::class, 'createPesanan');

// Controller PesananController
Router::add('GET', '/pesanan', PesananController::class, 'index');
Router::add('POST', '/pesanan', PesananController::class, 'createPesanan');

Router::add('GET', '/pembayaran', PesananController::class, 'pembayaran');
Router::add('GET', '/get-limit-payment', PesananController::class, 'cekWaktuPesanan');
Router::add('GET', '/get-batal-pesanan', PesananController::class, 'batalPesanan');


// Wislist Product cekWaktuPesanan
Router::add('GET', '/product/create/wishlist/{id}', ProductController::class, 'Createwishlist');
Router::add('GET', '/product/create/cekwishlist/{id}', ProductController::class, 'cekWishlist');


// Controller PromoController
Router::add('GET', '/promo', PromoController::class, 'index');

Router::add('GET', '/not-found', NotFoundController::class, 'index');
Router::run();