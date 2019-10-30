<?php  
require_once "connection.php";

$id = $_REQUEST['del'];


if(isset($id) && !empty($id)) {
    
    $sql = "DELETE FROM user WHERE id = $id";
	
    if(mysqli_query($conn, $sql)) {
            header("location: userlist.php?delete_message=success"); 
    } else {
       header("location: userlist.php?delete_message=error"); 
    }
    
   
}
 mysqli_close($conn); 
?>