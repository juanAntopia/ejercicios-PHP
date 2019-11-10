'use strict'

//DOM(Document Objetc Model)

function cambiaColor(color) {
    div.style.color = color;
}
//conseguir elmento con id en concreto
//var div = document.getElementById('micaja');
var div = document.querySelector('#micaja');

div.innerHTML = "TEXTO DESDE JS";
div.style.color = "blue";
div.className= "hola";//para agregarle clases al objeto

//conseguir elementos por sus etiqueta
var todosLosDivs = document.getElementsByTagName('div');
/*var contenidoEnTexto = todosLosDivs[2];
contenidoEnTexto.innerHTML = "Hola perro desde js";
contenidoEnTexto.style.color = "blue";*/

var seccion = document.querySelector('#textos');
for (let valor in todosLosDivs) {
    if (typeof todosLosDivs[valor].textContent == 'string') {
        var parrafo = document.createElement('p');
        var texto = document.createTextNode(todosLosDivs[valor].textContent);
        parrafo.append(texto);
        seccion.append(parrafo);
    }
}

//conseguir elementos por su clase css
var divsRojos = document.getElementsByClassName('rojo');

for (let elemento in divsRojos){
    if (divsRojos[elemento].className == "rojo") {
        divsRojos[elemento].style.background = "red";
    }
}


// console.log(div);