<?php
include "../../initials/header.php";
?>
<h2>List of clients</h2>
<a href="../create/form.php" class="btn btn-primary">Create User</a>
<hr>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
  <?php include "readAll.php";?>
  </tbody>
</table>
<?php
include "../../initials/footer.php";
?>
