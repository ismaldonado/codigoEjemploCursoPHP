<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Actividad 1 Arrays</title>
  </head>
  <body>
    <br>
    <h2>Imprimir array con print_r</h2>
    <hr>
    <br>
    <?php
    //Vamos a generar el array con los equipos
    $equipos=[
      "Baloncesto Sevilla",
      "CAI Zaragoza",
      "Divina Seguros Joventut",
      "Dominion Bilbao Basket",
      "FC Barcelona Lassa",
      "Herbalife Gran Canaria", "
      Iberostar Tenerife, ICL Manresa",
      "Laboral Kutxa Baskonia",
      "Montakit Fuenlabrada",
      "MoraBanc Andorra",
      "Movistar Estudiantes",
      "Real Madrid", "
      Rio Natura Monbus Obradoiro",
      "Unicaja",
      "UCAM Murcia CB",
      "Valencia Basket Club"
    ];
    //Imprimir los equipos
    print_r($equipos);
    //Imprimir while
    ?>
    <br>
    <h2>Imprimir array con while</h2>
    <hr>
    <br>
    <?php
    $contador=0;
    while ($contador <= 15) {
      echo "El equipo numero ( ".$contador.") se llama ".$equipos[$contador]."<br>";
      $contador++;
    }
     ?>
  </body>
</html>
