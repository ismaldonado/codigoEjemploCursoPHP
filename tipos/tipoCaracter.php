<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Tipos String</title>
  </head>
  <body>
    <?php
    //Definicion de variables
    $frasePolitico='España va bien!!';
    $tengoEuros=10;
    $fraseTrabajador="Tengo ${tengoEuros} euros";

    echo "Frase de politico: ".$frasePolitico;
    echo "<br>Frase de trabajador: ".$fraseTrabajador;
    //CAmbio de contenido
    $frasePolitico='España no va tan bien!!';
    echo "<br>Frase modificada: ".$frasePolitico;
     ?>
  </body>
</html>
