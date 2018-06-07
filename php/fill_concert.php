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

	function concertNear($latitude, $longitude, $radius, $type, $country){
		// API Ticketmaster
		$api_file = fopen("API_KEY_Ticketmaster.txt", "r");
		$API_KEY = fread($api_file, filesize("API_KEY_Ticketmaster.txt"));
		fclose($api_file);

		// API Bing
		$api_file2 = fopen("API_KEY_Bing.txt", "r");
		$API_KEY2 = fread($api_file2, filesize("API_KEY_Bing.txt"));
		fclose($api_file2);

		$API_KEY2 = "Ocp-Apim-Subscription-Key: " . $API_KEY2;
		$options = array('Content-Type: multipart/form-data', $API_KEY2);

		if ($_GET['type'] == "country") {

		}
		else {
			if ($_GET['type'] == "locality") {
				

				$url = "https://app.ticketmaster.com/discovery/v2/events.json?latlong=" . $latitude . "," . $longitude . "&radius=" . $radius . "&apikey=" . $API_KEY;
				
				$ch = curl_init();
				curl_setopt($ch, CURLOPT_URL, $url);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
				curl_setopt($ch, CURLOPT_USERAGENT, 'CdBase');
				
				$response = curl_exec($ch);
				curl_close($ch);
				$response = json_decode($response, JSON_FORCE_OBJECT);

				$max = count($response['_embedded']['events']);

				for ($i = 0; $i < $max; $i++) {
					$title = $response['_embedded']['events'][$i]['name'];	// Event title
					$imge = $response['_embedded']['events'][$i]["images"][0]['url'];	// Image
					$date = $response['_embedded']['events'][$i]['dates']['start']['localDate'];	// Date
					$hour = $response['_embedded']['events'][$i]['dates']['start']['localTime'];	// Time
					$city = $response['_embedded']['events'][$i] ['_embedded']['venues'][0]['city']['name'];	//City
					$coin = $response['_embedded']['events'][$i] ['priceRanges'][0]['currency'];	// Currency
					$min_prec = $response['_embedded']['events'][$i] ['priceRanges'][0]['min'];	// Lowest price
					$max_prec = $response['_embedded']['events'][$i] ['priceRanges'][0]['min'];	// Max price
					$link = $response['_embedded']['events'][$i]['url'];	// URL to buy tickets

					$uriFlag = "img/flags/" . strtolower($country) . ".png";// Country flag

					$imagenes = "https://api.cognitive.microsoft.com/bing/v7.0/images/search?q=" . $city;

					$ch = curl_init();
					curl_setopt($ch, CURLOPT_URL, $imagenes); 
					curl_setopt($ch, CURLOPT_TIMEOUT, '1'); 
					curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
					curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
					curl_setopt($ch, CURLOPT_HTTPHEADER, $options);
					
					$response_image = curl_exec($ch);
					curl_close($ch);
					$response_image = json_decode($response_image, JSON_FORCE_OBJECT);

					$urlcity = $response_image["value"][0]["contentUrl"];

					echo "<div class=\"concert\">";
					echo "<img src=\"" . $imge . "\" alt=\"" . $title . "\">";
					echo "<div class=\"name_artist\">";
					echo $title;
					echo "</div>";
					echo "<div class=\"location_date\">";
					echo $date . " at " . $hour;
					echo "<br/> Minimum:" . $min_prec . " " . $coin . " Maximum: " . $max_prec . " " . $coin;
					echo "</div>";
					echo "<div class=\"city_near\">";
					echo "<img src=\"" . $urlcity . "\" alt=\"ciudad\">";
					echo "<div class=\"flag\">";
					echo "<img src=\"" . $uriFlag . "\" alt=\"bandera\">";
					echo "</div>";
					echo "<div class=\"titulo\">" . $city . "</div>";
					echo"</div>";
					echo "</div>";


					$title = $imge = $date = $hour = $city = $coin = $min_prec = $max_prec = $link = $uriFlag = $imagenes = null;
				}
			}
		}
	}
?>

