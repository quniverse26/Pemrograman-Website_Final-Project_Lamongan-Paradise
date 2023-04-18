<?php

require 'koneksi.php';

if (isset($_POST["masuk"])) {
	
	$username = $_POST['username'];
	$password = $_POST['password'];

	$hasil = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");

	//mengecek username
	if (mysqli_num_rows($hasil) === 1) {
		
		$row = mysqli_fetch_assoc($hasil);
		if (password_verify($password, $row["password"])) {
			header("Location: a1.php");
	exit;
		}

	$error = true;
	}

}
?>

<!DOCTYPE html>
<html>
<head>
	<title> Lamongan Paradise </title>
	<link rel="stylesheet" type="text/css" href="b.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<!-- mengatur tampilan login -->
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
			width: 350px;
			height: 350px;
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
			<li><a href="index.php"> Home </a></li>
			<li><a href="wisata1.php"> Wisata </a>
				
			</li> 
			<li><a href="oleh.php"> Oleh-Oleh </a></li>
			<li><a href="info1.php"> Info Wisatawan </a></li>
			<li><a href="about.php"> About </a></li>
			<li class="active"><a href=""> Login </a></li>
		</ul>
	
	</nav>

	<br> <br> <br>

	<div class="signin">
		<div class="container">

		<div class="login">
			<form action="a1.php" method="POST">  
				<h1> Login </h1>
				<hr>
				<p> Lamongan Paradise </p>

				<label for="username"> Username </label>
				<input type="text" name="username" id="username" placeholder="username">

				<label for="password"> Password </label>
				<input type="password" name="password" id="password" placeholder="password">

				<button type="submit" name="masuk"> Login </button>

				<p> Belum punya akun? <a href="register.php"> Register </a></p>

			</form>

		</div>

		<div class="right">
			<img src="image/logo.png">
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