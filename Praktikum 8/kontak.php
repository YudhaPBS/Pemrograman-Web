<!DOCTYPE html>
<html>
<head>
    <title>Form Kontak</title>
</head>
<body>
    <form method="post" action="tambahkontak.php">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>
                    <input type="radio" name="jkel" value="Laki-laki">Laki-laki
                    <input type="radio" name="jkel" value="Perempuan">Perempuan
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td>Kota</td>
                <td><input type="text" name="kota"></td>
            </tr>
            <tr>
                <td>Pesan</td>
                <td><textarea name="pesan"></textarea></td>
            </tr>
            <tr>
                <td colspan="2"><button type="submit" value="simpan">Simpan</button></td>
            </tr>
        </table>
    </form>
</body>
</html>
