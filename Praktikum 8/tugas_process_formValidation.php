<?php
// Memvalidasi data login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Melakukan koneksi ke database
    $servername = "localhost";
    $usernameDB = "root";
    $passwordDB = "";
    $dbname = "latihan";

    $conn = new mysqli($servername, $usernameDB, $passwordDB, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Query untuk memeriksa data login
    $query = "SELECT * FROM registrasipesertadidik WHERE NIS = '$username' AND nomor_peserta_ujian = '$password'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        // Login berhasil, arahkan pengguna ke halaman berikutnya
        header("Location: tugas_formRegistrasiPesertaDidik.php");
        exit;
    } else {
        // Login gagal, tampilkan pesan peringatan
        echo '<script>alert("Username atau Password Salah"); window.history.back();</script>';
        exit;
    }

    $conn->close();
}
?>