<?php 


namespace Importa\Furnic\PHP\FFI\Model;

class CustomerRegisterRequest
{
    public ?string $nama = null;
    public ?string $email = null;
    public ?string $no_hp = null;
    public ?string $kata_sandi = null;
    public ?string $alamat; 
    public ?string $kode_pos;
}
