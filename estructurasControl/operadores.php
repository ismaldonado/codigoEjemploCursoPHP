<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Operadores de comparación</title>
  </head>
  <body>
    <?php
    //Dos numeros para poderlos comparar
    $num1=0;
    $num2=3;

    //Operadores
    if ($num1==$num2) {
      echo "Ambos numeros son iguales";
    }elseif ($num1>$num2) {
      echo "Num 1 es mayor que num2";.
    }elseif ($num1<$num2) {
      echo "Num 1 es menor que num2";.
    }elseif ($num1!=$num2) {
      echo "Num 1 es distinto que num2";.
    }elseif ($num1<=$num2) {
      echo "Num 1 es menor o igual que num2";.
    }elseif ($num1>=$num2) {
      echo "Num 1 es mayor o igual que num2";.
    }
     ?>
  </body>
</html>
