<?php
session_start();

// Memeriksa apakah pengguna sudah login atau belum
if (!isset($_SESSION['username'])) {
    // Jika pengguna belum login, redirect ke halaman login
    header('Location: index.php');
    exit;
}

// Pengguna sudah login, tampilkan halaman cetak.php
?>

<!DOCTYPE html>
<html>

<head>
    <title>Cetak</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h2>Selamat datang, <?php echo $_SESSION['username']; ?></h2>
        <p>Ini adalah halaman cetak.php yang hanya dapat diakses setelah login.</p>
        <a href="index.php" class="btn btn-primary">Logout</a>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>