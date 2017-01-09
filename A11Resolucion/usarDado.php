<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Fichero que va a utilizar el dado</title>
  </head>
  <body>
    <?php
    //Incluimos y creamos un objeto
    include 'jugadorDado.php';
    $dado=new jugadorDado();

    //Vamos a tirar un dado del 1 al 6
    $dado->setMinNumDado(1);
    $dado->setMaxNumDado(6);
    //Tiramos y mostramos 12 tiradas
    for($i=1;$i<13;$i++){
      echo "En la tirada ".$i." nos ha salido un ".$dado->tirarDado();
      echo "<br>";
    }
    ?>
  </body>
</html>
