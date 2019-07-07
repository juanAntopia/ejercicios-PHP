'use strict' //sirve ara que no salgan errores a la hora de codificar

var numero = 40;
console.log(numero);//valor 40

if (true) {
	var numero = 50;
	console.log(numero);//valor 50
}

console.log(numero);//valor 50

//Prueba con let
var texto = "Curso Javascript";
console.log(texto);//valor curso javascript

if (true) {
	let texto = "Curso Javascript 2";
	console.log(texto);//valor """"2
}

console.log(texto);//valor curso javascript