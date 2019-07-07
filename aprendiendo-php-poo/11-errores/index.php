<?php
//sirve para capturar excepciones
try{
    
    if(isset($_GET['id'])){
       echo "el parámetro es: {$_GET['id']}"; 
    }  else {
        throw new Exception('El parametro no existe');
    }
    
} catch (Exception $ex) {
    echo "Ha ocurrido un error: ".$ex->getMessage();
}

