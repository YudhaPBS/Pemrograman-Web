<!DOCTYPE html>
<html>
<head>
  <title>Form Registrasi Peserta Didik</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <h2>Form Registrasi Peserta Didik</h2>
    <form method="post" action="tugas_process_formRegistrasiPesertaDidik.php">
      <div class="form-group">
        <label for="tanggal_pendaftaran">Tanggal Pendaftaran:</label>
        <input type="date" class="form-control" id="tanggal_pendaftaran" name="tanggal_pendaftaran" required>
      </div>
      <div class="form-group">
        <label for="alamat">Alamat:</label>
        <textarea class="form-control" id="alamat" name="alamat" rows="3" required></textarea>
      </div>
      <div class="form-group">
        <label for="no_telepon">No Telepon:</label>
        <input type="text" class="form-control" id="no_telepon" name="no_telepon" placeholder="Enter No Telepon" required>
      </div>
      <div class="form-group">
        <label for="nis">NIS:</label>
        <input type="text" class="form-control" id="nis" name="nis" placeholder="Enter NIS" required>
      </div>
      <div class="form-group">
        <label for="nomor_peserta_ujian">Nomor Peserta Ujian:</label>
        <input type="text" class="form-control" id="nomor_peserta_ujian" name="nomor_peserta_ujian" placeholder="Enter Nomor Peserta Ujian" required>
      </div>
      <div class="form-group">
        <label for="seri_SKHUN_sebelumnya">No. Seri SKHUN Sebelumnya:</label>
        <input type="text" class="form-control" id="seri_SKHUN_sebelumnya" name="seri_SKHUN_sebelumnya" placeholder="Enter No. Seri SKHUN Sebelumnya" required>
      </div>
      <div class="form-group">
        <label for="seri_ijazah_sebelumnya">No. Seri Ijazah Sebelumnya:</label>
        <input type="text" class="form-control" id="seri_ijazah_sebelumnya" name="seri_ijazah_sebelumnya" placeholder="Enter No. Seri Ijazah Sebelumnya" required>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
      <a href="tugas_formDataPribadiPesertaDidik.php" class="btn btn-secondary">Next</a>
    </form>
  </div>
  <!-- Bootstrap JS -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
