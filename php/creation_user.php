<?php
$email = $_POST['email'];
$password1 = $_POST['password1'];
$password2 = $_POST['password2'];

if($password1 == $password2){
	$servername = "db4free.net";
	$username = "jmrodriguez";
	$pass = "9uk6vw6e";
	$dbname = "orfeo_mucr";

	// Create connection
	$conn = new mysqli($servername, $username, $pass, $dbname);
	
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
		echo "Error conecting to database";
	} 

	$sql_check_email = "SELECT email FROM user WHERE '$email' = email" ;
	$result = $conn->query($sql_check_email);

	if($result->num_rows == 0){
		$sql_insert_user = "INSERT INTO user (email, password) VALUES ('$email', '$password1')";

		if ($conn->query($sql_insert_user) === TRUE){
			header('Location: ../MuCr_main.html');
			echo "New record created successfully";
		}
		else{
			// header('Location: index.html');
			echo "Error: " . $sql_insert_user . "<br>" . $conn->error;
		}
	}
	else{
		header('Location: ../index.html');
	}

	$conn->close();
}
else{
	header('Location: ../index.html');
}
?>