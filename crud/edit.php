<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="style.css"> <?//Link untuk menghubungakan ke file CSS?>
    <title>Wisata Borobudur</title>
</head>
<body>
    <div class="container"> 
		<?//membuat tulisan di header?>
		<div class="judul">
			<h1>Candi borobudur</h1>
			<h2>wisata alam indonesia</h2>
			<img src="candi.jpg">
		</div>

		<?//membuat menu?>
		<div class="navigasi">
			<ul>
				<li>HOME</li>
				<li>TENTANG</li>
				<li>GALERY</li>
				<li>KONTAK</li>
			</ul>
		</div>

		<?//membuat isi konten dan sidebar?>
		<div class="konten">
			<div class="kiri">
				<h1>Selamat Datang </h1><br>
				<?php   
				include('koneksi.php'); 
				$db = new database(); 
				$id_user= $_GET['id']; 
				if(! is_null($id_user)) 
				{
					$data_user = $db->get_by_id($id_user); 
				}
				else
				{
					header('location:web.php'); 
				}
				?>
				<!DOCTYPE html>
				<html>

				<head>
					<title>Memanipulasi data </title>
				</head>

				<body>

					<h1>CRUD OOP PHP</h1>
					<h3>Data User</h3>
					<a href="tampil.php">KEMBALI</a>
					<br />
					<br />
					<h3>FORM EDIT DATA MAHASISWA</h3>
					<form method="post" action="tambah_aksi.php?action=update">
						<input type="hidden" name="id_user" value="<?php echo $data_user['id']; 
				?> "/>
						<table>
							<tr>
								<td>Nama</td>
								<td><input type="text" name="nama" value="<?php 
								echo $data_user['nama']; ?>"></td>
							</tr>

							<tr>
								<td>Alamat</td>
								<td><input type="text" name="alamat" value="<?php 
								echo $data_user['alamat']; ?>"></td>
							</tr>

							<tr>
								<td>Usia</td>
								<td><input type="number" name="usia" value="<?php echo $data_user['usia']; ?>"></td>
							</tr>

							<tr>
								<td></td>
								<td><input type="submit" value="SIMPAN"></td>
							</tr>
						</table>
					</form>
</body>

</html>
			</div>
			<div class="kanan">
				<h1>artikel lainnya</h1>
				<ul>
					<a href="#"><li>wisata alam</li></a>
					<a href="#"><li>wisata alam</li></a>
					<a href="#"><li>wisata alam</li></a>
					<a href="#"><li>wisata alam</li></a>
					<a href="#"><li>wisata alam</li></a>
					<a href="#"><li>wisata alam</li></a>
				</ul>
			</div>
		</div>
	</div>

	<?//membuat footer?>
	<div class="footer"><h1>Copyright @ 2022 by Aji Lukmantoro</h1></div>

	<?//membuat tombol scroll ?>
	<button class="button" onclick="topFunction()" id="scroll-btn" title="Gas keatas">&uarr;</button>

<script language="javascript">
// ketika scroll kebawah 20px dari atas dokumen, maka tombol scroll akan muncul
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("scroll-btn").style.display = "block";
} else {
    document.getElementById("scroll-btn").style.display = "none";
}
}

// ketika tombol scroll di klik, maka akan scroll kembali keatas halaman
function topFunction() {
document.body.scrollTop = 0;
document.documentElement.scrollTop = 0;
}
//untuk memunculkan pesan bahwa berhasil login 
</script>
</body>
</html>