/**
 * Tabla de multiplicar de un número introducido por pantalla
 */
'use strict'
//var numero = parseInt(prompt('Introduce un número', 1));
/*
for (var i = 1; i <= 10; i++){
    document.write(i + 'x' + numero + '=' + (numero * i) + '<br>');
}*/


for (var j = 1; j <= 10; j++){
    document.write("La tabla del: " + j + '<br>');

    for (var c = 1; c <= 10; c++){
        document.write( c + 'x' + j + '=' + (j * c) + '<br>');
    }
}