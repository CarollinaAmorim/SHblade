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
        <h1>OAB/MG - Ibirité<a href="{{route('public.progetto_12')}}" title="vai ao pr&amp;oacute;ximo projeto" class="fa fa-chevron-right"></a><a href="{{route('public.progetto_10')}}" title="volta ao projeto anterior" class="fa fa-chevron-left"></a>
        </h1>
        <h2><i class="fa fa-home"></i> Outros - coorporativos <span class="tags">&#35;DesignDeInterioresBH &#35;Reformas &#35;Decora&ccedil;&atilde;oBH &#35;Decora&ccedil;&atilde;oDeInterioresCoorporativos</span>
        </h2>
        <h3>Desenvolver projeto de ambientação do  imóvel alugado para sediar a instituição.
        </h3>
      </header>
      <div class="filetto"></div>
      <p>&quot;Crível característica de quem consegue ou conquista a confiança de alguém.&quot; <br />  A intensão do projeto é reafirmar esta característica  da OAB, apresentando um ambiente que que seja compatível e favorável a isto.<br/><br/><span class="desc"><span class="bold">Conceito:</span> Credibilidade<br/><span class="bold">Caracteristicas essenciais:</span> sobriedade, conforto, funcionalidade.<br/><span class="bold">Demandas:</span> Ambienta&ccedil;&atilde;o da institui&ccedil;&atilde;o, design de m&oacute;veis, ilumina&ccedil;&atilde;o.</span>
      </p>
    </article>
  </div>
  <ul id="navigazione" class="visible">
    <li id="apri_chiudi" class="nonselezionato fa"></li>
  </ul>
</section>@stop

@section('jsPagina')

<script src="{{ asset('js/progetto.min.js')}}" type="text/javascript"></script>@stop

