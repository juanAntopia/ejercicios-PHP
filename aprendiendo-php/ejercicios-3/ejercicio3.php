<?php
	//logica de la calculadora

	if(isset($_POST['numero1']) && isset($_POST['numero2'])){

		$resultado=false;

		if(isset($_POST['suma'])){
			$resultado = "El resultado es: ".($_POST['numero1'] + $_POST['numero2']);
		}

		if(isset($_POST['resta'])){
			$resultado = "El resultado es: ".($_POST['numero1'] - $_POST['numero2']);
		}

		if(isset($_POST['multiplicar'])){
			$resultado = "El resultado es: ".($_POST['numero1'] * $_POST['numero2']);
		}

		if(isset($_POST['dividir'])){
			$resultado = "El resultado es: ".($_POST['numero1'] / $_POST['numero2']);
		}
	}

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Calculadora</title>
</head>
<body>
	<form action="ejercicio3.php" method="post">
		<p>
			<label for="numero1">Número 1</label>
			<input type="number" name="numero1" id="">
		</p>

		<p>
			<label for="numero2">Número 2</label>
			<input type="number" name="numero2" id="">
		</p>

		<p>
			<input type="submit" value="Sumar" name="suma">
			<input type="submit" value="Restar" name="resta">
			<input type="submit" value="Multiplicar" name="multiplicar">
			<input type="submit" value="Dividir" name="dividir">
		</p>
	</form>

	<?php

		//imprimir resultado
		if($resultado != false):
			echo "<h2>$resultado</h2>";
		endif;

	?>

</body>
</html>