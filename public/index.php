<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Importa\Furnic\PHP\FFI\App\Router;
use Importa\Furnic\PHP\FFI\Config\Database;
use Importa\Furnic\PHP\FFI\Controller\HomeController;
use Importa\Furnic\PHP\FFI\Controller\NotFoundController;
use Importa\Furnic\PHP\FFI\Controller\ProductController;
use Importa\Furnic\PHP\FFI\Controller\UserController;
use Importa\Furnic\PHP\FFI\Middleware\MustNotLoginMiddleware;
use Importa\Furnic\PHP\FFI\Middleware\MustLoginMiddleware;


Database::getConnection('production');

Router::add('GET', '/', HomeController::class, 'index');

Router::add('GET', '/login', UserController::class, 'login', [MustNotLoginMiddleware::class]);
Router::add('POST', '/login', UserController::class, 'postLogin', [MustNotLoginMiddleware::class]);

Router::add('GET', '/register', UserController::class, 'register', [MustNotLoginMiddleware::class]);
Router::add('POST', '/users/register', UserController::class, 'postRegister', [MustNotLoginMiddleware::class]);
Router::add('GET', '/logout', UserController::class, 'logout', [MustLoginMiddleware::class]);
Router::add('GET', '/product', ProductController::class, 'index', [MustLoginMiddleware::class]);
Router::add('GET', '/product/detail', ProductController::class, 'detail');

Router::add('GET', '/not-found', NotFoundController::class, 'index');
Router::run();