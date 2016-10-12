<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Estructura de control switch</title>
  </head>
  <body>
    <?php
    //Comparativo con if
    $numero=8;
    $numero2=4;
    if($numero==0){
      echo "Es cero";
    }elseif ($numero2==3) {
      echo "Es tres";
    }elseif ($numero==8) {
      echo "Es ocho";
    }
    //Utilizando el switch
    switch ($numero) {
      case 0:
        echo "Es cero";
        break;
      case 3:
        echo "Es tres";
        break;
      case 8:
        echo "Es ocho";
      break;
      default:
        echo "no es ninguno de los anteriores";
      break;
    }
     ?>
  </body>
</html>
