
<div class="col-lg-12">
  <h3>Facts : <?= $result['Facts']['title']; ?></h3>
  <h5>Date : <?= $result['Facts']['created']; ?> (<?php echo $this->Html->link('Delete','/member/posts/factDelete/'.$result['Facts']['id'] , array('confirm'=>'Are you Sure you want to delete this?')); ?>)</h5>
  <div class="col-lg-6">
    <div class="row">
     <img src="<?php echo '/facts/'.$result['Facts']['image']; ?>" class="img-responsive">
    </div>
  </div>
  <div class="col-lg-6">

    <div class="col-lg-6">
        <?= $this->Html->link('back','/member/posts/factslist',array('class'=>'btn btn-default')); ?>
        <h4>Message</h4>
    </div>
    <div class="col-lg-6">
        
    </div>
    <div class="col-lg-12">
        <p><?= $result['Facts']['description'];?></p>
    </div>
  </div>
</div>