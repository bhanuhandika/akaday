<?php
    include('koneksi.php');
    $db = new database();
    $data_krs = $db->tampil_data_krs();
?>
<!DOCTYPE html>
<html>

<head>
    <title>AKADAY - Tampil Data KRS</title>
</head>

<body>
    <h4>Menu</h4>
    <ul>
        <li><a href="mahasiswa.php" style="text-decoration: none; color: black;">Mahasiswa</a></li>
        <li><a href="matkul.php" style="text-decoration: none; color: black;">Mata Kuliah</a></li>
        <li><a href="krs" style="text-decoration: none; color: red;">KRS</a></li>
    </ul>
    <h3>Data KRS</h3>
    <a href="tambah_krs.php">+ Tambah KRS</a>
    <table border="1">
        <tr>
            <th>No</th>
            <th>ID KRS</th>
            <th>ID MHS</th>
            <th>NIM</th>
            <th>Nama Mahasiswa</th>
            <th>Prodi Mahasiswa</th>
            <th>ID Matkul</th>
            <th>Kode Matkul</th>
            <th>Nama Matkul</th>
            <th>SKS</th>
            <th>Waktu</th>
            <th>Action</th>
        </tr>
        <?php
        $no = 1;
        foreach ($data_krs as $row) {
        ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $row['id_krs']; ?></td>
                <td><?= $row['id_mhs']; ?></td>
                <td><?= $row['nim']; ?></td>
                <td><?= $row['nama_mhs']; ?></td>
                <td><?= $row['prodi_mhs']; ?></td>
                <td><?= $row['id_matkul']; ?></td>
                <td><?= $row['kd_matkul']; ?></td>
                <td><?= $row['nama_matkul']; ?></td>
                <td><?= $row['sks']; ?></td>
                <td><?= $row['waktu']; ?></td>
                <td>
                    <a href="edit_krs.php?id_krs=<?= $row['id_krs']; ?>">Edit</a>
                    <!-- <a href="hapus.php?id_krs=<?= $row['id_krs']; ?>">Hapus</a> -->
                    <a href="proses.php?action=delete_krs&id_krs=<?= $row['id_krs']; ?>">Hapus</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>