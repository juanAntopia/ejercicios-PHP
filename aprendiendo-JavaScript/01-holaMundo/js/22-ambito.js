'use strict'

//el ámbito de las variables - locales y globales-ejemplo
//también a una variable lo que se puede hacer es convertirlo a string
//ejemplo la edad tiene el método toString(), ya que la variable
//tiene varios métodos

function mostrar(texto) {

    var hola_mundo = "variable local dentro de función";

    console.log(texto);
    console.log(typeof edad.toString());
    console.log(hola_mundo);
}

var edad = 12;
var texto = "variable fuera de función";
mostrar(texto);

//aquí saldría error
//console.log(hola_mundo);
