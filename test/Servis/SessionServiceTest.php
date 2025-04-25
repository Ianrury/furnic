<?php  

namespace Importa\Furnic\PHP\FFI\Test\Service;

use Importa\Furnic\PHP\FFI\Config\Database;
use Importa\Furnic\PHP\FFI\Repository\SessionRepository;
use Importa\Furnic\PHP\FFI\Repository\UserRepository;

use Importa\Furnic\PHP\FFI\Service\SessionService;
use PHPUnit\Framework\TestCase;

function setcookie(string $name,string $value) {
    echo "Set cookie: $name = $value\n";
}
class SessionServiceTest extends TestCase
{
    private SessionService $sessionService;
    private SessionRepository $sessionRepository;
    private UserRepository $userRepository;

    protected function setUp(): void
    {
        $this->sessionRepository = new SessionRepository( Database::getConnection() );
        $this->userRepository = new UserRepository( Database::getConnection() );
        $this->sessionService = new SessionService($this->sessionRepository, $this->userRepository);
    }

    public function testCreateSession()
    {
        $session = $this->sessionService->create(16);

        $this->expectOutputRegex("[Set cookie: X-FURNIC-SESSION = $session->id]");
    }

    public function testDestroySession()
    {
        $this->sessionService->destroy();
        $this->assertNull($_COOKIE[SessionService::$COOKIE_NAME]);
    }

    public function testCurrentSession()
    {
        $user = $this->userRepository->findByUsername('testuser');
        $session = $this->sessionService->create($user->id);
        $_COOKIE[SessionService::$COOKIE_NAME] = $session->id;
        
        $currentUser = $this->sessionService->current();
        $this->assertEquals($user->username, $currentUser->username);
    }
}