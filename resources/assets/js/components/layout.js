$(document).ready(function () {

    var pulsanteMenu = $("div#espandi_menu"),
        imgPulanteMenu = $("div#espandi_menu > img"),
        linkMenu = $("nav[role=menu] ul a");

    function oscuraPagina() { $("<div id='oscura'></div>").appendTo("body").hide().fadeIn(1000); }
    function eliminaOscuraPagina() { $("div#oscura").remove(); }

    imgPulanteMenu.eq(1).hide();
    $("nav[role=menu] *").hide();

    function animateML(){
        var larghezzaSchermo = $(window).width();
        if(larghezzaSchermo >= 1360){
            pulsanteMenu.hide().animate({left: "30%", marginLeft: "-50px"}, 750);
            $("nav[role=menu]").animate({width: "30%"}, 750);
        }
        else if(larghezzaSchermo <= 1270){
            pulsanteMenu.hide().animate({left: "90%", marginLeft: "-20px"}, 750);
            $("nav[role=menu]").animate({width: "90%"}, 750);
        }
        else{
            pulsanteMenu.hide().animate({left: "30%", marginLeft: "-25px"}, 750);
            $("nav[role=menu]").animate({width: "30%"}, 750);
        }
    }

    imgPulanteMenu.eq(0).click(function () {
        linkMenu.css("width", "0%");
        animateML();
        imgPulanteMenu.eq(0).hide();
        imgPulanteMenu.eq(1).show();
        pulsanteMenu.delay(800).fadeIn(1000);
        oscuraPagina();

        $("nav[role=menu] > img").delay(750).fadeIn();
        $("nav[role=menu] > ul, nav[role=menu] ul *").delay(1000).fadeIn();
        linkMenu.eq(0).delay(50).animate({width: "100%"});
        linkMenu.eq(1).delay(100).animate({width: "100%"});
        linkMenu.eq(2).delay(150).animate({width: "100%"});
        linkMenu.eq(3).delay(200).animate({width: "100%"});
        linkMenu.eq(4).delay(250).animate({width: "100%"});
        linkMenu.eq(5).delay(300).animate({width: "100%"});
    });

    function initML(){
        var larghezzaSchermo = $(window).width();
        if(larghezzaSchermo >= 1360){
            pulsanteMenu.hide().animate({left: "0%", marginLeft: "50px"}, 750);
        }
        else if(larghezzaSchermo <= 1270){
            pulsanteMenu.hide().animate({left: "0%", marginLeft: "0px"}, 750);
        }
        else{
            pulsanteMenu.hide().animate({left: "0%", marginLeft: "25px"}, 750);
        }
    }

    function InitStatus(){
        $("nav[role=menu] *").fadeOut(100);
        initML();
        $("nav[role=menu]").animate({width: "0%"}, 750);
        imgPulanteMenu.eq(1).hide();
        imgPulanteMenu.eq(0).show();
        pulsanteMenu.fadeIn(1000);
        eliminaOscuraPagina();
    }

    imgPulanteMenu.eq(1).click(function () {
        InitStatus();
    });

    $('#oscura').click(function(){
        InitStatus();
    });

    var CorniceDestra    = $('#barra_destra'),
        UL               = CorniceDestra.find('ul'),
        LIslide          = UL.find('.cerchio'),
        Slide            = $('article.vs-section'),
        dimLI            = 10,// altezza li
        marginBottomLI   = 20,// margin bottom li
        nLI              = Slide.length,
        heightUL         = ((dimLI + marginBottomLI) * nLI)+20+60,
        heightContainer  = 260, // altezza del contenitore ul
        close            = 0,
        marginTopULopen  = (heightContainer - heightUL)/2,
        marginTopULclose = 90,
        Tempo            = 500;// altezza container - 20px li marginTop - 60 altezza prev e next, diviso 2

    CorniceDestra.hover(function(){
        UL.animate({'margin-top':marginTopULopen + 'px'},Tempo);
        LIslide.animate({'height':dimLI + 'px','margin-bottom':marginBottomLI + 'px'},Tempo);
    }, function(){
        UL.animate({'margin-top':marginTopULclose+'px'},Tempo);
        LIslide.animate({'height':close+'px','margin-bottom':close+'px'},Tempo);
    });
});