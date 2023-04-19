<?php
// konfigurasi koneksi ke database
$host = "localhost";
$user = "root";
$password = "";
$database = "pemweb_myDB";
// membuat koneksi ke database
$conn = mysqli_connect($host, $user, $password, $database);
// cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
// query untuk menambah data ke tabel pegawai
if(isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $telepon = $_POST['telepon'];
    // query untuk menambah data
    $query = "INSERT INTO pegawai (nama, alamat, telepon) VALUES ('$nama', '$alamat', '$telepon')";
    // menjalankan query serta melakukan pengecekan
    if(mysqli_query($conn, $query)) {
        echo "Data berhasil disimpan";
    // jika gagal menyimpan data
    } else {
        echo "Gagal menyimpan data: " . mysqli_error($conn);
    }
}
// query untuk mengambil data dari tabel pegawai
$query = "SELECT * FROM pegawai";
// menjalankan query
$result = mysqli_query($conn, $query);
?>
<!-- Mendefinisikan jenis dokumen HTML yang digunakan -->
<!DOCTYPE html>
<!-- membuka bagian html pada halaman web -->
<html>
<!-- membuka bagian header pada halaman web -->
<head>
    <!-- menentukan judul halaman web pada tab browser -->
    <title>Data Pegawai</title>
    <!-- menutup bagian header pada halaman web -->
</head>
<!-- membuka bagian body pada halaman web -->
<body>
    <!-- menampilkan teks Data Pegawai -->
    <h1>Data Pegawai</h1>
    <!-- membuat form untuk menambah data -->
    <form method="post">
        <!-- menampilkan teks Nama -->
        <label>Nama</label>
        <!-- membuat inputan text untuk nama -->
        <input type="text" name="nama"><br>
        <!-- menampilkan teks Alamat -->
        <label>Alamat</label>
        <!-- membuat inputan text untuk alamat -->
        <input type="text" name="alamat"><br>
        <!-- menampilkan teks Telepon -->
        <label>Telepon</label>
        <!-- membuat inputan text untuk telepon -->
        <input type="text" name="telepon"><br>
        <!-- membuat tombol untuk menyimpan data -->
        <button type="submit" name="simpan">Simpan</button>
        <!-- menutup form -->
    </form>
    <!-- membuat garis horizontal -->
    <br>
    <!-- mengatur kodingan php -->
    <?php
    // mengecek apakah ada data pada tabel pegawai
    if(mysqli_num_rows($result) > 0) {
        // menampilkan data pegawai
        while($row = mysqli_fetch_assoc($result)) {
            echo "ID: " . $row['id'] . "<br>";
            echo "Nama: " . $row['nama'] . "<br>";
            echo "Alamat: " . $row['alamat'] . "<br>";
            echo "Telepon: " . $row['telepon'] . "<br>";
            echo "<a href='tugas3_edit_db.php?id=" . $row['id'] . "'>Edit</a> | <a href='tugas3_hapus_db.php?id=" . $row['id'] . "'>Hapus</a><br><br>";
        }
    // memberikan kondisi lain jika tidak ada data pada tabel pegawai
    } else {
        echo "Tidak ada data";
    }
    ?>
<!-- menutup bagian body pada halaman web -->
</body>
<!-- menutup bagian html pada halaman web -->
</html>
