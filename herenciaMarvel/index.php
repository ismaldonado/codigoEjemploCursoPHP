<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Pruebas Marvel</title>
  </head>
  <body>
    <?php
      include "Villano.php";

      $carnage=new Villano();
      //$carnage->setNombre("Carnage");
      echo "El villano es diu: ".$carnage->getNombre();
     ?>
  </body>
</html>
