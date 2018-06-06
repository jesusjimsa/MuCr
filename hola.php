<?php
	include 'php/connect_db.php';
	include 'concertrecomendations.php';

	$recommendation = new concerRec($_COOKIE['email']);

	echo $recommendation->getM1();
	echo $recommendation->getImage(1);
	echo $recommendation->getM2();
	echo $recommendation->getImage(2);
?>
