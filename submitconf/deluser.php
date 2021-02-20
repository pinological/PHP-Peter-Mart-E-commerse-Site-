<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "petermart";
$tempid = "";

if(isset($_POST['submit']) && !empty($_POST['id'])){


$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$tempid = $_POST['id'];


echo '<p class="textadmin">';
print_r($_POST);
echo '</p>';
unset($_POST);
$sql = "DELETE FROM people WHERE userid = '".$tempid."';";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
echo '<script> window.location.replace("http://localhost/petermart/deleteuser.php"); </script>';



}

?>
