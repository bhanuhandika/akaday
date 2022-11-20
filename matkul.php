<?php
include('koneksi.php');
$db = new database();
$data_matkul = $db->tampil_data_matkul();
?>
<!DOCTYPE html>
<html>

<head>
    <title>AKADAY - Tampil Data Mata Kuliah</title>
</head>

<body>
    <h4>Menu</h4>
    <ul>
        <li><a href="mahasiswa.php" style="text-decoration: none; color: black;">Mahasiswa</a></li>
        <li><a href="matkul.php" style="text-decoration: none; color: red;">Mata Kuliah</a></li>
        <li><a href="krs.php" style="text-decoration: none; color: black;">KRS</a></li>
    </ul>
    <h3>Data Mahasiswa</h3>
    <a href="tambah_matkul.php">+ Tambah Mata Kuliah</a>
    <table border="1">
        <tr>
            <th>No</th>
            <th>ID Matkul</th>
            <th>Kode Matkul</th>
            <th>Nama Matkul</th>
            <th>SKS</th>
            <th>Waktu</th>
            <th>Action</th>
        </tr>
        <?php
        $no = 1;
        foreach ($data_matkul as $row) {
        ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $row['id_matkul']; ?></td>
                <td><?= $row['kd_matkul']; ?></td>
                <td><?= $row['nama_matkul']; ?></td>
                <td><?= $row['sks']; ?></td>
                <td><?= $row['waktu']; ?></td>
                <td>
                    <a href="edit_matkul.php?id_matkul=<?= $row['id_matkul']; ?>">Edit</a>
                    <!-- <a href="hapus.php?id_matkul=<?= $row['id_matkul']; ?>">Hapus</a> -->
                    <a href="proses.php?action=delete_matkul&id_matkul=<?= $row['id_matkul']; ?>">Hapus</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>