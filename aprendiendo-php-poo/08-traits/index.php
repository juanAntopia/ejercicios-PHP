<?php

trait Utilidades {
    public function mostrarNombre(){
        echo "<h1>El nombre es:".$this->nombre."</h1>";
    }
    
    public function mostrarMarca(){
        echo "<a href='http://www.google.com' style='color:red;'>".$this->marca."</a>";
    }
}

class Coche{
    public $nombre;
    public $marca;
    
    use Utilidades;
}

class Persona{
    public $nombre;
    public $apellidos;
    
    use Utilidades;
}

class VideoJuego{
    public $nombre;
    public $anio;
    
    use Utilidades;
}

$coche = new Coche();
$coche->nombre=" Lamborghini";
$coche->marca=" Ferrato";

$persona = new Persona();
$persona->nombre = " Juan";

$videojuego = new VideoJuego();
$videojuego->nombre = " Sniper Elite III";


$coche->mostrarNombre();
$coche->mostrarMarca();

$persona->mostrarNombre();
$videojuego->mostrarNombre();

