<?php
session_start();
		
require_once "connection.php";

		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		$encrypt_password = md5($password);

$sql = "SELECT * from user where username = '$username' and password = '$encrypt_password'";

$result = mysqli_query($sql);

$count = 0;
$count = mysqli_num_rows($result);

if ($count == 1) {
     $_SESSION['loggedIn'] = "true";
    header("Location: index.php"); 
    exit();

} else {
     $_SESSION['loggedIn'] = "false";
     echo '<div class="errormsgbox">Your username and password  was incorrect!</div>';
     var_dump($result);
    echo $sql;
}


if ($_SESSION['loggedIn'] = "true") {
    echo '<div class="success">You are now logged in!</div>';
}

if (isset ($_SESSION['loggedin']) && (time() -> $_SESSION['loggedin'] > 1800))
{
session_unset();	
session_destroy(); 
}
$_SESSION['loggedin'] = time();

?>