<?php

require_once '../vendor/autoload.php';

//conexión a bd
$conexion = new mysqli("localhost", "root", "", "notas_master");
$conexion->query("SET NAMES 'utf8'");

//consulta a paginar
$consulta = $conexion->query("SELECT COUNT(id) AS 'total' FROM notas");
$num_elementos = $consulta->fetch_object()->total;
$num_elementos_pags = 2;

//hacer paginación
$pagination = new Zebra_Pagination();

//Número total de elementos a paginar
$pagination->records($num_elementos);

//Número de elementos por paginar
$pagination->records_per_page($num_elementos_pags);

$page = $pagination->get_page();

$empieza_aqui = (($page -1) * $num_elementos_pags);
$sql = "SELECT * FROM notas LIMIT $empieza_aqui , $num_elementos_pags";
$notas = $conexion->query($sql);

echo '<link rel="stylesheet" href="../vendor/stefangabos/zebra_pagination/public/css/zebra_pagination.css" />';
while($nota = $notas->fetch_object()){
    echo "<h1>{$nota->titulo}</h1>";
    echo "<h1>{$nota->descripcion}</h1><hr>";
}

$pagination->render();


/*

 * c:\xampp\htdocs\cursoUdemy-PHP\aprendiendo-librerias-php>
 * 
 *  */
        
 