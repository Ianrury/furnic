<?php

namespace Importa\Furnic\PHP\FFI\Repository;

use Importa\Furnic\PHP\FFI\Domain\Customer;
use Importa\Furnic\PHP\FFI\Domain\User;


class UserRepository
{
    private \PDO $connection;
    public function __construct(\PDO $connection)
    {
        $this->connection = $connection;
    }

    public function save(User $user): User
    {
        $statement = $this->connection->prepare("INSERT INTO users (nama_user, no_telpon, email, password, jabatan_user, role_akses) VALUES (?, ?, ?, ?, ?, ?)");
        $statement->execute([
            $user->nama_user,
            $user->no_telpon,
            $user->email,
            $user->password,
            $user->jabatan_user,
            $user->role_akses
        ]);

        // Ambil ID terakhir dari database dan isi ke objek User
        $user->id_user = (int)$this->connection->lastInsertId();

        return $user;
    }


    public function saveCustomer(Customer $customer): Customer
    {
        $statement = $this->connection->prepare("INSERT INTO customer (nama, email, no_hp, alamat, kode_pos, kata_sandi) VALUES (?, ?, ?, ?, ?, ?)");
        $statement->execute([
            $customer->nama,
            $customer->email,
            $customer->no_hp,
            $customer->alamat,
            $customer->kode_pos,
            $customer->kata_sandi
        ]);

        // Ambil ID terakhir dan isi ke objek Customer
        $customer->id_customer = (int)$this->connection->lastInsertId();

        return $customer;
    }


    public function findByemail(string $email): ?User
    {
        $statement = $this->connection->prepare("SELECT * FROM users WHERE email = ?");
        $statement->execute([$email]);
        $result = $statement->fetch(\PDO::FETCH_ASSOC);

        if ($result) {
            $user = new User();
            $user->id_user = $result['id_user'];
            $user->nama_user = $result['nama_user'];
            $user->email = $result['email'];
            $user->password = $result['password'];
            $user->no_telpon = $result['no_telpon'] ?? '';
            $user->token = $result['token'] ?? '';
            $user->jabatan_user = $result['jabatan_user'] ?? '';
            $user->role_akses = (int)($result['role_akses'] ?? 0);

            return $user;
        }

        return null;
    }

    public function findByEmailCustomer(string $email): ?Customer
    {
        $statement = $this->connection->prepare("SELECT * FROM customer WHERE email = ?");
        $statement->execute([$email]);
        $result = $statement->fetch(\PDO::FETCH_ASSOC);

        if ($result) {
            $customer = new Customer();
            $customer->id_customer = $result['id_customer'];
            $customer->nama = $result['nama'];
            $customer->email = $result['email'];
            $customer->no_hp = $result['no_hp'];
            $customer->alamat = $result['alamat'];
            $customer->kode_pos = (int)$result['kode_pos'];
            $customer->kata_sandi = $result['kata_sandi'];
            $customer->created_at = $result['created_at'];
            $customer->updated_at = $result['updated_at'];

            return $customer;
        }

        return null;
    }


    public function deleteAll(): void
    {
        $statement = $this->connection->prepare("DELETE FROM users");
        $statement->execute();
    }

    public function userById(string $id): ?Customer
    {
        $statement = $this->connection->prepare("SELECT * FROM customer WHERE id_customer = ?");
        $statement->execute([$id]);
        $result = $statement->fetch(\PDO::FETCH_ASSOC);

        if ($result) {
            $customer = new Customer();
            $customer->id_customer = $result['id_customer'];
            $customer->nama = $result['nama'];
            $customer->email = $result['email'];
            $customer->no_hp = $result['no_hp'];
            $customer->alamat = $result['alamat'];
            $customer->kode_pos = (int)$result['kode_pos'];
            $customer->kata_sandi = $result['kata_sandi'];
            $customer->created_at = $result['created_at'];
            $customer->updated_at = $result['updated_at'];

            return $customer;
        }

        return null;
    }

    public function userByIdCustomer(string $id)
    {
        $statement = $this->connection->prepare("SELECT id_customer FROM customer WHERE id_customer = ?");
        $statement->execute([$id]);
        $result = $statement->fetch(\PDO::FETCH_ASSOC);
    
        return $result ? $result['id_customer'] : null;
    }
    
}
