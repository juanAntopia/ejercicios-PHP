<?php
/*
    Herencia: la posibilidad de compartir atributos y métodos entre clases 
*/

class Persona{
    public $nombre;
    public $apellidos;
    public $altura;
    public $edad;
            
    public function getNombre() {
        return $this->nombre;
    }

    public function getApellidos() {
        return $this->apellidos;
    }

    public function getAltura() {
        return $this->altura;
    }

    public function getEdad() {
        return $this->edad;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setApellidos($apellidos) {
        $this->apellidos = $apellidos;
    }

    public function setAltura($altura) {
        $this->altura = $altura;
    }

    public function setEdad($edad) {
        $this->edad = $edad;
    }
    
    public function hablar(){
        return "estoy hablando";
    }
    
    public function caminar() {
        return "estoy caminando";
    }
    
}

class Informatico extends Persona {
    
    public $lenguajes;
    public $experienciaProgramador;
    
    public function sabeLenguajes($lenguajes) {
        $this->lenguajes = $lenguajes;
        
        return $this->lenguajes;
    }
    
    public function __construct(){
        $this->lenguajes = "HTML, CSS Y JS";
        $this->experienciaProgramador = 10;
    }

    public function programar() {
        return "se programar";
    }
    
    public function repararOrdenador() {
        return "Reparar ordenador";
    }
    
    public function hacerOfimatica() {
        return "Estoy escribiendo en word";
    }

}

class TecnicoRedes extends Informatico{
    public $testearRedes;
    public $experienciaRedes;
    
    public function __construct(){
        parent::__construct();
        
        $this->testearRedes = "experto";
        $this->experienciaRedes = 2;
    }

    public function auditoria(){
        return "estoy auditando una red";
    }    
}
