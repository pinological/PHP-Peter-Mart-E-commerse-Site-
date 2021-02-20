<?php
include("adminmenu.php");

?>
<br>
<br>
<center>
<p class="textadmin">User Data</p>
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
<br>
<br>
<p class="textadmin">Product Data</p>
<?php
include("databaselogin.php");

$sql = "SELECT * FROM product";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  echo '<table> <tr><th>Product Id</th> <th>Name</th> <th>Type</th> <th>Price</th> <th>Image location</th> <th>Subcatogry</th></tr>';
  while($row = $result->fetch_assoc()) {
    echo "<tr><th>".$row['prodid']."</th> <th>".$row['name']."</th> <th>".$row['type']."</th> <th>".$row['price']."</th> <th>".$row['imgloco']."</th> <th>".$row['sub']."</th></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();
?>
</center>