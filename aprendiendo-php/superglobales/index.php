<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
	<?php 
		//variables superglobales

		//variables de servidor
		echo '<h1>';
		echo $_SERVER['SERVER_ADDR'];//dirección ip de nuestro servidor web
		echo '</h1>';

		echo '<h1>';
		echo $_SERVER['SERVER_NAME'];//nombre del servidor
		echo '</h1>';

		echo '<h1>';
		echo $_SERVER['SERVER_SOFTWARE'];//que herramienta se está utilizando como servidor web
		echo '</h1>';

		echo '<h1>';
		echo $_SERVER['REMOTE_ADDR'];//dirección ip del cliente
		echo '</h1>';
	?>
</body>
</html>