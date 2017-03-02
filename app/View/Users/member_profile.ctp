<?php echo $this->Form->create('User', array('type' => 'file','id' => 'uploadform','enctype'=>'multipart/form-data')); ?>
	<br/><br/>
<div class="container">
	<div class="col-md-4"></div>
	<div class="col-md-4">
		<div class="panel panel-primary" style="box-shadow:0px 1px 1px 0px">
			<div class="panel-heading"><h3>Change Profile</h3></div>
			<div class="panel-body">
				<?php if($user['User']['picture'] == 'empty'){ ?>
						<img src="<?php echo '/img/user.png'; ?>" style="height:200px;width:295px" >	
				<?php } else { ?>
							<img src="<?php echo '/img/'.$user['User']['picture']; ?>" style="height:200px;width:295px" >				
				<?php } ?> 
				<div class="input-group">
					<span class="input-group-btn">
						<span class="btn btn-primary btn-file">
							<?php echo $this->Form->input('User.picture', array('type' => 'file','label'=>'Browse&hellip;')); ?>
						</span>
					</span><br/>
					<?php echo $this->Form->input('picture',array('type'=>'text','label'=>'','class'=>'alert alert-warning','style'=>'width:200px;height:39px','placeholder'=>'Choose picture','readonly')) ?>
				</div>
		<?php echo $this->Form->submit('Change',array('class'=>'btn btn-primary','style'=>'margin-top:0.2em','multiple')); ?>

<!-- 				<div><img src="<?php echo '/files/' ?>" id="preview" class="img-responsive"><?php echo $this->Html->image('user.png',array('height'=>'40px','width'=>'40px')); ?>
				</div> -->
			</div>
		</div>
	</div>
	<div class="col-md-4"></div>
</div>


