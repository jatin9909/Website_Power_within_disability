<?php
session_start();
$conn =mysqli_connect("localhost","id5051406_admin","admin", "id5051406_pwd");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if(isset($_SESSION['EMAIL'])){
    $user=$_SESSION['EMAIL'];
    //echo "hello";
    if($user!=null ){
    $course="TAILORING";
    //echo $course;
    if(isset($_POST['enroll'])){
        $result2= "INSERT INTO applied_courses VALUES('$user','$course')";
      	$enroll = mysqli_query($conn, $result2);
        header("location: tailoring2.html");
    }
}
}
else {
    header("location: main.html");
}
?>