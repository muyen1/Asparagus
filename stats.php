<?php include_once 'header.php'; ?>

<head>
	<meta charset="utf-8">
	<title>Stats</title>
	<style>
		<?php include 'main.css'; ?>
	</style>
</head>

<section>
		<h1>Stats</h1>
		<?php
			if (isset($_SESSION['u_id'])) {
				echo "You are logged in!";
			}
		?>	
</section>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="http://www.chartjs.org/dist/2.7.2/Chart.bundle.js"></script>
<script src="http://www.chartjs.org/samples/latest/utils.js"></script>

<section>
	<div id="container">
		<script>
  			Highcharts.chart('container', {
  			chart: {
    			type: 'bar'
  			},
  			title: {
    			text: 'Stacked bar chart'
  			},
  			xAxis: {
    			categories: ['Apples', 'Oranges', 'Pears', 'Grapes', 'Bananas']
 			},
  			yAxis: {
    			min: 0,
    			title: {
      				text: 'Total fruit consumption'
    			}
  			},
  			legend: {
    			reversed: true
  			},
  			plotOptions: {
    			series: {
      				stacking: 'normal'
    			}
  			},
  			series: [{
    			name: 'Consumed',
    			data: [5, 3, 4, 7, 2]
  			},  
			{
    			name: 'Wasted',
    			data: [3, 4, 4, 2, 5]
  			}]
			});
		</script>
</div>
</section>

<br>
<br>
<br>
<br>
<br>
<br>

<section>

<div id="canvas-holder" style="min-width: 320px; max-width: 800px; height: 400px; margin: -90px">
		<canvas id="chart-area"></canvas>
	</div>
	
</section>



<br>
<br>
<br>
<br>
<br>
<br>



<section>

	<div>
<!--
	<button id="randomizeData">Randomize Data</button>
	<button id="addDataset">Add Dataset</button>
	<button id="removeDataset">Remove Dataset</button>
-->
	<script>
		var randomScalingFactor = function() {
			return Math.round(Math.random() * 100);
		};

		var config = {
			type: 'pie',
			data: {
				datasets: [{
					data: [
						7, 3
					],
					backgroundColor: [
						window.chartColors.green,
						window.chartColors.red
					],
					label: 'Dataset 1'
				}],
				labels: [
					'Bought',
					'Wasted'
				]
			},
			options: {
				responsive: true
			}
		};

		window.onload = function() {
			var ctx = document.getElementById('chart-area').getContext('2d');
			window.myPie = new Chart(ctx, config);
		};
		
			</script>
	</div>
  
</section>
		<!--

//		document.getElementById('randomizeData').addEventListener('click', function() {
//			config.data.datasets.forEach(function(dataset) {
//				dataset.data = dataset.data.map(function() {
//					return randomScalingFactor();
//				});
//			});
//
//			window.myPie.update();
//		});
//
//		var colorNames = Object.keys(window.chartColors);
//		document.getElementById('addDataset').addEventListener('click', function() {
//			var newDataset = {
//				backgroundColor: [],
//				data: [],
//				label: 'New dataset ' + config.data.datasets.length,
//			};
//
//			for (var index = 0; index < config.data.labels.length; ++index) {
//				newDataset.data.push(randomScalingFactor());
//
//				var colorName = colorNames[index % colorNames.length];
//				var newColor = window.chartColors[colorName];
//				newDataset.backgroundColor.push(newColor);
//			}
//
//			config.data.datasets.push(newDataset);
//			window.myPie.update();
//		});
//
//		document.getElementById('removeDataset').addEventListener('click', function() {
//			config.data.datasets.splice(0, 1);
//			window.myPie.update();
//		});*/


<?php
  include_once 'footer.php';
 ?>
