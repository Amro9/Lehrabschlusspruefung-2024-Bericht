<?php
include "../../initials/dbconn.php";

$sql = 'SELECT * FROM clients';

$result = $conn->query($sql);


if($result->num_rows > 0){
    while($row = $result->fetch_assoc())
    {
        echo '<tr>
      <th scope="row">'.$row['id'].'</th>
      <td>'.$row['name'].'</td>
      <td>'.$row['email'].'</td>
      <td>'.$row['phone'].'</td>
      <td>'.$row['address'].'</td>
      <td>'.$row['created_at'].'</td>
      <td>
      <a class="btn btn-primary btn-sm" href="../edit/editUser.php?id='.$row['id'].'">Edit</a>
      <a class="btn btn-danger btn-sm" href="../delete/deleteUser.php?id='.$row['id'].'">Delete</a>
      </td>
    </tr>';
    }
}
else{
    echo "keine";
}
$conn->close();
