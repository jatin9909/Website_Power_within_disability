<?php
include "tailoringfinal.php";
include "register.php";
$var_value = $_SESSION['success'];
if($var_value == "You are now logged in")
{
	echo "hello";
	$fname=$_SESSION['FNAME'] ;
  echo "<p>Hi".$fname."style=\"width:50%; color:white; position:relative;top:2px;left:80%\"</p>";
}
?>