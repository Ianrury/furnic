<?php

namespace Importa\Furnic\PHP\FFI\Controller;

use Importa\Furnic\PHP\FFI\App\View;
use Importa\Furnic\PHP\FFI\Config\Database;
use Importa\Furnic\PHP\FFI\Exception\ValidationException;
use Importa\Furnic\PHP\FFI\Model\UserLoginRequest;
use Importa\Furnic\PHP\FFI\Model\UserRegisterRequest;
use Importa\Furnic\PHP\FFI\Repository\SessionRepository;
use Importa\Furnic\PHP\FFI\Repository\UserRepository;
use Importa\Furnic\PHP\FFI\Service\SessionService;
use Importa\Furnic\PHP\FFI\Service\UserService;


session_start();
class UserController
{
    private UserService $userService;
    private SessionService $sessionService;
    public function __construct()
    {
        $connection = Database::getConnection();
        $userRepository = new UserRepository($connection);
        $this->userService = new UserService($userRepository);

        
        $sessionRepository = new SessionRepository($connection);
        $this->sessionService = new SessionService($sessionRepository, $userRepository);
    }

    public function register()
    {
        $model = [
            "title" => "Register",
            "content" => "Welcome to the register page!",
            // "error" => "aduh eror",
        ];
        View::render('User/register', $model);
    }

    public function postRegister()
    {
        header('Content-Type: application/json');
    
        $request = new UserRegisterRequest();
        $request->nama_user = $_POST['nama_user'] ?? null;
        $request->no_telpon = $_POST['no_telpon'] ?? null;
        $request->email = $_POST['email'] ?? null;
        $request->password = $_POST['password'] ?? null;
    
        try {
            $response = $this->userService->register($request);
    
            // Pindahkan http_response_code SEBELUM echo
            http_response_code(200);
            echo json_encode([
                "success" => true,
                "message" => "Registrasi berhasil!",
                "data" => [
                    "id" => $response->user->id_user,
                    "nama_user" => $response->user->nama_user,
                    "email" => $response->user->email
                ]
            ]);
            exit;
        } catch (ValidationException $exception) {
            http_response_code(422);
            echo json_encode([
                "success" => false,
                "message" => $exception->getMessage()
            ]);
            exit;
        } catch (\Exception $e) {
            // Ganti catch kedua dari ValidationException jadi Exception umum
            http_response_code(500);
            echo json_encode([
                "success" => false,
                "message" => $e->getMessage()
            ]);
            exit;
        }
    }
    
    
    public function login()
    {
        $model = [
            "title" => "Login",
            "content" => "Welcome to the login page!",
        ];
        $user = $this->sessionService->current();
        if ($user != null) {
            header('Location: /');
            exit;
        } 

        // Ambil flash message jika ada
        if (isset($_SESSION['success'])) {
            $model['success'] = $_SESSION['success'];
            unset($_SESSION['success']); // Hapus setelah ditampilkan (flash)
        }

        View::render('User/login', $model);
    }

    public function postLogin()
    {
        $request = new UserLoginRequest();
        $request->email = $_POST['email'] ?? null;
        $request->password = $_POST['password'] ?? null;
    
        header('Content-Type: application/json');
    
        try {
            $response = $this->userService->login($request);
    
            $this->sessionService->create($response->user->id_user);
            $_SESSION['success'] = "Login success!";
            
            echo json_encode([
                'success' => true,
                'message' => 'Login berhasil!',
                'redirect' => '/'
            ]);
            exit;
        } catch (ValidationException $exception) {
            http_response_code(422); // supaya bisa ditangani AJAX sebagai 422
            echo json_encode([
                'success' => false,
                'message' => $exception->getMessage()
            ]);
            exit;
        }
    }
    
    

    public function logout()
    {
        $this->sessionService->destroy();
        header('Location: /login');
        exit;
    }

}