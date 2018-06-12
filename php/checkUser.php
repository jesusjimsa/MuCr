<?php
function checkUser($email, $password1){
	include 'connect_db.php';

	$sql_email = "SELECT email FROM user WHERE email = '$email'";
	$result = $conn->query($sql_email);

	if($result->num_rows == 1) {
		$sql_password = "SELECT em.password FROM (SELECT * FROM user WHERE email = '$email') em WHERE '$password1' = em.password";
		$result = mysqli_query($conn, $sql_password);
		$row = mysqli_fetch_assoc($result);

		if($password1 == $row['password']){
			// Set cookies
			setcookie("email", $email, time() + (86400 * 30), "/");	// 86400 = 1 day
			setcookie("password", $password1, time() + (86400 * 30), "/");	// 86400 = 1 day
			setcookie("grupo", $email, time() + (86400 * 30), "/");	// 86400 = 1 day

			header('Location: ../Orpheus_main.php');
		}
	}

	$conn->close();
}
?>
