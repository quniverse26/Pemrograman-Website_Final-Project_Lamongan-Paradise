<?php
//menghubungkan ke database
include ('koneksi.php');

$result = mysqli_query($conn, "SELECT * FROM tb_wisata");

//tipe file yang akan di-export
header("Content-type: application/vnd-ms-excel");

//memberikan nama pada file excel yang ter-export dari database
header("Content-Disposition: attachment; filename=laporan-excel-wisata.xls");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Wisata</title>
	<link rel="stylesheet" type="text/css" href="b.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

	<div class="small-container">

	<h1> WISATA </h1>

<!-- menampilkan tabel wisata -->
	<table border="1" cellpadding="10" cellspacing="0">
		
		<tr>
			<th> No. </th>
			<th> Nama Wisata </th>
			<th> Alamat </th>
			<th> Rating </th>
			<th> Jumlah Pengunjung Lokal </th>
			<th> Jumlah Pengunjung Mancanegara </th>
		</tr>

		<?php $i = 1; ?>
		<?php
			while ($row = mysqli_fetch_assoc($result)) :
		?>

		<!-- mengambil data wisata dari database -->
		<tr>
			<td> <?= $i; ?> </td>
			<td> <?= $row["nama_wisata"]; ?> </td>
			<td> <?= $row["alamat"]; ?>. </td>
			<td> <?= $row["rating"]; ?>. </td>
			<td> <?= $row["jml_lokal"]; ?>. </td>
			<td> <?= $row["jml_manca"]; ?>. </td>
		</tr>

		<?php $i++; ?>
		<?php endwhile; ?>

	</table>

	</div>

</body>
</html>