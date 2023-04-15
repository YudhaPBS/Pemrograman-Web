<!-- Mendefinisikan tipe dokumen HTML yang digunakan, yaitu HTML versi 5. -->
<!DOCTYPE html>
<!-- Memulai tag pembuka untuk bagian HTML. -->
<html>
<!-- Memulai tag pembuka untuk bagian head dari halaman HTML, yang berisi informasi-informasi meta-data seperti judul halaman, stylesheet, dan script. -->
<head>
    <!-- Menentukan judul halaman, yang akan ditampilkan pada tab browser. -->
	<title>Form Login</title>
<!-- Menutup tag head. -->
</head>
<!-- Memulai tag pembuka untuk bagian body dari halaman HTML, yang berisi konten-konten yang akan ditampilkan pada halaman. -->
<body>
    <!-- Menampilkan heading level 1 pada halaman, dengan teks "Form Login" -->
	<h1>Form Login</h1>
    <!-- Membuat form dengan method POST dan action "tugas1_login.php" yang akan mengirimkan data form ke halaman tersebut. -->
	<form method="post" action="tugas1_login.php">
		<label for="name">Nama:</label>
		<input type="text" id="name" name="name"><br><br>
		<label for="email">Email:</label>
		<input type="email" id="email" name="email"><br><br>
		<input type="submit" value="Login">
    <!-- Menutup tag form. -->
	</form>
<!-- Menutup tag body. -->
</body>
<!-- Tag penutup untuk dokumen HTML. -->
</html>