<?php
include 'controladorAlbumRelacionado.php';

$albumA0=new Album;
$albumA0->createAlbumsearched("Rihanna", "Umbrella");

$titulo=$albumA0->getTitulo();
$artista=$albumA0->getArtista();

include 'php/connect_db.php';

$email = "rodrigranada97@gmail.com";

$sql_check_email = "SELECT email, URLimage FROM user WHERE '$email' = email";
$result = $conn->query($sql_check_email);
$albumlikes = mysqli_fetch_assoc($result);

var_dump($result);

 if($albumlikes->num_rows==0){echo "img/icons/heart.png";}
 else{echo "img/icons/red_heart.png";}
?>
