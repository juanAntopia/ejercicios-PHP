<?php
/*conectar a la base de datos*/

$conexion = mysqli_connect("localhost", "root", "barcelona27", "phpmysql");

//comparar si la conexión a la base de datos ha fallado
if(mysqli_errno($conexion)){
	echo "La conexión a la base de datos MySQL ha fallado".mysqli_connect_error();
}else{
	echo "conexión realizada correctamente";
	echo "<br>";
}

//consulta para configurar la codificación de los caracteres
mysqli_query($conexion, "SET NAMES 'utf8'");

//Consulta
$query = mysqli_query($conexion, "SELECT * FROM notas");

while($nota = mysqli_fetch_assoc($query)){
	//var_dump($nota);
	echo "<h2>".$nota['titulo']."</h2>";
	echo $nota['descripcion']."<br>";
}

//Insertar datos
$sql = "INSERT INTO notas VALUES(null, 'Nota desde PHP', 'Nota insertada correctamente desde PHP', 'green')";
$insert = mysqli_query($conexion, $sql);

if($insert){
	echo "Datos insertados correctamente";
}else{
	echo "Error al insertar los datos".mysqli_error($conexion);
}
?>