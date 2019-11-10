'use strict'

//Browser Object Model
function getBom(){
    console.log(window.innerHeight);
    console.log(window.innerWidth);
    console.log(screen.width);
    console.log(window.location);
}

getBom();

//redireccionar
function url(url) {
    window.location.href = url;
}

//abre una pequeña ventana
function abrirVentana(url) {
    window.open(url, "", "width=400px, height=400");
}