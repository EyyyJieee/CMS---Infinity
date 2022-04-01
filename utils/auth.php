<?php

require_once 'connect2.php';
// echo "Wew";
$username=trim(strtolower ($_REQUEST['username']));
$password=trim(strtolower ($_REQUEST['password']));

$query="select * from users where username='$username' and password=sha1('$password')";
$has = query_hasrow($query); 


if ($has > 0) {
   session_start();   
//    $row = query_row($query);
   $_SESSION['valid']=1;  
   header("location: ../admin-boots.php");
} else {
   $code=1;
   header("location: ../index.php");
//    require_once 'login.php';
   die();
}

?>