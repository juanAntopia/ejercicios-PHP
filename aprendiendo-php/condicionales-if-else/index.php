<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
	<?php

	//ejemplo 1
		$variable = "azul";

		if($variable == "rojo")
		{
			echo "<h1>El color es rojo</h1>";
		}else{
			echo "<h1>EL color no es rojo</h1>";
		}

	//ejemplo2	
		echo "<br/>";

		$year = 2019;

		if($year != 2019)
		{
			echo "<h1>es diferente de 2019</h1>";
		}else{
			echo "<h1>estamos en 2019</h1>";
		}
	
		
	//ejemplo 3	
		echo "<br/>";

		$nombre="Juan Hernández";
		$ciudad = "Monterrey";
		$estado="Aguascalientes";
		$edad = 18;
		$mayoriaDeEdad = 18;

		if($edad >= $mayoriaDeEdad)
		{
			echo "<h1>$nombre es mayor de edad</h1>";

			if($ciudad == "Monterrey"){
				echo "<h1>Y es de $ciudad</h1>";
			}else{
				echo "<h1> Es de otra ciudad</h1>";
			}
		}else{
			echo "<h1>$nombre es menor de edad</h1>";
		}

		/*
		
		operadores
		== igual
		=== idéntico
		!= diferente
		<> diferente
		!== no idéntico
		< menor que
		> mayor que
		<= menor o igual que
		>= mayor o igual que
		
		
		*/

		//ejemplo 4 elseif

		$dia=7;

		if($dia == 1){
			echo "ES LUNES";
		}elseif($dia==2){
			echo "ES MARTES";
		}elseif($dia==3){
			echo "ES MIÉRCOLES";
		}elseif($dia ==4){
			echo "ES JUEVES";
		}elseif($dia == 5){
			echo "ES VIERNES";
		}else{
			echo "es finde semana";
		}


		//ejemplo 5

		echo "<br/>";

		$edad1 =18;
		$edad2 = 64;
		$edad_oficial = 17;

		if($edad_oficial >= $edad1 && $edad_oficial <=$edad2){
			echo "Ya tienes buena edad perro para trabajar";
		}else{
			echo "NO PUEDES TRABAJAR AÚN";
		}


		//Switch

		echo "<hr/>";

		$dia= 5;

		switch($dia){
			case 1:
				echo "Lunesito";
				break;

			case 2:
				echo "Martets";
				break;

			case 3:
				echo "Miercolets";
				break;
			
			case 4:
				echo "Juevebes";
				break;
				
			case 5:
				echo "Viernets";
				break;
				
				default:
				echo "es finde semana";
				break;
		}



		echo "<br/>";

		//GOTO

		goto hola;

		echo "Hola perro 1";
		echo "Hola perro 2";
		echo "Hola perro 3";
		echo "Hola perro 4";

		hola:
			echo "me he saltado 4 echos";

	?>
</body>
</html>