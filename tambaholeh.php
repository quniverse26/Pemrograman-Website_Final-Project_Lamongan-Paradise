<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "finalproject";

//create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
//check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());

mysqli_close($conn);
}

function registrasi($data) {
	global $conn;

	$nama_oleh = $_POST['nama_oleh'];
	$alamat = $_POST['alamat'];
	$harga = $_POST['harga'];
	$deskripsi = $_POST['deskripsi'];

	//upload gambar
	$gambar = upload();
	if (!$gambar) {
		return false;
	}

	//menambahkan user baru ke database
	mysqli_query($conn, "INSERT INTO tb_oleh VALUES ('', '$gambar', '$nama_oleh', '$alamat', '$harga', '$deskripsi')");

	return mysqli_affected_rows($conn);
}

function upload() {

	$namaFile = $_FILES['gambar']['name'];
	$ukuranFile = $_FILES['gambar']['size'];
	$error = $_FILES['gambar']['error'];
	$tmpName = $_FILES['gambar']['tmp_name'];

	// cek apakah tidak ada gambar yang diupload
	if( $error === 4 ) {
		echo "<script>
				alert('pilih gambar terlebih dahulu!');
			  </script>";
		return false;
	}

	// lolos pengecekan, gambar siap diuploa
	move_uploaded_file($tmpName, 'image/' . $namaFile);

	return $namaFile;

}

if (isset($_POST["tambah"])) {
	if (registrasi($_POST) > 0) {
		echo "<script>
			alert('Data oleh-oleh berhasil ditambahkan!');
			document.location.href = 'oleh2.php';
		</script>";
	} else {
		echo mysqli_error($conn);
		echo "<script>
			alert('Data oleh-oleh gagal ditambahkan!');
		</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title> Lamongan Paradise </title>
	<link rel="stylesheet" type="text/css" href="b.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">

		.signin{
			display: flex;
			justify-content: center;
			align-items: center;
			min-height: 100vh;
			background: #fffff;
		}
		.container{
			width: 100%;
			display: flex;
			max-width: 850px;
			background: #fff;
			border-radius: 15px;
			box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
		}

		.login{
			width: 480px;
		}

		form{
			width: 250px;
			margin: 60px auto;
		}

		form h1{
			margin: 20px;
			text-align: center;
			font-weight: bolder;
			text-transform: uppercase;
		}

		form hr{
			border-top: 2px solid #ffa12c;
		}

		form p{
			text-align: center;
			margin: 10px;
		}

		.right img{
			width: 300px;
			height: 300px;
			border-top-right-radius: 15px;
			border-bottom-right-radius: 15px;
		}

		form label{
			display: block;
			font-size: 16px;
			font-weight: 600;
			padding: 5px;
		}

		.login form input{
			width: 100%;
			margin: 2px;
			border: none;
			outline: none;
			padding: 8px;
			border-radius: 5px;
			border: 1px solid gray;
		}

		.login form button{
			border: none;
			outline: none;
			padding: 8px;
			width: 252px;
			color: #fff;
			font-size: 16px;
			cursor: pointer;
			margin-top: 20px;
			border-radius: 5px;
			background: #ffa12c;
		}

		.login form button:hover{
			background: rgba(214, 86, 64, 1);
		}
	</style>
</head>

<body>

	<nav>
		
		<div class="">
			<img src="image/logoo.png" width="140" height="45">
		</div>

		<ul>
			<li><a href="a1.php"> Home </a></li>
			<li><a href="wisataa.php"> Kelola Wisata</a>
				
			</li> 
			<li class="active"><a href=""> Oleh-Oleh </a></li>
			<li><a href="about2.php"> About </a></li>
			<li><a href="login.php"> Login </a></li>
		</ul>
	
	</nav>

	<br> <br> <br> <br> <br> <br> <br> <br> <br>

	<div class="signin">
		<div class="container">	

		<div class="login">	
		
	<form action="" method="POST" enctype="multipart/form-data">

		<h1> Tambah Oleh-Oleh </h1>
		<hr>
		<p> Lamongan Paradise </p>

				<label for="gambar"> Gambar </label>
				<input type="file" name="gambar" id="gambar">
			
				<label for="nama_oleh"> Nama Oleh-Oleh </label>
				<input type="text" name="nama_oleh" id="nama_oleh" placeholder="Nama Oleh-Oleh">

				<label for="alamat"> Alamat </label>
				<input type="text" name="alamat" id="alamat" placeholder="Alamat">

				<label for="harga"> Harga </label>
				<input type="text" name="harga" id="harga" placeholder="Harga">

				<label for="deskripsi"> Deskripsi </label>
				<input type="text" name="deskripsi" id="deskripsi" placeholder="Deskripsi">

				<button type="submit" name="tambah"> Submit </button>
			
	</form>

		</div>

		<div class="right">
			<img src="image/logo.png">
		</div>

		</div>

	</div>

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