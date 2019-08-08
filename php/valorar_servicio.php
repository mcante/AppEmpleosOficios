<?php

	include 'conexion.php';

	if(isset($_POST['contrato'])){
	
		$contrato = $_POST['contrato'];
		$comentario = $_POST['comentario'];
		$valoracion = $_POST['valoracion'];
		

		$sql = "UPDATE contratos SET comentario='$comentario', valoracion='$valoracion' WHERE id='$contrato';";
		

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

