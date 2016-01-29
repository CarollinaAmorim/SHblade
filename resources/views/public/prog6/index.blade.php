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
        <h1>Cobertura Bairro Buritis<a href="{{route('public.progetto_7')}}" title="vai ao pr&amp;oacute;ximo projeto" class="fa fa-chevron-right"></a><a href="{{route('public.progetto_5')}}" title="volta ao projeto anterior" class="fa fa-chevron-left"></a>
        </h1>
        <h2><i class="fa fa-home">Projetos Residenciais</i><br/>&#35;ProjetosIgrejasEvang&eacute;licas, &#35;Reformas, &#35;DesignDeIgrejasMG, &#35;Cel.Fabriciano-MG
        </h2>
        <h3>Para momentos de lazer com a família e amigos.
        </h3>
      </header>
      <div class="filetto"></div>
      <p>Este projeto tem por objetivo projetar a cobertura do apartamento que será destinada ao relaxamento do casal: assistir TV, filmes, futebol, jogar vídeo game e promover reuniões com amigos e família. Assim buscamos promover um espaço acolhedor, pr&aacute;tico e confort&aacute;vel.<br/><br/><span class="desc"><span class="bold">Caracteristicas essenciais:</span> lazer, acolhedor, conforto, relaxamento, praticidade, <br/><span class="bold">Demandas:</span> ambientação da cobertura, área aberta e paisagismo.</span>
      </p>
    </article>
  </div>
  <ul id="navigazione" class="visible">
    <li id="apri_chiudi" class="nonselezionato fa"></li>
  </ul>
</section>@stop

@section('jsPagina')

<script src="{{ asset('js/progetto.min.js')}}" type="text/javascript"></script>@stop

