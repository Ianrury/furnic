<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Importa\Furnic\PHP\FFI\App\Router;
use Importa\Furnic\PHP\FFI\Config\Database;
use Importa\Furnic\PHP\FFI\Controller\HomeController;
use Importa\Furnic\PHP\FFI\Controller\ProductController;
use Importa\Furnic\PHP\FFI\Controller\UserController;


Database::getConnection('production');

Router::add('GET', '/', HomeController::class, 'index');

Router::add('GET', '/login', UserController::class, 'login');
Router::add('POST', '/login', UserController::class, 'postLogin');

Router::add('GET', '/users/register', UserController::class, 'register');
Router::add('POST', '/users/register', UserController::class, 'postRegister');
Router::add('GET', '/product', ProductController::class, 'index');
Router::add('GET', '/product/detail', ProductController::class, 'detail');
Router::run();