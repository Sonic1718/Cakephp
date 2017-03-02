<body style="background-color:#eeeeee">
	
<div class="container"><!-- container -->
	<div class="row">
		<!-- first column -->
		<div class="col-md-4"></div>
			<div class="col-md-4">
				    <div class='bg-danger'><h3 class='text-center'><?php echo $this->Session->flash('auth')?></h3></div>
				<div class="jumbotron" style="box-shadow:0px 1px 1px 0px;background-color:#ffffff">
					<div class="glyphicon glyphicon-user" style="font-size: 4.0em;"> </div>	
						<h3 style="color:#222">Sign in your account</h3>
						    <!-- Login -->
							<?php
								echo $this->Form->create('User');
								echo $this->Form->input('username', array(
															'class'=>'form-control input',
															'placeholder'=>'Username'));
								echo $this->Form->input('password', array(
															'class'=>'form-control input',
															'placeholder'=>'Password'));
								echo $this->Html->link("Forgot Password?",array(
															"controller"=>"Users",
															"action"=>"forgetpw"));
								echo "<div id='panel1'>";
								echo $this->Session->flash();
								echo "</div>";
								echo $this->Form->submit('Sign in', array(
															'class'=>'btn btn-primary btn-lg btn-block','style'=>'margin-top:0.2em;float:right'));
							?><br/>
				</div>  <!-- End Jumbotron -->
				<!-- second column -->
				<div class="col-md-4"></div>
			</div>
	</div> <!-- End Row -->
</div> <!-- End Container -->

	<div class="col-lg-offset-5">
		<h3>
			<?php
				echo $this->Html->link('Create account',array('action'=>'register')); 
			?>
		</h3>
	</div>	

<!-- footer -->
<footer>
	<!-- container -->
	<div class="container text-center">
		<hr>
			<p>&copy; Copyright 2015.</p>
	</div> <!-- end container -->
</footer>

