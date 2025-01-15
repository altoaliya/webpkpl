<?php
session_start();
session_unset();  // Hapus semua data sesi
session_destroy();  // Hancurkan sesi
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f8f9fa;
            color: #333;
        }

        .message-box {
            text-align: center;
            padding: 20px;
            border: 1px solid #ddd;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .message-box h1 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .message-box p {
            font-size: 16px;
            color: #666;
        }
    </style>
</head>

<body>
    <div class="message-box">
        <h1>Berhasil Logout</h1>
        <p>Anda akan diarahkan ke halaman login dalam 3 detik...</p>
    </div>
    <script>
        setTimeout(() => {
            window.location.href = "formlogin.php"; // Ganti dengan halaman login kamu
        }, 3000); // 3 detik sebelum redirect
    </script>
</body>

</html>