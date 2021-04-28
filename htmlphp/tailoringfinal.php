<?php

session_start();
$user = $_SESSION['EMAIL'];
if($user!=null && isset($_SESSION['EMAIL']))
	echo "already loged in";
else
	echo "user not exists";

?>