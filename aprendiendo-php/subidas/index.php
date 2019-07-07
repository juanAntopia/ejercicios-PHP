<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
	<h1>Subir archivos</h1>

	<form action="upload.php" method="POST" enctype="multipart/form-data">
		<input type="file" name="archivo" id="" />
		<br/>
		<br/>
		<input type="submit" value="Enviar" />
	</form>

	<h1>Listado de imagenes</h1>

	<?php
		$gestor = opendir('./images');

		if($gestor):
			while(($imagen = readdir($gestor)) !== false):
				if($imagen != '.' && $imagen != '..'):
					echo "<img src='images/$imagen' width='250'/><br/>";
				endif;
			endwhile;
		endif;
	?>
</body>
</html>