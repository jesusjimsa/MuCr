<?php
	include 'php/connect_db.php';
	$email = $_COOKIE['email'];
	$album_name = $_POST['album_name'];
	$album_artist = $_POST['album_artist'];

	$sql_add_album_user = "INSERT INTO U_listen_A(user_email, album_name, album_artist) VALUES ('$email', '$album_name', '$album_artist')";
	$conn->query($sql_add_album_user);
?>