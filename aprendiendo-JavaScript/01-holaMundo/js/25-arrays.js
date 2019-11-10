'use strict'

//arrays, matrices

var nombre = "pedro";
//var nombres = ["Pedro", "Juan", "Miguel"];

var juegos = new Array("Call of duty", "GTA SanAndreas", "GTA 5", "Devil May Cry 3");

/*console.log(nombres);
console.log(juegos);*/
/*
var elemento = parseInt(prompt('Que elemento quieres sacar??', 0));
if (elemento >= juegos.length) {
    alert('Introduce bien el número menos de: ' + juegos.length);
} else {
    alert('el videojuego seleccionado es: ' + juegos[elemento]);
}*/

/*var select = parseInt(prompt('Que raza de perro quieres visualizar??', 0));
var perros = new Array("Bulldog", "Bullterry", "chihuahueños", "Huskey");


    document.write('Lista de videojuegos');

    document.write('<ul>');
    for (var i = select; i < perros.length; i++) {
        document.write("<li>" + perros[i] + "</li>");
    }
    document.write('</ul>');*/

/*var perros = new Array("Bulldog", "Bullterry", "chihuahueños", "Huskey");
document.write('<ul>');
perros.forEach((elemento, indice) => {
    document.write("<li>" + indice + " - " + elemento + "</li>");
});
document.write('</ul>');*/


var amigos = new Array("Jerry", "Jack", "Tomás", "Tony");

document.write('<ul>');
amigos.forEach((elemento) => {
    document.write("<li>"+elemento+"</li>"); 
});
document.write('</ul>');