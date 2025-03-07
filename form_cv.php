<?php 
session_start();
$email = isset($_SESSION['email']) ? htmlspecialchars($_SESSION['email']) : "Belum login";
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form CV</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f4f4f4;
        }
        .form-container {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            width: 40%;
            max-width: 500px;
            text-align: center;
        }
        h2 {
            margin-bottom: 20px;
            color: #2c3e50;
        }
        label {
            display: block;
            margin-top: 10px;
            text-align: left;
            font-weight: bold;
            color: #34495e;
        }
        input, textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            margin-top: 20px;
            background: #4b0082;
            color: white;
            border: none;
            padding: 12px;
            width: 100%;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }
        button:hover {
            background: #341a5f;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Formulir CV</h2>
        <form action="cv.php" method="POST">
            <label for="nama">Nama Lengkap:</label>
            <input type="text" id="nama" name="nama" required>

            <label for="ttl">Tempat, Tanggal Lahir:</label>
            <input type="text" id="ttl" name="ttl" required>

            <label for="pendidikan">Riwayat Pendidikan:</label>
            <textarea id="pendidikan" name="pendidikan" required></textarea>

            <button type="submit">Buat CV</button>
        </form>
        <p>Email Anda: <?= $email; ?></p>
    </div>
</body>
</html>
