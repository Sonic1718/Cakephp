<h1>News and Events List</h1>

<table class='table table-hover table-striped'>
  <thead>
    <td><h4>Title</h4></td>
    <td><h4>Actions</h4></td>
  </thead>
  <?php foreach ($news as $new) { ?>
  <tr>
   <td><?= $new['News']['title']; ?></td>
   <td>
      <?= $this->Html->link('View',
                                      '/admin/posts/newsView/'.$new['News']['id']
                             );
        ?>

     <?= $this->Html->link('Delete','/admin/posts/newsDelete/'.$new['News']['id'],array('confirm'=>'Are you sure you want to delete this?')); ?>
  </td>
  </tr>
  <?php  } ?>
</table>