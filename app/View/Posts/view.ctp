<?php
      if($current_user){
        $id = $current_user['User']['id'];
      }else {
        $id = 0;
      } 
?> 
<br/>
<body style="background-color:#F8F8F8">
<div class="container" ><!--  Container -->
  <div class="row">
    <div class="col-md-9">
      <br/>
    <div class="panel panel-info">
      <div class="panel-body"></div>
        <div class="container-fluid">      
          <h3 style="color:#909090;background-color:#eeeeee;padding:5px"><?php echo h($post['Post']['title']); ?> &nbsp;
            <small><?php echo "Posted ".$this->Time->timeAgoInWords($post['Post']['created'])." by "."<span style='color:#0000FF'>".$post['User']['username']."</span>"; ?></small>
          </h3> 
          <div class="row">
            <div class="col-lg-5">
              <?php if($post['Post']['image'] == null){ ?>

              <?php }else{ ?>
                        <img src="<?php echo '/files/'.$post['Post']['image']; ?>" class="img-responsive" style="height:200px;width:350px"><br/>
              <?php } ?>
            </div>
            <div class="col-lg-7">
              <?php echo h($post['Post']['body']); ?>
            </div>
        </div> <!-- End row -->
<br/>
      <!-- List of Comments --> 
        <?php if (!empty($postss)): ?>
        <table>
          <?php foreach ($postss as $comment): ?>
          <div class="row">
            <div class="col-sm-1">
              <?php if($comment['User']['picture'] == 'empty'){ ?>
                      <?php echo $this->Html->image('user.png',array('height'=>'60px','width'=>'50px'))."<br/>"; ?>
                     <?php echo $comment['User']['username']; ?>
                <?php }else{ ?>
                       <img src="<?php echo '/img/'.$comment['User']['picture']; ?>" style="height:60px;width:50px">
                    <?php echo $comment['User']['username']; ?>
                <?php } ?>
            </div>
            <div class="col-sm-11"> <!-- Second Column -->
              <div class="panel panel-info">
                <div class="panel-heading" style="background-color:#eeeeee"><?php echo $comment['User']['username']." said:"; ?>
                  <small><?php echo "commented ".$this->Time->timeAgoInWords($post['Post']['created']); ?></small>
                </div>
                  <div class="panel-body">
                      <?php echo $comment['Comment']['content']; ?>
                  </div>
              </div><hr>
            </div> <!-- End Second Column -->
          </div> <!-- End row -->
          <?php endforeach; ?>
        </table>
        <?php endif; ?>
            <?php echo $this->Form->create('Comment', array('id'=>'myform')); ?>
            <?php
                  echo $this->Form->input('user_id',array('value'=>$id ,'type'=>'hidden'));
                  echo $this->Form->input('content', array('class'=>'form-control','label'=>''));
            ?>
            <div class='g-recaptcha' data-sitekey='6Le3ZwwTAAAAAFqJFVs8gpm4JrEWUe8TUL1WWVTo'></div>
            <div style="text-align:right">
              <?php echo $this->Form->submit('Comment', array('class'=>'btn btn-default','style'=>'margin-top:0.4em')); ?>
            </div><br/>
      </div>
    </div>
    </div> <!-- End First Column -->
    <div class="col-md-3"><br/>
      <?php echo $this->Html->image('eco2.jpg',array('height'=>'375px','width'=>'300px')); ?>
    </div> <!-- End Second Column -->
  </div> <!-- End of Row -->
</div> <!-- End container -->


