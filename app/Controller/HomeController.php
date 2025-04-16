<?php

namespace Importa\Furnic\PHP\FFI\Controller;

use Importa\Furnic\PHP\FFI\App\View;
session_start(); 
class HomeController
{
    function index()
    {
        $model = [
            "title" => "Home",
            "content" => "Welcome to the home page!",
            "success" => $_SESSION['success'] ?? null,
        ];
        View::render('Home/index', $model);
    }
}