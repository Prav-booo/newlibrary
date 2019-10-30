<?php
require_once 'connection.php';	

$bookname =  $conn -> real_escape_string($_POST['bookname']);
$author = $conn -> real_escape_string($_POST['author']);
$edition = $conn -> real_escape_string($_POST['edition']);
$publication = $conn -> real_escape_string($_POST['publication']);


	$sql="INSERT INTO `books`(`bookname`,`author`,`edition`,`publication`) VALUES ('".$bookname."','".$author."','".$edition."','".$publication."')";

	
	if ($conn->query($sql) === TRUE) {
	 header("Location: bookregister.php?update_message=success");
	}
	else{
	  header("Location: bookregister.php?update_message=error");
	}
	$conn->close();
?>
