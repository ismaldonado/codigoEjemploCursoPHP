<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      include 'ClaseCoche.php';

      $coche1 = new ClaseCoche();
      $coche1->mostrarColor();

      $coche2 = new ClaseCoche();
      $coche2->mostrarColor();
      $coche2->mostrarTipo();  
    ?>
  </body>
</html>
