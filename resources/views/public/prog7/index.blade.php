@extends('./templates/index')

@section('Title')

<title>Design de Igrejas - Primeira Igreja Presbiteriana de Belo Horizonte</title>@stop

@section('MetaDescription')

<meta name="description" content="Projeto Primeira Igreja Presbiteriana"/>@stop

@section('MetaKeywords')

<meta name="keywords" content="Reforma de Igreja, Projeto igrejas evangelicas, Projeto de igrejas, Design de interiores liturgicos BH, Decoraçao de Igrejas, Simone Heringer, Design de Interiores BH, Decoraçao BH"/>@stop

@section('cssPagina')

<link rel="stylesheet" href="{{ asset('css/progetto_semplice.css') }}" type="text/css"/>
<style>
  .vs-section:nth-of-type(1) {
      background-image: url('{{asset('img/home/1/1_simone_heringer_portfolio_residencial3.jpg')}}')
  }
  
  .vs-section:nth-of-type(2) {
      background-image: url('../img/home/2/2_simone_heringer_design_de_igrejas1366.jpg')
  }
  
  .vs-section:nth-of-type(3) {
      background-image: url('../img/home/3/3_simone_heringer_design_residencial_1366.jpg')
  }
  
  .vs-section:nth-of-type(4) {
      background-image: url('../img/home/4/4_ig_melo_vianna_design_igrejas.jpg')
  }
  
  .vs-section:nth-of-type(5) {
      background-image: url('../img/progetto_a/pg1/primeira_igreja_presbiteriana_de_belo_horizonte_sh_2.jpg')
  }
  
  .vs-section:nth-of-type(6) {
      background-image: url('../img/progetto_a/pg1/primeira_igreja_presbiteriana_de_belo_horizonte_sh_1.jpg')
  }
  
</style>@stop

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
        <h1>Ap. Madre Gertrudes<a href="{{route('public.progetto_8')}}" title="vai ao pr&amp;oacute;ximo projeto" class="fa fa-chevron-right"></a><a href="{{route('public.progetto_6')}}" title="volta ao projeto anterior" class="fa fa-chevron-left"></a>
        </h1>
        <h2><i class="fa fa-home">Projetos Residenciais</i><br/>&#35;DesignDeInterioresBH, &#35;Reformas, &#35;Decoraç&atilde;oBH, &#35;Decora&ccedil;&atilde;oDeInteriores,
        </h2>
        <h3>Paisagismo de área externa e design do anexo<br />da residência
        </h3>
      </header>
      <div class="filetto"></div>
      <p>O foco do projeto é oferecer qualidade de vida para o casal e relaxamento no período em que eles usufruem do seu merecido descanso.<br/><br/><span class="desc"><span class="bold">Conceito:</span> Pernas para o ar.<br/><span class="bold">Caracteristicas essenciais:</span> lazer, acolhedor, conforto, relaxamento, praticidade.<br/><span class="bold">Demandas:</span> Paisagismo na área externa; Ambientaç&atilde;o cozinha, churrasqueira, lavanderia e banheiro.</span>
      </p>
    </article>
  </div>
  <ul id="navigazione" class="visible">
    <li id="apri_chiudi" class="nonselezionato fa"></li>
  </ul>
</section>@stop

@section('jsPagina')

<script src="https://cdnjs.cloudflare.com/ajax/libs/hammer.js/2.0.4/hammer.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/velocity/1.2.2/velocity.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/velocity/1.2.2/velocity.ui.min.js" type="text/javascript"></script>
<script src="{{ asset('js/progetto.min.js')}}" type="text/javascript"></script>@stop

