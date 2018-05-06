<?php
// Delete last cookies (if there were cookies)
unset($_COOKIE['email']);
unset($_COOKIE['password']);
setcookie("email", null, -1, '/');
setcookie("password", null, -1, '/');

header('Location: ../index.html');
?>