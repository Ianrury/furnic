<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Importa\Furnic\PHP\FFI\App\Router;
use Importa\Furnic\PHP\FFI\Config\Database;
use Importa\Furnic\PHP\FFI\Controller\HomeController;
use Importa\Furnic\PHP\FFI\Controller\KeranjangController;
use Importa\Furnic\PHP\FFI\Controller\NotFoundController;
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

// Controller ProductController
Router::add('GET', '/product', ProductController::class, 'index');
Router::add('GET', '/product/detail', ProductController::class, 'detail');
Router::add('GET', '/product/hasil', ProductController::class, 'pencarian');
Router::add('GET', '/product/wishlist', ProductController::class, 'wishlist');

// Contooller kerangjang 
Router::add('GET', '/keranjang', KeranjangController::class, 'index');



// Controller PromoController
Router::add('GET', '/promo', PromoController::class, 'index');

Router::add('GET', '/not-found', NotFoundController::class, 'index');
Router::run();