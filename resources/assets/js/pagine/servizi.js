$(document).ready(function () {

    $(".main").onepage_scroll();

    $('article.servizi ul li').eq(0).click(function(){$(".main").moveDown();});
    $('article.servizi ul li').eq(1).click(function(){$(".main").moveTo(3);});
    $('article.servizi ul li').eq(2).click(function(){$(".main").moveTo(4);});


    var Slide1     = $('article.pac1'),
        Slide2     = $('article.pac2'),
        Slide3     = $('article.pac3'),
        Pvoce1     = 'span.tasto_voce1',
        Pvoce2     = 'span.tasto_voce2',
        Pvoce3     = 'span.tasto_voce3',
        Tx         = '.box_affiancato .voce1,.box_affiancato .voce2,.box_affiancato .voce3',
        TxVoce1    = '.box_affiancato .voce1',
        TxVoce2    = '.box_affiancato .voce2',
        TxVoce3    = '.box_affiancato .voce3',
        TanimVoce  = 1000;

    $('.box_affiancato .voce1,.box_affiancato .voce2,.box_affiancato .voce3').hide();
    $('.box_affiancato .voce1').show();
    $(Pvoce1).css('color','#666');


    Slide1.find(Pvoce1).click(function(){
        Slide1.find(Tx).fadeOut(TanimVoce);Slide1.find(TxVoce1).delay(TanimVoce).fadeIn(TanimVoce);
        $(this).css('color','#666');Slide1.find(Pvoce2).css('color','#ccc');Slide1.find(Pvoce3).css('color','#ccc');
    });
    Slide1.find(Pvoce2).click(function(){
        Slide1.find(Tx).fadeOut(TanimVoce);Slide1.find(TxVoce2).delay(TanimVoce).fadeIn(TanimVoce);
        $(this).css('color','#666');Slide1.find(Pvoce1).css('color','#ccc');Slide1.find(Pvoce3).css('color','#ccc');
    });
    Slide1.find(Pvoce3).click(function(){
        Slide1.find(Tx).fadeOut(TanimVoce);Slide1.find(TxVoce3).delay(TanimVoce).fadeIn(TanimVoce);
        $(this).css('color','#666');Slide1.find(Pvoce2).css('color','#ccc');Slide1.find(Pvoce1).css('color','#ccc');
    });


    Slide2.find(Pvoce1).click(function(){
        Slide2.find(Tx).fadeOut(TanimVoce);Slide2.find(TxVoce1).delay(TanimVoce).fadeIn(TanimVoce);
        $(this).css('color','#666');Slide2.find(Pvoce2).css('color','#ccc');Slide2.find(Pvoce3).css('color','#ccc');
    });
    Slide2.find(Pvoce2).click(function(){
        Slide2.find(Tx).fadeOut(TanimVoce);Slide2.find(TxVoce2).delay(TanimVoce).fadeIn(TanimVoce);
        $(this).css('color','#666');Slide2.find(Pvoce1).css('color','#ccc');Slide2.find(Pvoce3).css('color','#ccc');
    });


    Slide3.find(Pvoce1).click(function(){
        Slide3.find(Tx).fadeOut(TanimVoce);Slide3.find(TxVoce1).delay(TanimVoce).fadeIn(TanimVoce);
        $(this).css('color','#666');Slide3.find(Pvoce2).css('color','#ccc');Slide3.find(Pvoce3).css('color','#ccc');
    });
    Slide3.find(Pvoce2).click(function(){
        Slide3.find(Tx).fadeOut(TanimVoce);Slide3.find(TxVoce2).delay(TanimVoce).fadeIn(TanimVoce);
        $(this).css('color','#666');Slide3.find(Pvoce1).css('color','#ccc');Slide3.find(Pvoce3).css('color','#ccc');
    });
    Slide3.find(Pvoce3).click(function(){
        Slide3.find(Tx).fadeOut(TanimVoce);Slide3.find(TxVoce3).delay(TanimVoce).fadeIn(TanimVoce);
        $(this).css('color','#666');Slide3.find(Pvoce2).css('color','#ccc');Slide3.find(Pvoce1).css('color','#ccc');
    });

});



