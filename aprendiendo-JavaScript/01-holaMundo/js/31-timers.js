'use strict'

window.addEventListener('load', () => {

    function intervalo() {
        var timer = setInterval(() => { //se ejecuta a cada rato
            var encabezado = document.querySelector('h1');

            if (encabezado.style.fontSize == "50px") {
                encabezado.style.fontSize = "20px";
            } else {
                encabezado.style.fontSize = "50px";
            }
        }, 1000); 

        return timer;
    }
    
    var timer = intervalo();
    var stop = document.querySelector('#stop');

    stop.addEventListener("click", () => {
        alert('Se ha detenido el bucle');
        clearInterval(timer); //detener bucle
    });

    var start = document.querySelector('#start');

    start.addEventListener("click", () => {
        intervalo();
    });
    /*var timer = setTimeout(() => {
        var encabezado = document.querySelector('h1');
        
        if (encabezado.style.color == "red") {
            encabezado.style.color = "blue";
        } else {
            encabezado.style.color = "red";
        }
    }, 500);*/
});