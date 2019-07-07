<?php

if(!is_dir('nueva-carpeta')){
	mkdir('nueva-carpeta', 0777) or die('no se pudo crear la carpeta');
}else{
	echo "La carpeta ya ha sido creada";
}

//eliminar carpeta
rmdir('nueva-carpeta');

?>