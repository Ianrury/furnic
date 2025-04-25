<?php

namespace Importa\Furnic\PHP\FFI\Test\Service;

use PHPUnit\Framework\TestCase;
use Importa\Furnic\PHP\FFI\Config\Database;
use Importa\Furnic\PHP\FFI\Domain\User;
use Importa\Furnic\PHP\FFI\Exception\ValidationException;
use Importa\Furnic\PHP\FFI\Model\UserLoginRequest;
use Importa\Furnic\PHP\FFI\Model\UserRegisterRequest;
use Importa\Furnic\PHP\FFI\Repository\UserRepository;
use Importa\Furnic\PHP\FFI\Service\UserService;

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

    // public function testRegisterSucces()
    // {
    //     $request = new UserRegisterRequest();
    //     $request->username = "johndoe";
    //     $request->email = "ian@gmail.com";
    //     $request->password = "baru1234";

    //     $response = $this->userService->register($request);

    //     self::assertEquals($request->username, $response->user->username);
    //     self::assertEquals($request->email, $response->user->email);
    //     self::assertNotNull($response->user->password);
    // }

    // public function testRegisterDuplicate()
    // {
    //     $user = new User();
    //     $user->username = "johndoe";
    //     $user->email = "ianroeri@gmail.com";
    //     $user->password = "baru1234";

    //     $this->userRepository->save($user);

    //     $this->expectException(ValidationException::class);

    //     $request = new UserRegisterRequest();
    //     $request = new UserRegisterRequest();
    //     $request->username = "johndoe";
    //     $request->email = "ianroeri@gmail.com";
    //     $request->password = "baru1234";


    //     $this->userService->register($request);
    // }

    public function testLoginNotFound()
    {
        $this->expectException(ValidationException::class);

        $request = new UserLoginRequest();
        $request->email = "johndoe22";
        $request->password = "baru1234";

        $this->userService->login($request);
    }

    public function testLoginWrongPassword()
    {
        // Buat user baru dengan email dan password yang benar
        $user = new User();
        $user->nama_user = "John Doe";  // nama_user
        $user->no_telpon = "123456789"; // no_telpon
        $user->email = "ianroeri@gmail.com";  // email
        $user->password = password_hash("benar123", PASSWORD_BCRYPT);  // password yang benar
        $user->jabatan_user = "Admin";  // jabatan_user
        $user->role_akses = 1;  // role_akses (misalnya role admin)
        $this->userRepository->save($user); // Simpan user ke database
    
        // Mengharapkan pengecualian saat password salah
        $this->expectException(ValidationException::class);
    
        // Kirimkan request login dengan password yang salah
        $request = new UserLoginRequest();
        $request->email = "ianroeri@gmail.com";  // email yang benar
        $request->password = "SALAH123";  // password yang salah
    
        // Panggil fungsi login dan pastikan itu melempar ValidationException
        $this->userService->login($request);
    }
    
}