<?php

namespace Importa\Furnic\PHP\FFI\Repository;

use Importa\Furnic\PHP\FFI\Domain\Session;

class SessionRepository
{

    private \PDO $connection;

    public function __construct(\PDO $connection)
    {
        $this->connection = $connection;
    }

    public function save(Session $session): Session
    {
        $statement = $this->connection->prepare("INSERT INTO sessions (user_id) VALUES (?)");
        $statement->execute([$session->user_id]);
        return $session;
    }


    public function findId(string $id): ?Session
    {
        $statement = $this->connection->prepare("SELECT * FROM sessions WHERE user_id = ? LIMIT 1");
        $statement->execute([$id]);
        $result = $statement->fetch(\PDO::FETCH_ASSOC);

        if ($result) {
            $session = new Session();
            $session->id = $result['id']; // ini penting
            $session->user_id = $result['user_id'];
            return $session;
        }

        return null;
    }


    public function deletebyId(string $id): void
    {
        $statement = $this->connection->prepare("DELETE FROM sessions WHERE id = ?");
        $statement->execute([$id]);
        $statement->closeCursor();
    }

    public function deleteAll(): void
    {
        $statement = $this->connection->prepare("DELETE FROM sessions");
        $statement->execute();
        $statement->closeCursor();
    }
}