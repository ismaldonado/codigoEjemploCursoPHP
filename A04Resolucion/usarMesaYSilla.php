<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Fichero donde usamos una silla y una mesa</title>
  </head>
  <body>
    <?php
    //Creamos los objetos
    include "Mesa.php";
    include "Silla.php";
    $mesa=new Mesa();
    $silla=new Silla();
    //Les asignamos un color
    $mesa->setColor("granate");
    $silla->setColor("blanca");
    //Y les asignamos un material
    $mesa->setMaterial("madera");
    $silla->setMaterial($mesa->getMaterial());
    ?>
    En la clase tenemos una mesa de color <b><?=$mesa->getColor()?></b> y con un material <b><?=$mesa->getMaterial()?></b>
    <br>
    En la clase tenemos una silla de color <b><?=$silla->getColor()?></b> y con un material <b><?=$silla->getMaterial()?></b>
    <br>
  </body>
</html>
