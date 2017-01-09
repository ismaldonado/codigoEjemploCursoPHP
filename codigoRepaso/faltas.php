<?php
//Incluir la class
include "partidoBasket.php";

//Cramos el objeto pBasquet
$pb=new partidoBasket();

//Comprobar la correcta inicializacion
$pb->imprimirTodasLasFaltas(0);

//Recibimos la falta del jugador
$dorsalJugador=$_POST["faltaJugador"];
$minuto=$_POST["minuto"];
//Anyadimos falta
$pb->anyadirFalta($dorsalJugador);
//Comprobar la correcta inicializacion
$pb->imprimirTodasLasFaltas($minuto);
 ?>
