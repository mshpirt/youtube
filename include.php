<?php

// This is the include.php file

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "youtube";

// Create connection
$mysqli = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($mysqli->connect_error) 
	{
    die("Connection failed: " . $conn->connect_error);
	} 

?>