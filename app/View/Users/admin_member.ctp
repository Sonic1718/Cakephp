<html>
	<head>
	</head>
<body>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<div class="well">
		<h3 id="green">Add Member</h3>
		<?php echo $this->Session->flash(); ?>
			<?php
				echo $this->Form->create('User');
				
        		echo "<div class='row'><div class='col-sm-6'>".$this->Form->input('fname', array(
        									'class'=>'form-control input-md',
        									'placeholder'=>'First name',
											'label'=>''
													   ))."</div>";
        		echo "<div class='col-sm-6'>".$this->Form->input('lname', array(
        							    	'class'=>'form-control input-md',
        							    	'placeholder'=>'Last name',
											'label'=>''
													   ))."</div></div>";
				echo $this->Form->input('email', array(
											'class'=>'form-control input-md',
											'placeholder'=>'Email',
											'label'=>''));
				echo $this->Form->input('phone', array(
											'class'=>'form-control input-md',
											'placeholder'=>'Phone',
											'label'=>''
													   ));
				echo $this->Form->input('username', array(
											'class'=>'form-control input-md',
											'placeholder'=>'Username',
											'label'=>''
													   ));
				echo $this->Form->input('password', array(
											'class'=>'form-control input-md',
											'placeholder'=>'Password',
											'label'=>''
													   ));
				echo $this->Form->input('confirm_password', array(
											'type'=>'password',
											'class'=>'form-control input-md',
											'placeholder'=>'Confirm Password',
											'label'=>''
													   ))."<br/>";
				echo $this->Form->input('role', array(
												'options'=>array(
												'member' => 'member',
												'admin' => 'admin'),
												'label' => '',
												'style'=>'width: 75px;height: 30px'
													   ))."<br/>";
				
				echo $this->Form->submit('Add Member', array(
											'class'=>'btn btn-success btn-lg btn-block'
											           ));			
			?>
			</div>
		</div>
	</div> <!-- End Row -->
</div> <!-- End Container -->
<footer>
	<!-- container -->
	<div class="container text-center">
		<hr>
			<p>&copy; Copyright 2015.</p>
	</div> <!-- end container -->
</footer>
</body>
</html>
    
