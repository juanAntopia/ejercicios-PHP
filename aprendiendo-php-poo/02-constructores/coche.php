<?php
//Programación orientada a objetos

//definir clase(molde para crear más objetos de tipo coche con características
//parecidas)
class Coche{
  //Atributos o propiedades(variables)
    
    //public: podemos acceder de cualquier lugar, dentro de la clase actual 
    //dentro de las clases que hereden esta clase o fuera de la clase
    public $color;
    
    /*
        Protected: podemos acceder desde la clase que los define y desde clases
        que hereden esta clase
    */
    protected $marca;
    
    /*
        private: unicamente se puede acceder desde esta clase
    */
    private $modelo;
    public $velocidad;
    public $caballaje;
    public $plazas;
    
    public function __construct($color, $marca, $modelo, $velocidad, $caballaje, $plazas){
        $this->color = $color;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->velocidad = $velocidad;
        $this->caballaje = $caballaje;
        $this->plazas = $plazas;
    }
    
    //Métodos, acciones que hace el objeto(funciones)
    public function getColor(){
        //Busca en esta clase la propiedad x
        return $this->color;
    }
    
    public function setColor($color){
        $this->color = $color;
    }
    
    public function getModelo(){
        return $this->modelo;
    }
    
    public function setModelo($modelo){
        $this->modelo = $modelo;
    }
    
    public function setMarca($marca){
        $this->marca = $marca;
    }
    
    public function acelerar(){
        $this->velocidad++;
    }
    
    public function frenar(){
        $this->velocidad--;
    }
    
    public function getVelocidad(){
        return $this->velocidad;
    }
    
    public function mostrarInformacion(Coche $miobjeto){
        
        if(is_object($miobjeto)){
            $informacion = "<h1>Información del coche</h1>";
            $informacion.= "Color: ".$miobjeto->color;
            $informacion.= "</br>Modelo: ".$miobjeto->modelo;
            $informacion.= "</br>Velocidad: ".$miobjeto->velocidad;
        }else{
            $informacion = "Tu dato es este: $miobjeto";
        }
        
        return $informacion;
    }
}//fin definición de la clase

//crear objeto o instanciar la clase
/*$coche = new Coche();

//usar un método
//echo $coche->getVelocidad();

$coche->setColor('Azul');
echo "El color del coche es: ".$coche->getColor()."<br>";

$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
$coche->frenar();

echo "La velocidad del coche es: ".$coche->getVelocidad();

$coche2 = new Coche();
$coche2->setColor('Verde');
$coche2->setModelo('Gallardo');


var_dump($coche);

var_dump($coche2);*/







?>