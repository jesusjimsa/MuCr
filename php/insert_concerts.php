<?php

include 'connect_db.php';
$dates=$_POST['dates'];
$city=$_POST['city'];
$price=$_POST['price'];
$artist=$_POST['artist'];
$email=$_COOKIE['email'];

$sql_order="INSERT INTO concerts_NV(artist,dates,city,price,user) VALUES ('$artist','$dates','$city','$price','$email')";

if ($conn->query($sql_order) == TRUE){


  $location = "Location: " . "../Orpheus_mymusic.php";
	header($location);
}

?>
