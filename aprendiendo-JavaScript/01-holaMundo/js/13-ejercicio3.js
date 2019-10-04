'use strict'

/**
 * Hacer un programa que muestre todos los números entre dos números
 * introducidos por el usuario
*/

var n1 = parseInt(prompt('Introduzca el primer número', 0));
var n2 = parseInt(prompt('Introduzca el segundo número', 0));

document.write('<h2>los números que están dentro de: ' + n1 + ' Y ' + n2 + '</h2>');
for (var i = n1; i <= n2; i++){
    document.write( i +'<br>');
}