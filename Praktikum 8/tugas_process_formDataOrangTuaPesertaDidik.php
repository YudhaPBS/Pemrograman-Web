<?php
// Memasukkan data Ayah Kandung ke dalam tabel DataAyahKandung
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Data Ayah Kandung
    $ayah_nama = $_POST["ayah_nama"];
    $ayah_tempat_lahir = $_POST["ayah_tempat_lahir"];
    $ayah_tanggal_lahir = $_POST["ayah_tanggal_lahir"];
    $ayah_pekerjaan = $_POST["ayah_pekerjaan"];

    // Melakukan koneksi ke database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "latihan";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Query untuk memasukkan data Ayah Kandung ke dalam tabel DataAyahKandung
    $query = "INSERT INTO dataayahkandung (nama, tempat_lahir, tanggal_lahir, pekerjaan) VALUES ('$ayah_nama', '$ayah_tempat_lahir', '$ayah_tanggal_lahir', '$ayah_pekerjaan')";
    if ($conn->query($query) === TRUE) {
        echo '<script>alert("Data berhasil ditambahkan"); window.history.back();</script>';
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }

    // Data Ibu Kandung
    $ibu_nama = $_POST["ibu_nama"];
    $ibu_tempat_lahir = $_POST["ibu_tempat_lahir"];
    $ibu_tanggal_lahir = $_POST["ibu_tanggal_lahir"];
    $ibu_pekerjaan = $_POST["ibu_pekerjaan"];

    // Query untuk memasukkan data Ibu Kandung ke dalam tabel DataIbuKandung
    $query = "INSERT INTO dataibukandung (nama, tempat_lahir, tanggal_lahir, pekerjaan) VALUES ('$ibu_nama', '$ibu_tempat_lahir', '$ibu_tanggal_lahir', '$ibu_pekerjaan')";
    if ($conn->query($query) === TRUE) {
        echo '<script>alert("Data berhasil ditambahkan"); window.history.back();</script>';
        exit;
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
