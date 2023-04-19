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
// query untuk mengambil data dari tabel pegawai
if(isset($_POST['ubah'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $telepon = $_POST['telepon'];
    // query untuk mengubah data
    $query = "UPDATE pegawai SET nama='$nama', alamat='$alamat', telepon='$telepon' WHERE id=$id";
    // menjalankan query serta melakukan pengecekan
    if(mysqli_query($conn, $query)) {
        header("Location: tugas3_insert_db.php");
        exit();
    } else {
        echo "Gagal mengubah data: " . mysqli_error($conn);
    }
}
// cek apakah parameter id sudah diisi
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    // query untuk mengambil data berdasarkan id
    $query = "SELECT * FROM pegawai WHERE id=$id";
    // menjalankan query
    $result = mysqli_query($conn, $query);
    // cek apakah data ditemukan
    if(mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $nama = $row['nama'];
        $alamat = $row['alamat'];
        $telepon = $row['telepon'];
    // jika data tidak ditemukan
    } else {
        echo "Data tidak ditemukan";
        exit();
    }
// jika parameter id belum diisi
} else {
    header("Location: tugas3_insert_db.php");
    exit();
}
?>
<!-- Mendefinisikan jenis dokumen HTML yang digunakan -->
<!DOCTYPE html>
<!-- membuka bagian html pada halaman web -->
<html>
<!-- membuka bagian header pada halaman web -->
<head>
    <!-- menentukan judul halaman web pada tab browser -->
    <title>Edit Data Pegawai</title>
</head>
<!-- membuka bagian body pada halaman web -->
<body>
    <!-- menampilkan teks dengan ukuran tertentu -->
    <h1>Edit Data Pegawai</h1>
    <!-- membuat form dengan method post -->
    <form method="post">
        <!-- membuat inputan hidden untuk menyimpan id -->
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <!-- membuat label dan inputan text untuk nama -->
        <label>Nama</label>
        <!-- membuat inputan text dengan value nama -->
        <input type="text" name="nama" value="<?php echo $nama; ?>"><br>
        <!-- membuat label dan inputan text untuk alamat -->
        <label>Alamat</label>
        <!-- membuat inputan text dengan value alamat -->
        <input type="text" name="alamat" value="<?php echo $alamat; ?>"><br>
        <!-- membuat label dan inputan text untuk telepon -->
        <label>Telepon</label>
        <!-- membuat inputan text dengan value telepon -->
        <input type="text" name="telepon" value="<?php echo $telepon; ?>"><br>
        <!-- membuat button submit -->
        <button type="submit" name="ubah">Ubah</button>
    <!-- menutup form -->
    </form>
<!-- menutup bagian body pada halaman web -->
</body>
<!-- menutup bagian html pada halaman web -->
</html>
