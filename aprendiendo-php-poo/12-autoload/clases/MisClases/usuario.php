<?php
namespace MisClases;

class Usuario{
    public $nombre;
    public $email;
    
    public function __construct(){
        $this->nombre = "Juan Angel";
        $this->email = "juan@hotmail.com";
    }
}