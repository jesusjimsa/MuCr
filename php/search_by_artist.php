<?php
	include 'php/connect_db.php';

	$api_file = fopen("API_KEY.txt", "r");
	$API_KEY = fread($api_file, filesize("API_KEY.txt"));
	fclose($api_file);

	$album_name = $_POST['album_name'];
	$album_artist = $_POST['album_artist'];

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_USERAGENT, 'CdBase');

	$response = curl_exec($ch);
	curl_close($ch);
	$response = json_decode($response, JSON_FORCE_OBJECT);
?>