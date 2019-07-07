<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
	<?= "Bienvenido a PHP"?>

	<?php
	/*imprimir variables
	$muestra_e_variables = "Hola desde una variable";

	echo '<h1>'. $muestra_e_variables .'</h1>'*/

	$booleana=true;

	$edad=12;

	echo '<br />';
	echo gettype($booleana);/*geettype sirve para retornarnos que tipo de variable es*/

	echo '<br />';

	$texto = "hola perro $edad";//de ambas maneras podemos mostrar la información con variables
	$texto = 'hola perro '. $edad;
	echo $texto;
	?>

</body>
</html>