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
    $areasObjeto->setLado(4);
    $areasObjeto->comprobarNegativo(-3,$areaCuadrado);
    $areaCuadrado=$areasObjeto->calcularAreaCuadrado();

    $areasObjeto->setAltura(4);

    //Imprimir por pantalla el area del calcularAreaCuadrado
    echo "El area del cuadrado es = ".$areaCuadrado;
     ?>

  </body>
</html>
