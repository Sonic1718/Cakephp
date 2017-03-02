<h1>Facts List</h1>

<table class='table table-hover table-striped'>
  <thead>
    <td><h4>Title</h4></td>
    <td><h4>Actions</h4></td>
  </thead>
  <?php foreach ($facts as $fact) { ?>
  <tr>
   <td><?= $fact['Facts']['title']; ?></td>
   <td>
        
        <?= $this->Html->link('View',
                                      '/member/posts/factsView/'.$fact['Facts']['id']
                             );
        ?>

        <?= $this->Html->link('Delete',
                                      '/member/posts/factDelete/'.$fact['Facts']['id'],
                                      array('confirm'=>'Are you sure you want to delete this?')
                             );
        ?>
    </td>
  </tr>
  <?php  } ?>
</table>