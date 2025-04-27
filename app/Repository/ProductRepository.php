<?php

namespace Importa\Furnic\PHP\FFI\Repository;

use Importa\Furnic\PHP\FFI\Domain\Product;
use PDO;

class ProductRepository
{
    private PDO $connection;

    public function __construct(PDO $connection)
    {
/*************  ✨ Windsurf Command ⭐  *************/
    /**
     * Save a product
     *
     * @param Product $product
     *
     * @return Product
     */
/*******  323ea9fa-26b2-4ab2-938a-dd8afb307308  *******/        $this->connection = $connection;
    }

    public function save(Product $product): Product
    {
        $statement = $this->connection->prepare(
            "INSERT INTO product (nama_product, id_kategori, uom, qty, nama_vendor, foto, deskripsi, spesifikasi, tipe_product) 
             VALUES (:nama_product, :id_kategori, :uom, :qty, :nama_vendor, :foto, :deskripsi, :spesifikasi, :tipe_product)"
        );

        $statement->execute([
            ':nama_product' => $product->nama_product,
            ':id_kategori' => $product->id_kategori,
            ':uom' => $product->uom,
            ':qty' => $product->qty,
            ':nama_vendor' => $product->nama_vendor,
            ':foto' => $product->foto,
            ':deskripsi' => $product->deskripsi,
            ':spesifikasi' => $product->spesifikasi,
            ':tipe_product' => $product->tipe_product
        ]);

        $product->id_product = (int) $this->connection->lastInsertId();
        return $product;
    }

    public function products(): array
    {
        $statement = $this->connection->query("SELECT * FROM product");
        $rows = $statement->fetchAll(PDO::FETCH_ASSOC);

        $products = [];
        foreach ($rows as $row) {
            $products[] = $this->mapRowToProduct($row);
        }

        return $products;
    }

    public function productById(string $id): ?Product
    {
        $statement = $this->connection->prepare("SELECT * FROM product WHERE id_product = :id");
        $statement->execute([':id' => $id]);
        $row = $statement->fetch(PDO::FETCH_ASSOC);

        if ($row) {
            return $this->mapRowToProduct($row);
        } else {
            return null;
        }
    }

    public function deleteAll()
    {
        $this->connection->exec("DELETE FROM product");
    }

    private function mapRowToProduct(array $row): Product
    {
        $product = new Product();
        $product->id_product = (int) $row['id_product'];
        $product->nama_product = $row['nama_product'];
        $product->id_kategori = (int) $row['id_kategori'];
        $product->uom = $row['uom'];
        $product->qty = (int) $row['qty'];
        $product->nama_vendor = $row['nama_vendor'];
        $product->foto = $row['foto'];
        $product->deskripsi = $row['deskripsi'];
        $product->spesifikasi = $row['spesifikasi'];
        $product->tipe_product = $row['tipe_product'];

        return $product;
    }
}
