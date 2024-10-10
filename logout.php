<?php 

session_start();
session_unset();
unset($_SESSION['activeUser']);
session_destroy();
header('Location:login.php');

?>