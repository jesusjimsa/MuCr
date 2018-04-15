<?php
   $servername = "localhost";
   $user = "pepito";
   $password = "mipass";
   $dbname = "nombredebd";


   //Creamos la conexion a la base de datos
   $connection = new mysqli($servername, $user, $password, $dbname);

   //Verificamos la conexion a la BD. Si la conexion falla, nos mostrará el error, si no la conexión se estableció.
   if ($connection->connect_error) {
       die("La conexión fallo. Error: (".$connection->connect_errno.") ".$connection->connect_error);
   }
?>
