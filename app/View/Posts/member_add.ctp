<div class="posts form">
<?php echo $this->Form->create('Post'); ?>
	<fieldset>
		<legend>Add Topic</legend>
	<?php  echo $this->Form->input('title',array('class'=>'form-control','label'=>'Topic')); ?>
		<!-- <div class="input-group">
			<span class="input-group-btn">
				<span class="btn btn-success btn-file">
					<?php echo $this->Form->input('Post.image', array('type' => 'file','label'=>'Browse&hellip;')); ?>
				</span>
			</span><br/>
			<?php echo $this->Form->input('image',array('type'=>'text','label'=>'','class'=>'alert alert-warning','style'=>'width:200px;height:39px','placeholder'=>'choose image','readonly')) ?>
		</div> -->
	<?php  echo $this->Form->input('body',array('class'=>'form-control','label'=>'Message')); ?>
	
	</fieldset>
<?php echo $this->Form->submit('Submit', array('class' => 'btn btn success')); ?>
</div>
