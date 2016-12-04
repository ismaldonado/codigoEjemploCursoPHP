<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ambito de variables</title>
  </head>
  <body>
    <?php
    //variable de calculo de areas
      $area=0;
      $lado=5;
    ?>
    <div class="resultado">
      <?php
        //area del cuadrado
        $area=$lado*$lado;
       ?>
      <?="El resultado del area es: ".$area?>
    </div>
  </body>
</html>
