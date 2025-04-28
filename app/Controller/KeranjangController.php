<?php 

namespace Importa\Furnic\PHP\FFI\Controller;
use Importa\Furnic\PHP\FFI\App\View;

class KeranjangController {

    public function index() {
        $model = [
            "title" => "Keranjang",
            "content" => "Welcome to the keranjang page!",
        ];
        View::render('Keranjang/index', $model);
    }
}