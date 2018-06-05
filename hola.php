


<?php
// $url="http://ws.audioscrobbler.com/2.0/?method=artist.getinfo&artist=Cher&api_key=7469e83d1fc6415f3a1cf8790bdebacd&format=json";
//
// $ch = curl_init();
// curl_setopt($ch, CURLOPT_URL, $url);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// curl_setopt($ch, CURLOPT_USERAGENT, 'CdBase');
//
// $response = curl_exec($ch);
// curl_close($ch);
// $response = json_decode($response, JSON_FORCE_OBJECT);
//
// echo $response['artist']['bio']['summary']);
include 'php/connect_db.php';
include 'controladorAlbumRelacionado.php';

$sql_order="SELECT * from U_like_A WHERE user_email='rodrigranada97@gmail.com'";
$result = $conn->query($sql_order);
$albums = mysqli_fetch_all($result);

$code="";
for($i=0;$i<count($albums);$i++){
  $titulo=str_replace(" ","_",$albums[$i][2]);
  $artista=str_replace(" ","_",$albums[$i][1]);
  //echo urlencode($titulo);echo urlencode($artista);
  // $link = "http://ws.audioscrobbler.com/2.0/?method=album.getinfo&api_key=7469e83d1fc6415f3a1cf8790bdebacd&artist=" . $artista . "&album=" . $titulo . "&format=json";
  //
  // $ch = curl_init();
  // curl_setopt($ch, CURLOPT_URL, $link);
  // curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  // curl_setopt($ch, CURLOPT_USERAGENT, 'CdBase');
  //
  // $response = curl_exec($ch);
  // curl_close($ch);
  // $response = json_decode($response, JSON_FORCE_OBJECT);
  //
  // var_dump($response);//["album"]["image"][4]["#text"];
  $an=new album;
  $an->createAlbumsearched($artista,$titulo);

$code.= "<div class=\"elem\"> <img src=\"$image_link\"> </div>";
}
echo $code;
// $imagenes="https://pixabay.com/api/?key=9193451-5c8e1aa46f55d361d81140214&q=granada+Spain&image_type=photo&pretty=true&format=json";
//
// $ch = curl_init();
// curl_setopt($ch, CURLOPT_URL, $imagenes);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// curl_setopt($ch, CURLOPT_USERAGENT, 'CdBase');
//
// $response = curl_exec($ch);
// curl_close($ch);
// $response = json_decode($response, JSON_FORCE_OBJECT);
//
// echo $response['hits'][0]['largeImageURL'];

?>
