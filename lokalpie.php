<?php

include('koneksi.php');

$wisata = mysqli_query($conn, "SELECT * FROM tb_wisatawan");
while ($row = mysqli_fetch_array($wisata)) {
	$nama_wisata[] = $row['nama_wisata'];

	$query = mysqli_query($conn, "SELECT sum(jml_lokal) as jml_lokal FROM tb_wisatawan where id='". $row['id']."'");
	$row = $query->fetch_array();
	$jml_lokal[] = $row['jml_lokal'];
}
?>
<!doctype html>
<html>

<head>
	<title> Pie Chart - Jumlah Wisatawan Lokal pada Tahun 2022 </title>
	<script type="text/javascript" src="Chart.js"></script>
</head>

<body>
	<center><h3> Jumlah Wisatawan Lokal pada Tahun 2022 </h3></center>
<center>
	<center>
	<div id="canvas-holder" style="width:75%">
		<canvas id="chart-area"></canvas>
	</div></center>
	<script>
		var config = {
			type: 'pie',
			data: {
				datasets: [{
					data:<?php echo json_encode($jml_lokal); ?>,
					backgroundColor: [
					'rgb(0, 0, 205)',
					'rgb(252, 165, 3)',
					'rgb(178, 34, 33)',
					'rgb(34, 139, 35)',
					'rgb(253, 215, 3)',
					'rgb(135, 206, 250)',
					'rgb(128, 0, 128)',
					'rgb(64, 224, 208)',
					'rgb(127, 255, 1)',
					'rgb(255, 0, 0)'
					],
					label: 'Jumlah Wisatawan Lokal pada Tahun 2022'
				}],
				labels: <?php echo json_encode($nama_wisata); ?>},
			options: {
				responsive: true
			}
		};

		window.onload = function() {
			var ctx = document.getElementById('chart-area').getContext('2d');
			window.myPie = new Chart(ctx, config);
		};

		document.getElementById('randomizeData').addEventListener('click', function() {
			config.data.datasets.forEach(function(dataset) {
				dataset.data = dataset.data.map(function() {
					return randomScalingFactor();
				});
			});

			window.myPie.update();
		});

		var colorNames = Object.keys(window.chartColors);
		document.getElementById('addDataset').addEventListener('click', function() {
			var newDataset = {
				backgroundColor: [],
				data: [],
				label: 'New dataset ' + config.data.datasets.length,
			};

			for (var index = 0; index < config.data.labels.length; ++index) {
				newDataset.data.push(randomScalingFactor());

				var colorName = colorNames[index % colorNames.length];
				var newColor = window.chartColors[colorName];
				newDataset.backgroundColor.push(newColor);
			}

			config.data.datasets.push(newDataset);
			window.myPie.update();
		});

		document.getElementById('removeDataset').addEventListener('click', function() {
			config.data.datasets.splice(0, 1);
			window.myPie.update();
		});
	</script>
</body>

</html>