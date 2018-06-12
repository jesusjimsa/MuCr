<?php
	$api_file = fopen("../API_KEY_Lastfm.txt", "r");
	$API_KEY = fread($api_file, filesize("../API_KEY_Lastfm.txt"));
	fclose($api_file);

	$artist_search = $_POST['artist_search'];

	$url = "http://ws.audioscrobbler.com/2.0/?method=artist.search&artist=" . urlencode($artist_search) . "&api_key=" . $API_KEY . "&format=json";

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_USERAGENT, 'CdBase');

	$response = curl_exec($ch);
	curl_close($ch);
	$response = json_decode($response, JSON_FORCE_OBJECT);

	$searched = $response["results"]["artistmatches"]["artist"][0]["name"];

	$location = "Location: " . "../Orpheus_artistcollection.php?artist=" . urldecode($searched);
	header($location);
?>