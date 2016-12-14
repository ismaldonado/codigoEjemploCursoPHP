<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>REsolucion actividad 1</title>
  </head>
  <body>
    <?php
      //Definimos las variables
      $inicio=0;
      $fin=20;
      $salto=2;
      //Sacamos por pantalla los 20 primeros parse_ini_string
      for ($i=$inicio; $i <=$fin ; $i=$i+$salto) {
        echo $i."<br>";
      }
     ?>
  </body>
</html>
