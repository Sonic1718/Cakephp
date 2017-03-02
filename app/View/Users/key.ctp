<body style="background-color:#eeeeee">
	<br><br><br><br><br><br><br>
<div class="container"><!-- container -->
	<div class="row">
		<!-- first column -->
		<div class="col-md-4"></div>
			<div class="col-md-4">
				<div class="jumbotron" style="box-shadow:0px 1px 1px 0px;background-color:#ffffff">
					<div class='bg-danger'><h3 class='text-center'><?php echo $this->Session->flash('auth')?></h3></div>	
					   <h3 style="color:#222">Enter New Password</h3>
					   <?php echo $this->Form->create('User',array('action' => 'key/'.$this->request->params['pass'][0].'/'.$this->request->params['pass'][1])); ?>
					   <?php echo $this->Form->input('password', array('class' => 'form-control','label' => '','placeholder' => 'Password')); ?>
					   <?php echo $this->Form->input('confirm_password', array('type'=>'password','class' => 'form-control','label' => '','placeholder' => 'Retype-Password')); ?>
					   <?php echo $this->Form->submit('Submit',array('class'=>'btn btn-default','style' => 'float:right;margin-top:0.2em;')); ?>
				</div>
				<!-- End Jumbotron -->
				<!-- second column -->
				<div class="col-md-4"></div>
			</div>
	</div> <!-- End Row -->
</div> <!-- End Container -->


<!-- footer -->
<footer>
	<!-- container -->
	<div class="container text-center">
		<hr>
			<p>&copy; Copyright 2015.</p>
	</div> <!-- end container -->
</footer>
