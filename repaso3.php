<?php
$conexion = new mysqli("localhost", "root", "", "liga");
if ($conexion->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;

}else {
$resultado= $conexion->query("SELECT * from equipo");
}




 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <table>
    <tr>
        <td>ID</td>
        <td>nombre</td>
        <td>ciudad</td>
      </tr>
    <?php
    foreach ($resultado as $equipo) {
      echo"<tr>";
        echo "<td>".$equipo['id_equipo']."</td>";
        echo "<td>".$equipo['nombre']."</td>";
        echo "<td>".$equipo['ciudad']."</td>";
      echo"</tr>";
      }
     ?>
   </table>
  </body>
</html>
