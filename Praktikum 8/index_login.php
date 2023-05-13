<?php
session_start();

// Memeriksa apakah pengguna sudah login atau belum
if (isset($_SESSION['username'])) {
    // Pengguna sudah login, redirect ke halaman cetak.php
    header('Location: cetak.php');
    exit;
}

// Memeriksa apakah form login disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Mendapatkan data dari form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Melakukan koneksi ke database
    $servername = "localhost";
    $username_db = "root";
    $password_db = "";
    $dbname = "latihan"; // Ganti dengan nama database Anda

    $conn = new mysqli($servername, $username_db, $password_db, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Melakukan query untuk mencari username dan password yang cocok
    $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        // Username dan password cocok, set session dan redirect ke halaman cetak.php
        $_SESSION['username'] = $username;
        header('Location: cetak.php');
        exit;
    } else {
        // Jika username atau password salah, tampilkan pesan error
        $error = "Username atau password salah.";
    }
}
?>