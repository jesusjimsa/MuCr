<?php
// Delete last cookies (if there were cookies)
unset($_COOKIE['email']);
unset($_COOKIE['password']);
unset($_COOKIE['grupo']);
setcookie("email", null, -1, '/');
setcookie("password", null, -1, '/');
setcookie("grupo", null, -1, '/');

header('Location: ../index.php');
?>
