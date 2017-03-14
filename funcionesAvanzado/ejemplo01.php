<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Funciones con valor por defecto</title>
  </head>
  <body>
    <?php
    //Incluimos librerias
    include "dbUsuarios.php";
    $usuarios=new dbUsuarios();

    //DEvolverá el usuario 1
    $resultado=$usuarios->devolverUsuarioId(4,true);
    $fila=$resultado->fetch_assoc();
    echo "id: ".$fila["id"]."</br>";
    echo "nombre: ".$fila["nombre"]."</br>";
    echo "apellidos: ".$fila["apellidos"]."</br>";
    echo "edad: ".$fila["edad"]."</br>";

    ?>
  </body>
</html>
