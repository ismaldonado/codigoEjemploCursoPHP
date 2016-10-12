<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Uso de estructuras de control en clases</title>
  </head>
  <body>
    <?php
    //Incluir librerias
    require 'Banco.php';
    //Meter dinero en el Banco
    $dineroMeter=100;
    $banco=new Banco();
    $banco->setDinero($dineroMeter);

    echo $banco->getDinero();
    //Supèrando el Limite
    $banco->setDinero(10000);

    echo "<br>Tengo ".$banco->getDinero()." €";
     ?>
  </body>
</html>
