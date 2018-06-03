<?php
	// include 'controladorAlbumRelacionado.php';
	// include 'php/connect_db.php';
	//
	// $lll = new album;
	// $lll->createAlbumsearched("Michael Jackson", "Thriller 25 ");
	// //echo "hola";
	// $titulo=$lll->getTitulo();
	// $artista=$lll->getArtista();
	// echo $lll->getGenres();
	// $year=$lll->getYear();
	// $type=$lll->getType();
	// $deluxe=$lll->getDeluxe();
	// $sql_order = "INSERT INTO album(name,artist) VALUES ('$titulo', '$artista')";	// $url = "http://ws.audioscrobbler.com/2.0/?method=album.getinfo&api_key=" . "7469e83d1fc6415f3a1cf8790bdebacd". "&artist=" . urlencode("mecano") . "&album=" . urlencode("aidalai") . "&format=json";
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
	include 'listController.php';

	$lista1 = new lista("recomendations","nada","rodrigranada97@gmail.com");
//	echo $lista1->searchtopic2("rodrigranada97@gmail.com");
?>
