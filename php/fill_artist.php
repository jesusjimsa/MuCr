<?php
	function fillArtist($artist_name){
		$api_file = fopen("API_KEY.txt", "r");
		$API_KEY = fread($api_file, filesize("API_KEY.txt"));
		fclose($api_file);

		$url = "http://ws.audioscrobbler.com/2.0/?method=artist.gettopalbums&artist=" . $artist_name . "&api_key=" . $API_KEY . "&format=json";

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_USERAGENT, 'CdBase');

		$response = curl_exec($ch);
		curl_close($ch);
		$response = json_decode($response, JSON_FORCE_OBJECT);

		$top_albums_tag = $response["topalbums"]["album"];

		

		for($i = 0; $i < 18; $i++){
			do{
				$rand_num = rand(0, count($top_albums_tag));
			}while(in_array($rand_num, $all_rand_nums));

			$all_rand_nums[$i] = $rand_num;
			
			$rand_album_name = $top_albums_tag[$rand_num]["name"];
			$rand_album_artist = $top_albums_tag[$rand_num]["artist"]["name"];
			$rand_album_image = $top_albums_tag[$rand_num]["image"][3]["#text"];
			$rand_album_id = $top_albums_tag[$rand_num]["mbid"];

			$all_rand_albums[$i]->set($rand_album_id, $rand_album_name, $rand_album_artist);

            if ($all_rand_albums[$i]->isDeluxe($rand_album_name)) {
                $rand_album_deluxe = "1";	// 1 = true
			}
			else{
				$rand_album_deluxe = "0";	// 0 = false
			}

			echo "<a href=\"MuCr_detailed_album.php?artist=" . urlencode($rand_album_artist) . "&type=" . urlencode($tag) . "&deluxe=" . $rand_album_deluxe . "&album=" . urlencode($rand_album_name) . "\">\n<div class=\"itemo\">\n<img src=\"" . $rand_album_image . "\" alt=\"artist\">\n</div>\n</a>";
		}

		return $all_rand_albums;
	}
?>