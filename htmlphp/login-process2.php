<?php
session_start();
$myusername="";
$mypassword="";
$db = mysqli_connect("localhost","id5051406_admin","admin", "id5051406_pwd");
if(isset($_POST['Login'])) {
    $myusername = mysqli_real_escape_string($db,$_POST['uname']);
    $mypassword = mysqli_real_escape_string($db,$_POST['psw']);
    $sql = "SELECT * FROM register WHERE EMAIL = '$myusername' and PASSWORD = '$mypassword'";
    $result = mysqli_query($db,$sql);
    $row=$result->fetch_assoc();
    $count = mysqli_num_rows($result);
    if($count > 0) { 
        $_SESSION['EMAIL'] = $row['EMAIL'];
        echo "logged in";
    } else {
        echo "Incorrect Password";
    }
}
?>