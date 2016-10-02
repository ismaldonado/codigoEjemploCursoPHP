<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejemplo sobre if else</title>
  </head>
  <body>
    <?php
    $numero1=10;
    $numero2=12;
    echo "<div class=resultado>";
    if($numero1>$numero2){
      echo "NUMERO 1 mayor que NUMERO2";
    }elseif ($numero1==$numero2) {
      echo "IGUALES";
    }else{
      echo "NUMERO2 mayor que NUMERO1";
    }
    echo "</div>";
     ?>
  </body>
</html>
