<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Actividad 3 Arrays</title>
  </head>
  <body>
    <?php
    //Generar un array vacio
    $equipos=[];
    //Rellenar con el primer equipo
    $equipos[]=[
      "nombre"=>"Paco Club",
      "numJugadores"=>5,
      "posicionEnLaTabla"=>6
    ];
    //Rellenar con el segundo equipo
    $equipos[]=[
      "nombre"=>"Catarroja Club",
      "numJugadores"=>5,
      "posicionEnLaTabla"=>2
    ];

    //Imprimir el array
    print_r($equipos);

    ?>
  </body>
</html>
