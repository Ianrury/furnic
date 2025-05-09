<?php

namespace Importa\Furnic\PHP\FFI\Domain;

class DetailProduct
{
    public int $id;
    public ?string $foto_kanan;
    public ?string $foto_kiri;
    public ?string $foto_depan;
    public int $id_product;
    public ?string $foto_belakang;
    public ?string $warna;
    public ?string $motif;
    public string $created_at;
    public string $updated_at;
    // public ?string $id_sku;
}
