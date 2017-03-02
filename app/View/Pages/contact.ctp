<body style="background-color:#eeeeee">
<!-- container -->

<div class="container">
		<div class="col-lg-12"></div>
				<div class="col-md-7">
					<br>
					<div class="panel panel-success">
      					<div class="panel-heading"><h1 id="green">SEND MESSAGE</h1></div>
      					<div class="panel-body">      						
      						<?php
      						    echo $this->Form->create('Contact');
								echo $this->Form->input('name',array('placeholder'=>'Name','class'=>'form-control'));
								echo $this->Form->input('email',array('placeholder'=>'Email','class'=>'form-control'));
								echo $this->Form->input('telephone',array('placeholder'=>'Telephone','class'=>'form-control'));
								echo $this->Form->input('message',array('type'=>'textarea','class'=>'form-control'));
							?>
							<div style="text-align:right; margin-top:10px;">
								<?php echo $this->Form->submit('Submit',array('class'=>'btn btn-default')); ?>
								<br/>
							</div>	
      					</div>
   					</div>
				</div>

				<div class="col-md-5">
				<br>
					<div class="panel panel-success">
						<div class="panel-heading"><h1 id="green">OUR ADDRESS</h1></div>
						<div class="panel-body">
							<h5><b>Address : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							    Tel. No:</b>
							</h5>
                        	<div style="text-indent:70px;">
                        		Maimpis,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							    +63-2-929-6626;<br />
                        		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        		&nbsp;&nbsp;San Fernando, &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							    &nbsp;
							    988-3367 (VOIP)<br />
                        		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        		&nbsp;&nbsp;Pampanga &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							    http://www.denr.gov.ph<br />
                        		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        		&nbsp;&nbsp;Philippines<br />
                        	</div>
                        	
                        	<div id="map1" class="map">
                        	</div>

                        	<script src="http://maps.google.com/maps/api/js?sensor=false"></script>

							<script type="text/javascript">
							    jQuery(function ($) {
							        function init_map1() {
							            var myLocation = new google.maps.LatLng(15.065205,120.658140, -77.09327200000001);
							            var mapOptions = {
							                center: myLocation,
							                zoom: 16
							            };
							            var marker = new google.maps.Marker({
							                position: myLocation,
							                title: "Property Location"
							            });
							            var map = new google.maps.Map(document.getElementById("map1"),
							                mapOptions);
							            marker.setMap(map);
							        }
							        init_map1();
							    });
							</script>

							<style>
							    .map {
							        min-width: 300px;
							        min-height: 300px;
							        width: 100%;
							        height: 100%;
							    }
							
							    .header {
							        background-color: #F5F5F5;
							        color: #36A0FF;
							        height: 70px;
							        font-size: 27px;
							        padding: 10px;
							    }
							</style>










						</div>
					</div>
				</div>
</div>