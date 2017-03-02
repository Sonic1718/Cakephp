<div class="posts form">
<?php echo $this->Form->create('Post'); ?>
	<fieldset>
		<legend>Add Topic</legend>
	<?php
		echo $this->Form->input('title',array('class'=>'form-control','label'=>'Topic'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('List Topics'), array('action' => 'forum')); ?></li>
	</ul>
</div>
