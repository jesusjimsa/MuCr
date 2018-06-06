<?php
	include 'php/fill_concert.php';

	$api_file = fopen("API_KEY_Ticketmaster.txt", "r");
	$API_KEY = fread($api_file, filesize("API_KEY_Ticketmaster.txt"));
	fclose($api_file);

	$url = "https://app.ticketmaster.com/discovery/v2/events.json?apikey=" . $API_KEY . "&keyword=Beyonce&size=50&countryCode=ES";


	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_USERAGENT, 'CdBase');

	$response = curl_exec($ch);
	curl_close($ch);
	$response = json_decode($response, JSON_FORCE_OBJECT);


	echo $response['_embedded']['events'][0] ['priceRanges'][0]['min'];

?>
