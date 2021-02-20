<?php
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "petermart";
   
   // Create connection
   $conn = new mysqli($servername, $username, $password, $dbname);
   // Check connection
   if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
   }


$sql = "UPDATE product SET name = '".$_POST['name']."', type = '".$_POST["type"]."', price = '".$_POST["price"]."',sub = '".$_POST["sub"]."' WHERE prodid = '".$_POST['id']."';";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
 echo '<script> window.location.replace("http://localhost/petermart/updateproduct.php"); </script>';

?>