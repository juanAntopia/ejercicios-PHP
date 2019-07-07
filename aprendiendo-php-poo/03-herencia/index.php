<?php

require_once 'clases.php';

$persona = new Persona();

$informatico = new Informatico();
$informatico->setNombre("Jerry");

var_dump($persona);
var_dump($informatico);

$tecnico = new TecnicoRedes();
var_dump($tecnico);