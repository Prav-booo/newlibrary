<?php
 require_once 'connection.php';
$name =  $conn -> real_escape_string($_POST['name']);
$email = $conn -> real_escape_string($_POST['email']);
$username = $conn -> real_escape_string($_POST['username']);
$password = $conn -> real_escape_string($_POST['password']);
$encrypt_password = md5($password);

	$sql="INSERT INTO `user`(`name`,`email`,`username`,`password`) VALUES ('".$name."','".$email."','".$username."','".$encrypt_password."')";
	
   $result = mysqli_query($conn ,$sql);
   
   
	if ($conn-> query($result) === TRUE) {
	 header("Location: signup.php? message=success");
	}
	else{
	  header("Location: signup.php? message=error");
	}
	 							 
	mysqli_close($conn);
?>