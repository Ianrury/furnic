<?php

namespace Importa\Furnic\PHP\FFI\Controller;

use Importa\Furnic\PHP\FFI\App\View;
use Importa\Furnic\PHP\FFI\Config\Database;
use Importa\Furnic\PHP\FFI\Domain\Customer;
use Importa\Furnic\PHP\FFI\Exception\ValidationException;
use Importa\Furnic\PHP\FFI\Model\CustomerLoginRequest;
use Importa\Furnic\PHP\FFI\Model\CustomerRegisterRequest;
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
    public static string $COOKIE_NAME = 'X-FURNIC-SESSION';
    private \PDO $connection;
    public function __construct()
    {
        $this->connection = Database::getConnection(); // ✅ ini benar
        $userRepository = new UserRepository($this->connection);
        $this->userService = new UserService($userRepository);

        $sessionRepository = new SessionRepository($this->connection);
        $this->sessionService = new SessionService($sessionRepository, $userRepository);
    }


    public function register()
    {
        $model = [
            "title" => "Register",
            "content" => "Welcome to the register page!",
        ];
        View::render('User/register', $model);
    }

    public function postRegister()
    {
        header('Content-Type: application/json');

        $request = new CustomerRegisterRequest();
        $request->nama = $_POST['nama'] ?? null;
        $request->no_hp = $_POST['no_hp'] ?? null;
        $request->email = $_POST['email'] ?? null;
        $request->kata_sandi = $_POST['kata_sandi'] ?? null;

        try {
            $response = $this->userService->registerCustomer($request);


            // Pindahkan http_response_code SEBELUM echo
            http_response_code(200);
            echo json_encode([
                "success" => true,
                "message" => "Registrasi berhasil!",
                "data" => [
                    "id" => $response->customer->id_customer,
                    "nama_user" => $response->customer->nama,
                    "email" => $response->customer->email
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
        $request = new CustomerLoginRequest();
        $request->email = $_POST['email'] ?? null;
        $request->kata_sandi = $_POST['password'] ?? null;

        header('Content-Type: application/json');

        try {
            $response = $this->userService->login($request);


            $this->sessionService->create($response->customer->id_customer);
            // var_dump($token);
            // exit;
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

    public function EditUser()
    {
        $sessionId = $_COOKIE[self::$COOKIE_NAME] ?? null;

        $statement = $this->connection->prepare("SELECT id_user FROM session WHERE id_session = ? LIMIT 1");
        $statement->execute([$sessionId]);
        $session = $statement->fetch(\PDO::FETCH_ASSOC);
        if (!$session || !isset($session['id_user'])) {
            echo json_encode(['status' => 'error', 'message' => 'Sesi tidak valid, silakan login ulang']);
            return;
        }
        $id_user = $session['id_user']; // Ambil dari session

        // Ambil data user
        $statement = $this->connection->prepare("SELECT id_customer, nama, email, no_hp, alamat, detail FROM customer WHERE id_customer = ?");
        $statement->execute([$id_user]);
        $user = $statement->fetch(\PDO::FETCH_ASSOC);

        if (!$user) {
            echo json_encode(['status' => 'error', 'message' => 'User tidak ditemukan']);
            return;
        }

        // Kembalikan nomor hp tanpa +62 untuk diinput
        if (!empty($user['no_hp']) && str_starts_with($user['no_hp'], '+62')) {
            $user['no_hp'] = substr($user['no_hp'], 3); // hapus +62
        }

        echo json_encode(['status' => 'success', 'data' => $user]);
    }

    public function UpdateUser()
    {
        $data = $_POST;

        // Validasi input
        if (
            empty($data['nama']) ||
            empty($data['email']) ||
            empty($data['no_hp']) ||
            empty($data['alamat']) ||
            empty($data['detail'])
        ) {
            echo json_encode(['status' => 'error', 'message' => 'Semua field wajib diisi.']);
            return;
        }

        if (!preg_match('/^8[0-9]{7,12}$/', $data['no_hp'])) {
            echo json_encode(['status' => 'error', 'message' => 'Nomor HP harus dimulai dengan angka 8 dan berisi 8-13 digit.']);
            return;
        }

        // query mendapatkan produk yang ada di keranjang untuk user ini
        $sessionId = $_COOKIE[self::$COOKIE_NAME] ?? null;

        if (!$sessionId) {
            echo json_encode(['status' => 'error', 'message' => 'Silakan login terlebih dahulu']);
            return;
        }

        $statement = $this->connection->prepare("SELECT id_user FROM session WHERE id_session = ? LIMIT 1");
        $statement->execute([$sessionId]);
        $session = $statement->fetch(\PDO::FETCH_ASSOC);
        if (!$session || !isset($session['id_user'])) {
            echo json_encode(['status' => 'error', 'message' => 'Sesi tidak valid, silakan login ulang']);
            return;
        }
        $id_user = $session['id_user']; // Ambil dari session

        $nama = $data['nama'];
        $email = $data['email'];
        $no_hp = '+62' . ltrim($data['no_hp'], '0'); // pastikan tidak ada 0 diawal
        $alamat = $data['alamat'];
        $detail = $data['detail'];

        $stmt = $this->connection->prepare("UPDATE customer SET nama = ?, email = ?, no_hp = ?, alamat = ?, detail = ? WHERE id_customer = ?");
        $updated = $stmt->execute([$nama, $email, $no_hp, $alamat, $detail, $id_user]);

        if ($updated) {
            echo json_encode(['status' => 'success', 'message' => 'Data user berhasil diperbarui']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Gagal memperbarui data user']);
        }
    }



    public function logout()
    {
        $this->sessionService->destroy();
        header('Location: /login');
        exit;
    }

}