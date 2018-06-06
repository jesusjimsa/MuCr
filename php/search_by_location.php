<?php
$api_file = fopen("../API_KEY_Google.txt", "r");
$API_KEY = fread($api_file, filesize("../API_KEY_Google.txt"));
fclose($api_file);
$radius=20;

$city =$_POST['city'];

$radius=$_POST['radius'];

$url = "https://maps.googleapis.com/maps/api/geocode/json?address=".$city."&key=".$API_KEY;

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_USERAGENT, 'CdBase');

$response = curl_exec($ch);
curl_close($ch);
$response = json_decode($response, JSON_FORCE_OBJECT);


$location="Location:../MuCr_concert_near.php";

if($response['results'][0]['address_components'][0]['types'][0]=="country"){
  var_dump();
      $latitud=$response['results'][0]['geometry']['location']['lat'];
      $longitud=$response['results'][0]['geometry']['location']['lng'];
      $radius=$radius+400;
      $city=$response['results'][0]['address_components'][0]['short_name'];
      $location = "Location: " . "../MuCr_concert_near.php?type=country&lat=".$latitud."&lng=".$longitud."&country=".$city."&radius=".$radius;
}//muetsra country si es un pais y locality si es una ciudad
else{
  if($response['results'][0]['address_components'][0]['types'][0]=="locality"){
       $country=$response['results'][0]['address_components'][3]['long_name'];
               $url = "https://maps.googleapis.com/maps/api/geocode/json?address=".$country."&key=".$API_KEY;

               $ch = curl_init();
               curl_setopt($ch, CURLOPT_URL, $url);
               curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
               curl_setopt($ch, CURLOPT_USERAGENT, 'CdBase');

               $response = curl_exec($ch);
               curl_close($ch);
               $response = json_decode($response, JSON_FORCE_OBJECT);
       $country=$response['results'][0]['address_components'][0]['short_name'];
       $latitud=$response['results'][0]['geometry']['location']['lat'];
       $longitud=$response['results'][0]['geometry']['location']['lng'];
      $location = "Location: " . "../MuCr_concert_near.php?type=locality&lat=".$latitud."&lng=".$longitud."&country=".$country."&city=".$city."&radius=".$radius;
}

}

header($location);
?>
