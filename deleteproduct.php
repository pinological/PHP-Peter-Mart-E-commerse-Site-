<?php
include("adminmenu.php");

?>
<br>
<br>
<center>
<form action="submitconf/deletepro.php" method="post" class="box">
    <p class="formtext"> Product ID : </p>
    <input type="text" class="adminbox" name="id"><br>

    <input type="submit" name="submit" value="delete">

</form>
</center>
<?php
include("databaselogin.php");

$sql = "SELECT * FROM product";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  echo '<table> <tr><th>Product Id</th> <th>Name</th> <th>Type</th> <th>Price</th> <th>Image location</th></tr>';
  while($row = $result->fetch_assoc()) {
    echo "<tr><th>".$row['prodid']."</th> <th>".$row['name']."</th> <th>".$row['type']."</th> <th>".$row['price']."</th> <th>".$row['imgloco']."</th></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();
?>