<?php
//arrays es un conjunto de datos, bajo un nombre único
//para acceder a esos valores podemos pasar un índice númerico o alfanúmerico

$peliculas = array('batman', 'superman', 'Robin');
$bandas = ['Our Waking Hour', 'AC/DC', 'Stereophonics'];

echo $peliculas[2];

//Recorrer array con FOR

echo "<h1>Listado de bandas</h1>";

echo "<ul>";
	for($i=0; $i<count($bandas); $i++){
		echo "<li>".$bandas[$i]."</li>";
	}
echo "</ul>";

echo "<br/>";
//Recorrer con foreach
echo "<h1>Listado de peliculas</h1>";

echo "<ul>";
foreach($peliculas as $pelicula){
	echo "<li>".$pelicula."</li>";
}
echo "</ul>";

echo "<br/>";
echo "<hr/>";

//Array asociativo
$personas = array(
	'nombre' => 'Juan',
	'apellidos' => 'Hernández',
	'sexo' => 'masculino'
);

var_dump($personas);

//Arrays multidimensionales

$contactos = array(
	array(
		'nombre' => 'juan',
		'email' => 'juan_27angel@hotmail.com'
	),

	array(
		'nombre' => 'jerry',
		'email' => 'jerry_27angel@hotmail.com'
	),

	array(
		'nombre' => 'junior',
		'email' => 'junior_27angel@hotmail.com'
	)
);

//echo $contactos[0]['email'];

foreach($contactos as $key => $contacto){
	var_dump($contacto['nombre']);
}

?>