'use strict'

//parametros REST Y SPREAD

function listadoFrutas(fruta1, fruta2, ...resto_de_frutas) {
    console.log("Fruta1: " + fruta1);
    console.log("Fruta2: " + fruta2);
    console.log(resto_de_frutas);
}

listadoFrutas("Naranja", "Pera", "Manzana", "Melón", "Piña", "Sandía");
console.log("***************************************************************");

var frutas = ["Naranja", "Pera"];

listadoFrutas(...frutas, "Manzana", "Melón", "Piña", "Sandía");