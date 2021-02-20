<html>
<head>
<link rel="stylesheet" href="main.css">
<title>Register</title>
</head>
<body>
<div class="toplogin">
    <p class="logintext">
        Register Peter Mart
    </p>
</div>

    <br>
<center>
    <div class="loginarea">
        <br>
    <form action="submitconf/regconf.php" method="post">
    <p class="textadmin">User Name :</p>
    <input type="text" class="boxadmin" name="name">
    <p class="textadmin">Email :</p>
    <input type="email" class="boxadmin" name="email">
    <p class="textadmin">Password :</p>
    <input type="password" class="boxadmin" name="pass"><br><br>
    <input type="submit" name="submit" value="Register" class="login">
    </form>
    
    </div>
</center>

</body>

<?php
include("footer.php");


?>
</html>