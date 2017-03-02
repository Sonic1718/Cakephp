<div class="posts form">
<?php echo $this->Form->create('Post'); ?>
	<fieldset>
		<legend>Add Topic</legend>
	<?php  echo $this->Form->input('title',array('class'=>'form-control','label'=>'Topic')); ?>

	<?php  echo $this->Form->input('body',array('class'=>'form-control','label'=>'Message')); ?>
	
	</fieldset>
<?php echo $this->Form->submit('Submit', array('class' => 'btn btn success')); ?>
</div>
