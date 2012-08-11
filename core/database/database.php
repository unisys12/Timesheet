<?php

/**
 * Database Connection and Variables
 */
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'rayco';

/**
 * $conn is the variable used to call the database connection
 */
$conn = mysqli_connect($server, $username, $password, $database);
if ($conn->connect_errno){
	echo "Could not connect to the MySQL Database: (" . $conn->connect_errno . ") " . $conn->connect_error;
}

?>