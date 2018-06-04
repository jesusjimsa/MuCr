<?php
include 'controladorAlbumRelacionado.php';

$albumA0=new Album;
$albumA0->createAlbumsearched("Rihanna", "Umbrella");

$titulo=$albumA0->getTitulo();
$artista=$albumA0->getArtista();
$titulo=$albumA0->getTitulo();
$artista=$albumA0->getArtista();
include 'php/connect_db.php';
$sql_query = "SELECT album_name,user_email FROM U_like_A WHERE '$email'=user_email";
$result = $conn->query($sql_query);
 if($result->num_rows==0){echo "img/icons/heart.png";}
 else{echo "img/icons/red_heart.png";}

 // if($albumlikes->num_rows==0){echo "img/icons/heart.png";}
 // else{echo "img/icons/red_heart.png";}
?>
