<?php
 
require_once  'connection.php';


$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];


if(isset($id)){
	
		 $update = "UPDATE `user` SET `name`='".$name."',`email`='".$email."',`username`='".$username."',`password`='".$encrypt_password."' WHERE `id`='".$id."' ";


 if($conn -> query ($update) == TRUE){
	 		header("location: userlist.php?update_message=success"); 
 }else{
	 		header("location: userlist.php?update_message=error"); 

 }
}


mysqli_close($conn);
?>