/**
 * Calculadora:
 * -Pida dos números por pantalla
 * -Si metemos uno mal que nos lo vuelva a pedir
 * -En el cuerpo de la página, en una alerta 
 * y por la consola el resultado de sumar, restar, multiplicar
 * y dividir esas dos cifras
 */

var n1 = parseInt(prompt('Introduce el primer número', 1));
var n2 = parseInt(prompt('Introduce el segundo número', 1));

while (n1 < 0 || n2<0 || isNaN(n1) || isNaN(n2)) {
  n1 = parseInt(prompt('Introduce el primer número', 1));
  n2 = parseInt(prompt('Introduce el segundo número', 1));
}

alert("La divisíón es = " + (n1 / n2) +
    " La suma es: " + (n1 + n2) +
    " La resta es: " + (n1 - n2) +
    " La multiplicación es: " + (n1 * n2)
);
