<?php

include("../databaselogin.php");
error_reporting(0);
$sql = "SELECT * FROM cart";
$result = $conn->query($sql);
$temptotal =0;

if ($result->num_rows > 0) {

  
  while($row = $result->fetch_assoc()) {
    if($_POST["cartid"] == $row["cartid"]){
        $tempquan = $row["num"];
        $temptotal = $row["per"];
    }
  }
  
}
$temptotal = (int)$_POST["qun"]* $temptotal;

$sql = "UPDATE cart SET num = '".$_POST['qun']."', total = '".(string)$temptotal."' WHERE cartid = '".$_POST['cartid']."';";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
echo '<script> window.location.replace("http://localhost/petermart/submitconf/carddatashow.php"); </script>';







?>