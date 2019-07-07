<?php
$hola = "";

if(empty($hola)){
	$hola = "Soy el texto que falta en la variable";
	$textoMAY=strtoupper($hola);

	echo "<b>$textoMAY</b>";
}else{
	echo "la variable tiene contenido";
}


?>