<?php
	include 'php/fill_concert.php';

	

	if($_GET['country'] != ""){
		echo $_GET['artist'];
	echo $_GET['country'];
		printConcerts($_GET['artist'], $_GET['country']);
	}
?>
