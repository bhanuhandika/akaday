<?php 
class database{

	var $host = "localhost";
	var $username = "root";
	var $password = "";
	var $database = "db_aka_3";
	var $koneksi = "";
	function __construct(){
		$this->koneksi = mysqli_connect($this->host, $this->username, $this->password,$this->database);
		if (mysqli_connect_errno()){
			echo "Koneksi database gagal : " . mysqli_connect_error();
		}
	}

    function tampil_data_mhs()
	{
		$data = mysqli_query($this->koneksi,"select * from tb_mahasiswa");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
	}

    function tampil_data_matkul()
	{
		$data = mysqli_query($this->koneksi,"select * from tb_matkul");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
	}

	function tambah_mhs($nim,$nama_mhs,$prodi_mhs)
	{
		mysqli_query($this->koneksi,"insert into tb_mahasiswa values ('','$nim','$nama_mhs','$prodi_mhs')");
	}

	function get_by_id_mhs($id_mhs)
	{
		$query = mysqli_query($this->koneksi,"select * from tb_mahasiswa where id_mhs='$id_mhs'");
		return $query->fetch_array();
	}

	function update_mhs($nim, $nama_mhs, $prodi_mhs, $id_mhs)
	{
		mysqli_query($this->koneksi,"update tb_mahasiswa set nim='$nim', nama_mhs='$nama_mhs', prodi_mhs='$prodi_mhs' where id_mhs='$id_mhs'");
	}

	function delete_mhs($id_mhs)
	{
		mysqli_query($this->koneksi,"delete from tb_mahasiswa where id_mhs='$id_mhs'");
	}



	function tambah_matkul($kd_matkul,$nama_matkul,$sks, $waktu)
	{
		mysqli_query($this->koneksi,"insert into tb_matkul values ('','$kd_matkul','$nama_matkul','$sks', '$waktu')");
	}

	function get_by_id_matkul($id_matkul)
	{
		$query = mysqli_query($this->koneksi,"select * from tb_matkul where id_matkul='$id_matkul'");
		return $query->fetch_array();
	}

	function update_matkul($kd_matkul, $nama_matkul, $sks, $waktu, $id_matkul)
	{
		mysqli_query($this->koneksi,"update tb_matkul set kd_matkul='$kd_matkul', nama_matkul='$nama_matkul', sks='$sks', waktu='$waktu' where id_matkul='$id_matkul'");
	}

	function delete_matkul($id_matkul)
	{
		mysqli_query($this->koneksi,"delete from tb_matkul where id_matkul='$id_matkul'");
	}
}
?>