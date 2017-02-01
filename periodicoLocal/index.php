<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PERIODICO LOCAL DE LOS LAKERS</title>
    <link rel="stylesheet" href="/css/estilos.css">
  </head>
  <body>
    <!---
    MENU
    -->
    <table class="menu">
      <tr>
        <td><a href="index.php">LOGO</a></td>
        <td><a href="resultados.php">RESULTADOS</a></td>
        <td><a href="jugadores.php">JUGADORES</a></td>
      </tr>
    </table>
    <!---
    MENU
    -->
    <?php
    include "nbaDB.php";
    //Nuevo objeto nbaDB
    $nba=new nbaDB();
    if($nba->getErrorConexion()==false){
    ?>
    <table border=1>
      <tr>
        <td>
    <?php
        $resultado=$nba->maxAnotador();
        while($fila=$resultado->fetch_assoc()){
            echo "Codigo Jugador: ".$fila["jugador"]."<br>"."Puntuacion Maxima: ".$fila["Puntos_por_partido"];
        }
    ?>
      </td>
      <td>
  <?php
      $resultado=$nba->maxAsistencias();
      while($fila=$resultado->fetch_assoc()){
          echo "Codigo Jugador: ".$fila["jugador"]."<br>"."Aiastencias: ".$fila["Asistencias_por_partido"];
      }
  }
  ?>
    </td>
      </tr>
    </table>
  </body>
</html>
