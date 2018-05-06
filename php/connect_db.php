<?php
$servername = "db4free.net";
$username = "jmrodriguez";
$pass = "9uk6vw6e";
$dbname = "orfeo_mucr";

// Create connection
$conn = new mysqli($servername, $username, $pass, $dbname);

// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
	echo "Error connecting to database";
}
?>