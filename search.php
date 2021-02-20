<?php
$usernamemain = "";
$title = "search"; 
include("head.php");
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "petermart";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
<body>

<p class="showname">
        Searching <?php echo  $_GET['name']; ?> And Product Related to it
    </p>
    <div class="showcase">
    <?php
    $tempdata = "";
    $showgame = "select * from product where name like '".htmlspecialchars($_GET['name'])."%'";
    $result = $conn->query($showgame);
    if ($result->num_rows > 0) {
        // output data of each row
        $i = 0;
        while($row = $result->fetch_assoc()) {
        echo "<div class='productbox'>";
        echo "<img src=".$row['imgloco']." height='200px'>";
        echo "<p class='productname' >".$row["name"]."</p>";
        echo "<p class='productprice'> Rs ".$row["price"]."</p>";
        $tempdata = $row['type'];
        echo '<center><form action="submitconf/addcartconf.php" method="post"><input type = "hidden" name = "topic" value = "'.$row["prodid"].'" /><input type="submit" class="cartbtn" value="Add to Cart" name="submit"></form></center>';
        echo '</div>';
        }
        
      } else {
        echo "<div class='productbox'>";
        echo "<p class='productprice'> 0 Result </p>";
        echo '</div>';
      }

    ?>

    <div class="showcase">
    <?php
    $showgame = "select * from product where type='".$tempdata."'";
    $result = $conn->query($showgame);
    if ($result->num_rows > 0) {
        // output data of each row
        $i = 0;
        while($row = $result->fetch_assoc()) {
        echo "<div class='productbox'>";
        echo "<img src=".$row['imgloco']." height='200px'>";
        echo "<p class='productname' >".$row["name"]."</p>";
        echo "<p class='productprice'> Rs ".$row["price"]."</p>";
        echo '<center><form action="submitconf/addcartconf.php" method="post"><input type = "hidden" name = "topic" value = "'.$row["prodid"].'" /><input type="submit" class="cartbtn" value="Add to Cart" name="submit"></form></center>';
        echo '</div>';
        }
        
      } else {
        echo "<div class='productbox'>";
        echo "<p class='productprice'> 0 Result </p>";
        echo '</div>';
      }

    ?>

<br>
<br>

</body>
</html>
<?php
include("footer.php");
?>