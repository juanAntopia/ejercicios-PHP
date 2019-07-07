<?php

/**
 * Cookie: Es un fichero que se almacena en el ordenador del usuario que visita 
 * la web con el fin de recordar datos o rastrear el comportamiento del mismo en la web
 */

 //estructura de cookie:  setcookie($nombre, 'valor que solo puede ser texto', caducidad, ruta, dominio);

 //cookie básica

 setcookie('micookie', 'valor de mi galleta');

 //cookie con caducidad

 setcookie('unyear', 'cookie de 365 dias', time()+(60 * 60 * 24 * 365));

 header('Location:verCookies.php');
?>
