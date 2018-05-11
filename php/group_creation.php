<?php
$group_name = $_POST['group_name'];
$group_image = "../img/group.jpg";
$group_add_user = $_POST['group_add_user'];
$group_style = $_POST['group_style'];

include 'connect_db.php';	// Connect to database

$sql_check_group_name = "SELECT name FROM grupo WHERE '$group_name' = name";
$result = $conn->query($sql_check_group_name);

if($result->num_rows == 0){
	$sql_insert_group = "INSERT INTO grupo(name, URLimage, style) VALUES ('$group_name', '$group_image', '$group_style')";

	if ($conn->query($sql_insert_group) == TRUE){
		echo "Bien\n";
	}
	else{
		echo "No tan bien\n";
	}
}
else{
	echo "There is already a group with the name: " . $group_name . "\n";
}
?>