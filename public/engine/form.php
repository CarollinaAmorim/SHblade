<?php

	$mailAziendale = "info@simoneheringer.com.br"; //$mail_info
	$inovar	=	"Simone Heringer"; //$sito internet

	session_start();
		
		$nome 		= 	$_POST['nome'];
		$sobrenome	= 	$_POST['sobrenome'];
		$email 		= 	$_POST['email'];
		$telefone 	= 	$_POST['telefone'];
		$mensagem 	= 	$_POST['mensagem'];
		$ip			=	$_SERVER['REMOTE_ADDR'];

	//Verifica antispam 
	if($_POST['fred'] != "") {
		echo('<p style="color: #000; font-size: 25px; font-weight: bold;">MAIL SPAM DETECTED!!</p>');    
	}else {
      
//   Invio la mail  ===================================================================

$to 		= $mailAziendale;
$sbj 		= "Richiesta Informazioni - $inovar";
$msg 		= "
    <html>
        <head>
            <style type='text/css'>
                body{
                    font-family:'Lucida Grande', Arial;
                    color:#333;
                    font-size:15px;
                }
            </style>
        </head>
        <body>
            Nome: $nome <br /><br />
            Sobrenome: $sobrenome<br /><br />
            Email: $email<br /><br />
            N&uacute;mero di telefono: $telefone<br /><br />
            Mensagem: $mensagem<br /><br /><br />
            IP Tracciato (per motivi di sicurezza): $ip
        </body>
    </html>
";      
$from 		 = $email;
$headers	 = 'MIME-Version: 1.0' . "\r\n";
$headers	.= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers 	.= "From: $inovar";
mail($to,$sbj,$msg,$headers); //Invio mail principale.

//   Invio la mail  ===================================================================  Fine mail inviata a me

$toClient		 = $email;
$sbjClient       = "Avviso di avvenuto ricevimento della sua richiesta d'informazioni - $sito_internet";
$msgClient		 = "
    <html>
        <head>
            <style type='text/css'>
                body{
                    font-family:'Lucida Grande', Arial;
                    color:#333;
                    font-size:15px;
                }
            </style>
        </head>
        <body>
            <h1>Inovar M&oaccute;veis</h1>
            <br />

            <h2>
                Obrigado por entrar em contato!<br />
                Acabamos de receber o seu email e em breve vamos responder a sua solicita&ccedil;&atilde;o. 
                Estamos atualizando o nosso site e em breve muitas novidades!
            </h2>
            <br />

            <span>Inovar M&oacute;veis</span> | <span>Encontre o seu jeito de Inovar</span>
            <br /><span>Av. Hum, n&uacute; 795 | Palmeiras Ibirit&eacute;-MG | CEP: 32400-000 |</span>
            <br /><span>(031) 3598-9856 | (031) 8420 7470</span><br/><a href="http://simoneheringer.com.br" target="_blank" title="Inovar M&oacute;veis | Encontre o seu jeito de Inovar ">www.simoneheringer.com.br</a>
        </body>
    </html>
"; 
$fromClient 	 = $mailAziendale;
$sbjClient		 = "Ol&acute;, $nome ";
$headersClient	 = 'MIME-Version: 1.0' . "\r\n";
$headersClient	.= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headersClient 	.= "From: $inovar";
mail($toClient,$sbjClient,$msgClient,$headersClient);

///   Invio la mail  ===================================================================  Fine mail inviata a me
        
session_destroy();
exit;
}
?>