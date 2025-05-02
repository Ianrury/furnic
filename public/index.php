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


// Controller ProductController
Router::add('GET', '/product', ProductController::class, 'index');
Router::add('GET', '/product/detail/{id}', ProductController::class, 'detail');
Router::add('GET', '/product/hasil', ProductController::class, 'pencarian');
Router::add('GET', '/product/wishlist', ProductController::class, 'wishlist');
Router::add('POST', '/filter', ProductController::class, 'filterProduct');
Router::add('POST', '/filter/wislist', ProductController::class, 'filterProductWislist');
Router::add('POST', '/filter/pencarian', ProductController::class, 'filterProductPencaian');



// Contooller kerangjang 
Router::add('GET', '/keranjang', KeranjangController::class, 'index', [MustLoginMiddleware::class]);
Router::add('POST', '/keranjang', KeranjangController::class, 'createKeranjang');
Router::add('POST', '/deletekeranjang', KeranjangController::class, 'deleteKeranjang'); 
Router::add('POST', '/cekquantity', KeranjangController::class, 'cekQuantity'); 


// Controller PesananController
Router::add('GET', '/pesanan', PesananController::class, 'index');

// Wislist Product
Router::add('GET', '/product/create/wishlist/{id}', ProductController::class, 'Createwishlist');
Router::add('GET', '/product/create/cekwishlist/{id}', ProductController::class, 'cekWishlist');


// Controller PromoController
Router::add('GET', '/promo', PromoController::class, 'index');

Router::add('GET', '/not-found', NotFoundController::class, 'index');
Router::run();