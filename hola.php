<?php
	include 'controladorAlbumRelacionado.php';

	$lll = new album;
	$lll->createAlbumsearched("The Beatles", "Abbey Road");
	echo "hola";
	echo $lll->getImage();
?>
