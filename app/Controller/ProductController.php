<?php 


namespace Importa\Furnic\PHP\FFI\Controller;

use Importa\Furnic\PHP\FFI\App\View;
use Importa\Furnic\PHP\FFI\Service\ProductServis;

class ProductController
{

    // public ProductServis $productServiser;

    // public function __construct(ProductServis $productServiser)
    // {
    //     $this->productServiser = $productServiser;
    // }

    public function index()
    {
        // $produk = $this->productServiser->ProductTerbaru();
        $model = [
            // "terbaru" => $produk, // Menambahkan produk terbaru ke model
            "title" => "Product",
            "content" => "Welcome to the product page!",
        ];
        View::render('Product/index', $model); // Menampilkan view dengan produk terbaru
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