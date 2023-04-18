<?php

include ('koneksi.php');

$result = mysqli_query($conn, "SELECT * FROM tb_wisatawan");

?>

<!DOCTYPE html>
<html>
<head>
	<title> Lamongan Paradise </title>
	<link rel="stylesheet" type="text/css" href="b.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

	<nav>
		
		<div class="">
			<img src="image/logoo.png" width="140" height="45">
		</div>

		<ul>
			<li><a href="a1.php"> Home </a></li>
			<li><a href="wisataa.php"> Wisata</a>
				
			</li> 
			<li><a href=""> Oleh-Oleh </a></li>
			<li class="active"><a href="info.php"> Info Wisatawan </a></li>
			<li><a href="about2.php"> About </a></li>
			<li><a href="login.php"> Login </a></li>
		</ul>
	
	</nav>

	<br> <br> <br> <br> <br> <br>

	<div class="small-container">

	<h1> DATA WISATAWAN </h1>

	<a href="tambahwisatawan.php"> Tambah data wisatawan </a>
	<br> <br>

	<table border="1" cellpadding="10" cellspacing="0">
		
		<tr>
			<th> No. </th>
			<th> Nama Wisata </th>
			<th> Jumlah Pengunjung Lokal </th>
			<th> Jumlah Pengunjung Mancanegara </th>
			<th> Aksi </th>
		</tr>

		<?php $i = 1; ?>
		<?php
			while ($row = mysqli_fetch_assoc($result)) :
		?>

		<tr>
			<td> <?= $i; ?> </td>			
			<td> <?= $row["nama_wisata"]; ?> </td>
			<td> <?= $row["jml_lokal"]; ?>. </td>
			<td> <?= $row["jml_manca"]; ?>. </td>
			<td>
				<a href="ubah.php?id=<?= $row["id"]; ?>"> Ubah </a> |
				<a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Apakah Anda yakin menghapus data ini?');"> Hapus </a>
			</td>
		</tr>

		<?php $i++; ?>
		<?php endwhile; ?>

	</table>

	</div>


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