<?php

	include 'conexion.php';

	if(isset($_POST['usuario'])){
	
		$usuario = $_POST['usuario'];
		$miembro = $_POST['miembro'];
		

		$sql = "INSERT INTO contratos (id,usuario,miembro,fecha,comentario,valoracion,estado) VALUES (NULL, '$usuario', '$miembro', current_timestamp(), '', '5', 'En curso');";

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