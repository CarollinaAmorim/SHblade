jQuery( document ).ready(function( $ ) {

    // Initialise the vertical slider
    verticalSlider.init();


    var UL = $('#barra_destra ul'),
        LIslide = UL.find('.cerchio');

    LIslide.eq(4).remove();
    LIslide.eq(5).remove();
    $('.vs-section > header').hide();
    $('.vs-section > header').eq(0).delay(200).fadeIn();

});