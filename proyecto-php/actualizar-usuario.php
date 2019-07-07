<?php

if(isset($_POST)){
    //conexión a la base de datos
    require_once('includes/conexion.php');
    
    //recoger valores del formulario de actualización
    $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($conexion, $_POST['nombre']) : false;
    $apellidos = isset($_POST['apellidos']) ? mysqli_real_escape_string($conexion, $_POST['apellidos']) : false;
    $email = isset($_POST['email']) ? mysqli_real_escape_string($conexion, trim($_POST['email'])) : false;
    
    //errores
    $errores = array();
    
    //validación
    if(!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)){
        $nombre_validado = true;
    }else{
        $nombre_validado = false;
        $errores['nombre'] = "El nombre no es válido";
    }
    
    if(!empty($apellidos) && !is_numeric($apellidos) && !preg_match("/[0-9]/", $apellidos)){
        $apellidos_validados = true;
    }else{
        $apellidos_validados = false;
        $errores['apellidos'] = "Apellidos no válidos";
    }
    
    if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
        $email_validado = true;
    }else{
        $email_validado = false;
        $errores['email'] = "E-mail no válido";
    }
    
    $actualizar_usuario = false;
    
    if(count($errores) == 0){
        $usuario = $_SESSION['usuario'];
        $actualizar_usuario = true;
        
        //Comprobar si el email ya existe
        $sql = "SELECT id, email FROM usuarios WHERE email = '$email'";
        $isset_email = mysqli_query($sql, $conexion);
        $isset_user = mysqli_fetch_assoc($isset_email);
        
        if($isset_user['id'] == $usuario['id'] || empty($isset_user)){
            //Actualizar el usuario
            $sql = "UPDATE usuarios SET ".
                    "nombre = '$nombre', ".
                    "apellidos = '$apellidos', ".
                    "email = '$email' ".
                    "WHERE id = ".$usuario['id'];

            $guardar_cambios = mysqli_query($conexion, $sql);

            if($guardar_cambios){
                $_SESSION['usuario']['nombre'] = $nombre;
                $_SESSION['usuario']['apellidos'] = $apellidos;
                $_SESSION['usuario']['email'] = $email;


                $_SESSION['completado'] = "Tus datos se han actualizado correctamente";
            }else{
                $_SESSION['errores']['general'] = "Fallo al actualizar tus datos!!";
            }
        }else{
            $_SESSION['errores']['general'] = "El usuario ya existe!!";
        }
        
    }else{
        $_SESSION['errores'] = $errores;
    }
    
    header("Location: mis-datos.php");
    
}


?>