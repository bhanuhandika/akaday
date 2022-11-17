<?php
include('koneksi.php');

$db = new database();
$id_mhs = $_GET['id_mhs'];

if (!is_null($id_mhs)) {
    $data_mhs = $db->get_by_id_mhs($id_mhs);
} else {
    header('location:mahasiswa.php');
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>AKADAY - Edit Data Mahasiswa</title>
</head>

<body>
    <h3>FORM Edit Data Barang</h3>
    <hr />
    <form method="post" action="proses.php?action=update_mhs">
        <input type="hidden" name="id_mhs" value="<?php echo $data_mhs['id_mhs']; ?>" />
        <table>
            <tr>
                <td>Nomor Induk Mahasiswa</td>
                <td>:</td>
                <td><input type="text" name="nim" value="<?php echo $data_mhs['nim']; ?>" /></td>
            </tr>
            <tr>
                <td>Nama Mahasiswa</td>
                <td>:</td>
                <td><input type="text" name="nama_mhs" value="<?php echo $data_mhs['nama_mhs']; ?>" /></td>
            </tr>
            <tr>
                <td>Prodi Mahasiwa</td>
                <td>:</td>
                <td><input type="text" name="prodi_mhs" value="<?php echo $data_mhs['prodi_mhs']; ?>" /></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="tombol" value="Update" /></td>
            </tr>
        </table>
    </form>
</body>

</html>