<?php
	//Iniciar la sesion y la conexión a la db
	require_once 'includes/conexion.php';

	//Recoger datos del formulario
	if(isset($_POST)){
		//Borrar error antiguo
		if(isset($_SESSION['error_login'])){
			session_unset($_SESSION['error_login']);
		}

		$email = trim($_POST['email']);
		$password = $_POST['password'];


		//consulta para comprobar las credenciales
		//del usuario
		$sql = "SELECT * FROM usuarios WHERE email = '$email'";
		$login = mysqli_query($conexion, $sql);

		if($login && mysqli_num_rows($login) == 1){
			$usuario = mysqli_fetch_assoc($login);
			
			//cifrar contraseña
			$verify=password_verify($password, $usuario['pass']);
			if($verify){
				//Utilizar una sesión para guardar los datos del usuario logueado
				$_SESSION['usuario'] = $usuario;
			}else{
				//si algo falla enviar una sesión con el fallo
				$_SESSION['error_login'] = "login incorrecto";
			}

		}else{
			$_SESSION['error_login'] = "login incorrecto";
		}
	}

	//Redirigir al index.php
	header('Location: index.php');
?>