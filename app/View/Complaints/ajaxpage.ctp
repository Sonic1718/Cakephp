<br>
<?php
echo $this->Paginator->prev('Prev',array('class' => 'btn btn-default'),null,array('class' => 'hide'));
echo $this->Paginator->numbers();
echo $this->Paginator->next('Next',array('class' => 'btn btn-default'),null,array('class' => 'hide'));
?>
<br>

	<table class='table'>
		<?php
	     $tableH = $this->Html->tableHeaders(array(
	     	$this->Paginator->sort('subject'),
	     	$this->Paginator->sort('created')
	     ));
	     echo $tableH;
	     $rows = array();
	     foreach ($posts as $post) {
	     	$rows[] = array(
	     		$post['Complaint']['subject'],
	     		$post['Complaint']['created']
	     	);
	     }
	     
	     echo $this->Html->tableCells($rows);
		?>
	</table>
