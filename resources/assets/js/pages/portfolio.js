$(document).ready(function () {

    $(".main").onepage_scroll();

    var IMG = $('.main .gruppo_immagini figure'),
        T   = 1000;

    IMG.hover(function(){
        $(this).find('figcaption').animate({'opacity':0.8},T);
    },function(){
        $(this).find('figcaption').animate({'opacity':0},T);
    });

});



