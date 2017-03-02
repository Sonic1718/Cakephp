<div class="panel panel-info">
	<div class="panel-heading"><?php echo $postcount." Users"; ?></div>
      	<div class="panel-body">
			<table class="table table-hover">
				<thead>
					<th>Firstname</th>
					<th>Lastname</th>
					<th>Username</th>
					<th>Email</th>
					<th>Contact Number</th>
					<th>Role</th>
					<th>Action</th>
				</thead>
				<tbody>
					<?php foreach($users as $user): ?>
						<tr>
							<td><?php echo $user['User']['fname']; ?></td>
							<td><?php echo $user['User']['lname']; ?></td>
							<td><?php echo $user['User']['username']; ?></td>
							<td><?php echo $user['User']['email']; ?></td>
							<td><?php echo $user['User']['phone']; ?></td>
							<td><?php echo $user['User']['role']; ?></td>
							<td>
								<?php 
								if($user['User']['role'] == 'admin'){

								}else{
								echo $this->Html->link('Delete',array('action'=>'delete',$user['User']['id']),NULL,'are you sure you want to delete this?');
								}
								?>
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

