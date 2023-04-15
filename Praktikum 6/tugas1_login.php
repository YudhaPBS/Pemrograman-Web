<!-- mendefinisikan tipe dokumen HTML yang digunakan. -->
<!DOCTYPE html>
<!-- tag pembuka untuk memulai dokumen HTML. -->
<html>
<!-- bagian atas dokumen HTML, berisi informasi tentang dokumen seperti judul, meta, dan stylesheet. -->
<head>
    <!-- judul dari halaman web yang akan ditampilkan pada tab browser. -->
	<title>Login Berhasil</title>
    <!-- penutup bagian head dari dokumen HTML. -->
</head>
<!-- bagian utama dari dokumen HTML, berisi konten yang akan ditampilkan pada halaman web. -->
<body>
    <!-- tag pembuka untuk membuat form, dengan method POST dan action "tugas1_login.php" yang akan mengirimkan data form ke halaman tersebut. -->
	<?php
		// memeriksa apakah method post sudah terpenuhi
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			// memeriksa apakah inputan nama dan email tidak kosong
			if (empty($_POST["name"]) || empty($_POST["email"])) {
				// jika kosong, maka redirect ke halaman error
				header("Location: tugas1_error.php");
			} else {
				// jika tidak kosong, tampilkan informasi login
				$name = $_POST["name"];
				$email = $_POST["email"];
				$date = date("d/m/Y");
				$time = date("h:i:s a");
				$day = date("l");
				echo "<h1>Login Berhasil</h1>";
				echo "<p>Selamat datang, $name</p>";
				echo "<p>Email Anda: $email</p>";
				echo "<p>Tanggal: $date</p>";
				echo "<p>Waktu: $time</p>";
				echo "<p>Hari: $day</p>";
			}
		}
	?>
<!-- penutup bagian body dari dokumen HTML. -->
</body>
<!-- tag penutup untuk dokumen HTML -->
</html>