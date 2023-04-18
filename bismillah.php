<?php

include ('koneksi.php');

$result = mysqli_query($conn, "SELECT * FROM tb_oleh");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Oleh-Oleh</title>
	<link rel="stylesheet" type="text/css" href="b.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
</head>
<body onload="window.print()">
	

	<div class="small-container">

	<h1> KELOLA OLEH-OLEH </h1>
	

	<table border="1" cellpadding="10" cellspacing="0">
		
		<tr>
			<th> No. </th>
			<th> Gambar </th>
			<th> Nama Oleh-Oleh </th>
			<th> Alamat </th>
			<th> Harga </th>
			<th> Deskripsi </th>
		</tr>

		<?php $i = 1; ?>
		<?php
			while ($row = mysqli_fetch_assoc($result)) :
		?>

		<tr>
			<td> <?= $i; ?> </td>
			<td>
				<img src="image/<?= $row["gambar"]; ?>" width="100">
				</td>
			<td> <?= $row["nama_oleh"]; ?> </td>
			<td> <?= $row["alamat"]; ?>. </td>
			<td> <?= $row["harga"]; ?>. </td>
			<td> <?= $row["deskripsi"]; ?>. </td>
			
		</tr>

		<?php $i++; ?>
		<?php endwhile; ?>

	</table>


	</div>

	
</body>
</html>