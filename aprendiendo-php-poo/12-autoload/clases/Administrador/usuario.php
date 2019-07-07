<?php
namespace Administrador;

class Usuario{
    public $nombre;
    public $email;
    
    public function __construct(){
        $this->nombre = "Maria de la luz";
        $this->email = "mary@hotmail.com";
    }
}