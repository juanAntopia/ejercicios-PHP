<h1>Bienvenido a mi web con MVC</h1>

<?php

require_once 'autoload.php';


if(isset($_GET['controller'])){
    $nombre_controlador = $_GET['controller'].'Controller';
}else{
    echo 'La página que buscas no existe';
    exit();
}

if(class_exists($nombre_controlador)){
    
    $Controller = new $nombre_controlador;
    
    if(isset($_GET['action']) && method_exists($Controller, $_GET['action'])){
        $action = $_GET['action'];
        $Controller->$action();
    }else{
        echo 'La página que buscas no existe';
    }
    
}else{
    echo 'Las páginas que buscas no existen';
}



