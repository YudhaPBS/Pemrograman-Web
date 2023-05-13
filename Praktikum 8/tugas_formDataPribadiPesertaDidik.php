<!DOCTYPE html>
<html>

<head>
    <title>Form Data Pribadi Peserta Didik</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h2>Form Data Pribadi Peserta Didik</h2>
        <form method="post" action="tugas_process_formDataPribadiPesertaDidik.php">
        <div class="form-group">
                <label for="id_pendaftaran">ID Pendaftaran:</label>
                <input type="text" class="form-control" id="id_pendaftaran" name="id_pendaftaran" placeholder="Masukkan ID pendaftaran" required>
            </div>
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama" required>
            </div>
            <div class="form-group">
                <label for="tempat_lahir">Tempat Lahir:</label>
                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Masukkan Tempat Lahir" required>
            </div>
            <div class="form-group">
                <label for="lahir">Tanggal Lahir:</label>
                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
            </div>
            <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin:</label>
                <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                    <option value="">Pilih Jenis Kelamin</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="tugas_formDataOrangTuaPesertaDidik.php" class="btn btn-secondary">Next</a>
        </form>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>