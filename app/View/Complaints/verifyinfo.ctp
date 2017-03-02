<br/><br/>	<br/><br/>	<br/><br/>	<br/>
<?php echo $this->Form->create('User'); ?>
	<br/><br/>
<div class="container">
	<div class="col-md-4"></div>
	<div class="col-md-4">
		<div class="panel panel-primary" style="box-shadow:0px 1px 1px 0px">
			<div class="panel-heading"><h3>Verification</h3></div>
			<div class="panel-body">
					<?php echo $this->Session->Flash(); ?>
				<?php echo $this->Form->input('phone_verification',array('class' => 'form-control','placeholder' => 'Enter verification code')); ?>
				<?php echo $this->Form->input('verified',array('class' => 'form-control','type' => 'hidden','value' => 1)); ?>
				<?php echo $this->Form->submit('verify',array('class'=>'btn btn-primary','style'=>'margin-top:0.2em','multiple')); ?><br/>
				<p class='alert alert-warning alert-dismissible' role='alert'>
					Note: You need to verify your number if you want to post your complaint..
					if not you can skip it below
				</p>
				<div style="text-align:right">
					<?php echo $this->Html->link('skip',array('controller' => 'users', 'action' => 'profile',$current_user['User']['id'])); ?>
			    </div>
<!-- 				<div><img src="<?php echo '/files/' ?>" id="preview" class="img-responsive"><?php echo $this->Html->image('user.png',array('height'=>'40px','width'=>'40px')); ?>
				</div> -->
			</div>
		</div>
	</div>
	<div class="col-md-4"></div>
</div>


