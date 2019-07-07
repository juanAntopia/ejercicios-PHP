<?php
//verificar si existe el botón
if(isset($_POST['submit'])){

	require_once 'includes/conexion.php';
	if(!isset($_SESSION)){
		session_start();
	}
	
	//Campos del formulario
	$nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($conexion, $_POST['nombre']) : false;
	$apellidos = isset($_POST['apellidos']) ? mysqli_real_escape_string($conexion, $_POST['apellidos']) : false;
	$email = isset($_POST['email']) ? mysqli_real_escape_string($conexion, trim($_POST['email'])) : false;
	$password = isset($_POST['password']) ? mysqli_real_escape_string($conexion, $_POST['password']) : false;

	$errores = array();

	//validar campo nombre
	if(!empty($nombre) && !is_numeric($nombre) && !preg_match( "/[0-9]/", $nombre)){
		$nombre_validado = true;
	}else{
		$nombre_validado = false;
		$errores['nombre'] = "El nombre no es válido";
	}

	//validar campo apellidos
	if(!empty($apellidos) && !is_numeric($apellidos) && !preg_match("/[0-9]/", $apellidos)){
		$apellidos_validados = true;
	}else{
		$apellidos_validados = false;
		$errores['apellidos'] = "Los apellidos no son válidos";
	}

	//validar campo email
	if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
		$email_validado = true;
	}else{
		$email_validado = false;
		$errores['email'] = "El email no es válido";
	}

	//validar campo password
	if(!empty($password)){
		$password_validado = true;
	}else{
		$password_validado = false;
		$errores['password'] = "El campo password está vacío";
	}

	$guardar_usuario = false;

	if(count($errores) == 0){
		$guardar_usuario = true;

		//cifrar la contraseña
		$password_segura = password_hash($password, PASSWORD_BCRYPT, ['cost'>=4]);

		//Insertar usuario en la base de datos
		$sql = "INSERT INTO usuarios VALUES(null, '$nombre', '$apellidos', '$email', '$password_segura', CURDATE())";
		$save = mysqli_query($conexion, $sql);

		//var_dump(mysqli_error($conexion));
		//die();

		if($save){
			$_SESSION['completado'] = "El usuario se ha guardado correctamente";
		}else{
			$_SESSION['errores']['general'] = "Falló al guardar el usuario!!"; 
		}

	}else{
		$_SESSION['errores'] = $errores;
		header("Location:index.php");
	}
}

header("Location:index.php");

?>