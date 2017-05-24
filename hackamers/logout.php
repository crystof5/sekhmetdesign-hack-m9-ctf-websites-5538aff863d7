<?php 
  
session_start();//session is a way to store information (in variables) to be used across multiple pages. 

setcookie('username',NULL,-1);
unset($_SESSION['username']);

session_destroy();

 header("Location: login.php");//use for the redirection to some page
?>
