<?php

$tabla = array(
	'ACCION' => array('GTA', 'COD', 'PUGB'),

	'AVENTURA' => array('ASSASINS', 'CRASH', 'PRINCE OF PERSIA'),

	'DEPORTES' => array('FIFA 19', 'PES 19', 'MOTO GP 19')
);

$categorias=array_keys($tabla);
?>


<table border="1">
	<?php require_once('includes/cabecera.php') ?>
	
	<?php require_once('includes/primera.php') ?>
	
	<?php require_once('includes/segunda.php') ?>
	
	<?php require_once('includes/tercera.php') ?>

</table>