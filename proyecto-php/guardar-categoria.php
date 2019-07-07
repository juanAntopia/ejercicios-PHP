<?php

    if(isset($_POST)){
        //conexión a la base de datos
        require_once 'includes/conexion.php';
        
        $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($conexion, $_POST['nombre']) : false;
        
        $errores = array();

        //validar campo nombre
        if(!empty($nombre) && !is_numeric($nombre) && !preg_match( "/[0-9]/", $nombre)){
            $nombre_validado = true;
        }else{
            $nombre_validado = false;
            $errores['nombre'] = "El nombre no es válido";
        }
        
        if(count($errores) == 0){
            $sql = "INSERT INTO categorias VALUES(NULL, '$nombre')";
            $guardar = mysqli_query($conexion, $sql); 
        }
    }

header("Location: index.php");
?>