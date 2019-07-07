<?php
$saludos=array('hola', 'perro');
$autor="Juan Angel Hernández Antopia";
$verdadero=true;
$dinero = 58;

if(is_array($saludos)){
	echo "<h1>Este es un array</h1>";
}else{
	echo "<h1>Este no es un array</h1>";
}

if(is_string($autor)){
	echo "<h1>Esta variable es de tipo string</h1>";
}else{
	echo "<h1>Esta no es una variable de tipo string</h1>";
}

if(is_bool($verdadero)){
	echo "<h1>Esta variable es de tipo booleana</h1>";
}else{
	echo "<h1>Esta no es una variable de tipo booleana</h1>";
}

if(is_int($dinero)){
	echo "<h1>Esta variable es de tipo entero</h1>";
}else{
	echo "<h1>Esta no es una variable de tipo entero</h1>";
}
?>