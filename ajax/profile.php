<?php
require_once('includes/config.php');

if (!isset($_SESSION['Auth']['id'])) {
  header("Location: index.html");
  exit;
} else {
  $users = new users;
  $condition = "id='" . $_SESSION['Auth']['id'] . "'";
  $check = $users->select($users->table, '', $condition);
}
?>
<table class="table">
  <tr>
    <th>Name</th>
    <th>Email Id</th>
    <th class="last">&nbsp;</th>
  </tr>
  <?php

  //$sr=1; 
  foreach ($check as $row) 
  {
?>
    <tr class="odd">
      <td><?php echo $row['name']; ?></td>
      <td><?php echo $row['email_address']; ?></td>
      <td class="last"><a href="guests.html">Back</a></td>
    </tr>

  <?php  }  ?>

</table>