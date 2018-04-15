<?php
    include 'connection.php';


function is_valid_email($str){
  $matches = null;
    return (1 === preg_match('/^[A-z0-9\\._-]+@[A-z0-9][A-z0-9-]*(\\.[A-z0-9_-]+)*\\.([A-z]{2,6})$/', $str, $matches));
}


$correo=$_GET['actividad'];
if(is_valid_email($correo)){
  if($_SERVER["REQUEST_METHOD"] == "POST"){
        //Procederemos a hacer una consulta que buscara el correo del usuario
        $buscarCorreo = "SELECT * from usuarios WHERE correo='$correo'";

        //Realizamos la consulta y anadimos $connection, ya que es la variable que creamos en nuestro archivo connection.php
        $resultado = $connection->query($buscarCorreo);

        //Usaremos la funcion mysqli_num_rows en la consulta $resultado,
        //esta funcion nos regresa el numero de filas en el resultado
        $contador = mysqli_num_rows($resultado);

        //SI SI EXISTE una fila, quiere decir QUE SI ESTA EL CORREO EN LA BASE DE DATOS
        if($contador == 1) {
           echo 'El correo ya existe';
        } else {
        echo 'El correo no existe';
        }
   }
}

?>
