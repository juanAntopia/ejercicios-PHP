<?php

/*$resultado = 0;

for($i=0; $i<=100; $i++)
{
	$resultado += $i;
	echo "<p>$resultado</p>";
}

echo "<h1>El resultado es: $resultado</h1>";
*/


if(isset($_GET['numero'])){
	$numero = (int) $_GET['numero'];
}else{
	$numero = 1;
}

echo "<h1>Tabla de multiplicar del $numero</h1>";

for($i = 1; $i<=10; $i++)
{
	if($numero >= 12)
	{
		echo "No se pueden realizar multiplicaciones arriba de 12";
		break;
	}
	echo "$numero * $i = ".($numero * $i)."<br/>";
}


?>