<?php
$email = $_COOKIE['email'];


	include 'connect_db.php';	// Connect to database

	$sql_check_email = "SELECT email FROM user WHERE '$email' = email" ;
	$result = $conn->query($sql_check_email);

	if($result->num_rows == 0){
		$sql_insert_user = "DELETE user WHERE email = '$email'";

		if ($conn->query($sql_insert_user) === TRUE){
			// Delete old password cookies
			unset($_COOKIE['email']);
      unset($_COOKIE['password']);
      setcookie("email", null, -1, '/');
      setcookie("password", null, -1, '/');

			header('Location: ../index.html');
			echo "Eliminated successfully";
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

?>
