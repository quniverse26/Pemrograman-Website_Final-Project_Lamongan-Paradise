<?php

require 'koneksi.php';

$id = $_GET['id'];

if (hapus($id) > 0) {
	echo "<script>
			alert('Data Wisata Berhasil Dihapus!');
			document.location.href = 'wisataa.php';
		</script>";
} else {
	echo "<script>
			alert('Data Wisata Gagal Dihapus!');
			document.location.href = 'wisataa.php';
		</script>";
}


?>