'use strict'

window.addEventListener('load', () => {
    console.log("dom cargado");

    var formulario = document.querySelector('#formulario');
    var dashed = document.querySelector(".dashed");
    dashed.style.display = "none";

    formulario.addEventListener("submit", () => {

        console.log("Evento submit capturado");

        var nombre = document.querySelector('#nombre').value;
        var apellidos = document.querySelector('#apellidos').value;
        var edad = parseInt(document.querySelector('#edad').value);

        //variables de errores
        var error_nombre = document.querySelector('#error_nombre');

        if (nombre.trim() == null || nombre.trim().length == 0 || !isNaN(nombre)) {
            error_nombre.innerHTML = "El nombre no es válido";
            error_nombre.style.color = "red";
            return false;
        } else {
            error_nombre.style.display = "none";
        }

        if (apellidos.trim() == null || apellidos.trim().length == 0 || !isNaN(apellidos)) {
            alert('Los apellidos no son válidos');
            return false;
        }

        if (edad == null || edad <= 0 || isNaN(edad)) {
            alert('La edad no es válida');
            return false;
        }

        dashed.style.display = "block";

        var datos_usuario = [nombre, apellidos, edad];

        for (let indice in datos_usuario) {
            var parrafo = document.createElement('p');
            parrafo.append(datos_usuario[indice]);
            dashed.append(parrafo);
        }

        console.log(nombre, apellidos, edad);
    });
});