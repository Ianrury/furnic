<?php

namespace Importa\Furnic\PHP\FFI\Domain;

class Product
{
    public int $id_product;
    public string $nama_product;
    public int $id_kategori;
    public string $uom;
    public int $qty;
    public int $harga;
    public int $beli;
    public string $nama_vendor;
    public string $foto;

    public ?string $id_promo = null; // nullable string

    public string $deskripsi;
    public string $spesifikasi;
    public string $tipe_product;
}