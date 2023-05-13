<?php
// Memasukkan data ke dalam tabel RegistrasiPesertaDidik
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tanggal_pendaftaran = $_POST["tanggal_pendaftaran"];
    $alamat = $_POST["alamat"];
    $no_telepon = $_POST["no_telepon"];
    $NIS = $_POST["nis"];
    $nomor_peserta_ujian = $_POST["nomor_peserta_ujian"];
    $seri_SKHUN_sebelumnya = $_POST["seri_SKHUN_sebelumnya"];
    $seri_ijazah_sebelumnya = $_POST["seri_ijazah_sebelumnya"];

    // Melakukan koneksi ke database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "latihan";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Query untuk memasukkan data ke dalam tabel RegistrasiPesertaDidik
    $query = "INSERT INTO registrasipesertadidik ( tanggal_pendaftaran, alamat, no_telepon, NIS, nomor_peserta_ujian, seri_SKHUN_sebelumnya, seri_ijazah_sebelumnya) VALUES ('$tanggal_pendaftaran', '$alamat', '$no_telepon', '$NIS', '$nomor_peserta_ujian', '$seri_SKHUN_sebelumnya', '$seri_ijazah_sebelumnya')";
    if ($conn->query($query) === TRUE) {
        echo '<script>alert("Data berhasil ditambahkan"); window.history.back();</script>';
        exit;
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
