<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Actividad 2 Arrays</title>
  </head>
  <body>
    <?php
    //Array asociativo de personas
    $personas=[
      "juan"=>[
              "altura"=>175,
              "pelo"=>"rubio",
              "ojos"=>"azules"
              ],
      "maria"=>[
              "altura"=>168,"pelo"=>"castaña","ojos"=>"marrones"
               ],
      "pedro"=>array("altura"=>180,"pelo"=>"castaño","ojos"=>"verdes")
    ];
     ?>
     <br>
     <h2>Imprimir elementos de un array</h2>
     <hr>
     <br>
     <?php
      $personaJuan=$personas["juan"];
      echo "La altura de juan es ".$personaJuan["altura"]."<br>";
      echo "Los ojos de maria son ".$personas["maria"]["ojos"]."<br>";
      $personaPedro=$personas["pedro"];
      echo "El pelo de pedro es ".$personaPedro["pelo"]."<br>";
     ?>
  </body>
</html>
