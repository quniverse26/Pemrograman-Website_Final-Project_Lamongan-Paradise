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

	$nomor_pegawai = htmlspecialchars($data["nomor_pegawai"]);
	$nama_lengkap = strtolower(stripcslashes($data["nama_lengkap"]));
	$email = $email = strtolower(stripcslashes($data["email"]));
	$username = strtolower(stripcslashes($data["username"]));
	$password = mysqli_real_escape_string($conn, $data["password"]);

	//menambahkan user baru ke database
	mysqli_query($conn, "INSERT INTO registrasi VALUES ('', '$nomor_pegawai','$nama_lengkap', '$email', '$username', '$password')");

	return mysqli_affected_rows($conn);
}

function hapus($id) {
	global $conn;
	mysqli_query($conn, "DELETE FROM tb_wisata WHERE id = $id");

	return mysqli_affected_rows($conn);
}

?>