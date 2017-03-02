<?php 

  $month = '';
  foreach ($default['months'] as $mo) {
      $month .= "'".$mo."'".',';  
    }
  $month = (rtrim($month, ","));



  //land
  $land = '';
  foreach ($default['land'] as $la) {
      $land .= round($la,2).',';  
    }
  $land = (rtrim($land, ","));

  //forest
  $forest = '';
  foreach ($default['forest'] as $fo) {
      $forest .= round($fo,2).',';  
    }
  $forest = (rtrim($forest, ","));

  //wild
  $wild = '';
  foreach ($default['wild'] as $wi) {
      $wild .= round($wi,2).',';  
    }
  $wild = (rtrim($wild, ","));

  //pr($land);
  //pr($forest);
  //pr($wild);
 ?>

<div id="stats">
   <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
   <script type="text/javascript">
    $(function () {
       $('#container').highcharts({
           chart: {
               type: 'line'
           },
           title: {
               text: 'DENR Complaint Statistic'
           },
           subtitle: {
               text: 'Complaints Ratings'
           },
           xAxis: {
               categories: [<?php echo $month; ?>]
           },
           yAxis: {
               max:100,
               min: 0 
           },
           credits: {
            enabled: false
         },
         tooltip: {
             pointFormat: '{series.name} Percent <b>{point.y:,.2f} %</b><br/>'
           },
           plotOptions: {
               line: {
                   dataLabels: {
                       enabled: true
                   }
               },
               column: {
                stacking: 'percent'
               }
           },
           series: [{
               name: 'Land Management',
               data: [<?php echo $land; ?>]
           }, {
               name: 'Forest Management',
               data: [<?php echo $forest; ?>]
           },{
               name: 'Wild',
               data: [<?php echo $wild; ?>]
           }]
       });
   });
   </script>
</div>