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
				<!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae qui, iste consequatur quis sunt sint impedit tenetur velit, quos tempore consectetur exercitationem voluptate corrupti accusantium obcaecati, necessitatibus voluptatem at hic?</p>
				<h1>Galery</h1><br>
				<img src="candi1.jpg">
				<img src="candi1.jpg">
				<img src="candi1.jpg"> -->
				<h1>CRUD OOP PHP</h1>
				<h3>Data User</h3>
				<h4><a href="tampil.php">KEMBALI</a></h4>
				<br />
				<br />
				<h1>FORM DATA MAHASISWA</h1>
				<form method="post" action="tambah_aksi.php?action=add">
					<table>
						<tr>
							<td>Nama</td>
							<td><input type="text" name="nama"></td>
						</tr>
						<tr>
							<td>Alamat</td>
							<td><input type="text" name="alamat"></td>
						</tr>
						<tr>
							<td>Usia</td>
							<td><input type="number" name="usia"></td>
						</tr>
						<tr>
							<td></td>
							<td><input type="submit" value="SIMPAN"></td>
						</tr>
					</table>
				</form> 
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
// alert("Login Berhasil, klik OK untuk menuju Website") //untuk memunculkan pesan bahwa berhasil login 
</script>
</body>
</html>