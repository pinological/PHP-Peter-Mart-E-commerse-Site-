<?php
include("adminmenu.php");

?>
<br>
<br>
<center>
<form action="submitconf/deluser.php" method="post" class="box">
    <p class="formtext"> User ID : </p>
    <input type="text" class="adminbox" name="id"><br>

    <input type="submit" name="submit" value="delete">

</form>
</center>
<?php
include("databaselogin.php");

$sql = "SELECT * FROM people";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  echo '<table> <tr><th>User Id</th> <th>Name</th> <th>Email</th> <th>pass</th> <th>role</th></tr>';
  while($row = $result->fetch_assoc()) {
    echo "<tr><th>".$row['userid']."</th> <th>".$row['name']."</th> <th>".$row['email']."</th> <th>".$row['pass']."</th> <th>".$row['role']."</th></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();
?>