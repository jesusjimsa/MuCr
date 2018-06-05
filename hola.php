<?php


$artist_search = $_POST['artist_search'];



$searched = $response["results"]["artistmatches"]["artist"][0];

$location = "Location: " . "hola.php?artist=" . urldecode($searched);
var_dump($searched);

?>
