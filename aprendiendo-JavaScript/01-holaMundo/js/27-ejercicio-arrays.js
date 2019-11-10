'use strict'

/**
 * 1. Pida 6 números por pantalla y los meta en un array
 * 2. Mostrar el array entero (todos sus elementos) en el cuerpo de la página
 * 3. Ordenarlo y mostrarlo
 * 4. Invertir su orden y mostrarlo
 * 5. Mostrar cuantos elementos tiene el array
 * 6. Búsqueda de un valor introducido por el usuario, que nos diga
 * y su indíce
 * (se valorará el uso de sus funciones)
 *
/*

/*------1. Pida 6 números por pantalla y los meta en un array----*/
//

//hacer un array
//var numeros = new Array(6);
var numeros = [];


//meterle números al array
for (var i = 0; i <= 5; i++) {
    //numeros[i] = parseInt(prompt('Mete un número', 0));
    numeros.push(parseInt(prompt('Mete un número', 0)));
}
/*-------------------------------------------------------------*/

/*----2. Mostrar el array entero (todos sus elementos) en el cuerpo de la página--*/
//mostrar en el cuerpo de la página
function mostrarArray(elementos, textoCustom = "") {
    document.write("<h1> Contenido del array " + textoCustom + "</h1>");
    document.write("<ul>");
    //o de esta
    elementos.forEach((elemento, index) => {
        document.write("<li>" + elemento + "</li>");
    });
    document.write("</ul>");
}

/* imprimirlo de esta forma
for (var j = 0; j < numeros.length; j++){
    document.write("<li>"+ numeros[j] +"</li>");
}*/

/*for (let numero in numeros) {
    document.write("<li>" + numeros[numero] + "</li>");
}*/

mostrarArray(numeros);
console.log(numeros);
/*-------------------------------------------------------------*/

/*-----------------------3. Ordenarlo y mostrarlo---------------*/
numeros.sort(function (a, b) { return a - b });
mostrarArray(numeros, "Ordenado");
/*-------------------------------------------------------------*/


/*-------------------4. Invertir su orden y mostrarlo------------*/
numeros.reverse();
mostrarArray(numeros, "Invertido");
/*-------------------------------------------------------------*/

/*-----------5. Mostrar cuantos elementos tiene el array---------*/
document.write("<h1>La longitud del array es: " + numeros.length + "</h1>");
/*-------------------------------------------------------------*/


/*---6. Búsqueda de un valor introducido por el usuario, que nos diga y su indíce---*/
var busqueda = parseInt(prompt('Busca un número', 0));
var posicion = numeros.findIndex(numero => numero == busqueda);

if (posicion && posicion != -1) {
    document.write("<h1>ENCONTRADO</h1>");
    document.write("<h1>El número está en la posición: " + posicion + "</h1>");
} else {
    document.write("<h1>NO ENCONTRADO</h1>");
}
/*----------------------------------------------------------------------------------*/