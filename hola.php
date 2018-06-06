<?php
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

<<<<<<< HEAD
//header($location);


$artista ="Madonna";
$url="http://ws.audioscrobbler.com/2.0/?method=artist.getsimilar&artist=".$artista."&api_key=7469e83d1fc6415f3a1cf8790bdebacd&format=json";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_USERAGENT, 'CdBase');

$response = curl_exec($ch);
curl_close($ch);
$response = json_decode($response, JSON_FORCE_OBJECT);


//$response['similarartists']['artist'][0]['name'];elnombre
//$response['similarartists']['artist'][0]['image'][2]['#text'];la imagen del susodicho
//var_dump($response['similarartists']['artist'][0]['image'][2]['#text']);
=======
//header($location); -->
>>>>>>> c20c730384816b99a24b77450733da493681a91e

?>
