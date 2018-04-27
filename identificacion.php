<?php

$email=$password=$password2=NULL;

$email=$_GET["email"];
$password=$_GET["password"];
$password2=$_GET["password2"];

if(password2=="NULL"){
  $command="python back-end.py $email $password";
  $pid = popen( $command,"r");
}


?>
