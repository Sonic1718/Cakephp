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
     	    <td><a href='/member/posts/wildlifespecialspdf/<?= $data['Wildlifespecial']['id']; ?>' target='_blank'>
          <?= $data['Wildlifespecial']['name']; ?></a></td>
     	    <td><?= $data['Wildlifespecial']['pin']; ?></td>
     	   </tr>
         <?php } ?>
    </tbody>
  </table>
  </div>
</div>
<?php } ?>