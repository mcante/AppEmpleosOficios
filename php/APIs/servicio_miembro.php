<?php
  $connect = mysqli_connect("localhost","id9529033_root","123456","id9529033_servitodo");
  
  $id =  $_POST["idd"];

  $sql = "SELECT * FROM admin WHERE id = '$id'";

  $result = mysqli_query($connect, $sql);

  $num_row = mysqli_num_rows($result);

  if ($num_row == "1") {

    $data = mysqli_fetch_array($result, MYSQLI_ASSOC);
    echo json_encode(array('id' => $data['id'], 'nombre' => $data['nombre'], 'telefono' => $data['telefono'], 'direccion' => $data['direccion'], 'sobremi' => $data['sobre_mi'], 'contacto' => true ));

  } else {
    //echo "error";
    echo json_encode(array('total' => "0"));
  }

//Cerrar conexion
mysqli_close($connect);
?>
