<?php
    include('koneksi.php');
    $db = new database();
    $data_mahasiswa = $db->tampil_data_mhs();
?>
<!DOCTYPE html>
<html>

<head>
    <title>AKADAY - Tampil Data Mahasiwa</title>
</head>

<body>
    <h4>Menu</h4>
    <ul>
        <li><a href="mahasiswa.php" style="text-decoration: none; color: red;">Mahasiswa</a></li>
        <li><a href="matkul.php" style="text-decoration: none; color: black;">Mata Kuliah</a></li>
        <li><a href="krs" style="text-decoration: none; color: black;">KRS</a></li>
    </ul>
    <h3>Data Mahasiswa</h3>
    <a href="tambah_mhs.php">+ Tambah Mahasiswa</a>
    <table border="1">
        <tr>
            <th>No</th>
            <th>ID Mahasiswa</th>
            <th>NIM</th>
            <th>Nama Mahasiswa</th>
            <th>Program Studi</th>
            <th>Action</th>
        </tr>
        <?php
        $no = 1;
        foreach ($data_mahasiswa as $row) {
        ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $row['id_mhs']; ?></td>
                <td><?= $row['nim']; ?></td>
                <td><?= $row['nama_mhs']; ?></td>
                <td><?= $row['prodi_mhs']; ?></td>
                <td>
                    <a href="edit_mhs.php?id_mhs=<?= $row['id_mhs']; ?>">Edit</a>
                    <!-- <a href="hapus.php?id_mhs=<?= $row['id_mhs']; ?>">Hapus</a> -->
                    <a href="proses.php?action=delete_mhs&id_mhs=<?= $row['id_mhs']; ?>">Hapus</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>