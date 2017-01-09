<?php
/**
 *
 */
class partidoBasket
{
  //Faltas de Jugadores
  private $faltasJugadores=
  [
    1=>0,
    2=>0,
    3=>0,
    4=>0,
    5=>0
  ];

  public function anyadirFalta($dorsalJugador,$faltasAnteriores){
    $this->faltasJugadores[$dorsalJugador]=$faltasAnteriores+1;
  }
  public function getFaltasJugador($dorsalJugador){
    return   $this->faltasJugadores[$dorsalJugador];
  }

  //Comprobar el numero de faltas
  public function imprimirTodasLasFaltas($minuto){
    echo "<br>---------------ESTADO DE FALTAS EN MINUTO ".$minuto."---------------<br>";
    foreach ($this->faltasJugadores as $key => $value) {
      echo "El jugador número ".$key." tiene ".$value. " faltas<br>";
    }
    echo "<br>---------------ESTADO DE FALTAS EN MINUTO ".$minuto."---------------<br>";
  }

}


 ?>
