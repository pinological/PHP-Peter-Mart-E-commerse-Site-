<?php
$stat = "";
$statlink = "";
session_start();
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
    <title><?php echo $title; ?></title>

    <link rel="stylesheet" href="main.css">
    <div class="home">
    <div class="nav">
        <div class="logo">
        <p class="namef">Peter</p>
        <p class="namel">Mart</p>
        </div>
        
        <div class="search">
        <form action="search.php" method="$_GET">
            <input type="text" placeholder=" Search.." name="name" class="boxsearch">
            <button type="submit"class="searchbutton"><img src="accet/search.png" alt="search" height="50px"> </button>
            </form>
        </div>
        <div class="user">
            <img src="accet/profile.png" alt="user" height="40px">
            

        </div>
        <p class="usertext">
                <?php echo $_SESSION["username"]; ?>

        </p>
         <img src="accet/cart.png" alt="cart" class="cartimg" height="40px">
         <a href="submitconf/carddatashow.php" class="cartre">Add Cart</a>
       
        <br>
        </div>
    </div>
    
    <!-- nav bar     -->
<div class="navbar">
  <a href="index.php">Home</a>

  <div class="dropdown">
    <button class="dropbtn">Game 
     
    </button>
    <div class="dropdown-content">
      <a href="ps.php">PS(Play Station)</a>
      <a href="pc.php">PC</a>
      <a href="nin.php">Nintendo Switch</a>
    </div>
  </div>

  <div class="dropdown">
    <button class="dropbtn">Merch 
     
    </button>
    <div class="dropdown-content">
      <a href="yt.php">Youtuber</a>
      <a href="game.php">Game</a>
      <a href="meme.php">Meme</a>
    </div>
  </div>

  <div class="dropdown">
    <button class="dropbtn">
      Tech
    </button>
    <div class="dropdown-content">
      <a href="pcmain.php">Gaming PC / Laptop</a>
      <a href="acc.php">accessories</a>
    </div>
  </div>
  <div class="dropdown">
    <button class="dropbtn">
      Show ALL
    </button>
    <div class="dropdown-content">
      <a href="priceall.php">By price</a>
      <a href="all.php">By name</a>
    </div>
  </div>


  <a href=<?php echo '"'.$statlink.'""'; ?> style="float: right; padding-right:60px;" ><?php echo $stat;?></a>
  <br>
  
 <!-- slider -->
</div>

<div class="slideshow-container">
<div class="mySlides fade">
  <img src="shop/banner0.png" style="width:100%">
</div>
<div class="mySlides fade">
  <img src="shop/banner1.png" style="width:100%">
</div>
<div class="mySlides fade">
  <img src="shop/banner2.png" style="width:100%">
</div>
</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>



<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
    
</head>
