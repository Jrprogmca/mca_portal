<?php
  require_once('includes/load.php');
if(!$session->logout()) {redirect("login.php");}

//Destroy entire session data.
session_destroy();
//redirect page to login.php
header('location:login.php');
?>
