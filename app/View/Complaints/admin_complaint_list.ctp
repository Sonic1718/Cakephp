

<div class="col-lg-12" id='content'>
<script type="text/javascript">
	$(document).ready(function(){
		$('#loader').fadeOut();
	});
</script>
<?php
echo $this->Html->script('jquery');
     $this->Paginator->options(array(
     	'update' => '#content',
     	'before' => $this->Js->get('#loader')->effect('fadeIn'),
     	'complete' => $this->Js->get('#loader')->effect('fadeOut')
     ));
?>


  <ul class="pagination">
    <?php
      echo $this->Paginator->prev(__('prev'), array('tag' => 'li'), null, array('tag' => 'li','class' => 'hidden','disabledTag' => 'a'));
      echo $this->Paginator->numbers(array('separator' => '','currentTag' => 'a', 'currentClass' => 'active','tag' => 'li','first' => 1));
      echo $this->Paginator->next(__('next'), array('tag' => 'li','currentClass' => 'disabled'), null, array('tag' => 'li','class' => 'hidden','disabledTag' => 'a'));
    ?>
  </ul>

<?php
  echo $this->Form->create('Complaint',array('url'=>'/admin/Complaints/complaintprint','target'=>'_blank'));
  echo $this->Form->input('table',array('type'=>'hidden','id'=>'data-input'));
  echo $this->Form->submit('print',array('class'=>'btn btn-primary btn-sm'));
  echo $this->Form->end();
?>

<img src='/img/bx_loader.gif' id='loader'>
<div id="data-record">
 <table class='table' border='1'>
   <tr><th>Subject</th> <th>Location</th> <th>Name</th> <th>Message</th> <th>Risk</th> <th width="100">Created</th></tr>
 <?php

      $rows = array();
      foreach ($posts as $post) {
      	$rows[] = array(
      		$post['Subject']['subject'],
          $post['Location']['location'],
          $post['User']['fname'].' '.$post['User']['lname'],
          $post['Complaint']['message'],
          $post['Complaint']['risk'],
      		$post['Complaint']['created']
      	);
      }
      
      echo $this->Html->tableCells($rows);

 ?>
 </table>
</div>

<script type="text/javascript">
  $(function(){
    var table = $('#data-record').html();
    $('#data-input').val(table);
 });
</script>

<?php
echo $this->Js->writeBuffer();
?>

</div>


