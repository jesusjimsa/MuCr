<?php
	include 'controladorAlbumRelacionado.php';

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

		$top_albums_artist = $response["topalbums"]["album"];

		$num_albums = count($top_albums_artist);

		if($num_albums > 50){
			$num_albums = 50;	// If there are more than 50 albums, we'll show just the first 50
		}

		for($i = 0; $i < $num_albums; $i++){
			$album = new album;

			$album_name = $top_albums_artist[$i]["name"];
			$album_image = $top_albums_artist[$i]["image"][3]["#text"];
			$album_id = $top_albums_artist[$i]["mbid"];

			$album->set($album_id, $album_name, $artist_name);

			$album_deluxe = $album->isDeluxe($album_name);

			echo "<a href=\"MuCr_detailed_album.php?artist=" . urlencode($artist_name) . "&type=All&deluxe=" . $album_deluxe . "&album=" . urlencode($album_name) . "\">\n<div class=\"itemo\">\n<img src=\"" . $album_image . "\" alt=\"artist\">\n</div>\n</a>";
		}
	}
?>