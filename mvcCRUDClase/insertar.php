<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Insercion usuario</title>
  </head>
  <body>
    <?php
    include "dbUsuarios.php";

    $usuarios=new dbUsuarios();
    $usuarios->insertarUsuario($_POST["nombre"],$_POST["apellidos"],$_POST["edad"]);
    ?>
  </body>
</html>
