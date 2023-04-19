<?php
// konfigurasi koneksi ke database
$host = "localhost";
$username = "root";
$password = "";
$dbname = "pemweb_myDB";
// membuat koneksi ke database
$conn = new mysqli($host, $username, $password, $dbname);
// memeriksa koneksi
if ($conn->connect_error) {
  die("Koneksi gagal: " . $conn->connect_error);
}
// membuat tabel buku_tamu
$sql = "CREATE TABLE buku_tamu (
  ID_BT INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  NAMA VARCHAR(200) NOT NULL,
  EMAIL VARCHAR(50) NOT NULL,
  ISI TEXT NOT NULL
)";
// mengecek apakah proses pembuatan tabel berhasil atau gagal dilakukan
if ($conn->query($sql) === TRUE) {
  echo "Tabel buku_tamu berhasil dibuat";
} else {
  echo "Error creating table: " . $conn->error;
}
// menutup koneksi
$conn->close();
?>
