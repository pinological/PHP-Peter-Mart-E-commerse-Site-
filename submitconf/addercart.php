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

  $tempname = "";
  $tempprice = "";
  $tempnum = "";
  $temptotal = "";
//check table
$val = 'select * from cart';
$check = $conn->query($val);
if($check !== FALSE)
{
    $tempname = $_POST['nameproduct'];
    $tempprice = $_POST['perprice'];
    $tempnum = $_POST['number'];
    $temptotal = (int)$tempprice * (int)$tempnum;
    echo $temptotal;
    // print_r($_POST);
    $sql = "INSERT INTO cart (name, per, num,total) VALUES ('".$tempname."', '".$tempprice."', '".$tempnum."','".(string)$temptotal."')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
      
      $conn->close();
      echo '<script> window.location.replace("http://localhost/petermart/submitconf/carddatashow.php"); </script>';
}
else
{

    if ($conn->query("create table cart (cartid int(30) AUTO_INCREMENT,name varchar(30),per varchar(30),num varchar(30),total varchar(30),PRIMARY KEY(cartid));") === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
    $tempname = $_POST['nameproduct'];
    $tempprice = $_POST['perprice'];
    $tempnum = $_POST['number'];
    $temptotal = (int)$tempprice * (int)$tempnum;
    // print_r($_POST);
    $sql = "INSERT INTO cart (name, per, num,total) VALUES ('".$tempname."', '".$tempprice."', '".$tempnum."','".(string)$temptotal."')";
    if ($conn->query($sql) === TRUE) {
      
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
      
      $conn->close();
     echo '<script> window.location.replace("http://localhost/petermart/submitconf/carddatashow.php"); </script>';
    
}



?>