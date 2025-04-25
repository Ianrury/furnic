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

    public function pencarian()
    {
        $model = [
            "title" => "Product Pencarian",
            "content" => "Welcome to the product pencarian page!",
        ];
        View::render('Product/pencarian', $model);
    }

    public function wishlist()
    {
        $model = [
            "title" => "Product Wishlist",
            "content" => "Welcome to the product wishlist page!",
        ];
        View::render('Product/wishlist', $model);
    }
}