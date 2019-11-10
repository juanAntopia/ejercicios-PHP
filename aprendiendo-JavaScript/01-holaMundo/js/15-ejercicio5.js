'use strict'

/**
 * Muestre todos los números divisores de un número introduce en prompt
 */

var n1 = parseInt(prompt('Introduce un número', 1));

for (var i = 1; i <= n1; i++){

    if (n1 % i == 0) {
        console.log('Divisor: ' + i);
    }
    
}
















