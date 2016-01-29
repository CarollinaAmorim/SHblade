jQuery( document ).ready(function( $ ) {

    // Initialise the vertical slider
    verticalSlider.init();


    var UL = $('#barra_destra ul'),
        Scritte =  $('.vs-section > header'),
        LIslide = UL.find('.cerchio');

    LIslide.eq(4).remove();
    LIslide.eq(5).remove();
    Scritte.hide();
    Scritte.eq(0).delay(200).fadeIn();

});