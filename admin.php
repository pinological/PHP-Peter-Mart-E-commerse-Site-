<?php
include("adminhead.php");

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
$role = "";

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
      if($row['name'] == "admin"){
          $username = $row['name'];
          $password = $row['pass'];
          $role =  $row['role'];
        //   echo $password.$username;
      }

  }
  echo $password;
  if(isset($_POST['submit'])){
  if($_POST['username'] == $username && md5($_POST['password']) == $password){
    session_start();
    session_start();
    $_SESSION['adminlogin'] = $role;
  echo '<script> window.location.replace("http://localhost/petermart/adminmenu.php"); </script>';


  }
  else{
      echo '<p class="textadmin"> Either User name or password wrong </p>';
  }
}

} else {
  echo "0 results";
}
$conn->close();
    
?>
<center>
    <form action="admin.php" method="post">
    <p class="textadmin">User Name :</p>
    <input type="text" class="boxadmin" name="username">
    <p class="textadmin">Password :</p>
    <input type="password" class="boxadmin" name="password"><br><br>
    <input type="submit" name="submit" value="login">
    </form>
</center>
</body>
<script>
    document.getElementsByTagName('form')[0].submit()
</script>
</html>