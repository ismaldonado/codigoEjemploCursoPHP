<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $primera='Paco';
    $numero=3;
    echo 'variable primera='.$primera;
    echo '<br>';
    echo 'variable numero='.$numero;

    include 'ClaseCoche.php';

    $coche=new ClaseCoche();
    echo '<br>';
    echo $coche->color;
    echo '<br>';
    echo 'El color del coche es (utilizando el metodo) ';
    $coche->mostrarColor();
    echo '<br>';
    echo 'El color del coche es (utilizando el metodo get) '.$coche->getColor();
    $colorCoche=$coche->getColor(); //$colorCoche='Verde';
    echo '<br>';
    echo $colorCoche;

     ?>
  </body>
</html>
