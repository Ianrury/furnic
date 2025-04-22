<?php 

namespace Importa\Furnic\PHP\FFI\Controller;

use Importa\Furnic\PHP\FFI\App\View;


class PromoController
{
    public function index()
    {
        $model = [
            "title" => "Promo",
            "content" => "Welcome to the promo page!",
        ];
        View::render('Promo/index', $model);
    }
}