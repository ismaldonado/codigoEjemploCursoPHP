<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Arrays asociativos</title>
  </head>
  <body>
    <?php
    //automatica
    $nombres=array("Paco","Maria","Pedro");
    //Imprimir todos los elementos
    echo "<br>------------<br>";
    print_r($nombres);
    echo "<br>------------<br>";
    //asociando integers
    $nombreFemeninos=[
      1=>"Lucia",
      2=>"Juani",
      10=>"Rosa"
    ];
    echo "<br>------------<br>";
    print_r($nombreFemeninos);
    echo "<br>------------<br>";
    $nombreFemeninos[10]="Belen";
    echo "<br>------------<br>";
    print_r($nombreFemeninos);
    echo "<br>------------<br>";
    //asociando strings
    $caractPersona=[
      "pelo"=>"marron",
      "ojos"=>"azules",
      "altura"=>175,
      5=>10
    ];
    echo "<br>------------<br>";
    print_r($caractPersona);
    echo "<br>------------<br>";
     ?>
  </body>
</html>
