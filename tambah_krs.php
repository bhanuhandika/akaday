<?php
include('koneksi.php');
$db = new database();
$data_mahasiswa = $db->tampil_data_mhs();
$data_matkul = $db->tampil_data_matkul();

?>
<!DOCTYPE html>
<html>

<head>
    <title>AKADAY - Tambah Data KRS</title>
</head>

<body>
    <h3>Form Tambah Data KRS</h3>
    <hr />
    <form method="post" action="proses.php?action=add_krs">
        <table>
            <!-- <tr>
                <td>Mahasiswa</td>
                <td>:</td>
                <td><input type="text" name="id_mhs" /></td>
            </tr> -->
            <tr>
                <td>Mahasiswa</td>
                <td>:</td>
                <td>
                    <select name="id_mhs" id="id_mhs">
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
            <!-- <tr>
                <td>Mata Kuliah</td>
                <td>:</td>
                <td><input type="text" name="id_matkul" /></td>
            </tr> -->
            <tr>
                <td>Mata Kuliah</td>
                <td>:</td>
                <td>
                    <select name="id_matkul" id="id_matkul">
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
                <td><input type="submit" name="tombol" value="Simpan" /></td>
            </tr>
        </table>
    </form>
</body>

</html>