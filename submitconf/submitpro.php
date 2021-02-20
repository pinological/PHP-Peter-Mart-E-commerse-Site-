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
$filename = $_FILES["file"]["name"];
$tempname = $_FILES["file"]["tmp_name"];
$folder = "upload/".$filename;
// echo '<p class="textadmin">'.$folder.'</p>';
move_uploaded_file($tempname,$folder);

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$tempname = $_POST['name'];
$temptype = $_POST['type'];
$tempprice = $_POST['price'];;
$tempsub = $_POST['sub'];

echo '<p class="textadmin">';
print_r($_POST);
echo '</p>';
unset($_POST);
$sql = "INSERT INTO product (name, type, price, imgloco,sub) VALUES ('".$tempname."', '".$temptype."', '".$tempprice."','submitconf/".$folder."','".$tempsub."')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
echo '<script> window.location.replace("http://localhost/petermart/addproduct.php"); </script>';



}

?>
