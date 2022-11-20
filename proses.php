<?php
include('koneksi.php');

$koneksi = new database();
$action = $_GET['action'];

if ($action == "add_mhs") {
    $koneksi->tambah_mhs($_POST['nim'], $_POST['nama_mhs'], $_POST['prodi_mhs']);
    header('location:mahasiswa.php');
} elseif ($action == "update_mhs") {
    $koneksi->update_mhs($_POST['nim'], $_POST['nama_mhs'], $_POST['prodi_mhs'], $_POST['id_mhs']);
    header('location:mahasiswa.php');
} elseif ($action == "delete_mhs") {
    $id_mhs = $_GET['id_mhs'];
    $koneksi->delete_mhs($id_mhs);
    header('location:mahasiswa.php');
} 

elseif ($action == "add_matkul") {
    $koneksi->tambah_matkul($_POST['kd_matkul'], $_POST['nama_matkul'], $_POST['sks'], $_POST['waktu']);
    header('location:matkul.php');
} elseif ($action == "update_matkul") {
    $koneksi->update_matkul($_POST['kd_matkul'], $_POST['nama_matkul'], $_POST['sks'], $_POST['waktu'], $_POST['id_matkul']);
    header('location:matkul.php');
} elseif ($action == "delete_matkul") {
    $id_matkul = $_GET['id_matkul'];
    $koneksi->delete_matkul($id_matkul);
    header('location:matkul.php');
} 

elseif ($action == "add_krs") {
    $koneksi->tambah_krs($_POST['id_mhs'], $_POST['id_matkul']);
    header('location:krs.php');
} elseif ($action == "update_krs") {
    $koneksi->update_krs($_POST['id_mhs'], $_POST['id_matkul'], $_POST['id_krs']);
    header('location:krs.php');
} elseif ($action == "delete_krs") {
    $id_krs = $_GET['id_krs'];
    $koneksi->delete_krs($id_krs);
    header('location:krs.php');
}