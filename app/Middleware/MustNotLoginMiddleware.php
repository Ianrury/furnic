<?php

namespace Importa\Furnic\PHP\FFI\Middleware;

use Importa\Furnic\PHP\FFI\Config\Database;
use Importa\Furnic\PHP\FFI\Repository\SessionRepository;
use Importa\Furnic\PHP\FFI\Repository\UserRepository;
use Importa\Furnic\PHP\FFI\Service\SessionService;


class MustNotLoginMiddleware implements Middleware
{
    private SessionService $sessionService;
    public function __construct()
    {
        $sessionRepository = new SessionRepository(Database::getConnection());
        $userRepository = new UserRepository(Database::getConnection());
        $this->sessionService = new SessionService($sessionRepository, $userRepository);
    }

    public function before(): void
    {
        $user = $this->sessionService->current();
        if ($user != null) {
            $previous = $_SERVER['HTTP_REFERER'] ?? '/';
            header("Location: $previous");
            exit;
        }
    }

}
