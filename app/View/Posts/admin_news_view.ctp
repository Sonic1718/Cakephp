
<div class="col-lg-12">
  <h3>News : <?= $news['News']['title']; ?></h3>
  <h5>Date : <?= $news['News']['created']; ?> (<?php echo $this->Html->link('Delete','/admin/posts/newsDelete/'.$news['News']['id'] , array('confirm'=>'Are you Sure you want to delete this?')); ?>)</h5>
  <div class="col-lg-6">
    <div class="row">
     <img src="<?php echo '/news/'.$news['News']['image']; ?>" class="img-responsive">
    </div>
  </div>
  <div class="col-lg-6">

    <div class="col-lg-6">
        <?= $this->Html->link('back','/admin/posts/newslist',array('class'=>'btn btn-default')); ?>
        <h4>Message</h4>
    </div>
    <div class="col-lg-6">
        
    </div>
    <div class="col-lg-12">
        <p><?= $news['News']['description'];?></p>
    </div>
  </div>
</div>
