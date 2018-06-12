<?php

include 'connect_db.php';
$artist=$_POST['artist'];
$title=$_POST['title'];
$type=$_POST['type'];
$style=$_POST['style'];
$email=$_COOKIE['email'];

$sql_order="INSERT INTO albums_NV(artist,title,style,type,user) VALUES ('$artist','$title','$style','$type','$email')";

if ($conn->query($sql_order) == TRUE){

  $location = "Location: " . "../Orpheus_mymusic.php";
	header($location);
}

?>
