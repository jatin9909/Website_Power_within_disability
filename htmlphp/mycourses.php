<?php
session_start();
require "finalcourses.html";
$user = $_SESSION['EMAIL'];
$conn =mysqli_connect("localhost","id5051406_admin","admin", "id5051406_pwd");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if(isset($_SESSION['EMAIL'])){
    if($user!=null ){
  /*if(isset($_POST['allcourses'])){
      //header("location:finalcourses.html");
  }*/
    if(isset($_POST['mycourses'])){
        $result2= "SELECT course_name from applied_courses where email_id = '$user' ";
      	$enroll = mysqli_query($conn, $result2);
       echo "<img id=\"tailor\" src=\"/powerwithindisability/images/tailoring.jpg\" width=\"200\" height=\"150\" align=\"left\" >
<p style=\"font-size:25px\"><a href=\"tailoring.html\"> <b>TAILORING<b></a></p>";
    }
}
else {
    $conn->close();
	header("location: main.html");
}
}
?>