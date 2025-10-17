<?php
session_start();
$username_valid = "unnes";
$password_valid = "123456";

// Cek apakah form sudah di-submit
if (!isset($_POST['username']) || !isset($_POST['password'])) {
    header("Location: index.html");
}

$username = $_POST["username"];
$password = $_POST["password"];

// Cek username dan password
if ($username == $username_valid && $password == $password_valid) {

    $_SESSION['login'][] = [
        'username' => $username,
        'login_at' => date('Y-m-d H:i:s')
    ];

    echo "Selamat Datang: " . $username . ", Anda telah login sebanyak: " . $login_count . " kali";

    echo '<br>';
    echo '<a href="logout.php">logout</a>';

    echo '<pre>';
    var_dump($_SESSION['login']);
} else {
    echo "Username atau password salah!";
}

