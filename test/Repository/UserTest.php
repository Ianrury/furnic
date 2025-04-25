<?php

namespace Importa\Furnic\PHP\FFI\Repository;

use PHPUnit\Framework\TestCase;
use Importa\Furnic\PHP\FFI\Config\Database;
use Importa\Furnic\PHP\FFI\Repository\UserRepository;

class UserTest extends TestCase{
    private UserRepository $userRepository;

    protected function setUp(): void
    {
        $this->userRepository = new UserRepository(Database::getConnection("test"));
        $this->userRepository->deleteAll();
    }

    public function testSaveSucces()
    {
        $user = new \Importa\Furnic\PHP\FFI\Domain\User();
        $user->username = "johndoe";
        $user->email = "ian@gmail.com";
        $user->password = "123456";
        $user = $this->userRepository->save($user);

        $result = $this->userRepository->findByUsername("johndoe");

        self::assertEquals($user->username, $result->username);
        self::assertEquals($user->email, $result->email);
    }
}