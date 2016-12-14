<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>CAlculo de areas</title>
  </head>
  <body>
    <?php
      include "areas.php";

      $a=new areas();

      $a->setLado(5,4);
      $a->setAltura(7,8);

      echo "El area del rectangulo es: ".$a->areaRectangulo();
     ?>
  </body>
</html>
