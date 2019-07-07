<?php

/**
 * para mostrar el valor de las cookies, tengo que usar $_COOKIE, una variable superglobal,
 * es un array asociativo.
 */

 if(isset($_COOKIE['micookie'])){
	 echo "<h5>".$_COOKIE['micookie']."</h5>";
 }else{
	 echo "la cookie no existe";
 }


 if(isset($_COOKIE['unyear'])){
	 echo "<h5>".$_COOKIE['unyear']."</h5>";
 }else{
	 echo "la cookie no existe";
 }
?>
<a href="crearcookies.php">crear las galletas</a>
<a href="borrarCookies.php">borrar las galletas</a>