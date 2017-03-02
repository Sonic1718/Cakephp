<body style="background-color:#F8F8F8">
<!-- container -->
<br/>
<div id="panel1">
 <?php echo $this->Session->flash(); ?>
</div>
<div class="container">
	<div class="row">
		<div class="col-lg-9"><br/>
			<div style="background-color:#E0DEDE;">
				<?php foreach ($posts as $post): ?>
					<ul id="links">
						<div class="col-sm-1">
							<?php 
							if($post['User']['picture'] == 'empty') { ?>
								<?php echo $this->Html->image('user.png',array('height'=>'40px','width'=>'40px')); ?>
								<small><?php echo $post['User']['username']; ?></small>
							<?php } else { ?>
								<img src="<?php echo '/img/'.$post['User']['picture']; ?>" style="height:50px;width:50px">
								<small><?php echo $post['User']['username']; ?></small>
							<?php } ?>
						</div> <!-- End Column 1 -->

						<div class="col-sm-11"> <!-- 2nd Column --> 
							<div class="panel panel-info">
	      						<div class="panel-body"></div>
	      							<div class="container-fluid">
										<li><span class="glyphicon glyphicon-hand-right"></span><?php echo " ".$this->Html->link($post['Post']['title'], array('action' => 'view', $post['Post']['id']));; ?></li>
								    	<?php $date = h($post['Post']['created']); ?>
								    	<small><?php echo "Posted "."<i class='fa fa-clock-o'></i>&nbsp;".$this->Time->timeAgoInWords($post['Post']['created'])." by "."<span style='color:#0000FF'>".$post['User']['username']."</span>"; ?></small><br/><br/>
										<div class="col-lg-6">

    								        <?php if($post['Post']['image'] == null){ ?>
												
											<?php }else{ ?>
              									<img src="<?php echo '/files/'.$post['Post']['image']; ?>" class="img-responsive" style="height:200px;width:350px"><br/>
              								<?php } ?>

 										 </div>
  										<div class="col-lg-6">
  											<?php echo $post['Post']['body']; ?>
  										</div>
										<div style="text-align:right">
											<?php echo "<span class='badge' style='background-color:green'>".$post['Post']['comment_count']."</span>&nbsp;".$this->Html->link('comments', array('action' => 'view', $post['Post']['id']));; ?>
										</div>
									</div> <!-- End Container-fluid -->
								</div><h3>
						</div> <!-- End Column 2' -->
					</ul> 
				<?php endforeach; ?>
		</div>
		</div>
			<div class="col-sm-3"><br/>
				<div class="panel panel-success" style="box-shadow:0px 1px 1px 0px">
     				<div class="panel-heading" style='background-color:#00CC66'>
     					<h3 style="color:white">Popular Topics</h3></div>
      					<div class="panel-body"></div>
							<?php foreach ($comment as $post): ?>
								<ul id="links1">
									<?php 
										if($post['User']['picture'] == 'empty') { ?>
										<?php echo $this->Html->image('user.png',array('height'=>'40px','width'=>'40px')); ?>
									<?php } else { ?>
												<img src="<?php echo '/img/'.$post['User']['picture']; ?>" style="height:50px;width:50px">
												<small><?php echo $post['User']['username']; ?></small>
									<?php } ?>
										<small><li><?php echo $this->Html->link($post['Post']['title'], array('action' => 'view', $post['Post']['id']));; ?></li></small>
									<?php $date = h($post['Post']['created']); ?>
										<small><p><?php echo "<span style='color:#0000FF'>".$post['User']['username']."</span>"." posted".
											", Replies:"."<span id='badge'>".$post['Post']['comment_count']."</span>"; ?></p></small>
								</ul>
							<?php endforeach; ?>
				</div>
				<div class="panel panel-success" style="box-shadow:0px 1px 1px 0px">
     				<div class="panel-heading" style='background-color:#00CC66'><h3 style="			color:white">New Topics</h3></div>
      					<div class="panel-body"></div>
							<?php foreach ($comments as $posts): ?>
							<ul id="links1">
								<?php 
									if($posts['User']['picture'] == 'empty') { ?>
										<?php echo $this->Html->image('user.png',array('height'=>'40px','width'=>'40px')); ?>
										<small><?php echo $posts['User']['username']; ?></small>
								<?php } else { ?>
											<img src="<?php echo '/img/'.$posts['User']['picture']; ?>" style="height:50px;width:50px">
								<small><?php echo $posts['User']['username']; ?></small>
								<?php } ?>
								<small><li><?php echo $this->Html->link($posts['Post']['title'], array('action' => 'view', $posts['Post']['id']));; ?></li></small>
								    <?php $date = h($posts['Post']['created']); ?>
								<small><p><?php echo "<span style='color:#0000FF'>".$posts['User']['username']."</span>"." posted on:".date('F d Y', strtotime($date)); ?></p></small>
							</ul>
					<?php endforeach; ?>
				</div>
			</div> <!-- End 2nd Column -->
		</div> <!-- End Row  -->
		<!-- <p>
		<?php
			echo $this->Paginator->counter(array(
			'format' => __('Page {:page} of {:pages}, showing {:rowcount} post out of {:count} total, starting on record {:start}, ending on {:end}')
			));
		?>	</p>  -->
			<!-- <div>
				<?php
					echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev enabled'));
					echo $this->Paginator->numbers(array('separator' => ''));
					echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
				?>
			</div> -->
	</div> <!-- end row -->
</div>

<div class="container">
	<div class="alert alert-warning">
				<?php echo $this->Form->create('Post', array('type' => 'file')) ?>
				<?php echo $this->Form->input('title',array('class'=>'form-control','label'=>'Topic')); ?>
		<div class="input-group">
			<span class="input-group-btn">
				<span class="btn btn-success btn-file">
					<?php echo $this->Form->input('Post.image', array('type' => 'file','label'=>'Browse&hellip;')); ?>
				</span>
			</span><br/>
			<?php echo $this->Form->input('image',array('type'=>'text','label'=>'','class'=>'alert alert-warning','style'=>'width:200px;height:39px','placeholder'=>'Choose image','readonly')) ?>
		</div>
				<?php echo $this->Form->input('body',array('class'=>'form-control','label'=>'Content')); ?>
				<?php echo $this->Form->submit('Post',array('class'=>'btn btn-success','style'=>'margin-top:0.2em','multiple')); ?>
				<!-- <div id="result"></div> -->
</div>
</div>



