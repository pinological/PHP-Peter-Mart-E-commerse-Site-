<?php
session_start();
$_SESSION = array();
echo '<script> window.location.replace("http://localhost/petermart/index.php"); </script>';
?>