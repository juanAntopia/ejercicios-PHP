<?php

function getNombre($nombre){
	$text="El nombre es: $nombre <br/>";
	return $text;
}

function getApellidos($apellidos){
	$text="los apellidos son: $apellidos <br/>";
	return $text;
}

function persona($nombre, $apellidos){
	$text = getNombre($nombre)
	."<br/>"
	.getApellidos($apellidos);
	return $text;
}

echo persona("juan angel", "hernandez antopia");

?>