<?php


namespace Importa\Furnic\PHP\FFI\Test\Repository;

use PHPUnit\Framework\TestCase;
use Importa\Furnic\PHP\FFI\Config\Database;
use Importa\Furnic\PHP\FFI\Domain\Session;
use Importa\Furnic\PHP\FFI\Repository\SessionRepository;

class SessionRepositoryTest extends TestCase
{
    private SessionRepository $sessionRepository;

    protected function setUp(): void
    {
        $this->sessionRepository = new SessionRepository(Database::getConnection());
        $this->sessionRepository->deleteAll();
    }

    public function testSaveSuccess(): void
    {
        $session = new Session();
        $session->user_id = 16;

        $this->sessionRepository->save($session);
        $result = $this->sessionRepository->findId($session->user_id);
        $this->assertEquals($session->user_id, $result->user_id);
    }


    public function testDeleteByIdSuccess(): void
    {
        $this->sessionRepository->deletebyId("1234");
        $this->assertNull($this->sessionRepository->findId("1234"));
    }

    public function testFindIdSuccess(): void
    {
        $session = $this->sessionRepository->findId("1234");
        $this->assertNotNull($session);
        $this->assertEquals("1234", $session->id);
    }
    public function testDeleteAllSuccess(): void
    {
        $this->sessionRepository->deleteAll();
        $this->assertNull($this->sessionRepository->findId("1234"));
    }
}