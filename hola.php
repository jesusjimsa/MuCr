<?php
$release='In Silico';
$fmt='json';
$url = "http://musicbrainz.org/ws/2/release/?query=release:".urlencode($release)."&fmt=".$fmt;
//echo $url;

if ($fmt == 'json') {
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_USERAGENT, 'CdBase');
	$response = curl_exec ($ch);
	curl_close($ch);
	$response = json_decode($response, JSON_FORCE_OBJECT);
	print_r(error_get_last());
	// var_dump($response);
	echo $response["releases"][0]["id"];
}
?>
