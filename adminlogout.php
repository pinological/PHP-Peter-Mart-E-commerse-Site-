<?php
session_start();
$_SESSION = array();
echo '<script> window.location.replace("http://localhost/petermart/admin.php"); </script>';
?>