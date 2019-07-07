<?php

$error='faltan_valores';

if(!empty($_POST['nombre']) || 
	!empty($_POST['apellidos']) ||
	!empty($_POST['edad']) ||
	!empty($_POST['email']) ||
	!empty($_POST['pass']))
	{
		$error='ok';
		$nombre = $_POST['nombre'];
		$apellidos= $_POST['apellidos'];
		$edad=(int)$_POST['edad'];
		$email=$_POST['email'];
		$pass=$_POST['pass'];

		//validar el nombre || !preg_match("/[0-9]+/", $nombre)
		if(!is_string($nombre))
		{
			$error='nombre';
		}

		//validar los apellidos  || !preg_match("/[0-9]+/", $apellidos)
		if(!is_string($apellidos))
		{
			$error='apellidos';
		}

		//validar la edad
		if(!is_int($edad) || !filter_var($edad, FILTER_VALIDATE_INT))
		{
			$error='edad';
		}

		//validar el email
		if(!is_string($email) || !filter_var($email, FILTER_VALIDATE_EMAIL))
		{
			$error='email';
		}

		//validar la contraseña
		if(empty($pass) || strlen($pass)<5)
		{
			$error='password';
		}
	}else{
		$error='faltan_valores';

		header("Location:index.php?error=$error");
	}

	if($error != 'ok'){
		header("Location:index.php?error=$error");
	}

	var_dump($error);

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
	<?php if($error=='ok'):	?>
		<h1>Datos validados correctamente</h1>
		<p><?=$nombre?></p>
		<p><?=$apellidos?></p>
		<p><?=$edad?></p>
		<p><?=$email?></p>
		<p><?=$pass?></p>
	<?php endif; ?>
</body>
</html>