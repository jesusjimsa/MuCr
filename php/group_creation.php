<?php

function checkuser($email){
	include 'connect_db.php';	// Connect to database

	$sql_checking="SELECT * from user WHERE '$email'=email";
	$result = $conn->query($sql_checking);
	$row = mysqli_fetch_assoc($result);

	if(count($row)!=0){return TRUE;}
	else{return false;}

}


function checkcadena($cadena,$group_name){
	include 'connect_db.php';	// Connect to database
	if($cadena!=""){
		while($cadena!=""){
				$cuenta=strpos($cadena,",");
				if($cuenta===false){
					$select=substr($cadena,0,strlen($cadena));
					$cadena="";
					$gorup_name=$group_name."@mucr.com";
					if(checkuser($select)){
						$sql_insert_user_group = "INSERT INTO U_group(user_email, group_name) VALUES ('$select', '$group_name')";
						$conn->query($sql_insert_user_group);
					}
				}
				else{
					$select=substr($cadena,0,$cuenta);
					$cadena=substr($cadena,$cuenta+1,strlen($cadena));
					if(checkuser($select)){
						$sql_insert_user_group = "INSERT INTO U_group(user_email, group_name) VALUES ('$select', '$group_name')";
						$conn->query($sql_insert_user_group);


					}
				}
			}
		}
}

$current_user = $_COOKIE['email'];
$group_name = $_POST['group_name'];
$group_add_user = $_POST['group_add_user'];
$group_style = $_POST['group_style'];

include 'connect_db.php';	// Connect to database

$sql_check_group_name = "SELECT name FROM grupo WHERE '$group_name' = name";
$result = $conn->query($sql_check_group_name);

if($result->num_rows == 0){
	$numer=rand(1,24);
	$group_image="img/groups/".$numer.".jpg";
		$group_name=$group_name."@mucr.com";
	$sql_insert_group = "INSERT INTO grupo(name, URLimage, style) VALUES ('$group_name', '$group_image', '$group_style')";
	$conn->query($sql_insert_group);
	// $sql_insert_user_group = "INSERT INTO U_group(user_email, group_name) VALUES ('$current_user', '$group_name')";
	$users=$current_user.",".$group_add_user;
	checkcadena($users,$group_name);

	$sql_insert_into_user="INSERT INTO user(email,password,URLimage) VALUES('$group_name','none','$group_image')";
	$conn->query($sql_insert_into_user);

}
$location = "Location: " . "../MuCr_settings.php";
header($location);
?>
