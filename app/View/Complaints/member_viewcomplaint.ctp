<?php
if($this->Session->read('promp')){
  echo $this->Session->read('promp');
  unset($_SESSION['promp']);
}
?>


<div class="col-lg-12">
 <?php
 
  ?>
  <h3>Subject : <?= $result['Subject']['subject']; ?></h3>
    <h5>Date : <?= $result['Complaint']['created']; ?> (<?php echo $this->Html->link('Delete','/member/Complaints/deletecomplaint/'.$this->params['pass'][0] , array('confirm'=>'Are you Sure you want to delete this?')); ?>)</h5>
  <h5>User : <?= $result['User']['fname']." ".$result['User']['lname']; ?></h5>
  <div class="col-lg-6">
    <div class="row">
     <img src="<?php echo '/picture/'.$result['Picture']['0']['image']; ?>" class="img-responsive">
    </div>
  </div>
  <div class="col-lg-6">

   <ul class="list-inline">
    <li><?= $this->Html->link('Back','/member/complaints/complaint',array('class'=>'btn btn-default'));?></li>
    <li>
       <?php
          echo $this->Form->create();  
          echo $this->Form->input('email',array('type'=>'hidden','value'=>$result['User']['email']));
          echo $this->Form->submit('Send Notification',array('class'=>'btn btn-default'));
          echo $this->Form->end();
        ?>
    </li>
    <li></li>
    <li></li>
   </ul>
    
    
    <br>
    <div class="col-lg-6">
        <h4>Message</h4>
    </div>
    <div class="col-lg-6">
        
    </div>
    <div class="col-lg-12">
        <p><?= $result['Complaint']['message'];?></p>
    </div>
  </div>
</div>
