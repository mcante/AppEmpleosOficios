<?php
$connect = mysqli_connect("localhost","id9529033_root","123456","id9529033_servitodo");

if(isset($_POST["user"]) && isset($_POST["pass"])){

  $user =  $_POST["user"];
  $pass = $_POST["pass"];
  
  $sql = "SELECT * FROM admin WHERE usuario = '$user' and password = '$pass'";

  $result = mysqli_query($connect, $sql);

  $num_row = mysqli_num_rows($result);

  if ($num_row == "1") {
    //$data = mysqli_fetch_array($result);
    $data = mysqli_fetch_array($result, MYSQLI_ASSOC);
    echo json_encode(array('user' => "aceptado", 'id' => $data['id'], 'nombre' => $data['nombre'], 'rol' => $data['rol'] ));
    //echo "1";
  } else {
    //echo "error";
    echo json_encode(array('user' => "rechazado"));
  }
} else {
  echo json_encode(array('user' => "rechazado"));
}

//Cerrar conexion
mysqli_close($connect);
?>
