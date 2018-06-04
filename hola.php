<?php
if (isset($_POST['add_button'])){
	include 'php/connect_db.php';
	$email = $_COOKIE['email'];
	$album_name = $_POST['album_name'];
	$album_artist = $_POST['album_artist'];

	$sql_add_album_user = "INSERT INTO U_listen_A(user_email, album_name, album_artist) VALUES ('$email', '$album_name', '$album_artist')";
	$conn->query($sql_add_album_user);
}
?>




<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>MuCr - Collection</title>
	<link rel="stylesheet" href="MuCr.css">
	<link rel="shortcut icon" href="img/MuCr.png">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="js/MuCr.js"></script>
</head>
<body>
	<div class="siko">
		hhhhh
	</div>
	<div class="grid-container">
	<div class="itemo">
		<form action="" method="POST">
			<input type="hidden" name="title" value="Rock">
			<input type="hidden" name="album_name" value="The Beatles">
			<input type="hidden" name="album_artist" value="The Beatles">
			<button type="image" name="add_button" value="add" class="add">
				<img src="img/icons/add.png" alt="add">
			</button>
		</form>
	</div>
</div>
</body>
</html>