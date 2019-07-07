'use strict'

//operadores
var numero1 = 7;
var numero2 = 12;
var operacion = numero1 + numero2;

alert("El resultado de la operación es: " + operacion);

//tipos de atos
var numeroEntero = 12;
var cadenaTexto = "Hola 'Que tal'";
var verdadero_o_falso = true;

var numero_falso = "33.5";

console.log(parseFloat(numero_falso)+numeroEntero); /*parseInt(variable_a_convertir), 
parseFloat(variable_a_convertir)
en lugar de Number(variable_a_convertir)
o String(variable_a_convertir)*/

console.log(typeof numeroEntero);
console.log(typeof cadenaTexto);
console.log(typeof verdadero_o_falso);
console.log(typeof numero_falso);