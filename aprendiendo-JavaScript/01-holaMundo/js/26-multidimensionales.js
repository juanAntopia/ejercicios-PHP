'use strict'

var categorias = ["Terror", "Masacre", "Románticas"];
var peliculas = ["Masacre de texas", "10 cosas que odio de ti", "El fantasma"];
//var ordenadas = peliculas.sort(); //por orden alfabetico
var ordenadas = peliculas.reverse(); //poner el array al revés

console.log(ordenadas);

//var cine = [categorias, peliculas];
/*
console.log(cine[0][1]);
console.log(cine[1][2]);*/
//console.log(cine"este es el segundo array" [1] "el elemento 2"[2]);


/*------------------------------------------------
var elemento = "";

do {
    elemento = prompt("Introduce una película");
    peliculas.push(elemento);
} while (elemento != "acabar");

peliculas.pop();
--------------------------------------------------*/

var indice = peliculas.indexOf("El fantasma");

if (indice > -1) {
    peliculas.splice(indice, 1);
}
//unir las palabras
var peliculas_index = peliculas.join();

//console.log(peliculas_index);
var cadena = "PLC con hasta 5 programas -Dosificador de espuma activa -Dosificador de cera";
var cadena_array = cadena.split(" -");



/* ejemplo 1
document.write("<ul>");
cadena_array.forEach((elemento) => {
    document.write("<li>" + elemento + "</li>"); 
});
document.write("</ul>");*/


/* ejemplo 2
document.write("<ul>");
for (var i = 0; i < cadena_array.length; i++){
    document.write("<li>" + cadena_array[i] + "</li>"); 
}
document.write("</ul>");*/

//ejemplo 3

document.write("<ul>");
for (let cadena_ in cadena_array) {
    document.write("<li>"+ cadena_array[cadena_] +"</li>");
}
document.write("</ul>");

//búsqueda en arrays
var lenguajes = ["PHP", "Java", "C#"];
var busqueda = lenguajes.find(lenguaje => lenguaje == "PHP");

console.log(busqueda);


var precios = [20, 80, 50, 30, 20];
var busqueda = precios.some(precio => precio >= 20);

console.log(busqueda);