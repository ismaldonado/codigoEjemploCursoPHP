<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Creacion arrays</title>
  </head>
  <body>
    <?php
    //Generar 30 variables altura
    $altura1=164;
    $altura2=178;
    $altura3=169;
    //...
    $altura30=182;
    //Media de alturas
    $media=($altura1+$altura2+$altura3+$altura30)/30;
    //Arrays
    $alturasPrimer=array(164,178,169,182);
    $alturasSegundo=[164,178,169,182];
    //Mostrar un valor
    echo $alturasPrimer[1];
     ?>
  </body>
</html>
