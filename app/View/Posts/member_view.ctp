<body style="background-color:#F8F8F8">
<div id='panel1'>
	<?php echo $this->Session->flash(); ?>
</div>

	<h3><?php echo h($post['Post']['title'])."</h3>"; ?>
		 <?php $date = $this->Time->timeAgoInWords($post['Post']['created']); ?>
	<small><p><?php echo "Posted ".$date." by ".$post['User']['username']; ?></p></small>
		<div class="panel panel-info">
	      	<div class="panel-body"></div>
	      		<div class="container-fluid">
					<div class="col-lg-4">
						<?php if($post['Post']['image'] == null){ ?>

						<?php }else{ ?>
              					<img src="<?php echo '/files/'.$post['Post']['image']; ?>" class="img-responsive" style="height:200px;width:350px"><br/>
              			<?php } ?>
            		</div>
		            <div class="col-lg-8">
		              <?php echo h($post['Post']['body']); ?>
		            </div></br>
					</div>
		</div>
<div class="actions">
	<h3><?php echo __('Actions '); ?></h3>
		<?php echo $this->Form->postLink(__('Delete this Post'), array('controller' => 'Posts','action' => 'delete2', $post['Post']['id']), array(), __('Are you sure you want to delete this post?')); ?>
</div>
	<div class="related">
		<h3><?php echo __('Comments'); ?></h3>
		<table class="table table-hover">
		    <?php if (!empty($post['Comment'])): ?>
		      	<?php foreach ($postss as $comment): ?>
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
               				<div class="panel-heading"><?php echo 
               					$comment['User']['username']." said:"; ?>
                 				 <small><?php echo "commented ".$this->Time->timeAgoInWords($post['Post']['created']); ?></small>
                			</div>
	                        <div class="panel-body">
	                      		<?php echo $comment['Comment']['content']; ?>
	                       </div>
              			</div><hr>
            		</div> <!-- End Second Column -->
          		<?php endforeach; ?>
		    <?php endif; ?>
		</table>
		    
		<div class="pagination pagination-large">
    		<ul class="pagination">
        		<?php
            		echo $this->Paginator->prev(__('prev'), array('tag' => 'li'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));
            		echo $this->Paginator->numbers(array('separator' => '','currentTag' => 'a', 'currentClass' => 'active','tag' => 'li','first' => 1));
            		echo $this->Paginator->next(__('next'), array('tag' => 'li','currentClass' => 'disabled'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));
        		?>
    		</ul>
		</div>

		    <!-- Creating a comment -->
		 <?php echo $this->Form->create('Comment', array('id'=>'myform')); ?>
         <?php
               echo $this->Form->input('content', array('class'=>'form-control','label'=>''));
         ?>
         <div style="text-align:right">
         	<?php echo $this->Form->submit('Comment', array('class'=>'btn btn-default','placeholder' => 'Comment')); ?>
     	 </div>
	</div>
