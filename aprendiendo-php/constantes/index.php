<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Constantes</title>
</head>
<body>
	<?php
		//constantes
		//es un contenedor de información que no puede variar

		define('nombre', 'Juan Angel Hernández Antopia');

		echo '<h1>'.nombre.'</h1>';

		//constantes predefinidas

		echo PHP_VERSION;//version de php
		echo '<br />';
		echo PHP_OS;//sistema operativo
		echo '<br />';
		echo PHP_EXTENSION_DIR;
		echo '<br />';
		echo __FILE__;//ruta de donde estamos trabajando

	?>
</body>
</html>