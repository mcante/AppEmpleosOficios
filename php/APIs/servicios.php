<?php

# Conexion con la BD
$connect = mysqli_connect("localhost","id9529033_root","123456","id9529033_servitodo");

// Muy Importante, la codificacion del json tiene que ser igual al de la BD.
mysqli_set_charset($connect, 'utf8'); 

  $sql = "SELECT * FROM SERVICIOS_MIEMBROS"; //Consulta SQL

  $result = mysqli_query($connect, $sql); // Ejucutar la consulta

  $lista = array(); // Array que guardara todos los resultados de la consulta.

  // Verificar que hayan datos.
  if ($result) { 

    // Recorrer los resultados de la consulta y guardarlos en el array lista.
    while($row = mysqli_fetch_object($result)){
      $lista[] = $row;
    }
    
    // Codificar el array y pasarlo a JSON
    echo json_encode($lista);
  
  } else {
    // Error si no vienen datos.
    echo json_encode(array('total' => "0"));
  }

//Cerrar conexion
mysqli_close($connect);
?>
