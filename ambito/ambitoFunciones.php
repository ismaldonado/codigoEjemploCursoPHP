<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    //variable de calculo de areas
      $area=0;
      $lado=5;
    //Definimos el calculo de areas
      function calcularAreaCuadrado(){
        $area=10;
        echo "El area dentro de la funcion es: ".$area."<br>";
      }
      calcularAreaCuadrado();
      echo "El area fuera de la funcion es: ".$area;
    ?>
  </body>
</html>
