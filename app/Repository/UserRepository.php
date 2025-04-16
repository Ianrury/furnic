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
        $statement = $this->connection->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
        $statement->execute([$user->username, $user->email, $user->password]);
        return $user;
    }   

    public function findByUsername(string $username): ?User
    {
        $statement = $this->connection->prepare("SELECT * FROM users WHERE username = ?");
        $statement->execute([$username]);
        $result = $statement->fetch(\PDO::FETCH_ASSOC);
        if ($result) {
            $user = new User();
            $user->username = $result['username'];
            $user->email = $result['email'];
            $user->password = $result['password'];
            return $user;
        }
        return null;
    }

    public function deleteAll(): void
    {
        $statement = $this->connection->prepare("DELETE FROM users");
        $statement->execute();
    }
}