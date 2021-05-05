<style type="text/css">
#container {
    min-width: 300px;
    max-width: 800px;
    height: 300px;
    margin: 1em auto;
}
</style>

<script src="http://code.highcharts.com/highcharts.js"></script>
<script src="http://code.highcharts.com/modules/exporting.js"></script>
<div id="container"></div>

<script type="text/javascript">
var chart = new Highcharts.Chart({
     chart: {
         renderTo: 'container',
         type: 'bar'
     },
     title: {
        text: 'Poll Results'
    },
     xAxis: {
     	        
        title: {
            text: 'AUTHORS'
        },
    
     	 categories: [
     	<?php
      include('config.php');
 
        $sql=$db->prepare("SELECT * FROM opinions ");
        $sql->execute();
        while($res=$sql->fetch(PDO::FETCH_ASSOC))
          
      {
        echo "'".$res["opinions_author_name"]."',";
      }
  ?>],
      /*  ['Africa', 'America', 'Asia', 'Europe', 'Oceania'],*/
     },
     yAxis: {
        min: 0,
        title: {
            text: 'VOTES',
            align: 'high'
        },
        labels: {
            overflow: 'justify'
        }
    },
     series: [{
     showInLegend: false,
     name: 'votes',
         data: [
         <?php
         $sql=$db->prepare("SELECT * FROM opinions ");
        $sql->execute();
         while($res1=$sql->fetch(PDO::FETCH_ASSOC))
          
      {
        echo "[".$res1["opinions_vote"]."],";
      }
  ?>
            /* [107], [31], [635], [203], [2] */
         ]
     }]
 });

 var min = chart.series[0].dataMin;
 var max = chart.series[0].dataMax;

 for (var i = 0; i < chart.series[0].points.length; i++) {
     if (chart.series[0].points[i].y === max) {
         chart.series[0].points[i].update({
             color: 'red',
             name: 'max value'
         });
     }
    /* if (chart.series[0].points[i].y === min) {
         chart.series[0].points[i].update({
             color: 'yellow',
             name: 'min value'
         });
     }*/
 }
 </script>