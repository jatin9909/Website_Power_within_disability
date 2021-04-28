<?php
session_start();
//require "login.php";
$fname="";
$lname="";
$age="";
$gender="";
$email= "";
$password="";
$conpassword="";
$contact="";
$disability="";
$address="";
$errors = array(); 

// connect to the database
$db = mysqli_connect("localhost","id5051406_admin","admin", "id5051406_pwd");
if(!$db)
	echo "bhagggggg";

if (isset($_POST['SIGNUP'])) {
	
  // receive all input values from the form
  $fname = mysqli_real_escape_string($db, $_POST['fname']);
  $lname = mysqli_real_escape_string($db, $_POST['lname']);
  $age = mysqli_real_escape_string($db, $_POST['age']);
  $gender = mysqli_real_escape_string($db, $_POST['gender']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $conpassword = mysqli_real_escape_string($db, $_POST['confirmpassword']);
  $contact = mysqli_real_escape_string($db, $_POST['phoneNumber']);
  $disability = mysqli_real_escape_string($db, $_POST['disability']);
  $address = mysqli_real_escape_string($db, $_POST['address']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($fname)) { array_push($errors, "First name is required"); }
  if (empty($lname)) { array_push($errors, "last name is required"); }
  if (empty($age)) { array_push($errors, "Age is required"); }
  if (empty($gender)) { array_push($errors, "Gender is required"); }
  if (empty($email)) { array_push($errors, "Email ID is required"); }
  if (empty($password)) { array_push($errors, "Password is required"); }
  if (empty($conpassword)) { array_push($errors, "password confirmation is required"); }
  if (empty($contact)) { array_push($errors, "contact is required"); }
  if (empty($disability)) { array_push($errors, "disability is required"); }
  if (empty($address)) { array_push($errors, "Address is required"); }
  if ($password != $conpassword) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM register WHERE EMAIL='$email' OR PASSWORD='$password'";
  $result = mysqli_query($db, $user_check_query);
  $row=$result->fetch_assoc();
  
  //$user = mysqli_fetch_assoc($result);// this was the problem actually ohh u have already called fetch asssoc and were calling func again hnn in while loop yup :-(
 
  if ($row) { // if user exists
    if ($row['EMAIL'] === $email) {
      array_push($errors, "Username already exists");
    }
    }
  }
echo $error=implode(" ",$errors);
  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$result2= "INSERT INTO register VALUES('$fname','$lname','$age','$gender','$email','$password','$conpassword','$contact','$disability','$address')";
  	$register = mysqli_query($db, $result2);
		 $jsonArr=array();
            $fname=$row['FNAME'];
		  //echo $fname;
          $lname=$row["LNAME"];
          $age=$row["AGE"];
		  $gender=$row["GENDER"];
		  $email=$row["EMAIL"];
		  //echo $email;
		  $password=$row["PASSWORD"];
		  //echo $password;
		  $conpassword=$row["CONPASSWORD"];
		  $contact=$row["CONTACT"];
		  $disability=$row["DISABILITY"];
		  $address=$row["ADDRESS"];
         
$arr = array('fname' => $fname, 'lname' => $lname, 'age' => $age ,'gender' => $gender, 'email' => $email, 'password' => $password, 'confirmpassword' => $conpassword ,'phoneNumber' => $contact , 'disability' => $disability ,'address' => $address);
          array_push($jsonArr,$arr);
     
  	$_SESSION['EMAIL'] =$email;
	$_SESSION['FNAME'] =$fname;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: login.php');
  echo json_encode($jsonArr);
  }
?>