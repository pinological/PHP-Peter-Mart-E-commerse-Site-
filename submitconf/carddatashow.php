<?php
// echo $_POST["topic"];
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
session_start();
// print_r($_SESSION);
//show in page
?>
<?php
$stat = "";
$statlink = "";
// session_start();
if(empty($_SESSION["username"])){
  $_SESSION["username"] = "Not Login Yet";
  $stat = "Login";
  $statlink = "login.php";
}
else{
  $stat = "Logout";
  $statlink = "logout.php";
}

?>

<!DOCTYPE html>
<html lang="en">
<?php
// print_r($_SESSION);
// echo "<p class='textadmin'> ID here:".$_SESSION['username']."</p>";
if(empty($_SESSION["username"])){
  $usernamemain = "Not login Yet";
  
}
else{
  $usernamemain = $_SESSION["username"];
}
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>

    <link rel="stylesheet" href="../main.css">
    <div class="home">
    <div class="nav">
        <div class="logo">
        <p class="namef">Peter</p>
        <p class="namel">Mart</p>
        </div>
        
        <div class="search">
        <form action="search.php" method="$_GET">
            <input type="text" placeholder=" Search.." name="name" class="boxsearch">
            <button type="submit"class="searchbutton"><img src="../accet/search.png" alt="search" height="50px"> </button>
            </form>
        </div>
        <div class="user">
            <img src="../accet/profile.png" alt="user" height="40px">
            

        </div>
        <p class="usertext">
                <?php echo $_SESSION["username"]; ?>

        </p>
         <img src="../accet/cart.png" alt="cart" class="cartimg" height="40px">
         <a href="#" class="cartre">Add Cart</a>
       
        <br>
        </div>
    </div>
    
    <!-- nav bar     -->
<div class="navbar">
  <a href="../index.php">Home</a>

  <div class="dropdown">
    <button class="dropbtn">Game 
     
    </button>
    <div class="dropdown-content">
      <a href="../ps.php">PS(Play Station)</a>
      <a href="../pc.php">PC</a>
      <a href="../nin.php">Nintendo Switch</a>
    </div>
  </div>

  <div class="dropdown">
    <button class="dropbtn">Merch 
     
    </button>
    <div class="dropdown-content">
      <a href="../yt.php">Youtuber</a>
      <a href="../game.php">Game</a>
      <a href="../meme.php">Meme</a>
    </div>
  </div>

  <div class="dropdown">
    <button class="dropbtn">
      Tech
    </button>
    <div class="dropdown-content">
      <a href="../pcmain.php">Gaming PC / Laptop</a>
      <a href="../acc.php">accessories</a>
    </div>
  </div>
  <a href=<?php echo '"'.$statlink.'""'; ?> style="float: right; padding-right:60px;" ><?php echo $stat;?></a>
  <br>
  
 <!-- slider -->
</div>
</head>
<body>

<div class="container">
    <p class="itemname">Cart</p>
    <br>
<br>
<p class="textadmin">Product Data</p>
<?php
include("../databaselogin.php");
error_reporting(0);
$sql = "SELECT * FROM cart";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

  echo '<table> <tr><th>Cart Product Id</th><th>Product Name</th> <th>Per</th> <th>Quantity</th> <th>Total</th> </tr>';
  while($row = $result->fetch_assoc()) {
    echo "<tr> <th>".$row['cartid']."</th> <th>".$row['name']."</th> <th>".$row['per']."</th> <th>".$row['num']."</th> <th>".$row['total']."</th></tr>";
  }
  echo "</table>";
} else {
  echo "<br><p class='itemname'>Cart Empty</p><br>";
}
//total adder
$finaltemp = 0;
$sql = "SELECT total FROM cart";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
      $finaltemp += (int)$row["total"];
    
  }
  
} else {
 
}


$conn->close();
?>

<p class="itemname">Total : <?php echo $finaltemp;?></p>
    <br>
    <form action="editcart.php" method="post">
        <p class="itemname"> Cart ID you wanna Edit : </p>
        <input type="text"  name="cartid">
        <p class="itemname"> Enter Quantity  : </p>
        <input type="text"  name="qun">
        <input type="submit" class="sendmail" value="Update" name="submit">

    </form>

    <form action="sendmail.php" method="post">
        <input type="hidden" value=<?php echo '"'.$finaltemp.'"' ; ?> name="finalmoney">
        <p class="itemname">Location : </p>
        <input type="text"  name="location"><br>
        <p class="itemname">Phone Number : </p>
        <input type="text"  name="phone">
        <input type="submit" class="sendmail" value="Confirm Purchase" name="submit">

    </form>
</div>



</body>
<footer>

<div class="bottom">
        <div class="section2">
            <p class="titleboot">
                About Us
            </p>
            <p class="infoboot">
                About Peter Mart
            </p>
        </div>
        <div class="section">
            <p class="titleboot">
                Information
            </p>
            <p class="infoboot">
                FAQ
            </p>
            <p class="infoboot">
                Return & Refund Policy
            </p>
            <p class="infoboot">
                Privacy Policy
            </p>
        </div>
        <div class="section">
            <p class="titleboot">
                Follow us on
            </p>
            <p class="infoboot">
                @petermart
            </p>
            <br>
            <br>
            <p class="imgboot">
                <a href="https://www.facebook.com/">
                <img src="../accet/facebok.png" height="20px" class="imgboot">
                </a>
            </p>
            <p class="imgboot">
            <a href="https://twitter.com/">
                <img src="../accet/twtter.png" height="20px" class="imgboot">
</a>
            </p>
            <p class="imgboot">
            <a href="https://youtube.com/">
                <img src="../accet/youtube.png" height="20px" class="imgboot">
</a>
            </p>
        </div>
        <div class="section1">
            <p class="titleboot">
                Customer Support
            </p>
            <p class="infoboot">
                Call us at 015970000
            </p>
            <p class="infoboot">
                petermart Customer Service Hours:
            </p>
            <p class="infoboot">
                Saturday: 9 AM to 5 PM (Call Center)
            </p>
            <p class="infoboot">
                Email support@petermart.com
            </p>
        </div>
    </div>
    <center>
        <div class="footer">
            <p class="forfoot">
                CopyRight <span>&#169;</span> Peter Karki 2020
            </p>
        </div>
    </center>

</footer>
</html>





