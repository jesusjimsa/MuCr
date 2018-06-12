<?php
$imgURL = $_POST['profile_picture'];
$email = $_COOKIE['email'];

include 'connect_db.php';

$sql_insert_img = "UPDATE user SET URLimage = '$imgURL' WHERE email = '$email'";

if ($conn->query($sql_insert_img) == TRUE){
	ob_start();
	include 'change_Image.php';

	header('Location: ../Orpheus_settings.php');
	ob_end_flush();
}
else{
	header('Location: ../Orpheus_settings.php');
}
?>