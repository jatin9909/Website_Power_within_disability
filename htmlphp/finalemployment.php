
<?php
//session_start();
//$user = $_SESSION['EMAIL'];
$conn =mysqli_connect("localhost","id5051406_admin","admin", "id5051406_pwd");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//if( isset($_SESSION['EMAIL'])){
//$user = $_SESSION['EMAIL'];
//if($user!=null ){
//echo $user;

//$result="";
$user="abc@asd";
if(isset($_POST['apply1'])){
    $apply1="Tejus Enterprises & Electronics Bhopal";
$result2= "INSERT INTO applied_employment VALUES('$user','$apply1')";
}  	
if(isset($_POST['apply2'])){
    $apply2="Zebra Fashion Private Limited Indore";
$result2= "INSERT INTO applied_employment VALUES('$user','$apply2')";
}  	
if(isset($_POST['apply3'])){
    $apply3="Radio Mirchi 98.3 FM Mumbai";
$result2= "INSERT INTO applied_employment VALUES('$user','$apply3')";
}  	
if(isset($_POST['apply4'])){
    $apply4="ALP Deaf Dumb School Jaipur";
$result2= "INSERT INTO applied_employment VALUES('$user','$apply4')";
}  	
if(isset($_POST['apply5'])){
    $apply5="Techscape Engineering Enterprises Pvt.Ltd. Delhi";
$result2= "INSERT INTO applied_employment VALUES('$user','$apply5')";
}  	
if(isset($_POST['apply6'])){
    $apply6="ACE Experiences Asia Pvt.Ltd. Chennai ";
$result2= "INSERT INTO applied_employment VALUES('$user','$apply6')";
}  	
$enroll = mysqli_query($conn, $result2);
//header("location: tailoring2.html");

//}
//}
//else
//{
//if(isset($_POST['apply1'])||($_POST['apply2'])||($_POST['apply3'])||($_POST['apply4'])||($_POST['apply5'])||($_POST['apply6'])){    

//	$conn->close();
	
//}
//}
	?>