<?php
namespace Importa\Furnic\PHP\FFI\Controller;

use PHPUnit\Framework\TestCase;
use Importa\Furnic\PHP\FFI\Config\Database;
use Importa\Furnic\PHP\FFI\Repository\UserRepository;

class UserControllerTest extends TestCase
{
    private UserController $user;

    public function setUp(): void
    {
        $this->user = new UserController();

        $usercontroller = new UserRepository(Database::getConnection());
        $usercontroller->deleteAll();
    }

    public function testRegister()
    {
        ob_start(); // Mulai buffer
        $this->user->register();
        $output = ob_get_clean(); // Ambil output dan akhiri buffer

        $this->assertStringContainsString("Register", $output);
    }




    public function testPostRegister()
    {
        $this->assertTrue(true);
    }
}