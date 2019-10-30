<!DOCTYPE html> 
<html>
<body>
<?php
 $servername="127.0.0.1";
 $username="root";
 $password="";
 $dbname="libary";

 $conn= new mysqli($servername,$username,$password,$dbname);

 if($conn->connect_error) {
	die("connection failed:" .$conn->connect_error);
 }	
 
$sql = "CREATE TABLE books (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, bookname VARCHAR (255), author VARCHAR(255), edition VARCHAR(255), publication VARCHAR(255),reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP) ";


if (mysqli_query($conn, $sql)) {
    echo "Table bookdetails created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
</body>
</html>