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
        $statement = $this->connection->prepare("INSERT INTO session (id_user) VALUES (?)");
        $statement->execute([
            $session->id_user,
        ]);

        $session->id_session = (int) $this->connection->lastInsertId();

        return $session;
    }




    public function findId(string $id): ?Session
    {
        $statement = $this->connection->prepare("SELECT * FROM session WHERE id_session = ? LIMIT 1");
        $statement->execute([$id]);
        $result = $statement->fetch(\PDO::FETCH_ASSOC);

        if ($result) {
            $session = new Session();
            $session->id_session = $result['id_session'];
            $session->id_user = $result['id_user'];
            return $session;
        }

        return null;
    }


    public function deletebyId(string $id): void
    {
        $statement = $this->connection->prepare("DELETE FROM session WHERE id_session = ?");
        $statement->execute([$id]);
        $statement->closeCursor();
    }

    public function deleteAll(): void
    {
        $statement = $this->connection->prepare("DELETE FROM session");
        $statement->execute();
        $statement->closeCursor();
    }
}
