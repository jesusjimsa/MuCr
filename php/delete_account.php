<?php
$email = $_COOKIE['email'];

<<<<<<< Updated upstream
include 'connect_db.php';	// Connect to database

$sql_check_email = "SELECT email FROM user WHERE '$email' = email" ;
$result = $conn->query($sql_check_email);
// var_dump($result);

if($result->num_rows > 0){
	$sql_insert_user = "DELETE FROM user WHERE email = '$email'";

	if ($conn->query($sql_insert_user) == TRUE){
		include 'delete_cookies.php';

=======
<<<<<<< HEAD

	include 'connect_db.php';	// Connect to database
=======
include 'connect_db.php';	// Connect to database
>>>>>>> Rodri

$sql_check_email = "SELECT email FROM user WHERE '$email' = email" ;
$result = $conn->query($sql_check_email);
// var_dump($result);

if($result->num_rows > 0){
	$sql_insert_user = "DELETE FROM user WHERE email = '$email'";

<<<<<<< HEAD
		if ($conn->query($sql_insert_user) === TRUE){
			// Delete old password cookies
			unset($_COOKIE['email']);
      unset($_COOKIE['password']);
      setcookie("email", null, -1, '/');
      setcookie("password", null, -1, '/');
=======
	if ($conn->query($sql_insert_user) == TRUE){
		include 'delete_cookies.php';
>>>>>>> Rodri

>>>>>>> Stashed changes
		header('Location: ../index.html');
		echo "Deleted successfully";
	}
	else{
<<<<<<< Updated upstream
		// header('Location: index.html');
		echo "Error: " . $sql_insert_user . "<br>" . $conn->error;
=======
<<<<<<< HEAD
		header('Location: ../index.html');
=======
		// header('Location: index.html');
		echo "Error: " . $sql_insert_user . "<br>" . $conn->error;
>>>>>>> Rodri
>>>>>>> Stashed changes
	}
}
else{
	header('Location: ../MuCr_settings.html');
}

$conn->close();
?>
