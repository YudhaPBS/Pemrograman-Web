<?php
// Memasukkan data ke dalam tabel DataPribadiPesertaDidik
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_pendaftaran = $_POST["id_pendaftaran"];
    $nama = $_POST["nama"];
    $tempat_lahir = $_POST["tempat_lahir"];
    $tanggal_lahir = $_POST["tanggal_lahir"];
    $jenis_kelamin = $_POST["jenis_kelamin"];

    // Melakukan koneksi ke database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "latihan";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Query untuk memasukkan data ke dalam tabel DataPribadiPesertaDidik
    $query = "INSERT INTO datapribadipesertadidik (id_pendaftaran, nama, tempat_lahir, tanggal_lahir, jenis_kelamin) VALUES ('$id_pendaftaran', '$nama', '$tempat_lahir', '$tanggal_lahir', '$jenis_kelamin')";
    if ($conn->query($query) === TRUE) {
        echo '<script>alert("Data berhasil ditambahkan"); window.history.back();</script>';
        exit;
    } else {
        $pesan = "Error: " . $query . "<br>" . $conn->error;
    }

    $conn->close();
}

?>
