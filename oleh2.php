<?php

include ('koneksi.php');

$result = mysqli_query($conn, "SELECT * FROM tb_oleh");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Oleh-Oleh</title>
	<link rel="stylesheet" type="text/css" href="b.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<nav>
		
		<div class="">
			<img src="image/logoo.png" width="140" height="45">
		</div>

		<ul>
			<li><a href="a1.php"> Home </a></li>
			<li><a href="wisataa.php"> Kelola Wisata </a>
			</li> 
			<li class="active"><a href=""> Kelola Oleh-Oleh </a></li>
			<li><a href="about2.php"> About </a></li>
			<li><a href="index.php"> Logout </a></li>
		</ul>
	
	</nav>

	<br> <br> <br> <br> <br> <br>

	<div class="small-container">

	<h1> KELOLA OLEH-OLEH </h1>
	<a href="tambaholeh.php"> Tambah Data Oleh-Oleh </a>
	<br> <br>

	<table border="1" cellpadding="10" cellspacing="0">
		
		<tr>
			<th> No. </th>
			<th> Gambar </th>
			<th> Nama Oleh-Oleh </th>
			<th> Alamat </th>
			<th> Harga </th>
			<th> Deskripsi </th>
			<th> Aksi </th>
		</tr>

		<?php $i = 1; ?>
		<?php
			while ($row = mysqli_fetch_assoc($result)) :
		?>

		<tr>
			<td> <?= $i; ?> </td>
			<td>
				<img src="image/<?= $row["gambar"]; ?>" width="100">
				</td>
			<td> <?= $row["nama_oleh"]; ?> </td>
			<td> <?= $row["alamat"]; ?>. </td>
			<td> <?= $row["harga"]; ?>. </td>
			<td> <?= $row["deskripsi"]; ?>. </td>
			<td>
				<a href="ubaholeh.php?id=<?= $row["id"]; ?>"> Ubah </a> |
				<a href="hapusoleh.php?id=<?= $row["id"]; ?>" onclick="return confirm('Apakah Anda yakin menghapus data ini?');"> Hapus </a>
			</td>
		</tr>

		<?php $i++; ?>
		<?php endwhile; ?>

	</table>

	<p align="center">
	<input type="button" value="Export Excel" onclick="window.open('laporan-excel.php')">
	</p>

	<p align="center">
	<input type="button" value="Export PDF" onclick="window.open('bismillah.php', '_blank')">
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