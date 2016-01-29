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
        <h1>Ig. Presbiteriana Monte Sinai<a href="{{route('public.progetto_4')}}" title="vai ao pr&amp;oacute;ximo projeto" class="fa fa-chevron-right"></a><a href="{{route('public.progetto_2')}}" title="volta ao projeto anterior" class="fa fa-chevron-left"></a>
        </h1>
        <h2><i class="fa fa-home">Design de Igrejas</i><br/>&#35;ProjetosIgrejasEvang&eacute;licas, &#35;Reformas, &#35;DesignDeIgrejasMG, &#35;Cel.Fabriciano-MG
        </h2>
        <h3>Reforma do Interior da Igeja Monte Sinai: Dinamismo que da vida e fortalece a fé
        </h3>
      </header>
      <div class="filetto"></div>
      <p>A evolução com o tempo traz novas necessidades. A proposta do projeto é apresentar soluções para estas demandas  atuais e o aprimoramento estético.<br/><br/><span class="desc"><span class="bold">Conceito:</span> Dinamismo<br/><span class="bold">Caracteristicas essenciais:</span> harmonia, aconchego, espontaneidade, paz.<br/><span class="bold">Demandas:</span> Projetar púlpito, palco, guarda-corpo da galeria (mezanino); Estudo do posicionamento da mesa de som e berçário; Ambientação do berçário e Hall; Rebaixamento de teto sobre o púlpito; Projeto de piso para o interior do templo.</span>
      </p>
    </article>
  </div>
  <ul id="navigazione" class="visible">
    <li id="apri_chiudi" class="nonselezionato fa"></li>
  </ul>
</section>@stop

@section('jsPagina')

<script src="{{ asset('js/progetto.min.js')}}" type="text/javascript"></script>@stop

