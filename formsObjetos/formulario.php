<?php
  // Incluimos las librerias necesarias
  include "area.php";
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Recogida de informacion</title>
  </head>
  <body>
    <?php
      $areaFormulario=new area();
      $areaFormulario->setBase($_POST["base"]);
      $areaFormulario->setAltura($_POST["altura"]);
      $areaCalculado=$areaFormulario->calculoArea();

      echo "El area del rectangulo: ".$areaCalculado;
    ?>
  </body>
</html>
