<?php

namespace Importa\Furnic\PHP\FFI\Domain;

class Customer
{
    public int $id_customer;
    public string $nama;
    public string $email;
    public string $no_hp;
    public string $alamat;
    public ?int $kode_pos = null;
    public string $kata_sandi;
    public string $created_at;
    public string $updated_at;
}
