<?php
$api_file = fopen("API_KEY_Google.txt", "r");
$API_KEY = fread($api_file, filesize("API_KEY_Google.txt"));
fclose($api_file);

$city = "Spain";
//$radius=$_POST['radius'];
$url = "https://maps.googleapis.com/maps/api/geocode/json?address=".$city."&key=".$API_KEY;

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_USERAGENT, 'CdBase');

$response = curl_exec($ch);
curl_close($ch);
$response = json_decode($response, JSON_FORCE_OBJECT);
if($response['results'][0]['address_components'][0]['types'][0]=="country"){
      $latitud=$response['results'][0]['geometry']['location']['lat'];
      $longitud=$response['results'][0]['geometry']['location']['lng'];
      $location = "Location: " . "MuCr_artistcollection.php?type=country&lat=".$latitud."&lng=".$longitud."&country=".;
}//muetsra country si es un pais y locality si es una ciudad
else{
  if($response['results'][0]['address_components'][0]['types'][0]=="location"){
       $country=$response['results'][0]['address_components'][3]['long_name'];
       $latitud=$response['results'][0]['geometry']['location']['lat'];
       $longitud=$response['results'][0]['geometry']['location']['lng'];

}


//header($location);
?>
