<?php
	function fillRecommendations($user){
		include 'php/connect_db.php';

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

		mysqli_close($conn);

		$api_file = fopen("API_KEY_Lastfm.txt", "r");
		$API_KEY = fread($api_file, filesize("API_KEY_Lastfm.txt"));
		fclose($api_file);

		$url = "http://ws.audioscrobbler.com/2.0/?method=artist.getsimilar&artist=" . $artista_seleccionado . "&api_key=" . $API_KEY . "&format=json";

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_USERAGENT, 'CdBase');

		$response = curl_exec($ch);
		curl_close($ch);
		$response = json_decode($response, JSON_FORCE_OBJECT);

		$similar_artist = $response['similarartists']['artist'][rand(0, count($response['similarartists']['artist']) - 1)]['name'];

		$url = "http://ws.audioscrobbler.com/2.0/?method=artist.gettopalbums&artist=" . $similar_artist . "&api_key=" . $API_KEY . "&format=json";

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_USERAGENT, 'CdBase');

		$response = curl_exec($ch);
		curl_close($ch);
		$response = json_decode($response, JSON_FORCE_OBJECT);

		$top_albums_artist = $response["topalbums"]["album"];

		// Predefined size of 7 elements in the array
		$all_rand_nums = array(-1, -1, -1, -1, -1, -1, -1);

		$all_rand_albums = array(
			new album, new album, new album, new album,
			new album, new album, new album
		);

		for($i = 0; $i < 7; $i++){
			do{
				$rand_num = rand(0, count($top_albums_artist));
			}while(in_array($rand_num, $all_rand_nums));

			$all_rand_nums[$i] = $rand_num;
			
			$rand_album_name = $top_albums_artist[$rand_num]["name"];
			$rand_album_artist = $top_albums_artist[$rand_num]["artist"]["name"];
			$rand_album_image = $top_albums_artist[$rand_num]["image"][3]["#text"];
			$rand_album_id = $top_albums_similar[$rand_num]["mbid"];

			$all_rand_albums[$i]->set($rand_album_id, $rand_album_name, $rand_album_artist);

			if ($all_rand_albums[$i]->isDeluxe($rand_album_name)) {
				$rand_album_deluxe = "1";	// 1 = true
			}
			else{
				$rand_album_deluxe = "0";	// 0 = false
			}

			echo "<a href=\"MuCr_detailed_album.php?artist=" . $rand_album_artist . "&type=All&deluxe=" . $rand_album_deluxe . "&album=" . $rand_album_name . "\">\n";
			echo "<div class=\"recom1\">\n";
			echo "<img src=\"" . $rand_album_image . "\" alt=\"Album cover\">\n";
			echo "</div>\n";
			echo "</a>\n";
		}

		return $all_rand_albums;
	}

	function fillForYou($user){
		include 'php/connect_db.php';

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

		mysqli_close($conn);

		$api_file = fopen("API_KEY_Lastfm.txt", "r");
		$API_KEY = fread($api_file, filesize("API_KEY_Lastfm.txt"));
		fclose($api_file);

		$url = "http://ws.audioscrobbler.com/2.0/?method=artist.gettopalbums&artist=" . $artista_seleccionado . "&api_key=" . $API_KEY . "&format=json";

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_USERAGENT, 'CdBase');

		$response = curl_exec($ch);
		curl_close($ch);
		$response = json_decode($response, JSON_FORCE_OBJECT);

		$top_albums_artist = $response["topalbums"]["album"];

		// Predefined size of 7 elements in the array
		$all_rand_nums = array(-1, -1, -1, -1, -1, -1, -1);

		$all_rand_albums = array(
			new album, new album, new album, new album,
			new album, new album, new album
		);

		for($i = 0; $i < 7; $i++){
			do{
				$rand_num = rand(0, count($top_albums_artist));
			}while(in_array($rand_num, $all_rand_nums));

			$all_rand_nums[$i] = $rand_num;
			
			$rand_album_name = $top_albums_artist[$rand_num]["name"];
			$rand_album_artist = $top_albums_artist[$rand_num]["artist"]["name"];
			$rand_album_image = $top_albums_artist[$rand_num]["image"][3]["#text"];
			$rand_album_id = $top_albums_artist[$rand_num]["mbid"];

			$all_rand_albums[$i]->set($rand_album_id, $rand_album_name, $rand_album_artist);

			if ($all_rand_albums[$i]->isDeluxe($rand_album_name)) {
				$rand_album_deluxe = "1";	// 1 = true
			}
			else{
				$rand_album_deluxe = "0";	// 0 = false
			}

			echo "<a href=\"MuCr_detailed_album.php?artist=" . $rand_album_artist . "&type=All&deluxe=" . $rand_album_deluxe . "&album=" . $rand_album_name . "\">\n";
			echo "<div class=\"recom1\">\n";
			echo "<img src=\"" . $rand_album_image . "\" alt=\"Album cover\">\n";
			echo "</div>\n";
			echo "</a>\n";
		}

		return $all_rand_albums;
	}
?>


					
						
					
				