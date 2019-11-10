'use strict'

/**
 * Funciones: Es una agrupación reutilizable de un conjunto de instrucciones
 */

/*funciones dentro de otras */
function porConsola(n1, n2) {
    console.log("Suma:" + (n1 + n2));
    console.log("Resta:" + (n1 - n2));
    console.log("Multiplicación:" + (n1 * n2));
    console.log("División:" + (n1 / n2));
}

function porPantalla(n1, n2) {
    document.write("Suma:" + (n1 + n2) + "<br>");
    document.write("Resta:" + (n1 - n2) + "<br>");
    document.write("Multiplicación:" + (n1 * n2) + "<br>");
    document.write("División:" + (n1 / n2) + "<br>");
}

 //función a ejecutar
function calculadora(n1, n2, mostrar = false) {
    //conjunto de instrucciones a ejecutar

    if (mostrar == false) {
        porConsola(n1, n2);
    } else {
        porPantalla(n1, n2);
    }    
    
    return true;
}
 
//Invocar a la función
calculadora(8, 5, false);
calculadora(8, 5, true);
/*
for (var i = 1; i <= 10; i++){
    console.log(i);
    calculadora(i, 11);
}*/