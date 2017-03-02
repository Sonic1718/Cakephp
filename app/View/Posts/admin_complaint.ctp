<table class="table">
			<legend><?php echo __('Complaints'); ?></legend>
	<tbody>
	<?php foreach ($posts as $post): ?>
	<tr>
		<td><?php echo h($post['Complaint']['subject']); ?>&nbsp;</td>
		<td>
			<?php $date = h($post['Complaint']['created']); ?>
	<small><p><?php echo date('r', strtotime($date)); ?></p></small>
		&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('controller'=>'Complaints','action' => 'view', $post['Post']['id'])); ?>
		</td>
		<td><?php echo $this->Form->postLink(__('Delete Comment'), array('action' => 'delete', $post['Post']['id']), array(), __('Are you sure you want to delete # %s?', $post['Post']['id'])); ?> 
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>