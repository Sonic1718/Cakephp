<?php
if(isset($_SESSION['promp'])) {
	 echo $_SESSION['promp'];
	 unset($_SESSION['promp']);
}
if(isset($_SESSION['upload'])) {
	 echo $_SESSION['upload'];
	 unset($_SESSION['upload']);
}
if(isset($_SESSION['info'])) {
	 echo $_SESSION['info'];
	 unset($_SESSION['info']);
}
?>

<div class='col-lg-4'>
<h3>ADD Facts</h3>
<?= $this->Form->create('Facts',array('type' => 'file')); ?>
<?= $this->Form->input('Facts.title',array('class'=>'form-control')); ?><br>
<?= $this->Form->input('Facts.image',array('type'=>'file','class'=>'form-control')); ?><br>
<?= $this->Form->input('Facts.description',array('type'=>'textarea','class'=>'form-control')); ?><br>
<?= $this->Form->submit('Add Fact',array('class'=>'btn btn-default')); ?>
<?= $this->Html->link('Facts list','/admin/posts/factslist',array('class'=>'btn btn-primary pull-right','style'=>'margin-top:-33px;'));?>
<?= $this->Form->end() ?>
</div>

<div class='col-lg-4'>
<h3>ADD Announcements</h3>
<?= $this->Form->create('Announcements',array('type' => 'file')); ?>
<?= $this->Form->input('Announcements.title',array('class'=>'form-control')); ?><br>
<?= $this->Form->input('Announcements.image',array('type'=>'file','class'=>'form-control')); ?><br>
<?= $this->Form->input('Announcements.description',array('type'=>'textarea','class'=>'form-control')); ?><br>
<?= $this->Form->submit('Add Announcement',array('class'=>'btn btn-default')); ?>
<?= $this->Html->link('Announcement list','/admin/posts/announcementlist',array('class'=>'btn btn-primary pull-right','style'=>'margin-top:-33px;'));?>
<?= $this->Form->end() ?>
</div>


<div class='col-lg-4'>
<h3>ADD News and Events</h3>
<?= $this->Form->create('News',array('type' => 'file')); ?>
<?= $this->Form->input('News.title',array('class'=>'form-control')); ?><br>
<?= $this->Form->input('News.image',array('type'=>'file','class'=>'form-control')); ?><br>
<?= $this->Form->input('News.description',array('type'=>'textarea','class'=>'form-control')); ?><br>
<?= $this->Form->submit('Add News',array('class'=>'btn btn-default')); ?>
<?= $this->Html->link('News list','/admin/posts/newslist',array('class'=>'btn btn-primary pull-right','style'=>'margin-top:-33px;'));?>
<?= $this->Form->end() ?>
</div>


