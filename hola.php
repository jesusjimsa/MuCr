<?php
	 include 'controladorAlbumRelacionado.php';
//	include 'php/connect_db.php';

	 $album2=new album;
	 $album2->createAlbumsearched('shakira','Waka Waka');
	 echo $album2->getYear();
	// var_dump($album2);
	// $year=$album2->getYear();
	// $deluxe=$album2->getdeluxe();
	// $type=$album2->getType();
// 	$artist=$album2->getArtista();
// 	//$titulo=$album2->getTitulo();
// //	$sql_order = "INSERT INTO album(name,artist) VALUES ('$titulo', '$artist')";
// 	$conn->query($sql_order);

 ?>
