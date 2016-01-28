$(document).ready(function () {


    var Icampi = $("#nome,#sobrenome,#email,#telefone"),
        Tmess = $('#mensagem'),
        tempo = 500;

    Icampi.focusin( function(){
        $(this).animate({'margin-bottom' : '-58px'}, tempo);
    });
    Icampi.focusout( function(){
        if(!$(this).val()){
            $(this).animate({'margin-bottom' : '5px'}, tempo);
        }
    });

    Tmess.focusin( function(){
        $(this).animate({'margin-bottom' : '-80px'}, tempo);
        $(this).parent().animate({'height':'95px'},tempo);
    });
    Tmess.focusout( function(){
        if(!$(this).val()){
            $(this).animate({'margin-bottom' : '-18px'}, tempo);
            $(this).parent().delay(tempo).animate({'height':'62px'},tempo);
        }
    });



    $("#bottone").click(function(){

        //associo variabili generali
        var nome = $("#nome").val();
        var sobrenome = $("#sobrenome").val();
        var mensagem = $("#mensagem").val();
        var email = $("#email").val();
        var telefone = $("#telefone").val();
        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;

        if(!emailReg.test(email)){alert("Email scritta in modo non corretto");
        }else if(nome == "" || sobrenome == "" || email == "" || telefone == "" || mensagem == ""){
            alert("Compila tutti i campi richiesti con l'asterisco!");
        }else{

            $.ajax({

                type: "POST",
                url: "http://simoneheringer.com.br/engine/form.php",
                data: "nome=" + nome + "&sobrenome=" + sobrenome + "&email=" + email  + "&mensagem=" + mensagem + "&telefone=" + telefone,
                dataType: "html",
                success: function(msg)
                {
                    alert("Email inviata con successo!");
                    window.location.href = "http://simoneheringer.com.br";
                },
                error: function(){alert("Si e' verificato un errore imprevisto...");}

            });
        }
    });
});

if (navigator.userAgent.toLowerCase().indexOf("chrome") >= 0) {
    $(window).load(function(){
        $(':-webkit-autofill').each(function(){
            $(this).after(this.outerHTML).remove();
        });
    });
}