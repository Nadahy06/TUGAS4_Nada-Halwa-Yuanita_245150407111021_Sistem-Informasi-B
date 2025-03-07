<?php 
session_start();
$email = isset($_SESSION['email']) ? htmlspecialchars($_SESSION['email']) : "Belum login";
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curriculum Vitae</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background: linear-gradient(to right, #2c3e50, #4b0082);
            color: white;
        }
        .cv-container {
            background: rgba(255, 255, 255, 0.1);
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
            width: 90%;
            max-width: 1000px;
            text-align: center;
        }
        h2 {
            margin-bottom: 20px;
            color: white;
            font-size: 32px;
        }
        p {
            text-align: left;
            font-size: 20px;
        }
        strong {
            color: white;
        }
    </style>
</head>
<body>
    <div class="cv-container">
        <h2>Curriculum Vitae</h2>
        <p><strong>Nama Lengkap:</strong> <?= htmlspecialchars($_POST['nama'] ?? 'Tidak Diketahui'); ?></p>
        <p><strong>Tempat, Tanggal Lahir:</strong> <?= htmlspecialchars($_POST['ttl'] ?? 'Tidak Diketahui'); ?></p>
        <p><strong>Riwayat Pendidikan:</strong> <br> <?= nl2br(htmlspecialchars($_POST['pendidikan'] ?? 'Tidak Diketahui')); ?></p>
        <p><strong>Email:</strong> <?= $email; ?></p>
    </div>
</body>
</html>
