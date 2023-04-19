<?php
// Konfigurasi koneksi ke database
$host = 'localhost';    // Nama host database
$user = 'root';         // Username untuk mengakses database
$password = '';         // Password untuk mengakses database
$database = 'pemweb_myDB';  // Nama database yang digunakan

// Membuat koneksi ke database
$koneksi = mysqli_connect($host, $user, $password, $database);

// Mengecek apakah parameter id telah dikirimkan melalui URL
if(isset($_GET['id'])) {
    // Mengambil nilai id dari parameter URL dan membersihkannya dari karakter yang tidak diperbolehkan
    $id = mysqli_real_escape_string($koneksi, $_GET['id']);

    // Query SQL untuk menghapus data pegawai berdasarkan id
    $query = "DELETE FROM pegawai WHERE id='$id'";

    // Menjalankan query SQL
    if(mysqli_query($koneksi, $query)) {
        // Jika query berhasil dijalankan, redirect ke halaman index.php
        header('Location: tugas3_insert_db.php');
        exit;
    } else {
        // Jika query gagal dijalankan, tampilkan pesan error
        echo "Error: " . mysqli_error($koneksi);
    }
}
?>