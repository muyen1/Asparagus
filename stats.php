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
  </br>  
  <h1><strong>Stats</strong></h1>
  

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>


<div id="container" style="min-width: 310px; max-width: 100%; height: 400px; margin: 0 auto">
</div>
<div id="container1" style="min-width: 310px; max-width: 100%; height: 400px; margin: 0 auto">
</div>
<script type="text/javascript">

$(document).ready(function() {

    $.getJSON('includes/stats.inc.php', function(data) {
        // bar chart
        Highcharts.chart('container', {
            chart: {
                type: 'bar'
            },
            title: {
                text: 'User habits for food consumption'
            },
            xAxis: {
                categories: data["foodname"]
            },
            yAxis: {
                min: 0,
                title: {
                text: 'Food consumption for each item'
                }
            },
            legend: {
                reversed: true
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            plotOptions: {
                series: {
                stacking: 'normal'
                },
            },
            series: [{
                name: 'Wasted',
                data: data["totalwasted"],
                color: '#ff794d'
            }, {
                name: 'Consumed',
                data: data["totalbought"],
                color: '#53d926'
            }]
        });

        //pie chart
        console.log(data);
        var j=k=0;
        for(var i=0; i < data["foodname"].length; i++){
            j += data["totalbought"][i];
            k += data["totalwasted"][i];
        }
        console.log(j);
        console.log(k);

        Highcharts.chart('container1', {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'User total food consumption habits'
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true,
                        format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                        style: {
                            color: (Highcharts.theme 
                                && Highcharts.theme.contrastTextColor) || 'black'
                        }
                    }
                }
            },
            series: [{
                data: [{
                    name: 'Bought',
                    y: j,
                    color: '#53d926'
                }, {
                    name: 'Wasted',
                    y: k,
                    color: '#ff794d'
                }]
            }]
        });
     });
        
    });


	</script>
  


<?php
  include'includes/footer.php';
 ?>
