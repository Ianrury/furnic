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

    public function detailProduct(int $id)
    {
        $statement = $this->connection->prepare(
            "
            SELECT 
                p.id_product,
                p.nama_product,
                p.uom,
                p.harga,
                p.nama_vendor,
                p.qty as product_qty,
                p.foto AS product_foto,
                p.deskripsi,
                p.spesifikasi,
                p.tipe_product,
                dp.id AS id_detail_product,
                dp.id_sku,
                dp.warna,
                mp.id AS id_motif_produk,
                mp.motif,
                mp.foto_kanan,
                mp.qty,
                mp.foto_kiri,
                mp.foto_depan,
                mp.foto_belakang
            FROM 
                product p
            LEFT JOIN 
                detail_product dp ON dp.id_product = p.id_product
            LEFT JOIN 
                motif_produk mp ON mp.id_detail_product = dp.id
            WHERE 
                p.id_product = ?
            "
        );
        $statement->execute([$id]);
        $results = $statement->fetchAll(PDO::FETCH_ASSOC);

        // Jika ada hasilnya, pisahkan detail produk dan motif produk
        if ($results) {
            // Ambil data produk (produk hanya 1)
            $product = [
                'id_product' => $results[0]['id_product'],
                'nama_product' => $results[0]['nama_product'],
                'uom' => $results[0]['uom'],
                'harga' => $results[0]['harga'],
                'product_qty' => $results[0]['product_qty'],
                'nama_vendor' => $results[0]['nama_vendor'],
                'product_foto' => $results[0]['product_foto'],
                'deskripsi' => $results[0]['deskripsi'],
                'spesifikasi' => $results[0]['spesifikasi'],
                'tipe_product' => $results[0]['tipe_product'],
            ];

            // Kelompokkan detail produk berdasarkan id_detail_product
            $details = [];
            foreach ($results as $row) {
                $id_detail_product = $row['id_detail_product'];

                // Jika detail produk belum ada, buatkan array untuknya
                if (!isset($details[$id_detail_product])) {
                    $details[$id_detail_product] = [
                        'id_detail_product' => $id_detail_product,
                        'id_sku' => $row['id_sku'],
                        'warna' => $row['warna'],
                        'motifs' => [] // Array untuk menyimpan motif terkait
                    ];
                }

                // Masukkan motif ke dalam array motifs di detail produk yang sesuai
                $details[$id_detail_product]['motifs'][] = [
                    'id_motif_produk' => $row['id_motif_produk'],
                    'motif' => $row['motif'],
                    'foto_kanan' => $row['foto_kanan'],
                    'qty' => $row['qty'],
                    'foto_kiri' => $row['foto_kiri'],
                    'foto_depan' => $row['foto_depan'],
                    'foto_belakang' => $row['foto_belakang']
                ];
            }

            // Menambahkan array detail produk ke dalam product
            $product['details'] = array_values($details); // Menjaga struktur yang rapi

            return $product;
        }

        return null; // Jika tidak ada produk ditemukan
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

    public function productRekomendasi()
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

    public function Wislist($id_product, $id_customer)
    {
        try {
            $statement = $this->connection->prepare(
                "INSERT INTO wishlist (id_customer, id_product) VALUES (?, ?)"
            );
            $result = $statement->execute([$id_customer, $id_product]);

            return $result === true; // kembalikan true jika berhasil
        } catch (\PDOException $e) {
            // opsional: log error atau kembalikan false
            return false;
        }
    }

    public function isWishlist($id_product, $id_customer)
    {
        $statement = $this->connection->prepare(
            "SELECT * FROM wishlist WHERE id_customer = ? AND id_product = ?"
        );
        $statement->execute([$id_customer, $id_product]);
        return $statement->fetch(PDO::FETCH_ASSOC);
    }

    public function deleteWishlist($id_product, $id_customer)
    {
        $statement =  $this->connection->prepare(
            "DELETE FROM wishlist WHERE id_customer = ? AND id_product = ?"
        );
        $statement->execute([$id_customer, $id_product]);
        return $statement->rowCount() > 0; // akan mengembalikan true jika berhasil menghapus
    }
    

    public function productWislist($id_customer)
    {
        $statement = $this->connection->prepare(
            "SELECT product.* FROM product INNER JOIN wishlist ON product.id_product = wishlist.id_product WHERE wishlist.id_customer = ?"
        );
        $statement->execute([$id_customer]);
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
