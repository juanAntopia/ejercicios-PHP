<?php


if(isset($_GET['numero1']) && isset($_GET['numero2']))
{
	$numero1 = $_GET['numero1'];
	$numero2= $_GET['numero2'];

	echo "<h3> La suma es :".($numero1 + $numero2)."</h3><br/>";
	echo "<h3> La resta es: ".($numero1 - $numero2)."</h3><br/>";
	echo "<h3> La multiplicación es: ".($numero1 * $numero2)."</h3><br/>";
	if($numero2 == 0){
		echo "<h1>Ingresa los valores correctamente por la URL</h1>";
	}
	else{
		echo "<h3> La división es: ".($numero1 / $numero2)."</h3><br/>";
	}
}else{
	echo "<h1>Ingresa los valores correctamente por la URL</h1>";
}


?>