<?php

$conn = mysqli_connect("localhost","root","","jci");

if (mysqli_connect_errno()) {
  trigger_error('Database connection failed: '  . mysqli_connect_error(), E_USER_ERROR);
}

require_once "model.php";

?>