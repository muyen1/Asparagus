<?php
  include_once 'includes/header.php';
?>

<?php

    if(isset($_SESSION['loggedin-user'])){
        $loggeduser = $_SESSION['loggedin-user'];
        echo $loggeduser . " Check your History!";
    }
?>

  <div class="stats">
  <br/>  
  <h1><strong>Stats</strong></h1>
  

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="http://www.chartjs.org/dist/2.7.2/Chart.bundle.js"></script>
<script src="http://www.chartjs.org/samples/latest/utils.js"></script>


<div id="container" style="min-width: 310px; max-width: 800px; height: 400px; margin: 0 auto">

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
  },  {
    name: 'Wasted',
    data: [3, 4, 4, 2, 5]
  }]
});
</script>
</div>


<br/>

<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>







<div id="canvas-holder" style="min-width: 320px; max-width: 800px; height: 400px; margin: -90px">
		<canvas id="chart-area"></canvas>
	</div>

	</div>

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
  


<?php
  include_once 'includes/footer.php';
 ?>
