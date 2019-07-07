<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
	<?php

		//BUCLE WHILE
		//estructura que itera o repite una serie de instrucciones tantas veces como sea necesaario en base a una condición


		$numero =0;

		while($numero <= 100){
			echo $numero;

			if($numero != 100){
				echo ", ";
			}
			$numero++;
		}

		//ejemplo 
		//isset = comprueba si existe una variable 

		echo "<hr/>";

		if(isset($_GET['numero']))
		{	
			//cambiar tipo de dato
			$numero = (int) $_GET['numero'];
		}else{
			$numero = 2;
		}

		//tabla de multiplicar

		echo "<p>Tabla de multiplicar del número $numero</p>";

		$contador = 1;
		while($contador<=10){
			echo "$numero x $contador =".($numero * $contador)."<br/>";
			$contador++;
		}

		echo "<hr/>";


		/*BUCLE DO WHILE */
		$edad = 18;
		$contador = 1;

		do{
			echo "Tienes acceso a local privado $contador <br/>";
			$contador++;
		}while($edad>=18 && $contador<=10);

	?>
</body>
</html>