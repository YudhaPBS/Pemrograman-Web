<html>
<head>
<title> Pemrograman PHP dengan Array </title>
</head>
</html>
<body>
<?php
//penulisan array dapat dibuat seperti berikut
$nama[] = "Yudha";
$nama[] = "Perwira";
$nama[] = "Bima Sakti";
echo $nama[1] . $nama[2] . $nama[0];
echo "<br>";
//menghitung jumlah elemen array
$jum_array = count($nama);
echo "jumlah elemen array = ". $jum_array;
?>
</body>
</html>