<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Comprobacion de las areas</title>
  </head>
  <body>
    <?php
    include 'areas.php';

    $areaCuadrado=0;
    //Generamos un nuevo objeto
    $areasObjeto= new areas();

    //Calcular el area
    $areasObjeto->setLado(-3);
    $areaCuadrado=$areasObjeto->calcularAreaCuadrado();

    //Imprimir por pantalla el area del calcularAreaCuadrado
    echo "El area del cuadrado es = ".$areaCuadrado;
     ?>

  </body>
</html>
