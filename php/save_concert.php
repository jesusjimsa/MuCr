<?php
$country_code=$_POST['country'];
$artist=$_POST["artist"];
$city=$_POST["city"];
$date=$_POST['date'];
$email=$_POST['email'];

  include 'connect_db.php';

  $sql_order="INSERT INTO U_attended_C (user_email, concert_artist, concert_date, concert_city) VALUES ('$email', '$artist', '$date', '$city')";
  $conn->query($sql_order);



 $location = "Location: " . "../Orpheus_Concerts.php?artist=".$artist."&country=".$country_code;
 header($location);

 ?>
