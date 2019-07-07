<?php


require_once 'autoload.php';

/*
$usuario = new Usuario();
echo $usuario->nombre;
echo "<br>";
echo $usuario->email;
echo "<br>";


$categoria = new Categoria();
echo $categoria->nombre;
 * 
*/

//Espacios de nombres y paquetes
use MisClases\Usuario, MisClases\Categoria, MisClases\Entrada;
//otro paquete
use Administrador\Usuario as UsuarioAdmin;



class Principal{
    public $usuario;
    public $categoria;
    public $entrada;
    
    public function __construct(){
        $this->usuario = new Usuario();
        $this->categoria = new Categoria();
        $this->entrada = new Entrada();
    }
    
    function getUsuario() {
        return $this->usuario;
    }

    function getCategoria() {
        return $this->categoria;
    }

    function getEntrada() {
        return $this->entrada;
    }

    function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    function setCategoria($categoria) {
        $this->categoria = $categoria;
    }

    function setEntrada($entrada) {
        $this->entrada = $entrada;
    }
}

//objeto principal
$principal = new Principal();
//var_dump($principal->usuario);
//comprobar si existen los métodos
$metodos = get_class_methods($principal);
$busqueda = array_search('setEntrada', $metodos);
var_dump($busqueda);

/*objeto otro paquete
$usuario = new UsuarioAdmin();
var_dump($usuario);*/

//comprobar si existe una clase
$clase = @class_exists('Administrador\Usuario');
if($clase){
    echo '<h1>La clase si existe</h1>';
}else{
     echo '<h1>La clase no existe</h1>';
}
