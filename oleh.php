<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "finalproject";

//create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Oleh-Oleh</title>
	<link rel="stylesheet" type="text/css" href="b.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
		.box-produk{
			width: 28%;
			height: 450px;
			border: 1px solid;
			margin: 2%;
			float: left;
			text-align: center;
			font: 16px sans-serif;
			}
		.box-produk img{
			width: 100%;
			height: 200px;
		}
	</style>
</head>
<body>
	<nav>
		
		<div class="">
			<img src="image/logoo.png" width="140" height="45">
		</div>

		<ul>
			<li><a href="index.php"> Home </a></li>
			<li><a href="wisata1.php"> Wisata</a>
				
			</li> 
			<li class="active"><a href="oleh.php"> Oleh-Oleh </a></li>
			<li><a href="info1.php"> Info Wisatawan </a></li>
			<li><a href="about.php"> About </a></li>
			<li><a href="login.php"> Login </a></li>
		</ul>
	
	</nav>
	<br><br>
	<h5>OLEH-OLEH</h5>
		<div class="small-container">
			<?php
		$produk = mysqli_query($conn, "SELECT * FROM tb_oleh");
		while($hasil = mysqli_fetch_array($produk)){
			?>
			<div class="box-produk">
				<img src="image/<?php echo $hasil['gambar']; ?>" />
				<?php echo $hasil['nama_oleh']."<br><br>"; ?>
				<?php echo $hasil['alamat']."<br>"; ?>
				<?php echo "Harga: ". $hasil['harga']."<br>"; ?>
				<?php echo $hasil['deskripsi']."<br>"; ?>
			</div>
		<?php
		 } ?>
		</div>

		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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