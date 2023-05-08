<!DOCTYPE html>
<html>
<head>
    <title>Daftar Kontak</title>
</head>
<body>
    <h2>Daftar Kontak</h2>
    <table border="1">
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Email</th>
            <th>Alamat</th>
            <th>Kota</th>
            <th>Pesan</th>
        </tr>
        <?php
        include 'koneksiMySQL.php';

        $query = "SELECT * FROM kontak";
        $result = mysqli_query($koneksi, $query);

        $no = 1;
        while ($data = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>".$no."</td>";
            echo "<td>".$data['Nama']."</td>";
            echo "<td>".$data['jkel']."</td>";
            echo "<td>".$data['Email']."</td>";
            echo "<td>".$data['Alamat']."</td>";
            echo "<td>".$data['Kota']."</td>";
            echo "<td>".$data['Pesan']."</td>";
            echo "</tr>";
            $no++;
        }
        ?>
    </table>
</body>
</html>
