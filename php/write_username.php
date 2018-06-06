<?php
include 'php/connect_db.php';

$email = $_COOKIE['email'];

$sql_query = "SELECT email FROM user WHERE email = '$email'";

$result = mysqli_query($conn, $sql_query);
$row = mysqli_fetch_assoc($result);

list($username, $else) = explode('@', $row['email']);

echo $username;
ob_flush();
flush();
?>
