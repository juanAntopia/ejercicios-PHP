'use strict'

//Transformación de textos
var numero = 2221;
var texto1 = "  Hola que que que tal chavales  ";
var texto2 = "Madre mía willly";
/*
var dato = numero.toString();
    dato = texto1.toUpperCase();//a mayúsculas
    dato = texto1.toLowerCase();//a minúsculas

console.log( dato);

//Calcular longitud
var nombre = "Juan Angel";

console.log(nombre.length);

//concatenar - unir textos
//var textoTotal = texto1 + " " + texto2;
var textoTotal = texto1.concat(" " + texto2);
console.log(textoTotal);*/

//funciones para encontrar palabras puede ser indexOf o serach
//te dicen en que posición se encuentra la palabra
var busqueda = texto1.indexOf("chavales");
    busqueda = texto2.search("mía");

//otro método es match
//para hacer una búsqueda de más se necesita una expresión regular ejemplo
//   /que/gi sin paréntesis
    busqueda = texto1.match(/que/gi); 
    
//otro método es substr
    busqueda = texto1.substr(14, 5);
    
//otro es charAt() para sacar una sola letra en la posición que digamos
    busqueda = texto1.charAt(15);
    
//otro método es startsWith() que busca dentro de una variable
//solo el incio que escribas dentro de la función y me devuelve
//true o false, otra función es endsWith e includes
    busqueda = texto1.startsWith("H");



/**
 * funciones de reemplazo
 */
//reemplazo una palabra por otra
busqueda = texto1.replace('chavales', 'vatos');

//función slice para separar texto desde donde yo quiera
busqueda = texto1.slice(12);

//función split para hacer que se separen dependiendo de lo que quieras
busqueda = texto1.split(" ");

//función trim para eliminar espacios de las palabras introducidas por el usuario
busqueda = texto1.trim();
console.log(busqueda);