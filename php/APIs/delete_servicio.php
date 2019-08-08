<?php

# Conexion con la BD
$connect = mysqli_connect("localhost","id9529033_root","123456","id9529033_servitodo");

$id =  $_GET["id"];

// Muy Importante, la codificacion del json tiene que ser igual al de la BD.
mysqli_set_charset($connect, 'utf8'); 



  $sql = "DELETE FROM servicios WHERE id='$id'"; //Consulta SQL

  $result = mysqli_query($connect, $sql); // Ejucutar la consulta

  // Verificar que hayan datos.
  if ($result) { 

    echo "Eliminado";
  
  } else {
    // Error si no vienen datos.
    echo "Error";
  }

//Cerrar conexion
mysqli_close($connect);
?>
