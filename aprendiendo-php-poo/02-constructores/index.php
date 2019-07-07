<?php
require_once('coche.php');

$coche = new Coche("Negro", "Renault", "Clio", 285, 700, 4);
$coche->color = "rosa";

//método protected para acceder
$coche->setMarca("Seat");

echo $coche->mostrarInformacion("hola mundo");

//método private
//var_dump($coche->getModelo());







?>