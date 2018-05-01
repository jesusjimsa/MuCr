<?php
$email = $_POST['email'];
$password1 = $_POST['password'];

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

$sql_email = "SELECT email FROM user WHERE email = '$email'";
$result = $conn->query($sql_email);

if($result->$num_rows > 0) {
	$sql_password = "SELECT em.password FROM (SELECT * FROM user WHERE email = $email) em WHERE '$password1' = em.password";
	$result = $conn->query($sql_email);
	
	if($result->$num_rows > 0){
		header('Location: ../MuCr_main.html');
	}
	else{
		echo "hola";
	}
}
else{
	echo "no funsiono " . $result->num_rows;
}

$conn->close();

?>