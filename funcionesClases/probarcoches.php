<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Probando las clases</title>
  </head>
  <body>
    <?php
    //incluimos la clase
    include 'ClaseCoche.php';
    //Generacion de objetos
    $coche1 = new ClaseCoche();
    $colorCoche=''; //Variable de tipo String
    $colorCoche=$coche1->getColor();
    echo $colorCoche;
    //Modifico variables en fichero probarcoches.php
    $colorCoche='azul';
    echo "<br>La variable colorCoche:".$colorCoche;
    $coche1->mostrarColor();

    ?>
  </body>
</html>
