<?php
$email = $_POST['email'];
$password1 = $_POST['password1'];
$password2 = $_POST['password2'];

if($password1 == $password2){
	include 'connect_db.php';	// Connect to database

	$sql_check_email = "SELECT email FROM user WHERE '$email' = email";
	$result = $conn->query($sql_check_email);

	if($result->num_rows == 0){
		$country="unknown";
		$language="english";
		$img="../img/user1.jpg";

		$sql_insert_user = "INSERT INTO user(email, password, country, language, URLimage) VALUES ('$email', '$password1', '$country', '$language', '$img')";

		if ($conn->query($sql_insert_user) == TRUE){
			// Set cookies
			setcookie("email", $email, time() + (86400 * 30), "/");	// 86400 = 1 day
			setcookie("password", $password1, time() + (86400 * 30), "/");	// 86400 = 1 day

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
