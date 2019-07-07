<?php
//conexión a la base de datos

$servidor = "localhost";
$usuario = "root";
$pass = "";
$db = "blog_master";

$conexion = mysqli_connect($servidor, $usuario, $pass, $db);

//consulta
mysqli_query($conexion, "SET NAMES 'utf-8'");

//iniciar la sesión
if(!isset($_SESSION)){
    session_start();
}

?>