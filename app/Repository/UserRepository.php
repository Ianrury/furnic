<?php 

namespace Importa\Furnic\PHP\FFI\Repository;
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
    
    public function deleteAll(): void
    {
        $statement = $this->connection->prepare("DELETE FROM users");
        $statement->execute();
    }

    public function userById (string $id): ?User
    {
        $statement = $this->connection->prepare("SELECT * FROM users WHERE id_user = ?");
        $statement->execute([$id]);
        $result = $statement->fetch(\PDO::FETCH_ASSOC);
        if ($result) {
            $user = new User();
            $user->id_user = $result['id_user'];
            $user->nama_user = $result['nama_user'];
            $user->email = $result['email'];
            $user->password = $result['password'];
            return $user;
        }
        return null;
    }
}