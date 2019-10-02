/**
 * 
 * Programa que me pida 2 números y me diga cual es el mayor, menor y si son iguales
 * PLUS: Si los números no son números que nos vuelva a pedir los datos
 */
'use strict'

var n1 = parseInt(prompt('Ingresa 1 número', 0));
var n2 = parseInt(prompt('Ingresa el segundo número', 0));

while (n1 <= 0 || n2 <= 0 || isNaN(n1) || isNaN(n2)) {
    n1 = parseInt(prompt('Ingresa 1 número', 0));
    n2 = parseInt(prompt('Ingresa el segundo número', 0));
}

if (n1 > n2) {
    console.log("El número mayor es: " + n1);
    console.log("El número menor es: " + n2);  
}

else if (n2 > n1) {
    console.log("El número mayor es: " + n2);   
    console.log("El número menor es: " + n1);  
}

else if (n2 == n1 && n1 == n2) {
    console.log("Los números son iguales");   
}

else{
    alert('Introduce datos correctos');
}