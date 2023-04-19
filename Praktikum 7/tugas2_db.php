<?php
// konfigurasi koneksi ke database
$server = "localhost";
$username = "root";
$password = "";
$database = "pemweb_myDB";
// membuat koneksi ke database
$conn = mysqli_connect($server, $username, $password, $database);
// cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
// query untuk membuat tabel pegawai
$sql = "CREATE TABLE pegawai (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    alamat TEXT NOT NULL,
    telepon VARCHAR(20) NOT NULL
)";
// menjalankan query
if (mysqli_query($conn, $sql)) {
    echo "Tabel pegawai berhasil dibuat";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}
// menutup koneksi
mysqli_close($conn);
?>
