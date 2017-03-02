<?php 
  $land = '';
  foreach ($default['land'] as $la) {
      $land .= round($la,2).',';  
    }
  //land
  $land = (rtrim($land, ","));

  $forest = '';
  foreach ($default['forest'] as $fo) {
      $forest .= round($fo,2).',';  
    }
  //land
  $forest = (rtrim($forest, ","));

  $wild = '';
  foreach ($default['wild'] as $wi) {
      $wild .= round($wi,2).',';  
    }
  //land
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
               categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
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