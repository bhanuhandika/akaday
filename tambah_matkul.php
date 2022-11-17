<!DOCTYPE html>
<html>

<head>
    <title>AKADAY - Tambah Data Mata Kuliah</title>
</head>

<body>
    <h3>Form Tambah Data Mata Kuliah</h3>
    <hr />
    <form method="post" action="proses.php?action=add_matkul">
        <table>
            <tr>
                <td>Kode Matkul</td>
                <td>:</td>
                <td><input type="text" name="kd_matkul" /></td>
            </tr>
            <tr>
                <td>Nama Matkul</td>
                <td>:</td>
                <td><input type="text" name="nama_matkul" /></td>
            </tr>
            <tr>
                <td>Jumlah SKS</td>
                <td>:</td>
                <td><input type="text" name="sks" /></td>
            </tr>
            <tr>
                <td>Waktu</td>
                <td>:</td>
                <td><input type="text" name="waktu" /></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="tombol" value="Simpan" /></td>
            </tr>
        </table>
    </form>
</body>

</html>