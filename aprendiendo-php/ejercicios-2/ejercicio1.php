<?php
//crear funcion
function recorrerArray($numerosEnteros){
	$resultado = "";
	//recorrer y mostrar
	foreach($numerosEnteros as $value){
		$resultado.= $value.'<br/>';
	}

	return $resultado;
}

//crear array
$numerosEnteros = array(10,20,4,2,3,5,8,4);

//recorrer y mostrar
echo recorrerArray($numerosEnteros);
echo "<hr/>";

//ordenar y mostrar
echo "<h1>Ordenarlo y mostrarlo</h1>";
sort($numerosEnteros);
echo recorrerArray($numerosEnteros);
echo "<hr/>";

//Mostrar su longitud
echo "<h1>Mostrar su longitud</h1>";
echo sizeof($numerosEnteros);
echo "<hr/>";

//Búsqueda en el array
if(isset($_GET['numero'])){
	$busqueda = $_GET['numero'];
	echo "búsqueda del número: $busqueda";

	$search = array_search($busqueda, $numerosEnteros);
	if(!empty($search)){
		echo "<h4>El numero si existe y está en la posición: $search</h4>";
	}else{
		echo "<h4>El numero no existe en el array</h4>";
	}
}else{
	echo "<h1>no se puede realizar la búsqueda</h1>";
}
?>