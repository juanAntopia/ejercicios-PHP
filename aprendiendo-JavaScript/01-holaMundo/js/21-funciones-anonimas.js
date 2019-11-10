'use strict'

/* funciones anínimas, nos sirven para cuando se realizan callbacks
 * Y no tiene nombre, se usa mucho en cosas de Javascript cvomo por ejempplo
 frameworks o jquery
*/
/*var pelicula = function(nombre){
    return "La película es:" + nombre;
}*/

function sumame(n1, n2, sumaYmuestra, sumaPorDos) {
    var sumar = n1 + n2;

    sumaYmuestra(sumar);
    sumaPorDos(sumar);
    return sumar;
}

sumame(5, 8, function (dato) {
    console.log("La suma es: ", dato);
}, function (dato) {
    console.log("La suma por dos es: ", (dato * 2));
});

//funciones de fecha para hacer más limnpio el código en este caso
//las callback voy a tomar el ejemplo anterior y si lleva 2 parámetros
//la función se utilizan "()" si es solo un parámetro para la función
//callback no importa si lleva o no lleva paréntesis
sumame(5, 8, dato => {
    console.log("La suma es: ", dato);
}, dato => {
    console.log("La suma por dos es: ", (dato * 2));
});
