<?php
//Incluir la class
include "partidoBasket.php";
//Cramos el objeto pBasquet
$pb=new partidoBasket();
//Recibimos la falta del jugador
$faltasJugador1=0;
if(isset($_POST["faltaJugador"])){
  $dorsalJugador=$_POST["faltaJugador"];
  $faltasAnteriores=$_POST["jugador1"];
  $minuto=$_POST["minuto"];
  //Anyadimos falta
  $pb->anyadirFalta($dorsalJugador,$faltasAnteriores);
  $faltasJugador1=$pb->getFaltasJugador(1);
  //Comprobar la correcta inicializacion
  //$pb->imprimirTodasLasFaltas($minuto);
}
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Faltas de jugador basquet</title>
  </head>
  <body>
    <form action="index.php" method="post">
      <br>JUGADOR1 <input type="text" name="jugador1" value="<?php echo $faltasJugador1?>" readonly><br>
      FALTA JUGADOR<br>s
      <select name="faltaJugador">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
      </select>
      <br>Minuto de juego<br>
      <input type="text" name="minuto" value="">
      <br><input type="submit" value="Enviar">
    </form>
  </body>
</html>
