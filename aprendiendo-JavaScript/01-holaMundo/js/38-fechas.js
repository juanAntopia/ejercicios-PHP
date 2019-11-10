'use strict'

window.addEventListener('load', () => {
    var fecha = new Date();
    var year = fecha.getFullYear();
    var mes = fecha.getMonth();
    var dia = fecha.getDate();

    var textoYear = `
        El año es: ${year}
        El mes es: ${mes}
        EL día es: ${dia}
    `;
    console.log(textoYear);


    //funciones matemáticas, existen muchas - ejemplos
    console.log(Math.random() * 2);
});