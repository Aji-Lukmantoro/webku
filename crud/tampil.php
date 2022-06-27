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
				
				<?php  
				include 'koneksi.php'; // untuk memanggil file koneksi.php   
				$db = new database(); // dan menginstansiasi objek pada class database 
				?>
				<h1>CRUD OOP PHP</h1> 
				<h3>Data User</h3> 
				<a href="input.php">Input Data</a>

				<table border="1"> 
				<tr> 
					<th>No</th> 
					<th>Nama</th> 
					
				<th>Alamat</th> 
					<th>Usia</th> 
					<th>Opsi</th> 
				</tr>

				<?php 
				$no = 1; 
				foreach($db->tampil_data() as $x){ //perulangan untuk mengidentifikasi data di dalam tabel user 
				?>
				<tr> 
					
					<td><?php echo $no++; ?></td>   
					
					<td><?php echo $x['nama']; //untuk menampilkan nama kemudian alamat dibawah ini dst?></td> 
					
					<td><?php echo $x['alamat']; ?></td> 
					
					<td><?php echo $x['usia']; ?></td> 
					
					<td> 
					<a href="edit.php?id=<?php echo $x['id']; //mengambil id per record untuk memilih data yang akan diedit/hapus 
					?>&action=edit">Edit</a> 
					
					<a href="tambah_aksi.php?id=<?php echo $x['id']; ?>&action=delete">Hapus</a> 
					</td>
					
				</tr> 
				<?php  
				}
				?>
				</table>

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