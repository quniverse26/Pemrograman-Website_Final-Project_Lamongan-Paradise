<?php

//menghubungkan ke database
include ('koneksi.php');

$result = mysqli_query($conn, "SELECT * FROM tb_wisata");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Wisata</title>
	<link rel="stylesheet" type="text/css" href="b.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style type="text/css">
	nav{
		background: #E9967A;
	}
	.footer{
		background-color: #228B22;
	}
</style>
<body>
	<nav>
		
		<div class="">
			<img src="image/logoo.png" width="140" height="45">
		</div>

		<ul>
			<li><a href="a1.php"> Home </a></li>
			<li class="active"><a href=""> Kelola Wisata </a>
			</li> 
			<li><a href="oleh2.php"> Kelola Oleh-Oleh </a></li>
			<li><a href="about2.php"> About </a></li>
			<li><a href="index.php"> Logout </a></li>
		</ul>
	
	</nav>

	<br> <br> <br> <br> <br> <br>

	<div class="small-container">

	<h1> WISATA </h1>
	<!-- tambah wisata -->
	<a href="tambahwisata.php"> Tambah Data Wisata </a>
	<br> <br>

<!--menampilkan tabel wisata-->
	<table border="1" cellpadding="10" cellspacing="0">
		
		<tr>
			<th> No. </th>
			<th> Gambar </th>
			<th> Nama Wisata </th>
			<th> Alamat </th>
			<th> Rating </th>
			<th> Jumlah Pengunjung Lokal </th>
			<th> Jumlah Pengunjung Mancanegara </th>
			<th> Aksi </th>
		</tr>

		<?php $i = 1; ?>
		<?php
			while ($row = mysqli_fetch_assoc($result)) :
		?>
		<!-- mengambil data dari database -->
		<tr>
			<td> <?= $i; ?> </td>
			<td>
				<img src="image/<?= $row["gambar"]; ?>" width="100">
				</td>
			<td> <?= $row["nama_wisata"]; ?> </td>
			<td> <?= $row["alamat"]; ?>. </td>
			<td> <?= $row["rating"]; ?>. </td>
			<td> <?= $row["jml_lokal"]; ?>. </td>
			<td> <?= $row["jml_manca"]; ?>. </td>
			<td> 
				<a href="ubahwisata.php?id=<?= $row["id"]; ?>"> Ubah </a> |
				<a href="hapuswisata.php?id=<?= $row["id"]; ?>" onclick="return confirm('Apakah Anda yakin menghapus data ini?');"> Hapus </a>
			</td>
		</tr>

		<?php $i++; ?>
		<?php endwhile; ?>

	</table>
	<!-- menampilkan button export excel -->
	<p align="center">	
	<input type="button" value="Export Excel" onclick="window.open('laporan-excell.php')">
	</p>

	<!-- menampilkan button export pdf -->
	<p align="center">
	<input type="button" value="Export PDF" onclick="window.open('bisabisabisa.php', '_blank')">
	</p>

	</div>

	<!-- =============== footer ================== -->
    <footer class="footer">

		<div class="footer-left">
			<h3> Our Support </h3>
			<div class="our-support">
				<img src="image/lmg1.png">
				<img src="image/lmg2.png">
				<img src="image/lmg3.png">
			</div>
			<p class="footer-copyright"> @2022 Lamongan Paradise </p>
		</div>

		<div class="footer-center">
			<div>
				<i class="fa fa-map-marker"></i>
				<p><span>Indonesia</span> Lamongan, Jawa Timur </p>
			</div>

			<div>
				<i class="fa fa-phone"></i>
				<p>(0322) 321012</p>
			</div>

			<div>
				<i class="fa fa-envelope"></i>
				<p><a href="#">lamonganparadise@gmail.com</a></p>
			</div>
		</div>

		<div class="footer-right">
			<p class="footer-about">
				<span>About</span>
				Lamongan Paradise merupakan website promosi tempat pariwisata dan souvenir dari Kabupaten Lamongan
			</p>

			<div>
				<a href="#"><i class="fa fa-youtube"></i></a>
				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-instagram"></i></a>
			</div>
		</div>

	</footer>
</body>
</html>