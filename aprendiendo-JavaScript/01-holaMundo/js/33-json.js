'use strict'

//JSON JavaSript Object Notation

window.addEventListener('load', () => {
    var pelicula = {
        titulo: 'Spiderman',
        year: 2018,
        villanos: 2
    }

    var peliculas = [
        { titulo: 'Ayyy perro', year: 2019 },
        pelicula
    ];

    var caja_peliculas = document.querySelector('#peliculas');
    caja_peliculas.style.background = "red";
    
    for (let index in peliculas) {
        var parrafo = document.createElement('p');
        var texto = document.createTextNode(peliculas[index].titulo);
        parrafo.append(texto);
        caja_peliculas.append(parrafo);
    }

    console.log(peliculas);
});
