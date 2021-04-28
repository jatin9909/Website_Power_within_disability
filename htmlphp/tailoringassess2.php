<?php
session_start();
$user = $_SESSION['EMAIL'];
$conn =mysqli_connect("localhost","id5051406_admin","admin", "id5051406_pwd");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$one="";
$two="";
$three="";
$four="";
$five="";
$six="";
$seven="";
$eight="";
if(isset($_SESSION['EMAIL'])){
    $user = $_SESSION['EMAIL'];
    $course="Tailoring";
    $assessment=1;
    if($user!=null ){
    if(isset($_POST['submit'])){
$one= $_POST["1"];
$two= $_POST["2"];
$three= $_POST["3"];
$four= $_POST["4"];
$five= $_POST["5"];
$six= $_POST["6"];
$seven= $_POST["7"];
$eight= $_POST["8"];

$count=0;
if($one=="bell")
	$count++;
if($two=="4-5 Inches")
	$count++;
if($three=="6 Pieces")
	$count++;
if($four=="knit")
	$count++;
if($five=="wristbone")
	$count++;
if($six=="JTop Stitching Needles")
	$count++;
if($seven=="Pinked Seam")
	$count++;
if($eight=="running")
	$count++;

echo $count;
$sql= "Insert into assessment_submitted VALUES('$user','$course','$assessment','$count')";
        $result=mysqli_connect($conn,$sql);
    }}}

?>