<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Calculando AREAS</title>
  </head>
  <body>
    <?php
      include "areas.php";
      $areas=new Areas(10);

      echo "<br>";
      echo "CREADO EL OBJETO";
      echo "<br>";
      echo $areas->getLado();
      echo "<br>";
      //caluclar el area del rectangulo
      $base=10;
      $altura=5;
      echo $areas->areaRectangulo($base,$altura);
      echo "<br>";
      $areas->areaCirculo(4);
      echo "<br>";
      $areas->setLado(12);
      echo $areas->areaCuadrado();
     ?>
  </body>
</html>
