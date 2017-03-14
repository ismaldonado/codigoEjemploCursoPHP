<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Funciones por referencia</title>
  </head>
  <body>
    <?php
    //Incluimos librerias
    include "dbUsuarios.php";
    $usuarios=new dbUsuarios();

    //DEvolverá el usuario 1
    $tabla=$usuarios->devolverUsuarioIdMVC(2);
    for ($i=4; $i < 10 ; $i=$i+2) {
      $tabla=$usuarios->añadirUsuario($i,$tabla);
    }
    foreach ($tabla as $fila) {
      echo "id: ".$fila["id"]."</br>";
      echo "nombre: ".$fila["nombre"]."</br>";
      echo "apellidos: ".$fila["apellidos"]."</br>";
      echo "edad: ".$fila["edad"]."</br>";
    }
    ?>
  </body>
</html>
