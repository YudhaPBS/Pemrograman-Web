<?php
require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

// Koneksi ke database
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'latihan';
$koneksi = mysqli_connect($host, $username, $password, $database);

// Membuat objek spreadsheet
$spreadsheet = new Spreadsheet();

// Ekspor tabel registrasipesertadidik
$query = "SELECT tanggal_pendaftaran, alamat, no_telepon, NIS, nomor_peserta_ujian, seri_SKHUN_sebelumnya, seri_ijazah_sebelumnya FROM registrasipesertadidik";
$result = mysqli_query($koneksi, $query);

$sheet = $spreadsheet->getActiveSheet();
$sheet->setTitle('registrasipesertadidik');
$sheet->setCellValue('A1', 'Tanggal Pendaftaran');
$sheet->setCellValue('B1', 'Alamat');
$sheet->setCellValue('C1', 'No Telepon');
$sheet->setCellValue('D1', 'NIS');
$sheet->setCellValue('E1', 'Nomor Peserta Ujian');
$sheet->setCellValue('F1', 'Seri SKHUN Sebelumnya');
$sheet->setCellValue('G1', 'Seri Ijazah Sebelumnya');

$row = 2;
while ($data = mysqli_fetch_assoc($result)) {
    $sheet->setCellValue('A'.$row, $data['tanggal_pendaftaran']);
    $sheet->setCellValue('B'.$row, $data['alamat']);
    $sheet->setCellValue('C'.$row, $data['no_telepon']);
    $sheet->setCellValue('D'.$row, $data['NIS']);
    $sheet->setCellValue('E'.$row, $data['nomor_peserta_ujian']);
    $sheet->setCellValue('F'.$row, $data['seri_SKHUN_sebelumnya']);
    $sheet->setCellValue('G'.$row, $data['seri_ijazah_sebelumnya']);
    $row++;
}

// Ekspor tabel datapribadipesertadidik
$query = "SELECT nama, tempat_lahir, tanggal_lahir, jenis_kelamin FROM datapribadipesertadidik";
$result = mysqli_query($koneksi, $query);

$sheet = $spreadsheet->createSheet();
$sheet->setTitle('datapribadipesertadidik');
$sheet->setCellValue('A1', 'Nama');
$sheet->setCellValue('B1', 'Tempat Lahir');
$sheet->setCellValue('C1', 'Tanggal Lahir');
$sheet->setCellValue('D1', 'Jenis Kelamin');

$row = 2;
while ($data = mysqli_fetch_assoc($result)) {
    $sheet->setCellValue('A'.$row, $data['nama']);
    $sheet->setCellValue('B'.$row, $data['tempat_lahir']);
    $sheet->setCellValue('C'.$row, $data['tanggal_lahir']);
    $sheet->setCellValue('D'.$row, $data['jenis_kelamin']);
    $row++;
}

// Ekspor tabel dataibukandung
$query = "SELECT nama, tempat_lahir, tanggal_lahir, pekerjaan FROM dataibukandung";
$result = mysqli_query($koneksi, $query);

$sheet = $spreadsheet->createSheet();
$sheet->setTitle('dataibukandung');
$sheet->setCellValue('A1', 'Nama');
$sheet->setCellValue('B1', 'Tempat Lahir');
$sheet->setCellValue('C1', 'Tanggal Lahir');
$sheet->setCellValue('D1', 'Pekerjaan');

$row = 2;
while ($data = mysqli_fetch_assoc($result)) {
    $sheet->setCellValue('A'.$row, $data['nama']);
    $sheet->setCellValue('B'.$row, $data['tempat_lahir']);
    $sheet->setCellValue('C'.$row, $data['tanggal_lahir']);
    $sheet->setCellValue('D'.$row, $data['pekerjaan']);
    $row++;
}

// Ekspor tabel dataayahkandung
$query = "SELECT nama, tempat_lahir, tanggal_lahir, pekerjaan FROM dataayahkandung";
$result = mysqli_query($koneksi, $query);

$sheet = $spreadsheet->createSheet();
$sheet->setTitle('dataayahkandung');
$sheet->setCellValue('A1', 'Nama');
$sheet->setCellValue('B1', 'Tempat Lahir');
$sheet->setCellValue('C1', 'Tanggal Lahir');
$sheet->setCellValue('D1', 'Pekerjaan');

$row = 2;
while ($data = mysqli_fetch_assoc($result)) {
    $sheet->setCellValue('A'.$row, $data['nama']);
    $sheet->setCellValue('B'.$row, $data['tempat_lahir']);
    $sheet->setCellValue('C'.$row, $data['tanggal_lahir']);
    $sheet->setCellValue('D'.$row, $data['pekerjaan']);
    $row++;
}

// Mengatur lebar kolom agar sesuai dengan kontennya
foreach ($spreadsheet->getWorksheetIterator() as $worksheet) {
    $sheet = $spreadsheet->setActiveSheetIndex($spreadsheet->getIndex($worksheet));
    foreach ($sheet->getColumnIterator() as $column) {
        $sheet->getColumnDimension($column->getColumnIndex())->setAutoSize(true);
    }
}

// Menyimpan file Excel
$writer = new Xlsx($spreadsheet);
$writer->save('Data Export Peserta Didik.xlsx');

// Menutup koneksi database
mysqli_close($koneksi);

echo "Data berhasil diekspor ke Excel.";
?>