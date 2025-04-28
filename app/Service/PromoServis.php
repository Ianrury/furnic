<?php

namespace Importa\Furnic\PHP\FFI\Service;

use Importa\Furnic\PHP\FFI\Domain\Product;
use Importa\Furnic\PHP\FFI\Model\ProductRequest;
use Importa\Furnic\PHP\FFI\Model\ProductResponse;
use Importa\Furnic\PHP\FFI\Repository\ProductRepository;
use Importa\Furnic\PHP\FFI\Exception\ValidationException;

class PromoServis
{
    private ProductRepository $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

        /**
     * Mengambil semua data produk diskon.
     *
     * @return array
     */
    public function ProductDiskon()
    {
        $products = $this->productRepository->productDiskon();

        return $products;
    }
}