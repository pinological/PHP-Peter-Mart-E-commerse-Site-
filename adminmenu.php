<?php
include("adminhead.php");
session_start();
if(!($_SESSION["adminlogin"] == "admin")){
    echo '<script> window.location.replace("http://localhost/petermart/admin.php"); </script>';
}

?>
<br>
<div class="menufield">
    <a href="addproduct.php" class="menuadmin">Add Product</a>
    <a href="updateproduct.php" class="menuadmin">Update Product</a>
    <a href="deleteproduct.php" class="menuadmin">Delete Product</a>
    <a href="deleteuser.php" class="menuadmin">Delete User</a>
    <a href="alldata.php" class="menuadmin">Show All Data</a>
    <a href="adminlogout.php" class="menuadmin">Logout</a>
</div>




</body>
</html>