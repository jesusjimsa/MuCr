<?php
include 'connect_db.php';
$email = $_COOKIE['email'];
$imagenes = null;
$sql_check_email = "SELECT email, URLimage FROM user WHERE '$email' = email";
$result = $conn->query($sql_check_email);

if ($result->num_rows > 0){
  $row = $result->fetch_assoc();
  $imagenes = $row["URLimage"];
}

?>