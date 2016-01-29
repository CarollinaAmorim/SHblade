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
        <h1>Open Contabilidade<a href="{{route('public.progetto_14')}}" title="vai ao pr&amp;oacute;ximo projeto" class="fa fa-chevron-right"></a><a href="{{route('public.progetto_12')}}" title="volta ao projeto anterior" class="fa fa-chevron-left"></a>
        </h1>
        <h2><i class="fa fa-home"></i> Outros - Coorporativos <span class="tags"><i class="fa fa-leaf"></i> Paisagismo <br />&#35;DesignDeAmbientes &#35;ReformasLojas &#35;Decora&ccedil;&atilde;oLojas &#35;Decora&ccedil;&atilde;oDeInterioresLojas</span>
        </h2>
        <h3>Escritorio de Contabilidade
        </h3>
      </header>
      <div class="filetto"></div>
      <p></p>
    </article>
  </div>
  <ul id="navigazione" class="visible">
    <li id="apri_chiudi" class="nonselezionato fa"></li>
  </ul>
</section>@stop

@section('jsPagina')

<script src="{{ asset('js/progetto.min.js')}}" type="text/javascript"></script>@stop

