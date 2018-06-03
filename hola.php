<?php
	include 'controladorAlbumRelacionado.php';

	$lll = new album;
	$lll->createAlbumsearched("madonna", "MDNA");
	echo "hola";
	echo $lll->getGenres();
	echo $lll->getYear();
	echo $lll->getType();
	echo $lll->getDeluxe();

	// $url = "http://ws.audioscrobbler.com/2.0/?method=album.getinfo&api_key=" . "7469e83d1fc6415f3a1cf8790bdebacd". "&artist=" . urlencode("mecano") . "&album=" . urlencode("aidalai") . "&format=json";
	//
	// //get the ID
	// $ch = curl_init();
	// curl_setopt($ch, CURLOPT_URL, $url);
	// curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	// curl_setopt($ch, CURLOPT_USERAGENT, 'CdBase');
	//
	// $response = curl_exec($ch);
	// // var_dump($response);
	// curl_close($ch);
	// $response = json_decode($response, JSON_FORCE_OBJECT);
	//
	//  var_dump($response["album"]);
?>
