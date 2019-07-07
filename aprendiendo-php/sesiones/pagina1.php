<?php 

session_start();

//no se puede esta variable ya que no es de sesión
echo $variable_normal;

echo $_SESSION['hola'];



?>