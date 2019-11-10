'use strict'

//eventos lo que hace el usuario

window.addEventListener('load',  () => {
    function cambiarColor() {
        console.log("me has dado click");

        var bg = boton.style.background = "";

        if (bg == "green") {
            boton.style.background = "red";
        } else {
            boton.style.background = "green";
        }

        return true;
    }

    var boton = document.querySelector('#boton');
    boton.addEventListener('click', function () {
        cambiarColor();
    });

    //mouse over
    boton.addEventListener('mouseover', function () {
        boton.style.background = "#fllm";
    });

    //mouse out
    boton.addEventListener('mouseout', function () {
        boton.style.background = "yellow";
    });

    //focus
    var input = document.querySelector('#nombre');

    input.addEventListener('focus', function () {
        console.log("[focus] Estás dentro del input");
    });

    //blur
    input.addEventListener('blur', function () {
        console.log("[blur] Estás fuera del input");
    });

    //keydown
    input.addEventListener('keydown', function (event) {
        console.log("[keydown] Estás presionando la tecla: ", String.fromCharCode(event.keyCode));
    });

    //keypress
    input.addEventListener('keypress', function (event) {
        console.log("[keypress] Estás presionando la tecla: ", String.fromCharCode(event.keyCode));
    });

    //keyup
    input.addEventListener('keyup', function (event) {
        console.log("[keyup] Estás presionando la tecla: ", String.fromCharCode(event.keyCode));
    });
});

