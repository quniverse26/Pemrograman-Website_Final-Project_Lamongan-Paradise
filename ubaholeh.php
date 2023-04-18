<!DOCTYPE html>
<html>

<head>
	<title>Edit Data Wisata</title>
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
			<li class="active"><a href="oleh2.php"> Oleh-Oleh </a></li>
			<li><a href="about2.php"> About </a></li>
			<li><a href="login.php"> Login </a></li>
		</ul>
	
	</nav>
	<br><br><br><br><br><br>
<div class="small-container">
<h2>DATA OLEH-OLEH</h2>
	<br/>
	<a href="oleh2.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT DATA OLEH-OLEH</h3>

	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($conn,"SELECT * FROM tb_oleh WHERE id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>

		<form method="post" action="update2.php">
			<table>
				<tr>			
					<td>Gambar</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="file" name="gambar" value="<?php echo $d['gambar']; ?>">
					</td>
				</tr>
				<tr>
					<td>Nama Oleh-Oleh</td>
					<td><input type="text" name="nama_oleh" value="<?php echo $d['nama_oleh']; ?>"></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td><input type="text" name="alamat" value="<?php echo $d['alamat']; ?>"></td>
				</tr>
				<tr>
					<td>Harga</td>
					<td><input type="text" name="harga" value="<?php echo $d['harga']; ?>"></td>
				</tr>
				<tr>
					<td>Deskripsi</td>
					<td><input type="text" name="deskripsi" value="<?php echo $d['deskripsi']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form></div>
	<?php } ?>



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