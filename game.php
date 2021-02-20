<?php
$title = "Game Merch";
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


include("head.php");
?>
</body>
<!-- game -->
<p class="showname">
        Gamer Merch:
    </p>
    <div class="showcase">
    <?php
    $showgame = "select * from product where sub ='game'";
    $result = $conn->query($showgame);
    if ($result->num_rows > 0) {
        // output data of each row
        $i = 0;
        while($row = $result->fetch_assoc()) {
        $i++;
        if($i > 5){
            break;
        }
        echo "<div class='productbox'>";
        echo "<img src=".$row['imgloco']." height='200px'>";
        echo "<p class='productname' >".$row["name"]."</p>";
        echo "<p class='productprice'> Rs ".$row["price"]."</p>";
        echo '</div>';
        }
        
      } else {
        echo "0 results";
      }

   
    ?>


<br>
<br>
<?php 
include("footer.php");
?>
</html>