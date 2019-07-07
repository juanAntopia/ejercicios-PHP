<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
	<h1>Tu información</h1>

		<?php   
			if(isset($_GET['error'])){
				$error= $_GET['error'];

				if($error == 'faltan_valores'){
					echo '<strong style="color:red;">Introduce todos los datos en todos los campos del formulario</strong>';
				}

				if($error == 'nombre'){
					echo '<strong style="color:red;">Introduce bien el nombre</strong>';
				}

				if($error == 'apellidos'){
					echo '<strong style="color:red;">Introduce bien los apellidos</strong>';
				}

				if($error == 'edad'){
					echo '<strong style="color:red;">Introduce bien la edad</strong>';
				}

				if($error == 'email'){
					echo '<strong style="color:red;">Introduce bien tu email</strong>';
				}

				if($error == 'password'){
					echo '<strong style="color:red;">Introduce una contraseña de más de 5 caracteres</strong>';
				}
			}
		?>

	<form action="procesarFormulario.php" method="POST">
		<label for="nombre">Nombre:</label><br/>
		<input type="text" name="nombre"><br/>

		<label for="apellidos">Apellidos:</label><br/>
		<input type="text" name="apellidos"><br/>

		<label for="edad">Edad:</label><br/>
		<input type="number" name="edad" ><br/>

		<label for="email">Email:</label><br/>
		<input type="email" name="email"><br/>

		<label for="pass">Contraseña:</label><br/>
		<input type="password" name="pass"><br/>

		<input type="submit" value="Enviar">
	</form>
</body>
</html>