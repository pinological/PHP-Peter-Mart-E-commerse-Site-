<?php
include("adminmenu.php");
include("databaselogin.php");
$tempname = "";
$temptype = "";
$tempprice = "";
$tempsub = "";

$sql = "SELECT * FROM product";
$result = $conn->query($sql);
$temptotal =0;

if ($result->num_rows > 0) {

  
  while($row = $result->fetch_assoc()) {
    if($_POST["id"] == $row["prodid"]){
        $tempname = $row["name"];
        $temptype = $row["type"];
        $tempprice = $row["price"];
        $tempsub = $row["sub"];
    }
  }
  
}
?>
<br>
<br>
<center>
<form action="submitconf/reupdateadmin.php" method="post" class="box" >
    <input type="hidden" value=<?php echo $_POST['id']; ?> name="id">
    <p class="formtext"> Product Name : </p>
    <input type="text" class="adminbox" name="name" value=<?php echo '"'.$tempname.'"'; ?>>
    <p class="formtext"> Product Type : </p>
    <input type="text" class="adminbox" name="type" value=<?php echo '"'.$temptype.'"'; ?>>
    <p class="formtext"> Price : </p>
    <input type="text" class="adminbox" name="price" value=<?php echo '"'.$tempprice.'"'; ?>>
    <p class="formtext"> Subcatogry : </p>
    <input type="text" class="adminbox" name="sub" value=<?php echo '"'.$tempsub.'"'; ?>><br><br>
    <input type="submit" name="submit" value="Upload">

</form>

</form>
</center>
<?php
include("databaselogin.php");

$sql = "SELECT * FROM product";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  echo '<table> <tr><th>Product Id</th> <th>Name</th> <th>Type</th> <th>Price</th> <th>Image location</th> <th>Sub Catogry</th></tr>';
  while($row = $result->fetch_assoc()) {
    echo "<tr><th>".$row['prodid']."</th> <th>".$row['name']."</th> <th>".$row['type']."</th> <th>".$row['price']."</th> <th>".$row['imgloco']."</th> <th>".$row['sub']."</th></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();
?>