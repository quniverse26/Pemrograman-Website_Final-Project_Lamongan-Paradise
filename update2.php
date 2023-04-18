<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$gambar = $_POST['gambar'];
$nama_oleh = $_POST['nama_oleh'];
$alamat = $_POST['alamat'];
$harga = $_POST['harga'];
$deskripsi = $_POST['deskripsi'];

// update data ke database
mysqli_query($conn,"UPDATE tb_wisata SET gambar='$gambar', nama_oleh='$nama_oleh', alamat='$alamat', harga='$harga', deskripsi='$deskripsi' WHERE id='$id'");

// mengalihkan halaman kembali ke index.php
header("location:oleh2.php");

?>