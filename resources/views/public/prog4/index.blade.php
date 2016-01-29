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
      </header>
      <h1>Igreja Presb. de Lajinha/MG<a href="{{route('public.progetto_5')}}" title="vai ao pr&amp;oacute;ximo projeto" class="fa fa-chevron-right"></a><a href="{{route('public.progetto_3')}}" title="volta ao projeto anterior" class="fa fa-chevron-left"></a>
      </h1>
      <h2><i class="fa fa-home">Design de Igrejas</i><br/>&#35;ProjetosIgrejasEvang&eacute;licas, &#35;Reformas, &#35;DesignDeIgrejasMG, &#35;Lajinha-MG
      </h2>
      <h3>Igreja de Lajinha-MG: Edificando Vidas.
      </h3>
    </article>
    <div class="filetto"></div>
    <p>O propósito do projeto é fazer uma analogia do processo construtivo com a edificação espiritual da igreja, que é constante. A estrutura e os materiais de construção aparentes são evidenciados para lembrar cotidianamente da obra espiritual de Deus na vida da Igreja.<br/><br/><span class="desc"><span class="bold">Conceito:</span> Dinamismo<br/><span class="bold">Caracteristicas essenciais:</span> harmonia, aconchego, espontaneidade, paz.<br/><span class="bold">Demandas:</span> Projetar púlpito, palco, guarda-corpo da galeria (mezanino); Estudo do posicionamento da mesa de som e berçário; Ambientação do berçário e Hall; Rebaixamento de teto sobre o púlpito; Projeto de piso para o interior do templo.</span>
    </p>
  </div>
  <ul id="navigazione" class="visible">
    <li id="apri_chiudi" class="nonselezionato fa"></li>
  </ul>
</section>@stop

@section('jsPagina')

<script src="{{ asset('js/progetto.min.js')}}" type="text/javascript"></script>@stop

