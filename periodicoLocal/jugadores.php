<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>JUGADORES BULLS</title>
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
      //No ha habido error
      //Hacemos una consulta
      $resultado=$nba->jugadores("Bulls");
    ?>
    <table>
      <tr>
        <th>Nombre Jugador</th>
        <th>Altura</th>
        <th>Peso</th>
        <th>Posicion</th>
        <th>Equipo</th>
      </tr>
    <?php
      while($fila=$resultado->fetch_assoc()){
      echo "<tr>";
      echo "<td>".$fila["Nombre"]."</td>";
      echo "<td>".$fila["Altura"]."</td>";
      echo "<td>".$fila["Peso"]."</td>";
      echo "<td>".$fila["Posicion"]."</td>";
      echo "<td>".$fila["Nombre_equipo"]."</td>";
      echo "</tr>";
    }
  }
    ?>
    </table>
  </body>
</html>
