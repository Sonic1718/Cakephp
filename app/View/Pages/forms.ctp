<div class="col-lg-12">
<div class="container">
	<h1>Land Reform</h1><br>
	<?= $this->Form->create(); ?>
	<?= $this->Form->input('Entry'); ?>
	<?= $this->Form->input('Period'); ?>
	<?= $this->Form->input('Tract'); ?>
	<?= $this->Form->input('Barrio'); ?>
	<?= $this->Form->input('Municipality'); ?>
	<?= $this->Form->input('Province'); ?>
	<?= $this->Form->input('Area'); ?>
	<?= $this->Form->input('lastname'); ?>
	<?= $this->Form->radio('Gender', array('male' => 'Male&nbsp;', ' female' => '&nbsp;Female') , array('legend'=>false));?>
	<?= $this->Form->input('Beneficial'); ?>
	<?= $this->Form->input('LandApplied'); ?>
	<?= $this->Form->input('Purpose'); ?>
	<?= $this->Form->input('KindPurpose'); ?>
	<?= $this->Form->input('YourPosition'); ?>
	<?= $this->Form->submit('submit'); ?>
	<?= $this->Form->end(); ?>
</div>
</div>