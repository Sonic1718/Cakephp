<div class="actions">
	<?php echo $this->Html->link(__('Add Topic'), array('action' => 'add')); ?>  
</div>
<div class="panel panel-info">
	<div class="panel-heading"><?php echo $postcount." Topics"; ?></div>
      	<div class="panel-body">
			<table class="table table-hover">
				<thead>
					<th>Topics</th>
					<th>Created</th>
					<th>Action</th>
				</thead>
				<tbody>
					<?php foreach($posts as $post): ?>
						<tr>
							<td><?php echo $this->Html->link($post['Post']['title'], array('action' => 'view', $post['Post']['id']));; ?>&nbsp;</td>
							<td>
								<?php $date = $this->Time->timeAgoInWords($post['Post']['created']); ?>
						<small><?php echo $date ?></small>
					&nbsp;</td>
							<td class="actions">
								<?php echo $this->Form->postLink(__('Delete'), array('controller'=>'Posts','action' => 'delete', $post['Post']['id']), array(), __('Are you sure you want to delete this forum?', $post['Post']['id'])); ?>
							</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
	</div>
</div>
<div class="pagination pagination-large">
    <ul class="pagination">
        <?php
            echo $this->Paginator->prev(__('prev'), array('tag' => 'li'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));
            echo $this->Paginator->numbers(array('separator' => '','currentTag' => 'a', 'currentClass' => 'active','tag' => 'li','first' => 1));
            echo $this->Paginator->next(__('next'), array('tag' => 'li','currentClass' => 'disabled'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));
        ?>
    </ul>
</div>

