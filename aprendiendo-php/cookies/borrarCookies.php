<?php

if(isset($_COOKIE['micookie'])){
	unset($_COOKIE['miookie']);

	//para borra totalmente una cookie debemos caducarla
	setcookie('micookie', '', time()-100);
}

header('Location:verCookies.php');
?>

