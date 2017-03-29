<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Insertar</title>
  </head>
  <body>
<table border=5>


    <?php
//Conexiones a la base de datos
include "borrar.php";

  $nba1=new dbNBA();
  $nba1->insertarEquipo($_POST['Nombre'],$_POST['Ciudad'],$_POST['Conferencia'],$_POST['Division']);
  $nba2=$nba1->devolverEquipo($_POST['nombre']);
  echo "<tr>";
  echo "<td><strong>Nombre</strong></td>";
  echo "<td><strong>Ciudad</strong></td>";
  echo "<td><strong>Conferencia</strong></td>";
  echo "<td><strong>Division</strong></td>";
  echo "<td><strong>Borrar</strong></td>";
  echo "</tr>";
while ($fila=$nba2->fetch_assoc()){
  echo "<tr>";
  echo "<td>";
  echo "" .$fila['Nombre'];
    echo "</td>";
      echo "<td>";
  echo "" .$fila['Ciudad'];
    echo "</td>";
    echo "<td>";
echo "" .$fila['Conferencia'];
  echo "</td>";
  echo "<td>";
echo "" .$fila['Division'];
echo "</td>";
echo "<td>";
echo "<a href='borrar.php?Nombre=".$fila["Nombre"]."'>Borrar Registro</a>";
echo "</td>";
  echo "</tr>";
}
     ?>
  </body>
</html>
