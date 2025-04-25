<?php

namespace Importa\Furnic\PHP\FFI\Domain;

class User
{
    public int $id_user;
    public function token;
    public string $nama_user;
    public string $password;
    public string $jabatan_user;
    public int $role_akses;
}