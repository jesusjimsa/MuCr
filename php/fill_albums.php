<?php
	function fillArtistAlbums($artist_name){
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

		$top_albums_artist = $response["topalbums"]["album"];

		$num_albums = count($top_albums_artist);

		if($num_albums > 42){
			$num_albums = 42;	// If there are more than 42 albums, we'll show just the first 42
		}

		for($i = 0; $i < $num_albums; $i++){
			$album = new album;

			$album_name = $top_albums_artist[$i]["name"];
			$album_image = $top_albums_artist[$i]["image"][3]["#text"];
			$album_id = $top_albums_artist[$i]["mbid"];

			$album->set($album_id, $album_name, $artist_name);

			$album_deluxe = $album->isDeluxe($album_name);

			echo "<a href=\"MuCr_detailed_album.php?artist=" . urlencode($artist_name) . "&type=All&deluxe=" . $album_deluxe . "&album=" . urlencode($album_name) . "\">\n<div class=\"itemo\">\n<img src=\"" . $album_image . "\" alt=\"album cover\">\n</div>\n</a>";
		}
	}

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

		$all_rand_albums = array(
		 	new album, new album, new album, new album, new album, new album,
		 	new album, new album, new album, new album, new album, new album,
		 	new album, new album, new album, new album, new album, new album
		);

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

	function fillMyAlbumsAndLikes($option){
		include 'php/connect_db.php';
		include 'controladorAlbumRelacionado.php';

		$user_email = $_COOKIE["email"];

		if($option == "seen"){
			$sql_myalbums = "SELECT * FROM U_listen_A WHERE user_email = '$user_email'";
		}
		else{
			$sql_myalbums = "SELECT * FROM U_like_A WHERE user_email = '$user_email'";
		}
		
		$result = $conn->query($sql_myalbums);
		$rows = mysqli_fetch_all($result);

		$num_rows = count($rows);

		for($i = 0; $i < $num_rows; $i++){
			$album_name = $rows[$i][1];
			$album_artist = $rows[$i][2];

			$album = new album;
			$album = $album->createAlbumSearched($album_artist, $album_name);

			$album_deluxe = $album->isDeluxe($album_name);

			echo "<a href=\"MuCr_detailed_album.php?artist=" . urlencode($album_artist) . "&type=All&deluxe=" . $album_deluxe . "&album=" . urlencode($album_name) . "\">\n<div class=\"elem\">\n<img src=\"" . $album->getImage() . "\">\n</div>\n</a>";
		}
	}

	function fillMyArtists($option){
		include 'php/connect_db.php';

		$user_email = $_COOKIE["email"];

		$api_file = fopen("API_KEY.txt", "r");
		$API_KEY = fread($api_file, filesize("API_KEY.txt"));
		fclose($api_file);

		if($option == "seen"){
			$sql_myalbums = "SELECT  DISTINCT album_artist FROM U_listen_A WHERE user_email = '$user_email'";
		}
		else{
			$sql_myalbums = "SELECT DISTINCT album_artist FROM U_like_A WHERE user_email = '$user_email'";
		}

		$result = $conn->query($sql_myalbums);
		$rows = mysqli_fetch_all($result);

		$num_rows = count($rows);

		for($i = 0; $i < $num_rows; $i++){
			$album_artist = $rows[$i][0];

			$url = "http://ws.audioscrobbler.com/2.0/?method=artist.getinfo&artist=" . urlencode($album_artist) . "&api_key=" . $API_KEY . "&format=json";

			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_USERAGENT, 'CdBase');

			$response = curl_exec($ch);
			curl_close($ch);
			$response = json_decode($response, JSON_FORCE_OBJECT);

			echo "<a href=\"MuCr_artistcollection.php?artist=" . urlencode($album_artist) . "\">\n<div class=\"elem\">\n<img src=\"" . $response["artist"]["image"][4]["#text"] . "\">\n</div>\n</a>";
		}
	}
?>