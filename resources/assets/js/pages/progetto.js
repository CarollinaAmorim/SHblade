$(document).ready(function() {

    // Initialise the vertical slider
    verticalSlider.init();

    var CContenitore = $('#contenuto'),
        CAll         = $('.contenuti_descrizione,.contenuti_concept,.contenuti_dettagli1,.contenuti_dettagli2'),
        CLarghezza   = 85,
        ApriChiudi   = $('#apri_chiudi'),
        Pschede      = $('.cambia_scheda'),
        Pdescrizione = $('#descrizione'),
        Pconcept     = $('#concept'),
        Pdettagli1   = $('#dettagli1'),
        Pdettagli2   = $('#dettagli2'),
        Cdescrizione = $('.contenuti_descrizione'),
        Cconcept     = $('.contenuti_concept'),
        Cdettagli1   = $('.contenuti_dettagli1'),
        Cdettagli2   = $('.contenuti_dettagli2'),
        TAnimazione  = 1000,
        Tpausa       = 500;

    Cconcept.hide();Cdettagli1.hide();Cdettagli2.hide();
    ApriChiudi.addClass('fa-times');

    function espandiSchede(){
        CContenitore.animate({'width':CLarghezza+'%'},TAnimazione).addClass('visible');
        ApriChiudi.addClass('fa-times').removeClass('fa-chevron-right');
    }

    Pdescrizione.addClass('selezionato');

    Pschede.click(function(){
        if (!CContenitore.hasClass('visible')) {
            espandiSchede();
        }
        CAll.fadeOut(Tpausa);
    });

    Pdescrizione.click(function(){
        Cdescrizione.delay(Tpausa).fadeIn(TAnimazione);
        Pschede.removeClass('selezionato');
        $(this).addClass('selezionato');
    });
    Pconcept.click(function(){
        Cconcept.delay(Tpausa).fadeIn(TAnimazione);
        Pschede.removeClass('selezionato');
        $(this).addClass('selezionato');
    });
    Pdettagli1.click(function(){
        Cdettagli1.delay(Tpausa).fadeIn(TAnimazione);
        Pschede.removeClass('selezionato');
        $(this).addClass('selezionato');
    });
    Pdettagli2.click(function(){
        Cdettagli2.delay(Tpausa).fadeIn(TAnimazione);
        Pschede.removeClass('selezionato');
        $(this).addClass('selezionato');
    });

    ApriChiudi.click(function(){
        if (CContenitore.hasClass('visible')) {
            CAll.fadeOut(Tpausa);
            CContenitore.delay(Tpausa).animate({'width':'50px'},TAnimazione).removeClass('visible');
            ApriChiudi.addClass('fa-chevron-right').removeClass('fa-times');
        } else{
            espandiSchede();
            Cdescrizione.delay(TAnimazione).fadeIn(Tpausa);
        }
    });


});