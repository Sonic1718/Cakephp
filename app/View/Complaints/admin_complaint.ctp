

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

<img src='/img/bx_loader.gif' id='loader'>
 <table class='table'>
 <?php

      $tableH = $this->Html->tableHeaders(array(
      	'Subject',
        'Location',
        'Risk',
      	'Created',
      	'Action'
      ));
      echo $tableH;
      $rows = array();
      foreach ($posts as $post) {
      	$rows[] = array(
      		$post['Subject']['subject'],
          $post['Location']['location'],
          $post['Complaint']['risk'],
      		$post['Complaint']['created'],
      		$this->Html->link('View','/admin/Complaints/viewcomplaint/'.$post['Complaint']['id']).' - '.
      		$this->Html->link('Delete','/admin/Complaints/deletecomplaint/'.$post['Complaint']['id'],array('confirm'=>'Are you Sure you want to delete this?'))
      	);
      }
      
      echo $this->Html->tableCells($rows);
 ?>
 </table>
 <br>
 <?php echo $this->Html->link('Complaints Print','/admin/Complaints/complaintList',array('class'=>'btn btn-default')); ?>
<?php
echo $this->Js->writeBuffer();
?>

</div>


