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

	$sql = "SELECT * FROM user";
	$result = $conn->query($sql);
	$exist = false;

	if ($result->num_rows > 0) {
	    // output data of each row
		 while($row = mysqli_fetch_assoc($result)) {
			if($row["email"] == $email){
				//already exists this user
				$exist = true;
			}
		}
	}

	if($exist == false){
		$sql1 = "INSERT INTO user (email, password) VALUES ('$email', '$password1')";

		if ($conn->query($sql1) === TRUE){
			header('Location: ../MuCr_main.html');
			echo "New record created successfully";
		}
		else{
			// header('Location: index.html');
			echo "Error creating record";
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