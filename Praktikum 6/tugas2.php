<!-- Mendefinisikan tipe dokumen HTML yang digunakan, yaitu HTML versi 5 -->
<!DOCTYPE html>
<!-- Memulai tag pembuka untuk bagian HTML -->
<html>
<!-- Memulai tag pembuka untuk bagian head dari halaman HTML, yang berisi informasi-informasi meta-data seperti judul halaman, stylesheet, dan script -->
<head>
    <!-- Menentukan judul halaman, yang akan ditampilkan pada tab browser -->
	<title>Biodata</title>
<!-- Menutup tag head -->
</head>
<!-- Memulai tag pembuka untuk bagian body dari halaman HTML, yang berisi konten-konten yang akan ditampilkan pada halaman -->
<body>
    <!-- Menampilkan heading level 1 pada halaman, dengan teks "Biodata" -->
	<h1>Biodata</h1>
    <!-- Membuat form dengan method POST dan action "tugas2.php" yang akan mengirimkan data form ke halaman tersebut -->
	<?php
		$name = "Yudha Perwira Bima Sakti";
		$age = 20;
		$address = "Jalan Merpati Kehutanan No. 3, No. O-20, Pabean, Sedati, Sidoarjo";
		$hobbies = ["Membaca komik", "Rebahan", "Bermain game"];
		$interests = ["Alam Semesta", "Misteri", "Gaming"];
		$education = [
			[
				"institution" => "Universitas Pembangunan Nasional Veteran Jawa Timur",
				"major" => "Sistem Informasi",
				"degree" => "Sarjana",
				"year" => "2021-sekarang"
			]
		];
	?>
    <!-- Menampilkan data nama yang telah didefinisikan di atas -->
	<p>Nama: <?php echo $name; ?></p>
    <!-- Menampilkan data umur yang telah didefinisikan di atas -->
	<p>Umur: <?php echo $age; ?></p>
    <!-- Menampilkan data alamat yang telah didefinisikan di atas -->
	<p>Alamat: <?php echo $address; ?></p>
    <!-- Menampilkan data hobi yang telah didefinisikan di atas -->
	<p>Hobi:</p>
    <!-- Membuat list dengan menggunakan tag <ul> dan <li> -->
	<ul>
		<?php
			foreach ($hobbies as $hobby) {
				echo "<li>$hobby</li>";
			}
		?>
        <!-- Menutup tag <ul> -->
	</ul>
    <!-- Menampilkan data-data yang telah didefinisikan di atas -->
	<p>Minat:</p>
    <!-- Membuat list dengan menggunakan tag <ul> dan <li> -->
	<ul>
		<?php
			foreach ($interests as $interest) {
				echo "<li>$interest</li>";
			}
		?>
        <!-- Menutup tag <ul> -->
	</ul>
    <!-- Menampilkan data-data yang telah didefinisikan di atas -->
	<p>Pendidikan:</p>
    <!-- Membuat list dengan menggunakan tag <ul> dan <li> -->
	<ul>
		<?php
			foreach ($education as $edu) {
				echo "<li>";
				echo "<b>".$edu["degree"]." ".$edu["major"]."</b> di ".$edu["institution"]." (".$edu["year"].")";
				echo "</li>";
			}
		?>
    <!-- Menutup tag <ul> -->
	</ul>
</body>
</html>
