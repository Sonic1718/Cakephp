<script src="http://code.highcharts.com/highcharts.js"></script>
<script src="http://code.highcharts.com/modules/exporting.js"></script>

<?php //pr($default); ?>

	
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


<div class="col-lg-12">
    <div class="col-lg-3">
    	<h3>Select Year</h3>
		<select id='year' class='form-control'>
		<?php
		 for( $x=2008 ; $x<=2017 ; $x++){
		 	echo "<option value=".$x.">".$x."</option>";
		 }
		?>
		</select>
	</div>
	<div class="col-lg-9">
		<div class="col-lg-6">
			<h3>Select Month From</h3>
			<select class='form-control' id='from'>
			 <option value='1'>January</option>
			 <option value='2'>Febrary</option>
			 <option value='3'>March</option>
			 <option value='4'>April</option>
			 <option value='5'>May</option>
			 <option value='6'>Jun</option>
			 <option value='7'>July</option>
			 <option value='8'>August</option>
			 <option value='9'>September</option>
			 <option value='10'>October</option>
			 <option value='11'>November</option>
			 <option value='12'>December</option>
			</select>
		</div>
		<div class="col-lg-6">
			<h3>Select Month Till</h3>
			 <select class='form-control' id='till'>
			 <option value='1'>January</option>
			 <option value='2'>Febrary</option>
			 <option value='3'>March</option>
			 <option value='4'>April</option>
			 <option value='5'>May</option>
			 <option value='6'>Jun</option>
			 <option value='7'>July</option>
			 <option value='8'>August</option>
			 <option value='9'>September</option>
			 <option value='10'>October</option>
			 <option value='11'>November</option>
			 <option value='12' selected>December</option>
			</select>
		</div>
		<div class="col-lg-12"><br>
			<button class="btn btn-primary form-control" id="filter">Filter</button>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(function(){

		$('#year').change(function(){
			$.ajax({
				url:window.location.origin+'/member/posts/year/'+$('#year').val(),
				success:function(result){
					$('#stats').html(result);
				}
			});
		});

		$('#from').change(function(){
			if ( parseInt(this.value) > parseInt($('#till').val()) ) {
				$('#till').val(this.value);
			}
		});

		$('#till').change(function(){
			if ( parseInt(this.value) < parseInt($('#from').val()) ) {
				$('#from').val(this.value);
			}
		});

		$('#filter').click(function(){

			var year = $('#year').val();
			var from = $('#from').val();
			var till = $('#till').val();
			$.ajax({
				url:window.location.origin+'/member/posts/month/'+year+'/'+from+'/'+till,
				success:function(result){
					$('#stats').html(result);
				}
			});
		});

	});
</script>