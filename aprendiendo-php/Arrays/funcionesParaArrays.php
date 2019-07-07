<?php


//Ordenar
	$cantantes = array('Drake Bell', 'Kelly Jones', 'Brian Jhonson');

	//asort($cantantes);//orden alfabetico

	//arsort($cantantes);//orden inverso

	//$numeros= array(1,2,5,10,8,4);

	//sort($numeros);//orden alfabetic y nos sirve para arrasy númericos

	//var_dump($numeros);

//Añadir elementos al array
	//$cantantes[] = "Natos";
	//array_push($cantantes, 'Brian Adams');

//Eliminar elementos
	//array_pop($cantantes);
	//unset($cantantes[0]);

//Aleatorio
	//$indice=array_rand($cantantes);
	//echo $cantantes[$indice];

//Dar la vuelta
	//var_dump(array_reverse($cantantes));

//Buscar dentro de un array
	$resultado =array_search('Kelly Jones', $cantantes);	
	var_dump($resultado);

//Contar número de elementos
	echo sizeof($cantantes);	

?>