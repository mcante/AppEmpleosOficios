<?php

	include 'conexion.php';

	if(isset($_POST['nombre'])){
	
		$nombre = $_POST['nombre'];
		$dpi = $_POST['dpi'];
		$telefono= $_POST['telefono'];
		$direccion= $_POST['direccion'];
		$sobre_mi= $_POST['sobremi'];
		$usuario= $_POST['usuario'];
		$password= $_POST['password'];

		$sql = "INSERT INTO admin (id,nombre,dpi,telefono,direccion,sobre_mi,usuario,password,estado) VALUES (NULL, '$nombre', '$dpi', '$telefono', '$direccion', '$sobre_mi', '$usuario', '$password', '1');";
		
		$ejecutar = $conexion->query($sql);

		if($ejecutar){
			echo "Correcto";
		}else{
			echo "Error";
		}

	}else{
		echo "Error";
	}
?>