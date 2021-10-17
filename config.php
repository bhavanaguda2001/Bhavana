<?php
define("server","localhost");
define("username","root");
define("password","");
define("dbname","online_voting");
$connect=mysqli_connect(server,username,password) OR die(mysqli_error());
mysqli_select_db($connect,dbname) OR die(mysqli_error());
?>
