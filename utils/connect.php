<?php

clearstatcache();
session_start();
   
if ( !isset($_SESSION['valid']) and $_SESSION['valid']!=1 ) {
  header("location: index.php");
}

$conn = mysqli_connect("localhost","root","","jci");

// check connection
if (mysqli_connect_errno()) {
  trigger_error('Database connection failed: '  . mysqli_connect_error(), E_USER_ERROR);
}

require_once "model.php";


?>