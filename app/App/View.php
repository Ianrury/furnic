<?php

namespace Importa\Furnic\PHP\FFI\App;

class View
{
    public static function render(string $view, $model)
    {
        // require __DIR__ . '/../View/Templates/header.php';
        require __DIR__ . '/../View/' . $view . '.php';
        // require __DIR__ . '/../View/Templates/footer.php';
    }


}