<?php
require_once "../../product_manager/views/index.php"
?>
<table class="table" border="1" cellspacing="">
  <thead>
  <tr>
      <th>Name</th>
      <th>date time</th>
      <th>Address</th>
      <th>Position</th>
  </tr>
  </thead>
  <tbody>
  <?php foreach ($employees as $key): ?>
  <tr>
      <td><?php echo $key->getName(); ?></td>
      <td><?php echo $key->getDatetime(); ?></td>
      <td><?php echo $key->getAddress(); ?>
      <td><?php echo $key->getPosition(); ?>
  <?php endforeach; ?>
  </tbody>
</table>