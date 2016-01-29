@extends('./templates/index')

@section('Title')

<title>Design de Igrejas - Primeira Igreja Presbiteriana de Belo Horizonte</title>@stop

@section('MetaDescription')

<meta name="description" content="Projeto Primeira Igreja Presbiteriana"/>@stop

@section('MetaKeywords')

<meta name="keywords" content="Reforma de Igreja, Projeto igrejas evangelicas, Projeto de igrejas, Design de interiores liturgicos BH, Decoraçao de Igrejas, Simone Heringer, Design de Interiores BH, Decoraçao BH"/>@stop

@section('cssPagina')

<link rel="stylesheet" href="{{ asset('css/progetto_semplice.css') }}" type="text/css"/>@stop

@section('content')

<div class="vs-slider">
  <article class="vs-section active"></article>
  <article class="vs-section"></article>
  <article class="vs-section"></article>
  <article class="vs-section"></article>
  <article class="vs-section"></article>
  <article class="vs-section"></article>
</div>
<section id="schede" role="region">
  <div id="contenuto" class="visible">
    <article class="contenuti_descrizione">
      <header>
        <div class="filetto"></div>
        <h1>Igreja Presb. do Melo Viana<a href="{{route('public.progetto_3')}}" title="vai ao pr&amp;oacute;ximo projeto" class="fa fa-chevron-right"></a><a href="{{route('public.progetto_1')}}" title="volta ao projeto anterior" class="fa fa-chevron-left"></a>
        </h1>
        <h2><i class="fa fa-home">='Design de Igrejas'</i><br/>&#35;ProjetosIgrejasEvang&eacute;licas, &#35;Reformas, &#35;DesignDeIgrejasMG, &#35;Cel.Fabriciano-MG
        </h2>
        <h3>Reforma da Igreja Melo viana Cel. Fabriciano-MG: fortalecendo atributos, estimulando confiança.
        </h3>
      </header>
      <div class="filetto"></div>
      <p>A intenção do projeto é fortalecer atributos da instituição como unidade e solidez. Busca-se oferecer ambientes úteis e agradáveis que estimulem nos membros e visitantes a confiança, tranquilidade e a satisfação de estar oferecendo o seu melhor para Deus.<br/><br/><span class="desc"><span class="bold">Conceito</span> Segurança<br/><span class="bold">Caracter&iacute;sticas essenciais:ì</span> Alegria, simplicidade, acolhimento, tranquilidade.<br/><span class="bold">='Demandas:'</span></span>
      </p>
    </article>
  </div>
  <ul id="navigazione" class="visible">
    <li id="apri_chiudi" class="nonselezionato fa"></li>
  </ul>
</section>@stop

@section('jsPagina')

<script src="{{ asset('js/progetto.min.js')}}" type="text/javascript"></script>@stop

