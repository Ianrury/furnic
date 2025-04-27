<?php 

namespace Importa\Furnic\PHP\FFI\Model;

class ProductRequest 
{
    public ?int $id_product = null;
    public ?string $nama_product = null;
    public ?int $id_kategori = null;
    public ?string $uom = null;
    public ?int $qty = null;
    public ?string $nama_vendor = null;
    public ?string $foto = null;
    public ?string $deskripsi = null;
    public ?string $spesifikasi = null;
    public ?string $tipe_product = null;
}
