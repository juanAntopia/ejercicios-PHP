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
		$numero1 = 121215;
		$numero2 = 455151151;

		echo 'la suma es: '.($numero1 +$numero2).'<br />';
		echo 'la resta es:'.($numero2 - $numero1);

		//operadores de incremento y decremento

		$year=2018;

		$year++; //$year--

		echo '<h1>'.$year.'</h1>';

		//asignación de valores a variables
		$edad = 18;
		echo $edad.'<br />';

		echo ($edad+=1);
	?>
</body>
</html>