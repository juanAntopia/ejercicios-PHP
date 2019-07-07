<?php
/*

//abrir fichero
$abrir_archivo = fopen("fichero.txt", "a+");

//ver contenido
while(!feof($abrir_archivo)){
	$contenido = fgets($abrir_archivo);
	echo $contenido."<br/>";
}

//escribir en archivo
fwrite($abrir_archivo, "Vengo desde php prros***");

//cerrar fichero
fclose($abrir_archivo);

*/

//copiar fichero
//copy("fichero.txt", "fichero_copiado.txt") or die("Error al copiar");


//renombrar archivo
//rename("fichero.txt", "ficherito_renombrado.txt") or die ("Error al renombrar el fichero");

//eliminar
//unlink('ficherito_renombrado.txt') or die("No se pudo eliminar");

//comprobar si existe
if(file_exists("ficherito_renombrado.txt")){
	echo "el archivo si existe!!";
}else{
	echo "No existe!!";
}
?>