<?php if (isset($result) == null) { ?>

  <h3>No Application Found..<h3>

<?php }else { ?>

<div class='col-lg-12'>
  <div class='row'>
	<table class="table table-striped">
    <thead>
      <tr>
        <th>Name</th>
        <th>Pin</th>
      </tr>
    </thead>
    <tbody>
        <?php foreach ($result as $data ) {?>
     	   <tr>
     	    <td><a href='/admin/posts/landconspdf/<?= $data['Landcon']['id']; ?>' target='_blank'><?= $data['Landcon']['name']; ?></a></td>
     	    <td><?= $data['Landcon']['pin']; ?></td>
     	   </tr>
         <?php } ?>
    </tbody>
  </table>
  </div>
</div>
<?php } ?>