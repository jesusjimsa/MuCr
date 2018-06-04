<?php
$url="http://ws.audioscrobbler.com/2.0/?method=artist.getinfo&artist=Cher&api_key=7469e83d1fc6415f3a1cf8790bdebacd&format=json";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_USERAGENT, 'CdBase');

$response = curl_exec($ch);
curl_close($ch);
$response = json_decode($response, JSON_FORCE_OBJECT);

var_dump($response['artist']['image'][2]['#text']);


?>
