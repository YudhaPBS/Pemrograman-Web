<?php
// Konfigurasi koneksi ke database
$host = 'localhost';    // Nama host database
$user = 'root';         // Username untuk mengakses database
$password = '';         // Password untuk mengakses database
$database = 'latihan';  // Nama database yang digunakan
// Membuat koneksi ke database
$koneksi = mysqli_connect($host, $user, $password, $database);
?>