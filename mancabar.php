<?php

include ('koneksi.php');

$wisata = mysqli_query($conn, "SELECT * FROM tb_wisatawan");
while ($row = mysqli_fetch_array($wisata)) {
	$nama_wisata[] = $row['nama_wisata'];

	$query = mysqli_query($conn, "SELECT sum(jml_manca) as jml_manca FROM tb_wisatawan where id='". $row['id']."'");
	$row = $query->fetch_array();
	$jml_manca[] = $row['jml_manca'];

}

?>

<!DOCTYPE html>
<html>
<head>
	<title> Lamongan Paradise </title>
	
	<script type="text/javascript" src="Chart.js"></script>
</head>
<body>


	<center><h3> Jumlah Wisatawan Mancanegara pada Tahun 2022 </h3></center>
<center>
	<div style="width: 500px; height: 500px">
		<canvas id="myChart"></canvas>
	</div></center>

	<script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: <?php echo json_encode($nama_wisata); ?>, datasets: [{
					label: 'Grafik Jumlah Wisawatawan Mancanegara pada Tahun 2022',
					data: <?php echo json_encode($jml_manca); ?>,
					backgroundColor: 'rgba(255, 99, 132, 0.2)',
					borderColor: 'rgba(255, 99, 132, 1',
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
	</script>

</body>
</html>