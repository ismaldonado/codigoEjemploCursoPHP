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
        <td>LOGO</td>
        <td><a href="#">RESULTADOS</a></td>
        <td><a href="#">JUGADORES</a></td>
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


  ?>
  <table border=1>
    <tr>
      <td>
        <?php
          //No ha habido error
          //Hacemos una consulta
          $resultado = $mysqli->query("SELECT jugador,Asistencias_por_partido FROM estadisticas ORDER BY Asistencias_por_partido DESC LIMIT 1");
          //Cuantas filas nos devuelve
          while($fila=$resultado->fetch_assoc()){
            echo "Codigo Jugador: ".$fila["jugador"]."<br>"."Asistencias: ".$fila["Asistencias_por_partido"];
          }
        }
        ?>
      </td>
      <td>2</td>
    </tr>
  </table>
  </body>
</html>
