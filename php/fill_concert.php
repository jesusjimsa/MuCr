<?php
	function searchCityPicture($city, $country){
		$api_file = fopen("API_KEY_Imagenes.txt", "r");
		$API_KEY = fread($api_file, filesize("API_KEY_Imagenes.txt"));
		fclose($api_file);

		$imagenes = "https://pixabay.com/api/?key=" . $API_KEY . "&q=" . $city . "+" . $country . "&image_type=photo&pretty=true&format=json";

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $imagenes);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_USERAGENT, 'CdBase');

		$response = curl_exec($ch);
		curl_close($ch);
		$response = json_decode($response, JSON_FORCE_OBJECT);

		echo $response['hits'][0]['largeImageURL'];
	}

	function printConcerts($artist, $country_code){
		$api_file = fopen("API_KEY_Ticketmaster.txt", "r");
		$API_KEY = fread($api_file, filesize("API_KEY_Ticketmaster.txt"));
		fclose($api_file);

		$url = "https://app.ticketmaster.com/discovery/v2/events.json?apikey=" . $API_KEY . "&keyword=" . urlencode($artist) . "&size=50&countryCode=" .  urlencode($country_code);


		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_USERAGENT, 'CdBase');

		$response = curl_exec($ch);
		curl_close($ch);
		$response = json_decode($response, JSON_FORCE_OBJECT);

		for($i = 0; $i < count($response["_embedded"]["events"]); $i++){
			$city = $response["_embedded"]["events"][$i]["_embedded"]["venues"][0]["city"]["name"];
			$image = $response["_embedded"]["events"][$i]["images"][0]["url"];
			$date = $response["_embedded"]["events"][$i]["dates"]["start"]["localDate"];
			$tickets_url = $response["_embedded"]["events"][$i]["url"];

			echo "<div class=\"hora\">";
			echo "<div class=\"nombre\">" . $city . "</div>";
			echo "<div class=\"imagen\">";
			echo "<img src=\"" . $image . "\" alt=\"ciudades\">";
			echo "</div>";
			echo "<div class=\"time\">" . $date . "</div>";
			echo "<div class=\"price\">Price not found</div>";
			echo "<a href=\"" . $tickets_url . "\"><button class=\"asistir\">Attend</button></a>";
			echo "</div>";
		}

		if($response["_embedded"] == null){
			echo "<div class=\"nothing_found\">Nothing found :(</div>";
		}
	}
?>

