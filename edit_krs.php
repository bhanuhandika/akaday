<?php
include('koneksi.php');

$db = new database();
$data_mahasiswa = $db->tampil_data_mhs();
$data_matkul = $db->tampil_data_matkul();
$id_krs = $_GET['id_krs'];


if (!is_null($id_krs)) {
    $data_krs = $db->get_by_id_krs($id_krs);
} else {
    header('location:krs.php');
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>AKADAY - Edit Data KRS</title>
</head>

<body>
    <h3>FORM Edit Data KRS</h3>
    <hr />
    <form method="post" action="proses.php?action=update_krs">
        <input type="hidden" name="id_krs" value="<?= $data_krs['id_krs']; ?>" />
        <table>
            <tr>
                <td>Mahasiswa</td>
                <td>:</td>
                <td>
                    <select name="id_mhs" id="id_mhs">
                        <option value="<?= $data_krs['id_mhs']; ?>"><?= $data_krs['nim']; ?> | <?= $data_krs['nama_mhs']; ?> | <?= $data_krs['prodi_mhs']; ?></option>
                        <option value="" disabled>----------------------------------</option>
                        <?php
                        foreach ($data_mahasiswa as $row) {
                        ?>
                            <option value="<?= $row['id_mhs']; ?>"><?= $row['nim']; ?> | <?= $row['nama_mhs']; ?> | <?= $row['prodi_mhs']; ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </td>
            </tr>

            <tr>
                <td>Mata Kuliah</td>
                <td>:</td>
                <td>
                    <select name="id_matkul" id="id_matkul">
                        <option value="<?= $data_krs['id_matkul']; ?>"><?= $data_krs['kd_matkul']; ?> | <?= $data_krs['nama_matkul']; ?> | <?= $data_krs['sks']; ?>  | <?= $data_krs['waktu']; ?></option>
                        <option value="" disabled>----------------------------------</option>
                        <?php
                        foreach ($data_matkul as $row) {
                        ?>
                            <option value="<?= $row['id_matkul']; ?>"><?= $row['kd_matkul']; ?> | <?= $row['nama_matkul']; ?> | SKS : <?= $row['sks']; ?> | <?= $row['waktu']; ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </td>
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