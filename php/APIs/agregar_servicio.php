<?php

	include 'conexion.php';

	if(isset($_POST['servicio'])){
	
		$miembro = $_POST['miembro'];
		$servicio = $_POST['servicio'];

		$sql = "INSERT INTO servicios (id,miembro,servicio) VALUES (NULL, '$miembro', '$servicio');";
		
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