'use strict'

//evento load para cargar todo antes
window.addEventListener('load', () => {
    //seleccionar el formulario
    var formulario = document.querySelector('#form-peliculas');

    //evento submit
    formulario.addEventListener('submit', () => {
        //recojer el valor del input
        var titulo = document.getElementById('addPelicula').value;

        //apuntar a la variable del error
        var error_pelicula = document.querySelector('.mensaje-error');

        //ocultarlo por default
        error_pelicula.style.display = "none";

        //validar que el campo no esté vacío
        if (titulo.trim() == null || titulo.trim().length == 0) {
            error_pelicula.style.display = "block";
            error_pelicula.innerHTML = "pelicula no válida";
            error_pelicula.style.color = "red";
        } else {
            localStorage.setItem(titulo, titulo);
            error_pelicula.style.display = "none";
        }
    });

    var ul = document.querySelector('#listado-peliculas');
    //recorrer el objeto de localstorage
    for (let index in localStorage) { 

        if (typeof localStorage[index] == 'string') {
            var li = document.createElement('li');
            li.append(localStorage[index]);
            ul.append(li); 
        }
    }

    //seleccionar el formulario
    var formulario = document.querySelector('#formb-peliculas');

    //evento submit
    formulario.addEventListener('submit', () => {
        //recojer el valor del input
        var titulo = document.getElementById('deletePelicula').value;

        //apuntar a la variable del error
        var error_pelicula = document.querySelector('.mensaje-error');

        //ocultarlo por default
        error_pelicula.style.display = "none";

        //validar que el campo no esté vacío
        if (titulo.length >=1) {
            localStorage.removeItem(titulo);
        }
    });

});