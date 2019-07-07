<?php
/**
 * Sesiones: Almacenar y persistir datos del usuario mientras que navega en un sitio web 
 * hasta que cierra sesión en el navegador.
 */

 //para hacer uso de ellas se debe iniciar la sesión
	session_start();

	//variable local
	$variable_normal="soy una cadena de texto";

	//variable de sesión
	$_SESSION['hola'] = "HolaMundo";

	echo $variable_normal."<br/>";

	echo $_SESSION['hola'];
?>