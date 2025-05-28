<?php
require_once __DIR__ . '/../../app/env.php';
$apiBaseUrl = env('API_BASE_URL');

$path = $_SERVER['REQUEST_URI'];
$segments = explode('/', trim($path, '/'));

$token = null;
$verified = false;
$error = null;

if (count($segments) >= 3 && $segments[0] === 'user' && $segments[1] === 'verifikasi') {
    $token = $segments[2];
}

if (!empty($token)) {
    $apiEndpoint = $apiBaseUrl . "/user/verifikasi/" . $token;

    $ch = curl_init($apiEndpoint);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $apiResponse = curl_exec($ch);

    if ($apiResponse === false) {
        $error = 'Kesalahan koneksi: ' . curl_error($ch);
    }

    curl_close($ch);

    if (empty($error)) {
        $result = json_decode($apiResponse, true);

        if ($result && isset($result['success'])) {
            $verified = $result['success'];
            if (!$verified) {
                $error = $result['message'] ?? 'Verifikasi gagal.';
            }
        } else {
            $error = 'Terjadi kesalahan saat memproses respons: ' . $apiResponse;
        }
    }
}
?>


<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifikasi Email</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.5;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            background-color: #fff;
            border-radius: 6px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
            padding: 20px;
            width: 85%;
            max-width: 320px;
            text-align: center;
        }

        .header {
            margin-bottom: 20px;
        }

        h1 {
            font-size: 18px;
            color: #2B4779;
            margin-bottom: 8px;
            font-weight: 600;
        }

        p {
            font-size: 14px;
            color: #555;
            margin-top: 0;
        }

        .btn {
            display: inline-block;
            background-color: #2B4779;
            color: white;
            padding: 10px 20px;
            border-radius: 4px;
            text-decoration: none;
            font-weight: 600;
            font-size: 14px;
            border: none;
            cursor: pointer;
            transition: background-color 0.2s;
            width: 85%;
            max-width: 180px;
        }

        .btn:hover {
            background-color: #3a5a96;
        }

        .icon {
            font-size: 40px;
            margin-bottom: 15px;
        }

        .success {
            color: #27ae60;
        }

        .error {
            color: #e74c3c;
        }

        .email-icon {
            color: #2B4779;
        }
    </style>
    <script>
        function redirectToLogin() {
            setTimeout(function() {
                window.location.href = "/login";
            }, 3000);
        }
    </script>
</head>

<body>
    <div class="container">
        <?php if ($verified): ?>
            <!-- Tampilan berhasil verifikasi -->
            <div class="icon success">✓</div>
            <div class="header">
                <h1>Email Terverifikasi</h1>
                <p>Terima kasih, akun Anda sekarang aktif.</p>
                <p>Anda akan dialihkan ke halaman login...</p>
            </div>
            <a href="/login" class="btn">Login Sekarang</a>
            <script>
                redirectToLogin();
            </script>
        <?php elseif ($error): ?>
            <!-- Tampilan error -->
            <div class="icon error">✗</div>
            <div class="header">
                <h1>Verifikasi Gagal</h1>
                <p><?php echo htmlspecialchars($error); ?></p>
            </div>
            <a href="/login" class="btn">Kembali ke Login</a>
        <?php else: ?>
            <!-- Tampilan loading -->
            <div class="icon email-icon">✉</div>
            <div class="header">
                <h1>Memproses Verifikasi</h1>
                <p>Mohon tunggu sebentar...</p>
            </div>
            <div class="btn" style="background-color: #ccc; cursor: default;">Sedang Memproses</div>
            <script>
                // Reload halaman untuk memproses verifikasi
                window.location.reload();
            </script>
        <?php endif; ?>
    </div>
</body>

</html>