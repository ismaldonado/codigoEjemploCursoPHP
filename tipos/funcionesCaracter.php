<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Funciones con Strings</title>
  </head>
  <body>
    <?php
    $frase="  Prueba de Frase  ";
    $fraseSinEspacios=ltrim($frase);
    echo "--".$frase."--";
    echo "<br>--".$fraseSinEspacios."--";
    echo "tamaño de la frase: ".strlen($frase);
     ?>
  </body>
</html>
