<!DOCTYPE html>
<html>

<head>
    <title>Tampilkan Peserta Terdaftar</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h2>Data Peserta Terdaftar</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID Pendaftaran</th>
                    <th>Nama</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Melakukan koneksi ke database
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "latihan";

                $conn = new mysqli($servername, $username, $password, $dbname);
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // Query untuk mendapatkan data peserta terdaftar
                $query = "SELECT * FROM datapribadipesertadidik";
                $result = $conn->query($query);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["id_pendaftaran"] . "</td>";
                        echo "<td>" . $row["nama"] . "</td>";
                        echo "<td>" . $row["tempat_lahir"] . "</td>";
                        echo "<td>" . $row["tanggal_lahir"] . "</td>";
                        echo "<td>" . $row["jenis_kelamin"] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='8'>Tidak ada data peserta terdaftar.</td></tr>";
                }

                $conn->close();
                ?>
            </tbody>
        </table>
        <a href="tugas_formValidation.php" class="btn btn-secondary">Kembali</a>
    </div>
    
    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>