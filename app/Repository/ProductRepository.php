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

    public function productTerbaru(): array
    {
        $statement = $this->connection->query("SELECT * FROM product ORDER BY created_at DESC LIMIT 4");
        $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
    
        $products = [];
        foreach ($rows as $row) {
            $products[] = $this->mapRowToProduct($row);
        }
    
        return $products;
    }

    public function productRekomendasi ()
    {
        $statement = $this->connection->query("SELECT * FROM product ORDER BY created_at ASC LIMIT 4");
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function produkKategory()
    {
        $statement = $this->connection->query("
            SELECT 
                kategori.id_kategori,
                kategori.nama AS nama_kategori,
                product.*
            FROM kategori
            LEFT JOIN product ON product.id_kategori = kategori.id_kategori
            ORDER BY kategori.nama ASC, product.nama_product ASC
        ");
        
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function productalldummi()
    {
        $statement = $this->connection->query("SELECT * FROM product LIMIT 20");
        $rows = $statement->fetchAll(PDO::FETCH_ASSOC);

        $products = [];
        foreach ($rows as $row) {
            $products[] = $this->mapRowToProduct($row);
        }
    
        return $products;
    }

    public function productDiskon() 
    {
        $statement = $this->connection->query("SELECT * FROM product WHERE diskon > 0 LIMIT 4");
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }


    public function bestseller()
    {
        // Membuat query untuk mengambil 4 produk dengan jumlah pembelian terbanyak
        $statement = $this->connection->query("SELECT * FROM product ORDER BY beli DESC LIMIT 4");
    
        // Mengambil hasil query
        $bestsellers = $statement->fetchAll(PDO::FETCH_ASSOC);
    
        // Mengembalikan hasil ke view atau controller yang sesuai
        return $bestsellers;
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
        $product->harga = (int) $row['harga'];
        $product->beli = (int) $row['beli'];
        $product->qty = (int) $row['qty'];
        $product->diskon = $row['diskon'];
        $product->nama_vendor = $row['nama_vendor'];
        $product->foto = $row['foto'];
        $product->deskripsi = $row['deskripsi'];
        $product->spesifikasi = $row['spesifikasi'];
        $product->tipe_product = $row['tipe_product'];

        return $product;
    }
}
