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
<body>

	<div class="small-container">

	<h1> KELOLA OLEH-OLEH </h1>

	<table border="1" cellpadding="10" cellspacing="0">
		
		<tr>
			<th> No. </th>
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

<?php

$content = ob_get_clean();
    require_once(dirname(__FILE__).'./html2pdf/html2pdf.class.php');
    try
    {
       $html2pdf = new HTML2PDF('P', 'A4', 'en',  array(8, 8, 8, 8));
       $html2pdf->pdf->SetDisplayMode('fullpage');
       $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
       $html2pdf->Output('laporan-pdf.pdf');
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }

?>