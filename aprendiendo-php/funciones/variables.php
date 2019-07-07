<?php

	$frase = "Hola perro";
	echo $frase;

	function holaMundo(){
		global $frase;
		echo "<h1>$frase</h1>";


		$year =2019;
		echo $year."<br/>";

		return $year;
	}

	echo holaMundo();



	//funciones variables

	function buenosDias(){
		return "Hola muy buenos días";
	}

	function buenasTardes(){
		return "Hola muy buenas tardes";
	}

	function buenasNoches(){
		return "Hola buenas noches, descansa";
	}

	/*$horario = "buenasNoches";
	echo $horario(); Una forma*/

	//ejemplo 2
	$horario ="Dias";

	$miFuncion = "buenos".$horario;
	echo $miFuncion();

	/*funciones internas de php */
	echo "<br/>";
	echo gettype($horario);
	echo "<br/>";
	echo "<br/>";
	/*función trim():sirve para limpiar variables o su contenido */
	$prueba=" ";
	if(empty(trim($prueba))){
		echo "la variable está vacía";
	}else{
		echo "La variable tiene contenido";
	}
	echo "<br/>";


	//función unset() nos sirve para eliminar variables del código


	//contar caracteres de un string strlen()
	$prueba2="Hola perro";
	echo strlen($prueba2);
	echo "<br/>";
	//encontrar caracter strpos()
	$frase = "demonios señorita";
	echo strpos($frase, "demonios");

	echo "<br/>";

	//Reemplazar palabras en un string
	$frase = str_replace("señorita", "señorota perra", $frase);
	echo $frase;


?>