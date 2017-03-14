<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Funciones y MVC</title>
  </head>
  <body>
    <?php
    //Incluimos librerias
    include "dbUsuarios.php";
    $usuarios=new dbUsuarios();

    //DEvolverá el usuario 1
    $tabla=$usuarios->devolverUsuarios();
    var_dump($tabla);
    echo "</br><hr></br>";
    foreach ($tabla as $fila) {
      echo "id: ".$fila["id"]."</br>";
      echo "nombre: ".$fila["nombre"]."</br>";
      echo "apellidos: ".$fila["apellidos"]."</br>";
      echo "edad: ".$fila["edad"]."</br>";
    }
    ?>
  </body>
</html>
