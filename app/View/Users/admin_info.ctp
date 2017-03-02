<br/><br/>	<br/><br/>	<br/><br/>	<br/>
<body style="background-color:#F8F8F8">
<?php echo $this->Form->create('User', array('type' => 'file','id' => 'uploadform','enctype'=>'multipart/form-data')); ?>
	<br/><br/>
<div class="container">
	<div class="col-md-3"></div>
	<div class="col-md-5">
		<div class="panel panel-primary" style="box-shadow:0px 1px 1px 0px">
			<div class="panel-heading"><h3>Update Info</h3></div>
			<div class="panel-body">
				<div class="row">
					<div class="col-sm-6">
						<?php echo $this->Form->input('fname',array('value' => $user['User']['fname'],'class' => 'form-control','label' => 'Firstname')); ?>
					</div>
					<div class="col-sm-6">
						<?php echo $this->Form->input('lname',array('value' => $user['User']['lname'],'class' => 'form-control','label' => 'Lastname')); ?>
					</div>
				</div>
						<?php echo $this->Form->input('username',array('value' => $user['User']['username'],'class' => 'form-control')); ?><br/>
<!-- 						<?php echo $this->Form->input('password', array(
											'type'=>'password',
											'class'=>'form-control input-md',
				 							'placeholder'=>'Password'
				 							)); ?> -->
<!-- 				<?php echo $this->Form->input('new_password', array(
											'type'=>'password',
											'class'=>'form-control input-md',
				 							'placeholder'=>'New password',
											'label'=>'')); ?> -->
				<?php echo $this->Form->submit('Update',array('class'=>'btn btn-primary','style'=>'margin-top:0.2em','multiple')); ?>

<!-- 				<div><img src="<?php echo '/files/' ?>" id="preview" class="img-responsive"><?php echo $this->Html->image('user.png',array('height'=>'40px','width'=>'40px')); ?>
				</div> -->
			</div>
		</div>
	</div>
	<div class="col-md-4"></div>
</div>


