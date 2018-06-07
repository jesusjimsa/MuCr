<?php
	$api_file = fopen("../API_KEY_Google.txt", "r");
	$API_KEY = fread($api_file, filesize("../API_KEY_Google.txt"));
	fclose($api_file);

	$city = $_POST['city'];
	$radius = $_POST['radius'];

	if($radius == "radius"){
		$radius = 20;
	}

	$url = "https://maps.googleapis.com/maps/api/geocode/json?address=" . urlencode($city) . "&key=" . $API_KEY;

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_USERAGENT, 'CdBase');

	$response = curl_exec($ch);
	curl_close($ch);
	$response = json_decode($response, JSON_FORCE_OBJECT);

	$location = "Location: ../MuCr_concert_near.php";

	// muestra country si es un pais y locality si es una ciudad
	if ($response['results'][0]['address_components'][0]['types'][0] == "country") {
		$latitud = $response['results'][0]['geometry']['location']['lat'];
		$longitud = $response['results'][0]['geometry']['location']['lng'];
		$city = $response['results'][0]['address_components'][0]['short_name'];
		
		
		$location = "Location: " . "../MuCr_concert_near.php?type=country&lat=" . $latitud . "&lng=" . $longitud . "&country=" . $city . "&radius=" . $radius;
	}
	else {
		if ($response['results'][0]['address_components'][0]['types'][0] == "locality") {
			$country = $response['results'][0]['address_components'][3]['long_name'];
			$url = "https://maps.googleapis.com/maps/api/geocode/json?address=" . $country . "&key=" . $API_KEY;
			
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_USERAGENT, 'CdBase');

			$response = curl_exec($ch);
			curl_close($ch);
			$response = json_decode($response, JSON_FORCE_OBJECT);
			
			$country = $response['results'][0]['address_components'][0]['short_name'];
			$latitud = $response['results'][0]['geometry']['location']['lat'];
			$longitud = $response['results'][0]['geometry']['location']['lng'];
			
			$location = "Location: " . "../MuCr_concert_near.php?type=locality&lat=" . $latitud . "&lng=" . $longitud . "&country=" . $country . "&city=" . $city . "&radius=" . $radius;
		}
	}

	header($location);
?>