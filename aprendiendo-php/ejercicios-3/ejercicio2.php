<?php

function validarEmail($correo){

	$status = "No válido.";

	if(!empty($correo) && filter_var($correo, FILTER_VALIDATE_EMAIL)){
		$status = "Válido";
	}

	return $status;
}

if(isset($_GET['email'])){
	echo validarEmail($_GET['email']);
}else{
	echo "<h1>Ingresa un paramétro por get...</h1>";
}

?>