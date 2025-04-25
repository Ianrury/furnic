<?php 

namespace Importa\Furnic\PHP\FFI\Controller;

use Importa\Furnic\PHP\FFI\App\View;

class NotFoundController {
    public function index(): void
    {
        View::render('/not-found', [
            'title' => 'Not Found',
            'description' => 'Page not found'
        ]);
    }
}