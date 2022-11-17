<?php
include('koneksi.php');

$db = new database();
$id_matkul = $_GET['id_matkul'];

if (!is_null($id_matkul)) {
    $data_matkul = $db->get_by_id_matkul($id_matkul);
} else {
    header('location:matkul.php');
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>AKADAY - Edit Data Mata Kuliah</title>
</head>

<body>
    <h3>FORM Edit Data Mata Kuliah</h3>
    <hr />
    <form method="post" action="proses.php?action=update_matkul">
        <input type="hidden" name="id_matkul" value="<?php echo $data_matkul['id_matkul']; ?>" />
        <table>
            <tr>
                <td>Kode Matkul</td>
                <td>:</td>
                <td><input type="text" name="kd_matkul" value="<?php echo $data_matkul['kd_matkul']; ?>" /></td>
            </tr>
            <tr>
                <td>Nama Matkul</td>
                <td>:</td>
                <td><input type="text" name="nama_matkul" value="<?php echo $data_matkul['nama_matkul']; ?>" /></td>
            </tr>
            <tr>
                <td>Jumlah SKS</td>
                <td>:</td>
                <td><input type="text" name="sks" value="<?php echo $data_matkul['sks']; ?>" /></td>
            </tr>
            <tr>
                <td>Waktu</td>
                <td>:</td>
                <td><input type="text" name="waktu" value="<?php echo $data_matkul['waktu']; ?>" /></td>
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