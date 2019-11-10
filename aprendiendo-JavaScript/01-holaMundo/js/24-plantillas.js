'use strict'

var nombre = prompt('Introduce tu nombre porfavor: ');
var apellidos = prompt('Introduce tus apellidos porfavor: ');

var texto = `
    <h1>Tu nombre es: ${nombre}</h1>
    <h3>Tus apellidos son: ${apellidos}</h2>
`;


document.write(texto);