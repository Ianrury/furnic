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
use Importa\Furnic\PHP\FFI\App\Email;


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

    public function Ubahsandi()
    {
        $model = [
            "title" => "Ubah Sandi",
            "content" => "Welcome to the ubah sandi page!",
        ];
        View::render('User/ubahsandi', $model);
    }

    public function verfikasiEmail()
    {
        $model = [
            'title'=> 'Verifikasi Email',
        ];
        View::render('User/verfikasi-email', $model);
    }


    public function logout()
    {
        $this->sessionService->destroy();
        header('Location: /login');
        exit;
    }

    public function forgotPassword()
    {
        $model = [
            "title" => "Lupa Sandi",
            "content" => "Welcome to the forgot password page!",
        ];
        View::render('User/forgot-password', $model);
    }

    public function postForgotPassword()
    {
        $request = $_POST['email'] ?? null;

        header('Content-Type: application/json');

        if (empty($request)) {
            echo json_encode(['success' => false, 'message' => 'Email tidak boleh kosong!']);
            exit;
        }

        try {
            $stmt = $this->connection->prepare("SELECT * FROM customer WHERE email = ? LIMIT 1");
            $stmt->execute([$request]);
            $user = $stmt->fetch(\PDO::FETCH_ASSOC);

            if (!$user) {
                echo json_encode(['success' => false, 'message' => 'Email tidak terdaftar!']);
                exit;
            }

            // Generate token
            $token = bin2hex(random_bytes(32));

            // Simpan token ke database
            $update = $this->connection->prepare("UPDATE customer SET reset_token = ? WHERE email = ?");
            $update->execute([$token, $request]);

            $resetLink = "http://localhost:8080/reset-password?token=" . $token;

            $judulEmail = "Furnic Importa - Password Reset Request";
            $isiEmail = '
            <!DOCTYPE html>
            <html>
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Password Reset</title>
                <style>
                    body {
                        font-family: Arial, sans-serif;
                        line-height: 1.6;
                        color: #333333;
                        max-width: 600px;
                        margin: 0 auto;
                        padding: 20px;
                    }
                    .container {
                        border: 1px solid #dddddd;
                        border-radius: 5px;
                        padding: 25px;
                    }
                    .header {
                        border-bottom: 1px solid #eeeeee;
                        padding-bottom: 15px;
                        margin-bottom: 20px;
                    }
                    .button {
                        display: inline-block;
                        background-color: #0066cc;
                        color: white !important;
                        text-decoration: none;
                        padding: 10px 20px;
                        border-radius: 5px;
                        margin: 20px 0;
                    }
                    .footer {
                        margin-top: 30px;
                        padding-top: 15px;
                        border-top: 1px solid #eeeeee;
                        font-size: 12px;
                        color: #777777;
                    }
                </style>
            </head>
            <body>
                <div class="container">
                    <div class="header">
                        <h2>Password Reset Request</h2>
                    </div>
                    
                    <p>Dear Customer,</p>
                    
                    <p>We received a request to reset the password for your account. To complete this process, please click on the button below:</p>
                    
                     <p><a href="' . $resetLink . '" style="padding:10px 20px; background:#0066cc; color:#fff; text-decoration:none; text-align: center;">Reset Password</a></p>
                    
                    <p>This link will direct you to a secure page where you can create a new password for your account. For security reasons, this link will expire in 24 hours.</p>
                    
                    <p>If you did not request this password reset, please disregard this email. No changes will be made to your account.</p>
                    
                    <p><strong>Need help?</strong> If you\'re experiencing any issues with resetting your password, please contact our customer support team.</p>
                    
                    <p>Thank you for choosing our service.</p>
                    
                    <p>Best regards,<br>
                    Customer Support Team<br>
                    Importa Furnic</p>
                    
                    <div class="footer">
                        <p>This is an automated message, please do not reply directly to this email.</p>
                        <p>The information contained in this email is confidential and may be privileged. If you are not the intended recipient, please notify us immediately.</p>
                    </div>
                </div>
            </body>
            </html>
            ';

            $emailSent = Email::send($request, $judulEmail, $isiEmail);

            if (!$emailSent) {
                echo json_encode(['success' => false, 'message' => 'Gagal mengirim email!']);
                exit;
            }

            echo json_encode(['success' => true, 'message' => 'Link reset password telah dikirim ke email Anda.']);
        } catch (ValidationException $e) {
            echo json_encode(['success' => false, 'message' => 'Terjadi kesalahan: ' . $e->getMessage()]);
        }
    }
    public function ubahsandiPost()
    {
        $token = $_POST['token'] ?? null;
        $newPassword = $_POST['password'] ?? null;

        header('Content-Type: application/json');

        if (empty($token) || empty($newPassword)) {
            echo json_encode(['success' => false, 'message' => 'Token dan password baru wajib diisi.']);
            exit;
        }

        // Validasi kekuatan password
        if (strlen($newPassword) < 8) {
            echo json_encode(['success' => false, 'message' => 'Password minimal terdiri dari 8 karakter.']);
            exit;
        }

        if (!preg_match('/[A-Z]/', $newPassword)) {
            echo json_encode(['success' => false, 'message' => 'Password harus mengandung minimal 1 huruf kapital.']);
            exit;
        }

        if (!preg_match('/[0-9]/', $newPassword)) {
            echo json_encode(['success' => false, 'message' => 'Password harus mengandung minimal 1 angka.']);
            exit;
        }

        try {
            // Verifikasi token reset
            $stmt = $this->connection->prepare("SELECT * FROM customer WHERE reset_token = ? LIMIT 1");
            $stmt->execute([$token]);
            $user = $stmt->fetch(\PDO::FETCH_ASSOC);

            if (!$user) {
                echo json_encode(['success' => false, 'message' => 'Token tidak valid atau sudah digunakan.']);
                exit;
            }

            // Periksa apakah token sudah kadaluarsa (opsional, jika Anda menyimpan waktu kadaluarsa token)
            // if (isset($user['reset_token_expires']) && strtotime($user['reset_token_expires']) < time()) {
            //     echo json_encode(['success' => false, 'message' => 'Token reset password sudah kadaluarsa. Silakan minta reset password baru.']);
            //     exit;
            // }

            // Hash password baru
            $hashed = password_hash($newPassword, PASSWORD_BCRYPT);

            // Update password dan hapus token reset
            $update = $this->connection->prepare("UPDATE customer SET kata_sandi = ?, reset_token = NULL WHERE id_customer = ?");
            $update->execute([$hashed, $user['id_customer']]);


            // Kirim respons sukses
            echo json_encode([
                'success' => true,
                'message' => 'Password berhasil direset! Silakan login dengan password baru Anda.',
                'redirect' => '/login'
            ]);

        } catch (ValidationException $e) {
            http_response_code(422);
            echo json_encode(['success' => false, 'message' => 'Terjadi kesalahan: ' . $e->getMessage()]);
        } catch (\Exception $e) {
            http_response_code(500);
            echo json_encode(['success' => false, 'message' => 'Terjadi kesalahan sistem. Silakan coba lagi nanti.']);
        }
    }

    public function profile()
    {
        $model = [
            "title" => "profile",
            "content" => "Welcome to the ubah sandi page!",
        ];
        View::render('User/profile', $model);
    }
}