$(document).ready(function () {
    var PP = $('.popup'),
        pulsantePP = $('.openpopup'),
        chiudiPP = $('.closepopup');

    PP.hide();

    pulsantePP.click(function(){
        PP.fadeIn(500);
    });

    chiudiPP.click(function(){
        PP.fadeOut(1000);
    });
});
