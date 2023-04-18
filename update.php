<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$gambar = $_POST['gambar'];
$nama_wisata = $_POST['nama_wisata'];
$alamat = $_POST['alamat'];
$rating = $_POST['rating'];
$jml_lokal = $_POST['jml_lokal'];
$jml_manca = $_POST['jml_manca'];

// update data ke database
mysqli_query($conn,"UPDATE tb_wisata SET gambar='$gambar', nama_wisata='$nama_wisata', alamat='$alamat', rating='$rating', jml_lokal='$jml_lokal', jml_manca='$jml_manca' WHERE id='$id'");

// mengalihkan halaman kembali ke index.php
header("location:wisataa.php");

?>