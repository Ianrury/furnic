<?php

namespace Importa\Furnic\PHP\FFI\Service;

use Importa\Furnic\PHP\FFI\Domain\Product;
use Importa\Furnic\PHP\FFI\Model\ProductRequest;
use Importa\Furnic\PHP\FFI\Model\ProductResponse;
use Importa\Furnic\PHP\FFI\Repository\ProductRepository;
use Importa\Furnic\PHP\FFI\Exception\ValidationException;

class ProductServis
{
    private ProductRepository $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    /**
     * Mengambil semua data produk.
     *
     * @return ProductResponse
     */
    public function getData(): ProductResponse
    {
        $products = $this->productRepository->products();

        $response = new ProductResponse();
        $response->products = $products;

        return $response;
    }

    /**
     * Menyimpan produk baru
     *
     * @param ProductRequest $request
     * @return Product
     * @throws ValidationException
     */
    public function create(ProductRequest $request): Product
    {
        if ($request->nama_product == null || $request->uom == null || $request->qty == null) {
            throw new ValidationException("Nama product, UOM, dan Qty wajib diisi.");
        }

        $product = new Product();
        $product->nama_product = $request->nama_product;
        $product->id_kategori = $request->id_kategori;
        $product->uom = $request->uom;
        $product->qty = $request->qty;
        $product->nama_vendor = $request->nama_vendor;
        $product->foto = $request->foto;
        $product->deskripsi = $request->deskripsi;
        $product->spesifikasi = $request->spesifikasi;
        $product->tipe_product = $request->tipe_product;

        return $this->productRepository->save($product);
    }

    /**
     * Mengambil detail produk berdasarkan id_product
     *
     * @param int $id_product
     * @return Product|null
     */
    public function getDetail(int $id_product): ?Product
    {
        return $this->productRepository->productById((string) $id_product);
    }
}
