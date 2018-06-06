<?php
$valor=$_GET['user'];
setcookie("email", $valor, time() + (86400 * 30), "/");

header('Location: ../MuCr_main.php');



 ?>
