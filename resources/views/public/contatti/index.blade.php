@extends('./templates/index')

@section('Title')

<title>Página contato - Simone Heringer Design de Ambientes e Paisagismo</title>@stop

@section('MetaDescription')

<meta name="description" content="Informações, contato e orçamentos. Entre em contato com Simone Heringer."/>@stop

@section('MetaKeywords')

<meta name="keywords" content="Contato, Design de Interiores BH, Decoração BH, orçamento design de interiores, Site Decoração, design de ambientes, projetos de jardins, projetos igrejas evangélicas, arquitetura de interiores igrejas evangelicas, BH, Site Designers BH"/>@stop

@section('cssPagina')

<link rel="stylesheet" href="{{ asset('css/contatti.css') }}" type="text/css"/>@stop

@section('content')

<article id="contatti" role="region">
  <header role="heading">
    <h1>contato <span>e or&ccedil;amentos</span>
    </h1>
  </header>
  <div class="filetto_titoli"></div>
  <p class="generale">Quer saber mais sobre como melhorar a sua qualidade de vida através do <span itemprop=>"makesOffer"></span>Design de Ambientes?<a href="mailto:contato@simoneheringer.com.br" title="Pe&amp;ccedil;a uma avalia&amp;ccedil;&amp;atilde;o gr&amp;aacute;tis!" target="_blank" class="outroslinks"><br/>Entre em contato</a>para agendar um encontro e uma avalia&amp;ccedil;&amp;atilde;o gratuita! Vai ser um imenso prazer atende-lo! Você pode utilizar o formulário abaixo ou se preferir, fa&amp;ccedil;a contato, pela nossa<a href="https://www.facebook.com/SimoneHeringerD" title="Envie uma mensagem pela nossa fanpage!" target="_blank" class="outroslinks">fanpage,</a>telefone ou email.
  </p>
  <div id="info">
    <h3><span itemprop="legalName">Simone Heringer</span></h3>
    <h4>&#45; Design de Ambientes e Paisagismo
    </h4>
    <address><span class="evidenzia">Endere&ccedil;o:</span><span itemprop="location address"></span><a href="https://www.google.com.br/maps/place/Av.+do+Contorno,+6283+-+Funcion%C3%A1rios,+Belo+Horizonte+-+MG,+30110-017/@-19.9402546,-43.9381747,17z/data=!3m1!4b1!4m2!3m1!1s0xa699d06574e923:0xf1fbb6fac3353680!6m1!1e1" title="Veja no google maps" target="_blank" class="outroslinks">Avenida do Contorno, 6.283 | Sala 805 | São Pedro - Belo Horizonte | MG</a><br/><span class="evidenzia">Telefone:</span><span itemprop="telephone" class="outroslinks">(31) 2510-4372</span><br/><span class="evidenzia">Email:</span><a href="mailto:contato@simoneheringer.com.br" title="Escreve para Simone" class="outroslinks">contato@simoneheringer.com.br</a><br/><br/><span class="evidenzia">Redes sociais:</span>
      <ul>
        <li><a href="https://www.facebook.com/SimoneHeringerD" title="Para mais novidades e promo&amp;ccedil;&amp;otilde;es Curta a nossa fanpage." target="_blank" class="redessociais fa fa-facebook"></a><a href="https://www.instagram.com/simoneheringers/" title="Instagram de Simone Heringer" target="_blank" class="redessociais fa fa-instagram"></a></li>
      </ul>
    </address>
    <form id="form" autocomplete="off">
      <div class="contenitore_sx">
        <input id="nome" type="text"/>
        <label for="nome">Nome
        </label>
        <div class="sfondo"></div>
      </div>
      <div class="contenitore_dx">
        <input id="sobrenome" type="text"/>
        <label for="sobrenome">Sobrenome
        </label>
        <div class="sfondo"></div>
      </div>
      <div class="clear"></div>
      <div class="contenitore_sx">
        <input id="telefone" type="text"/>
        <label for="telefone">Telefone
        </label>
        <div class="sfondo"></div>
      </div>
      <div class="contenitore_dx">
        <input id="email" type="text"/>
        <label for="email">Email
        </label>
        <div class="sfondo"></div>
      </div>
      <div class="clear"></div>
      <div class="contenitore_c">
        <textarea id="mensagem"></textarea>
        <label for="mensagem">Mensagem
        </label>
        <div class="sfondo"></div>
      </div>
      <div class="clear"></div>
      <input id="bottone" value="ENVIAR" type="button"/>
      <input id="fred" style="display:none;" type="text"/>
    </form>
    <aside id="privacy">
      <div class="maiuscolo">politìca de privacidade do site
      </div>O site Simone Heringer - Design de Ambientes e paisagismo processa dados com o objetivo de operar, melhorar o serviço e monitorar denúncias de abusos e cooperar com a aplicação das leis. Nós não vendemos nem distribuímos seus dados pessoais a terceiros. Para avaliar o uso de nosso serviço e para fins estatísticos somente dados anônimos serão utilizados. As informações fornecidas pelo usuário sao usadas somente para: contato como solicitado, fornecimento de das informações requisitadas, avisos necessários e promocionais. Inserindo seus dados no formulario voce concorda com a politica de privacidade do site.
    </aside>
  </div>
</article>@stop

@section('jsPagina')

<script src="{{ asset('js/contatti.min.js')}}" type="text/javascript"></script>@stop

