<?php  
// koneksi database 
include('koneksi.php'); 
$koneksi = new database();  
// menangkap data yang di kirim dari form 
$action = $_GET['action']; 
$id=$_POST['id_user']; 
$nama = $_POST['nama']; 
$alamat = $_POST['alamat']; 
$usia = $_POST['usia']; 

// menginput data ke database 
if($action == "add") 
{
    $koneksi->tambah_data('',$nama,$alamat,$usia); 
}
elseif($action=="update")
{
    $koneksi->update_data($id,$nama,$alamat,$usia); 
}

elseif($action=="delete") 
{
    $id = $_GET['id']; 
    $koneksi->delete_data($id);
} 

// mengalihkan halaman kembali ke index.php 
    header('location:tampil.php'); 
?>