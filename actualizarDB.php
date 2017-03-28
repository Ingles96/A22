<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Actualizar Equipo</title>
  </head>
  <body>
  <?php
  //Incluir la clase de conexion
  include "dbNBA.php";
  $user=new dbNBA();
  //insertar un usuario
  $resultadoActualizar=$user->actualizarEquipo($_POST["Nombre"],$_POST["Ciudad"],$_POST["Conferencia"],$_POST["Division"]);
  //Devolver el usuario actualizado
  if($resultadoActualizar==true){
    $resultado=$user->devolverEquipo($_POST["Nombre"]);
    $fila=$resultado->fetch_assoc();
    echo "nombre: ".$fila["Nombre"]."</br>";
    echo "ciudad: ".$fila["Ciudad"]."</br>";
    echo "conferencia: ".$fila["Conferencia"]."</br>";
    echo "division: ".$fila["Division"]."</br>";
    echo "<a href='actualizar.php?Nombre=".$fila["Nombre"]."&Ciudad=".$fila["Ciudad"]."&Conferencia=".$fila["Conferencia"]."&Division=".$fila["Division"]."'>Actualizar Registro</a>";
  }else{
    echo "Error en la insercion";
  }
  ?>
  </body>
</html>
