<?php
require_once 'connection.php';

@$id = $_POST['id'];
@$bookname = $_POST['bookname'];
@$author = $_POST['author'];
@$edition = $_POST['edition'];
@$publication = $_POST['publication'];

if(isset($id)){
			$update="UPDATE `books` SET `bookname`='".$bookname."',`author`='".$author."',`edition`='".$edition."',`publication`='".$publication."' WHERE  `id`='".$id."'";
 
if ($conn -> query($update) == TRUE){
	header ("location:bookupdate.php?update_message=success");
}else{
	header ("location:bookupdate.php?update_message=error");
}
}

mysqli_close($conn);
?>