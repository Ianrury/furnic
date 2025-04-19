<?php 


namespace Importa\Furnic\PHP\FFI\Controller;

use Importa\Furnic\PHP\FFI\App\View;


class ProductController
{
    public function index()
    {
        $model = [
            "title" => "Product",
            "content" => "Welcome to the product page!",
        ];
        View::render('Product/index', $model);
    }

    public function detail()
    {
        $model = [
            "title" => "Product Detail",
            "content" => "Welcome to the product detail page!",
        ];
        View::render('Product/detail', $model);
    }
}