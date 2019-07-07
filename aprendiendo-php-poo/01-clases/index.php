<?php
//Programación orientada a objetos

//definir clase(molde para crear más objetos de tipo coche con características
//parecidas)
class Coche{
  //Atributos o propiedades(variables)
    public $color = "rojo";
    public $modelo = "Aventador";
    public $marca = "Ferrari";
    public $velocidad = 300;
    public $caballaje = 500;
    public $plazas = 2;
    
    //Métodos, acciones que hace el objeto(funciones)
    public function getColor(){
        //Busca en esta clase la propiedad x
        return $this->color;
        
    }
    
    public function setColor($color){
        $this->color = $color;
    }
    
    public function setModelo($modelo){
        $this->modelo = $modelo;
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
}//fin definición de la clase

//crear objeto o instanciar la clase
$coche = new Coche();

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

var_dump($coche2);







?>