<?php
$cakeDescription = "DENR | Login";
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
	</title>
	<?php
		echo $this->Html->script('jquery-1.11.3');
 		echo $this->Html->css('bootstrap.min');
 		echo $this->Html->css('custom');
		echo $this->Html->css('style');
	?>
</head>
<body>

<div class="col-lg-12 center">
      <h3><?php echo $this->Session->flash('auth')?></h3>
</div>



	<!-- first row -->
	<div class="row" >			
		<div id="custom-bootstrap-menu" class="navbar navbar-default " style="background-color:#FFF;"  role="navigation">
			<!--  container -->
			<div class="container">
			<div class="container-fluid">
				<div class="header content clearfix">
					<!-- first row -->
			    	<div class="col-lg-12" style="background-color:#FFF;">  
			    		<!-- first column -->
						<div class="col-lg-6">	
						    <a href="/"><img src="/image/denr.png" height="100px" width="360px"></a><br><br>
						</div> <br/><br/>
						<!-- second column --> 
						<div class="col-lg-6">
<?php  if ($this->action == 'register') { ?>
					    <div style="text-align:right">
							<?php echo $this->Html->link('Sign in','/users/login', array('class'=>'btn btn-primary'));
 
							?>
					    </div>
<?php   } ?>
						</div>
					</div> 
				</div>   		    
			</div> <!-- end container -->
			</div>
		</div>
	</div>


	<div id="container">
	  	
		<div id="content">

			<?php echo $this->Session->flash(); ?>
			<?php echo $this->fetch('content'); 
			  echo $this->Html->css('bootstrap.min');
		    ?>
		</div>
		
	</div>


<script src='https://www.google.com/recaptcha/api.js'></script>

<script type="text/javascript">
	$(document).ready(function() {

			$("#panel1").show(500).delay(2000).hide(1000);

	});
</script>
	
</body>
</html>
