<h1>Announcement List</h1>

<table class='table table-hover table-striped'>
  <thead>
    <td><h4>Title</h4></td>
    <td><h4>Actions</h4></td>
  </thead>
  <?php foreach ($announcements as $announcement) { ?>
  <tr>
   <td><?= $announcement['Announcements']['title']; ?></td>
   <td>

    <?= $this->Html->link('View',
                                      '/member/posts/announcementView/'.$announcement['Announcements']['id']
                             );
        ?>

   <?= $this->Html->link('Delete','/member/posts/announcementDelete/'.$announcement['Announcements']['id'],array('confirm'=>'Are you sure you want to delete this?')); ?></td>
  </tr>
  <?php  } ?>
</table>