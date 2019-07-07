<?php
/*una función es un conjunto de instrucciones agrupadas bajo un nombre concreto y que pueden 
reutilizarse solo invocando a la función tantas veces como queramos */

/*function muestraNombres(){
	echo "Juan Angel <br/>";
	echo "Jerry Hernández <br/>";
	echo "Junior Hernández <br/>";
	echo "<hr/>";
}

muestraNombres();
muestraNombres();
muestraNombres();
*/


//ejemplo 2

/*function tabla($numero){
	echo "<h3>Tabla de multiplicar del número: $numero</h3>";

	for($i=1; $i<=10; $i++){
		$operacion = $numero * $i;
		echo "$numero x $i = $operacion <br/>";
	}
}*/

/*if(isset($_GET['numeros'])){
	tabla ($_GET['numeros']);
	tabla (20);
	tabla (50);
}else{
	echo "No hay números para multiplicar";
}*/


/*for($tablas=1; $tablas<=10; $tablas++){
	tabla($tablas);
}*/


//ejemplo 3

function calculadora($numero1, $numero2, $negritas = false){
	$cadenaTexto="";
	$cadenaTexto.= "<h1>Calculadora</h1>";

	if($negritas){
		$cadenaTexto.= "<h1>";
	}

	$suma = $numero1 + $numero2;
	$resta = $numero1 - $numero2;
	$multiplicacion = $numero1 * $numero2;
	$division = $numero1 / $numero2;

	$cadenaTexto.= "La suma es: $suma <br/>";
	$cadenaTexto.= "La resta es: $resta <br/>";
	$cadenaTexto.= "La multiplicación es: $multiplicacion <br/>";
	if(isset($numero2) == 0)
	{
		$cadenaTexto.= "<h3>Error no se puede hacer una división entre 0</h3>";
	}else{
		$cadenaTexto.= "La división es: $division <br/>";
	}	

	$cadenaTexto.= "<hr/>";

	if($negritas){
		$cadenaTexto.= "</h1>";
	}

	return $cadenaTexto;
}



if(isset($_GET['numero1']) || isset($_GET['numero2']))
{
	echo calculadora($_GET['numero1'], $_GET['numero2']);
}else{
	echo "<h1>No existen números para realizar la operación</h1>";
}
?>