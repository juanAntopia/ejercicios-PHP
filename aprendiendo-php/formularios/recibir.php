<?php

if(isset($_GET['nombre']) && isset($_GET['descripcion'])){
	echo "<h1>".$_GET['nombre']."</h1>";
	echo "<h1>".$_GET['descripcion']."</h1>";
}

?>