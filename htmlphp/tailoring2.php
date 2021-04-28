<?php
session_start();
require "tailoring2.html";
$user = $_SESSION['EMAIL'];
//echo $user;
if($user!=null && isset($_SESSION['EMAIL'])){
$jsonArr=array();
$result="";
$conn =mysqli_connect("localhost","id5051406_admin","admin", "id5051406_pwd");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if (isset($_POST['get'])) {
    
	//echo "shivika";
  $selected = mysqli_real_escape_string($conn , $_POST['week']);
  $selected2= mysqli_real_escape_string($conn , $_POST['week2']);
echo $selected;
if($selected == "one")
{
$sql = "SELECT link FROM tailoring where no = 6";
$result = $conn->query($sql);
}
if($selected == "two")
{
$sql = "SELECT link FROM tailoring where no = 5";
$result = $conn->query($sql);
}
if($selected == "three")
{
$sql = "SELECT link FROM tailoring where no = 14";
$result = $conn->query($sql);
}
if($selected == "four")
{
$sql = "SELECT link FROM tailoring where no = 7";
$result = $conn->query($sql);
}
if($selected == "five")
{
$sql = "SELECT link FROM tailoring where no = 16";
$result = $conn->query($sql);
}
if($selected == "six")
{
$sql = "SELECT link FROM tailoring where no = 8";
$result = $conn->query($sql);
}
if($selected2 == "one")
{
$sql = "SELECT link FROM tailoring where no = 2";
$result = $conn->query($sql);
}
if($selected2 == "two")
{
$sql = "SELECT link FROM tailoring where no = 4";
$result = $conn->query($sql);
}
if($selected2 == "three")
{
$sql = "SELECT link FROM tailoring where no = 3";
$result = $conn->query($sql);
}
if($selected2 == "four")
{
$sql = "SELECT link FROM tailoring where no = 15";
$result = $conn->query($sql);
}
if($selected2 == "five")
{
$sql = "SELECT link FROM tailoring where no = 1";
$result = $conn->query($sql);
}
if($selected == "seven")
{
$sql = "SELECT link FROM tailoring where no = 9";
$result = $conn->query($sql);
}

if ($result->num_rows > 0) {
	//echo "hello";

$row = $result->fetch_assoc();
          $Link=$row["link"];
          $arr = array($Link);
		  array_push($jsonArr,$arr);
		  echo "<iframe width=\"760\" height=\"400\" style=\"margin-left:22%;margin-top:2%\" src=$Link frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>";

		  }
  }
echo json_encode($jsonArr,JSON_UNESCAPED_UNICODE);
	$conn->close();
}
else 
	echo "byeee";
	?>