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
?>

<?php 
$sql = "SELECT * FROM people";
$result = $conn->query($sql);
$username = "";
$password = "";
$email = "";

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
      if($row['role'] == "user"){
          $username = $row['name'];
          $password = $row['pass'];
          $email = $row['email'];
        //   echo $password.$username;
      }

  }
  if(isset($_POST['submit'])){
  if($_POST['username'] == $username && md5($_POST['password']) == $password){
      session_start();
    $_SESSION['username'] = $username;
    $_SESSION['email'] = $email;
  echo '<script> window.location.replace("http://localhost/petermart/index.php"); </script>';
  


  }
  else{
    $_SESSION = array();
      echo '<p class="textadmin"> Either User name or password wrong /<br> Try Register</p>';
  }
}

} else {
  echo "0 results";
}
$conn->close();
   
?>
<html>
<head>
<link rel="stylesheet" href="main.css">
<title>Login Page</title>
</head>
<body>
<div class="toplogin">
    <p class="logintext">
        Login Peter Mart
    </p>
</div>

    <br>
<center>
    <div class="loginarea">
        <br>
    <form action="login.php" method="post">
    <p class="textadmin">User Name :</p>
    <input type="text" class="boxadmin" name="username">
    <p class="textadmin">Password :</p>
    <input type="password" class="boxadmin" name="password"><br><br>
    <input type="submit" name="submit" value="login" class="login">
    <a href="register.php" class="register">Register</a>
    </form>
    
    </div>
</center>

</body>

<?php
include("footer.php");


?>
</html>