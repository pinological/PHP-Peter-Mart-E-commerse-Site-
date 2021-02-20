<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "petermart";
$tempname = "";
$temptype = "";
$tempprice = "";
$tempsub = "";
if(isset($_POST['submit']) && !empty($_POST['name'])){
// echo '<p class="textadmin">'.$folder.'</p>';

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$tempname = $_POST['name'];
$tempemail = $_POST['email'];
$temppass = md5($_POST['pass']);


echo '<p class="textadmin">';
print_r($_POST);
echo '</p>';
unset($_POST);
$sql = "INSERT INTO people (name, email, pass, role) VALUES ('".$tempname."', '".$tempemail."', '".$temppass."','user')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
echo '<script> window.location.replace("http://localhost/petermart/login.php"); </script>';



}

?>
