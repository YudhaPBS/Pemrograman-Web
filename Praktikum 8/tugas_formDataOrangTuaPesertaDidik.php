<!DOCTYPE html>
<html>

<head>
    <title>Form Submit</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h2>Form Data Ayah Kandung</h2>
        <form method="post" action="tugas_process_formDataOrangTuaPesertaDidik.php">
            <div class="form-group">
                <label for="ayah_nama">Nama Ayah:</label>
                <input type="text" class="form-control" id="ayah_nama" name="ayah_nama" placeholder="Masukkan Nama Ayah" required>
            </div>
            <div class="form-group">
                <label for="ayah_tempat_lahir">Tempat Lahir Ayah:</label>
                <input type="text" class="form-control" id="ayah_tempat_lahir" name="ayah_tempat_lahir" placeholder="Masukkan Tempat Lahir Ayah" required>
            </div>
            <div class="form-group">
                <label for="ayah_tanggal_lahir">Tanggal Lahir Ayah:</label>
                <input type="date" class="form-control" id="ayah_tanggal_lahir" name="ayah_tanggal_lahir" required>
            </div>
            <div class="form-group">
                <label for="ayah_pekerjaan">Pekerjaan Ayah:</label>
                <input type="text" class="form-control" id="ayah_pekerjaan" name="ayah_pekerjaan" placeholder="Masukkan Pekerjaan Ayah" required>
            </div>
            <h2>Form Data Ibu Kandung</h2>
            <div class="form-group">
                <label for="ibu_nama">Nama Ibu:</label>
                <input type="text" class="form-control" id="ibu_nama" name="ibu_nama" placeholder="Masukkan Nama Ibu" required>
            </div>
            <div class="form-group">
                <label for="ibu_tempat_lahir">Tempat Lahir Ibu:</label>
                <input type="text" class="form-control" id="ibu_tempat_lahir" name="ibu_tempat_lahir" placeholder="Masukkan Tempat Lahir Ibu" required>
            </div>
            <div class="form-group">
                <label for="ibu_tanggal_lahir">Tanggal Lahir Ibu:</label>
                <input type="date" class="form-control" id="ibu_tanggal_lahir" name="ibu_tanggal_lahir" required>
            </div>
            <div class="form-group">
                <label for="ibu_pekerjaan">Pekerjaan Ibu:</label>
                <input type="text" class="form-control" id="ibu_pekerjaan" name="ibu_pekerjaan" placeholder="Masukkan Pekerjaan Ibu" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="tugas_formValidation.php" class="btn btn-secondary">Next</a>
        </form>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>