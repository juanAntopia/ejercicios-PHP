'use strict'

$(document).ready(function () {

    //selectores de id
    $('#rojo').css('background', 'red')
        .css('color', 'white');
    
    $('#amarillo').css('background', 'yellow')
        .css('color', 'green');
    
    $('#verde').css('background', 'green')
        .css('color', 'black');
    
    //selectores de clase
    $('.zebra');
    $('.sinBorder').click(function () {
        console.log("click dado");
        $('.sinBorder').removeClass('zebra');
        $(this).addClass('zebra');
    });

    /*for (let index in zebra) {
        if (zebra[index].className == "zebra") {
            var li = document.createElement('li');
            li.append(zebra[index]);
            ul.append(li);
        }
    }*/

    //selectores de etiqueta
    var divs = $('div');
    divs.click(function () {
        var thiss = $(this);
        if (!thiss.hasClass('grande')) {
            thiss.addClass('grande');
        } else {
            thiss.removeClass('grande');
        }
    });

    //selectores por atributo
    $('[title = "Google"]').css('background', '#ccc');

    //otros
    //$('p, a').addClass('margen-superior');
    var busqueda = $('#ul').find('.resaltado');
    console.log(busqueda);

    
});