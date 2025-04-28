<?php 

namespace Importa\Furnic\PHP\FFI\Controller;

use Importa\Furnic\PHP\FFI\App\View;
use Importa\Furnic\PHP\FFI\Config\Database;
use Importa\Furnic\PHP\FFI\Repository\ProductRepository;
use Importa\Furnic\PHP\FFI\Service\ProductServis;
use Importa\Furnic\PHP\FFI\Service\PromoServis;


class PromoController
{

    public ProductServis $productServiser;
    public PromoServis $promoServis;

    public function __construct()
    {
        // Inisialisasi koneksi database
        $connection = Database::getConnection();

        $productRepository = new ProductRepository($connection);  // Inisialisasi ProductRepository
        $this->promoServis = new PromoServis($productRepository);  // Inisialisasi ProductServis dengan ProductRepository

        $this->promoServis = new PromoServis($productRepository);
    }
    public function index()
    {
        $product = $this->promoServis->ProductDiskon();
        $model = [
            "title" => "Promo",
            "product" => $product,
            "content" => "Welcome to the promo page!",
        ];
        View::render('Promo/index', $model);
    }
}


// <div class="position-absolute ribbon-wrapper">
// <div class="ribbon text-uppercase fw-bold text-center"
//     style="color: #FF0000;background-color: #FFFB2D;">
//     Sale
// </div>
// </div>