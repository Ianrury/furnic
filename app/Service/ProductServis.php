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
     * Mengambil semua data produk terbaru.
     *
     * @return ProductResponse
     */
    public function ProductTerbaru(): ProductResponse
    {
        $products = $this->productRepository->productTerbaru(); // Mengambil 4 produk terbaru

        $response = new ProductResponse();
        $response->products = $products; // Menambahkan array produk terbaru ke response

        return $response;
    }

    /**
     * Mengambil semua data produk kategoty
     *
     * @return produk 
     */

    public function produkKategory() {
        $products = $this->productRepository->produkKategory();

        return $products;
    }

    public function bestSeller()
    {
        $products = $this->productRepository->bestseller();

        
        return $products;
    }


    /**
     * Mengambil semua data produk.
     *
     * @return array
     */
    public function getData()   
    {
        $products = $this->productRepository->products();

        return $products;
    }

        /**
     * Mengambil semua data produk.
     *
     * @return array
     */

     public function getProductsRekomendasi()   
    {
        $products = $this->productRepository->productRekomendasi();

        return $products;
    }

            /**
     * Mengambil semua data dummi.
     *
     * @return array
     */


    public function productdummi()   
    {
        $product = $this->productRepository->productalldummi();

        return $product;
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
