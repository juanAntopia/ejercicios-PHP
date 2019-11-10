/**
 * Que nos diga si un número es par o impar 
 * 1.-ventana prompt
 * 2.-si no es válido que nos pida de nuevo el número * 
 */

var numero = parseInt(prompt('Ingresa un número', 1));

while (isNaN(numero)) {
    numero = parseInt(prompt('Ingresa un número', 1));
}


    if (numero % 2 == 0) {
        console.log('el número: ' + numero + ' es par');
    }
    else {
        console.log('el número: ' + numero + ' es impar');
    }
