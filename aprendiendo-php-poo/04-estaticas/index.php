<?php

require_once 'configuracion.php';

Configuracion::setColor("amarillo");
Configuracion::setEntorno("localhost");
Configuracion::setNewsLetter(true);

echo Configuracion::$color."<br>";
echo Configuracion::$entorno."<br>";
echo Configuracion::$newsletter."<br>";

//otra manera de acceder a las propiedades estaticas
$configuracion = new Configuracion();
$configuracion::$color = "azul";
echo $configuracion::$color;
var_dump($configuracion);


