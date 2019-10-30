<?php

require_once 'connection.php';

$sql = "CREATE TABLE user(id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,name VARCHAR (255), age VARCHAR(255), username VARCHAR(255), password VARCHAR(255),reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";


if (mysqli_query($conn, $sql)) {
    echo "Table user created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);


?>