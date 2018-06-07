<?php
	include 'php/connect_db.php';

	$api_file = fopen("API_KEY_Lastfm.txt", "r");
	$API_KEY = fread($api_file, filesize("API_KEY_Lastfm.txt"));
	fclose($api_file);

	$user = "jesusjimsa@icloud.com";

	if(rand(0, 50) < 25){
		$sql_order = "SELECT DISTINCT album_artist FROM U_like_A WHERE '$user' = user_email";
		$result = $conn->query($sql_order);
		$rows = mysqli_fetch_all($result);
	}
	else{
		$sql_order = "SELECT DISTINCT album_artist FROM U_listen_A WHERE '$user' = user_email";
		$result = $conn->query($sql_order);
		$rows = mysqli_fetch_all($result);
	}
	
	$artista_seleccionado = $rows[rand(0, count($rows) - 1)][0];

	echo $artista_seleccionado
?>

