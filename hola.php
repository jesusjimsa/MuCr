<?php
$api_file = fopen("API_KEY_Ticketmaster.txt", "r");
$API_KEY = fread($api_file, filesize("API_KEY_Ticketmaster.txt"));
fclose($api_file);

$city = "Spain";
//$radius=$_POST['radius'];
$url = "https://app.ticketmaster.com/discovery/v2/events.json?latlong=40.463667,-3.74922&radius=30&apikey=".$API_KEY;

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_USERAGENT, 'CdBase');

$response = curl_exec($ch);
curl_close($ch);
$response = json_decode($response, JSON_FORCE_OBJECT);

echo count($response['_embedded']['events']);
// $response['_embedded']['events'][0]['name'];//titulo del evento
// $response['_embedded']['events'][1] ["images"][0]['url'];//la imagen
// $response['_embedded']['events'][1]['dates']['start']['localDate'];//la fecha
// $response['_embedded']['events'][1]['dates']['start']['localTime'];//la hora
// $response['_embedded']['events'][1] ['_embedded']['venues'][0]['city']['name'];//la ciudad
// $response['_embedded']['events'][1] ['priceRanges'][0]['currency'];//la moneda
// $response['_embedded']['events'][1] ['priceRanges'][0]['min'];//minimo precio
// $response['_embedded']['events'][1] ['priceRanges'][0]['min'];//maximo precio
// $response['_embedded']['events'][1]['url'];//la url para comprar el ticket
 //var_dump($response);

//header($location);
?>
