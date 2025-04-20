<?php

namespace Importa\Furnic\PHP\FFI\Service;

use Importa\Furnic\PHP\FFI\Domain\Session;
use Importa\Furnic\PHP\FFI\Domain\User;
use Importa\Furnic\PHP\FFI\Repository\SessionRepository;
use Importa\Furnic\PHP\FFI\Repository\UserRepository;

class SessionService
{

    public static string $COOKIE_NAME = 'X-FURNIC-SESSION';
    private SessionRepository $sessionRepository;
    private UserRepository $userRepository;

    public function __construct(SessionRepository $sessionRepository, UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
        $this->sessionRepository = $sessionRepository;
    }

    public function create(int $user_id): Session
    {
        $session = new Session();
        $session->user_id = $user_id;


        $session = $this->sessionRepository->save($session);
        setcookie(self::$COOKIE_NAME, $session->id, time() + (60 * 60 * 24 * 30), '/');
        return $session;
    }

    public function destroy()
    {
        $sessionId = $_COOKIE[self::$COOKIE_NAME] ?? null;
        if ($sessionId) {
            $this->sessionRepository->deletebyId($sessionId);
            setcookie(self::$COOKIE_NAME, '', 1, '/');
        }
    }

    public function current(): ?User
    {
        $sessionId = $_COOKIE[self::$COOKIE_NAME] ?? null;

        // Tambahkan pengecekan null
        if ($sessionId === null) {
            return null;
        }

        $session = $this->sessionRepository->findId($sessionId);
        if ($session == null) {
            return null;
        }

        $user = $this->userRepository->userById($session->user_id);
        if ($user == null) {
            return null;
        }

        return $user;
    }

}