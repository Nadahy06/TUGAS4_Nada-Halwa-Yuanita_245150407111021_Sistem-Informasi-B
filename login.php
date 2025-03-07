<?php 
ini_set('display_errors', 1);
error_reporting(E_ALL);

session_start(); 

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $password = trim($_POST['password']);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Format email tidak valid!'); window.location.href='index.html';</script>";
        exit();
    }

    $domain = substr(strrchr($email, "@"), 1);

    if ($password === $domain) {
        $_SESSION['email'] = $email; 
        header("Location: form_cv.php");
        exit();
    } else {
        echo "<script>alert('Login gagal! Password harus sesuai dengan domain email.'); window.location.href='index.html';</script>";
    }
} else {
    
    header("Location: index.html");
    exit();
}
?>

