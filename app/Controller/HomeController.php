<?php

namespace Importa\Furnic\PHP\FFI\Controller;

use Importa\Furnic\PHP\FFI\App\View;
use Importa\Furnic\PHP\FFI\Config\Database;
use Importa\Furnic\PHP\FFI\Repository\SessionRepository;
use Importa\Furnic\PHP\FFI\Repository\UserRepository;
use Importa\Furnic\PHP\FFI\Repository\ProductRepository; // Import ProductRepository
use Importa\Furnic\PHP\FFI\Service\ProductServis;
use Importa\Furnic\PHP\FFI\Service\SessionService;

session_start();

class HomeController
{
    private SessionService $sessionService;
    public ProductServis $productServiser;

    public function __construct()
    {
        // Inisialisasi koneksi database
        $connection = Database::getConnection();

        // Inisialisasi repository
        $sessionRepository = new SessionRepository($connection);
        $userRepository = new UserRepository($connection);
        $productRepository = new ProductRepository($connection);  // Inisialisasi ProductRepository

        // Inisialisasi service
        $this->sessionService = new SessionService($sessionRepository, $userRepository);
        $this->productServiser = new ProductServis($productRepository);  // Inisialisasi ProductServis dengan ProductRepository
    }

    public function index()
    {
        // Mengambil produk terbaru
        $produk = $this->productServiser->ProductTerbaru();
        $produkkategory = $this->productServiser->produkKategory();
        $getData = $this->productServiser->getData();
        $category = $this->productServiser->getCategory();

        // Ambil array produk dari response
        $produkTerbaru = $produk;

        // echo '<pre>';
        // var_dump($category);
        // echo '</pre>';
        // exit;

        $model = [
            "category" => $category,
            "terbaru" => $produkTerbaru,
            "kategori" => $produkkategory, // Kirim data kategori langsung
            "FullProduck" => $getData,
            "title" => "Home",
            "content" => "Welcome to the home page!",
            "success" => $_SESSION['success'] ?? null,
        ];
        View::render('Home/index', $model);
    }
}
