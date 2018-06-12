<?php
$email = $_COOKIE['email'];

include 'connect_db.php';	// Connect to database

$sql_check_email = "SELECT email FROM user WHERE '$email' = email" ;
$result = $conn->query($sql_check_email);

if($result->num_rows > 0){
	$sql_insert_user = "DELETE FROM user WHERE email = '$email'";

	if ($conn->query($sql_insert_user) == TRUE){
		include 'delete_cookies.php';

		header('Location: ../index.php');
		echo "Deleted successfully";
	}
	else{
		// header('Location: index.html');
		echo "Error: " . $sql_insert_user . "<br>" . $conn->error;
	}
}
else{
	header('Location: ../Orpheus_settings.php');
}

$conn->close();
?>