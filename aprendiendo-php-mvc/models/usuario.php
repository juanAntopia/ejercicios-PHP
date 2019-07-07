<?php
require_once 'ModeloBase.php';


class Usuario extends ModeloBase{
    public $nombre;
    public $apellidos;
    public $password;
    
    public function __construct() {
        parent::__construct();
    }
    
    public function getNombre() {
        return $this->nombre;
    }

    public function getApellidos() {
        return $this->apellidos;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setApellidos($apellidos) {
        $this->apellidos = $apellidos;
    }

    public function setPassword($password) {
        $this->password = $password;
    }
}