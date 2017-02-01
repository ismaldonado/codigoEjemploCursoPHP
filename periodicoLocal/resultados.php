<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>RESULTADOS DE EQUIPO</title>
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
    //Crear el objeto de conexion
    $mysqli = new mysqli("localhost", "root", "", "nba");
    if ($mysqli->connect_errno) {
      //Ha habido error
      echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }else{
      //No ha habido error
      //Hacemos una consulta
        $select="SELECT equipo_local,equipo_visitante,puntos_local,puntos_visitante,temporada FROM partidos WHERE equipo_local='Bulls'";
        //echo $select;
        $resultado = $mysqli->query($select);
        echo "<table>";
        echo "<tr>";
        echo "<th>Equipo Local</th>";
        echo "<th>Puntos local</th>";
        echo "<th>Equipo Visitante</th>";
        echo "<th>puntos visitante</th>";
        echo "<th>ganador</th>";
        echo "<th>temporada</th>";
        echo "</tr>";
        while($fila=$resultado->fetch_assoc()){
          echo "<tr>";
          echo "<td>".$fila["equipo_local"]."</td>";
          echo "<td>".$fila["puntos_local"]."</td>";
          echo "<td>".$fila["equipo_visitante"]."</td>";
          echo "<td>".$fila["puntos_visitante"]."</td>";
          if ($fila["puntos_local"]>$fila["puntos_visitante"]) {
            echo "<td>LOCAL</td>";
          }elseif ($fila["puntos_local"]<$fila["puntos_visitante"]) {
            echo "<td>VISITANTE</td>";
          }else{
            echo "<td>AGUJERO DE GUSANO</td>";
          }
          echo "<td>".$fila["temporada"]."</td>";
          echo "</tr>";
        }
        echo "</table>";
    }
    ?>
  </body>
</html>
