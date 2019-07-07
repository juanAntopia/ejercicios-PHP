'use strict'

//condicional IF
//si A es igual a B haz algo
var edad = 40;
var nombre = 'Juan Angel';

if (edad >= 18) {
	//Es mayor de edad
	console.log(nombre + ' tiene ' + edad + " años, es mayor de edad");

	if (edad <= 33) {
		console.log("Todavía eres millenial");
	}else if (edad >= 70) {
		console.log("Eres anciano");
	} else {
		console.log('Ya no eres millenial');
	}
} else {
	//es menor de edad
	console.log(nombre + ' tiene ' + edad + " años, es menor de edad");
}