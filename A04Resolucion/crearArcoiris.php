<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Probando un arcoiris</title>
  </head>
  <body>
    Un arcoiris tiene los siguientes colores
    <?php
    //Generamos el objeto ArcoIris
    include 'ArcoIris.php';
    $arcoiris=new ArcoIris();
     ?>
    <ul>
      <li><?=$arcoiris->getAzul()?></li>
      <li><?=$arcoiris->getRojo()?></li>
      <li><?=$arcoiris->getAmarillo()?></li>
      <li><?=$arcoiris->getVerde()?></li>
      <li><?=$arcoiris->getIndigo()?></li>
      <li><?=$arcoiris->getNaranja()?></li>
      <li><?=$arcoiris->getVioleta()?></li>
    </ul>
  </body>
</html>
