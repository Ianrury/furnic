<?php

namespace Importa\Furnic\PHP\FFI\Test\Servis;

use PHPUnit\Framework\TestCase;
use Importa\Furnic\PHP\FFI\Config\Database;
use Importa\Furnic\PHP\FFI\Domain\User;
use Importa\Furnic\PHP\FFI\Exception\ValidationException;
use Importa\Furnic\PHP\FFI\Model\UserLoginRequest;
use Importa\Furnic\PHP\FFI\Model\UserRegisterRequest;
use Importa\Furnic\PHP\FFI\Repository\UserRepository;
use Importa\Furnic\PHP\FFI\Servis\UserService;

class UserServisTest extends TestCase
{
    private UserService $userService;
    private UserRepository $userRepository;

    protected function setUp(): void
    {
        $this->userRepository = new UserRepository(Database::getConnection("test"));
        $this->userService = new UserService($this->userRepository);
        $this->userRepository->deleteAll();
    }

    public function testRegisterSucces()
    {
        $request = new UserRegisterRequest();
        $request->username = "johndoe";
        $request->email = "ian@gmail.com";
        $request->password = "baru1234";

        $response = $this->userService->register($request);

        self::assertEquals($request->username, $response->user->username);
        self::assertEquals($request->email, $response->user->email);
        self::assertNotNull($response->user->password);
    }

    public function testRegisterDuplicate()
    {
        $user = new User();
        $user->username = "johndoe";
        $user->email = "ianroeri@gmail.com";
        $user->password = "baru1234";

        $this->userRepository->save($user);

        $this->expectException(ValidationException::class);

        $request = new UserRegisterRequest();
        $request = new UserRegisterRequest();
        $request->username = "johndoe";
        $request->email = "ianroeri@gmail.com";
        $request->password = "baru1234";


        $this->userService->register($request);
    }

    public function testLoginNotFound()
    {
        $this->expectException(ValidationException::class);

        $request = new UserLoginRequest();
        $request->username = "johndoe22";
        $request->password = "baru1234";

        $this->userService->login($request);
    }

    public function testLoginWrongPassword()
    {
        $user = new User();
        $user->username = "johndoe";
        $user->email = "ianroeri@gmail.com";
        $user->password = password_hash("benar123", PASSWORD_BCRYPT); // password yg benar
        $this->userRepository->save($user);

        $this->expectException(ValidationException::class);

        $request = new UserLoginRequest();
        $request->username = "johndoe";
        $request->password = "SALAH123"; // password salah

        $this->userService->login($request); // ini seharusnya throw ValidationException
    }
}