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
        <h1>Primeira Igreja Presb. de BH<a href="{{route('public.progetto_2')}}" title="vai ao pr&amp;oacute;ximo projeto" class="fa fa-chevron-right"></a>
        </h1>
        <h2><i class="fa fa-home"></i>Design de Igrejas<br/>&#35; ProjetosIgrejasEvang&eacute;licas, &#35; Reformas, &#35; DesignDeIgrejas, &#35; DesignDeInterioresBH
        </h2>
        <h3>Revitalizaç&atilde;o da 1a. Igreja Presbiteriana de BH: valorizando a historia, regenerando vidas.
        </h3>
      </header>
      <div class="filetto"></div>
      <p>Inspirado nos atributos da Oliveira, como adaptação e regeneração, o escopo do projeto é externar saúde e vida. O ponto de partida foi a valorização da história e a tradição da instituição. O principal desafio é aprimorar a funcionalidade e revigorar as instalações para melhor atender aos usuários e à dinâmica do crescimento de atividades em proporção ao espaço.<br/><br/><span class="desc"><span class="bold">Conceito:</span> Oliveira<br/><span class="bold">Caracteristicas essenciais:</span> acessibilidade, versatilidade, acolhimento<br/><span class="bold">Demandas</span>: Design de interiores salão de eventos, banheiros públicos, cozinha, ambiente para café e paisagismo.<br/></span>
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

