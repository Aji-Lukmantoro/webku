<?php
$koneksi = mysqli_connect("localhost", "root", "", "tab_login");
class database{
	var $host = "localhost";
	var $uname = "root";
	var $pass = "";
	var $db = "tab_login";
	var $koneksi = "";
	function __construct(){
		$this->koneksi = mysqli_connect($this->host, $this->uname, $this->pass,$this->db);
		if (mysqli_connect_errno()){
			echo"Koneksi database gagal : " . mysqli_connect_error();
		}
	}
	
	function tampil_data()
	{
		$data = mysqli_query($this->koneksi,"select * from user");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
	}
	
	function tambah_data($no,$nama,$alamat,$usia)
	{
		mysqli_query($this->koneksi,"insert into user values ('','$nama','$alamat','$usia')");
	}
	
	function get_by_id($id_user)
	{
		$query = mysqli_query($this->koneksi,"select * from user where id='$id_user'");
		return $query->fetch_array();
	}
	
	function update_data($id,$nama,$alamat,$usia)
	{
	    $query = mysqli_query($this->koneksi,"update user set nama='$nama',alamat='$alamat',usia='$usia' where id='$id'");
	}
	
	function delete_data($id)
	{
	    $query = mysqli_query($this->koneksi,"delete from user where id='$id'");
	}
}
?>