<?php


class Usuario{
    public $nombre;
    public $email;
    
    public function __construct(){
        $this->nombre = "Juan Angel";
        $this->email = "Juan@hotmail.com";
        
        echo "creando el objeto </br>";
    }
    
    public function __toString(){
        return "Hola, {$this->nombre} Estas registrado con {$this->email}";
    }

    public function __destruct(){
        echo '</br> destruyendo el objeto';
    }
}

$usuario = new Usuario();
echo $usuario;

