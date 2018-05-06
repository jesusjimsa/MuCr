<?php
$email = $_POST['email'];
$password1 = $_POST['password1'];

// Delete last cookies (if there were cookies)
// set the expiration date to one hour ago
setcookie("email", "", time() - 3600);
setcookie("password", "", time() - 3600);

include 'checkUser.php';
checkUser($email, $password1);
?>