'use strict'

var edad = 18;
var imprime = "";

switch (edad) {
	case 18:
		imprime = "Acabas de cumplir la mayoría de edad";
		break;
	
		case 25:
		imprime = "Ya eres un adulto";
		break;
	
		case 70:
		imprime = "Ya eres un anciano";
		break;

	default:
		imprime = "Tu edad es neutra";
}

console.log(imprime);