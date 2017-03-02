
<div class="col-lg-12">
  <h3>Facts : <?= $announcements['Announcements']['title']; ?></h3>
  <h5>Date : <?= $announcements['Announcements']['created']; ?> (<?php echo $this->Html->link('Delete','/member/posts/factDelete/'.$announcements['Announcements']['id'] , array('confirm'=>'Are you Sure you want to delete this?')); ?>)</h5>
  <div class="col-lg-6">
    <div class="row">
     <img src="<?php echo '/announcements/'.$announcements['Announcements']['image']; ?>" class="img-responsive">
    </div>
  </div>
  <div class="col-lg-6">

    <div class="col-lg-6">
        <?= $this->Html->link('back','/member/posts/announcementlist',array('class'=>'btn btn-default')); ?>
        <h4>Message</h4>
    </div>
    <div class="col-lg-6">
        
    </div>
    <div class="col-lg-12">
        <p><?= $announcements['Announcements']['description'];?></p>
    </div>
  </div>
</div>