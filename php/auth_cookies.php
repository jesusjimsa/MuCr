<?php
if($_COOKIE['email'] != ''){
	$email = $_COOKIE['email'];
	$password1 = $_COOKIE['password'];

	include 'checkUser.php';
	checkUser($email, $password1);
}
?>