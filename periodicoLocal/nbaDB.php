<?php
/**
 *
 */
class nbaDB
{
  private $mysqli;
  private $errorConexion=false;

  function __construct()
  {
    $this->mysqli = new mysqli("localhost", "root", "", "nba");
    if ($this->mysqli->connect_errno) {
      $this->errorConexion=true;
    }
  }

  public function getErrorConexion(){
    return $this->errorConexion;
  }

  public function maxAnotador(){
    return $this->mysqli->query("SELECT jugador,Puntos_por_partido FROM estadisticas ORDER BY Puntos_por_partido DESC LIMIT 1");
  }

  public function maxAsistencias(){
    return $this->mysqli->query("SELECT jugador,Asistencias_por_partido FROM estadisticas ORDER BY Asistencias_por_partido DESC LIMIT 1");
  }

  public function jugadores($equipo){
    return $this->mysqli->query("SELECT Nombre,Altura,Peso,Posicion,Nombre_equipo FROM jugadores WHERE Nombre_equipo='".$equipo."'");
  }
}


 ?>
