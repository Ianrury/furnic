<?php


namespace Importa\Furnic\PHP\FFI\Controller;

use Importa\Furnic\PHP\FFI\App\View;
use Importa\Furnic\PHP\FFI\Config\Database;
use Importa\Furnic\PHP\FFI\Repository\ProductRepository;
use Importa\Furnic\PHP\FFI\Repository\SessionRepository;
use Importa\Furnic\PHP\FFI\Repository\UserRepository;
use Importa\Furnic\PHP\FFI\Service\ProductServis;
use Importa\Furnic\PHP\FFI\Service\SessionService;
use Importa\Furnic\PHP\FFI\Service\WislistServis;

class ProductController
{
    public ProductServis $productServiser;
    public WislistServis $wishlistServiser;


    public function __construct()
    {
        $connection = Database::getConnection();

        $productRepository = new ProductRepository($connection);
        $sessionRepository = new SessionRepository($connection);
        $userRepository = new UserRepository($connection);

        $this->productServiser = new ProductServis($productRepository);
        $this->wishlistServiser = new WislistServis($sessionRepository, $userRepository);

        // Jangan lupa set productRepository ke WislistServis
        // $this->serviceServiser->productRepository = $productRepository;
    }


    public function index()
    {
        // $produk = $this->productServiser->ProductTerbaru();
        $produk = $this->productServiser->getProductsRekomendasi();
        $dummi = $this->productServiser->productdummi();


        // echo '<pre>';
        // var_dump($produk);
        // echo '</pre>';
        // exit;

        $model = [
            // "terbaru" => $produk, // Menambahkan produk terbaru ke model
            "title" => "Product",
            "produk" => $produk,
            "dummi" => $dummi,
            "content" => "Welcome to the product page!",
        ];
        View::render('Product/index', $model); // Menampilkan view dengan produk terbaru
    }


    public function detail($id)
    {

        $bestseller = $this->productServiser->bestSeller();
        $detail = $this->productServiser->getDetail($id);

        // echo '<pre>';
        // var_dump($detail);
        // echo '</pre>';
        // exit;
        $model = [
            "bestseller" => $bestseller,
            "detail" => $detail,
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

    public function Createwishlist($id_product)
    {
        header('Content-Type: application/json');

        $result = $this->wishlistServiser->createwislist($id_product);

        if ($result) {
            echo json_encode([
                'status' => 'success',
                'message' => 'Produk berhasil ditambahkan ke wishlist'
            ]);
        } else {
            echo json_encode([
                'status' => 'error',
                'message' => 'Gagal menambahkan produk ke wishlist'
            ]);
        }
    }
}
