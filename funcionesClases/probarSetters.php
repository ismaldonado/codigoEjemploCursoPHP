<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Probando Setters</title>
  </head>
  <body>
    <?php
    //incluimos la clase
    include 'ClaseCoche.php';
    //Generacion de objetos
    $coche1 = new ClaseCoche();
    //Uso get
    $colorCoche=''; //Variable de tipo String
    $colorCoche=$coche1->getColor();
    echo "<br>La variable colorCoche:".$colorCoche;
    //Uso de Setter
    $coche1->setColor('azul');
    $colorLila='Lila';
    $colorCoche=$coche1->getColor();
    echo "<br>La variable colorCoche AHORA:".$colorCoche;
    $coche1->setColor($colorLila);
    echo "<br>La variable colorCoche AHORA:".$coche1->getColor();
     ?>
  </body>
</html>
