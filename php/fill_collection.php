<?php
	function fillCollection($tag){
		$api_file = fopen("API_KEY.txt", "r");
		$API_KEY = fread($api_file, filesize("API_KEY.txt"));
		fclose($api_file);

		$url = "http://ws.audioscrobbler.com/2.0/?method=tag.gettopalbums&tag=" . $tag . "&api_key=" . $API_KEY . "&format=json";

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_USERAGENT, 'CdBase');

		$response = curl_exec($ch);
		curl_close($ch);
		$response = json_decode($response, JSON_FORCE_OBJECT);

		$top_albums_tag = $response["albums"]["album"];

		// Predefined size of 18 elements in the array
		$all_rand_nums = array(-1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1);

		for($i = 0; $i < 18; $i++){
			do{
				$rand_num = rand(0, count($top_albums_tag));
			}while(in_array($rand_num, $all_rand_nums));

			$all_rand_nums[$i] = $rand_num;
			
			$rand_album_name = $top_albums_tag[$i]["name"];
			$rand_album_artist = $top_albums_tag[$i]["artist"]["name"];
			$rand_album_image = $top_albums_tag[$i]["image"][3]["#text"];

			echo "<a href=\"MuCr_detailed_album.php?artist=" . urlencode($rand_album_artist) . "&type=" . urlencode($tag) . "&deluxe=false&album=" . urlencode($rand_album_name) . "\">\n<div class=\"itemo\">\n<img src=\"" . $rand_album_image . "\" alt=\"artist\">\n<div class=\"type\">Vinyl</div>\n<div class=\"add\">\n<img src=\"img/icons/add.png\" alt=\"add\">\n</div>\n<div class=\"love\">\n<img src=\"img/icons/heart.png\" alt=\"love\">\n</div>\n<div class=\"close\">\n<img src=\"img/icons/close.png\" alt=\"close\">\n</div>\n</div>\n</a>";
		}
	}
?>