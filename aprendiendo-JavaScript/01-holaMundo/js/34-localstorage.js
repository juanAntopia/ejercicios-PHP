'use strict'

window.addEventListener('load', () => {
    //localStorage

    //saber si localstorage está disponible por incompatibilidades que existen
    if (typeof (Storage) !== "undefined") {
        console.log("localstorage disponible");
    } else {
        console.log("incompatible localstorage");
    }

    //guardar datos
    localStorage.setItem("titulo", "About the pain");

    //recuperar elemtno
    console.log(localStorage.getItem("titulo"));
    document.querySelector('#peliculas').innerHTML = localStorage.getItem("titulo");

    //guardar un objeto json
    var usuario = {
        nombre: "Juan Angel",
        email: "juan@juan.com",
        edad: 20
    };
    
    localStorage.setItem('usuario', JSON.stringify(usuario));

    var usuariojs = JSON.parse(localStorage.getItem('usuario'));
    console.log(usuariojs);

    document.querySelector('#peliculas').append(" "+usuariojs.nombre);
    
    //localStorage.removeItem('usuario'); //remueve el último item
    //vaciar todo el localstorage
    localStorage.clear();

});
