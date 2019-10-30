<?php
  $servername="127.0.0.1";
 $username="root";
 $password="";
 $dbname="libary";

 $conn= new mysqli($servername,$username,$password,$dbname);

 if($conn->connect_error) {
	die("connection failed:" .$conn->connect_error);
 }	
 
?>