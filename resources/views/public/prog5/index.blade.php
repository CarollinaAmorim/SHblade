@extends('./templates/index')

@section('Title')

<title>Design de Igrejas - Primeira Igreja Presbiteriana de Belo Horizonte</title>@stop

@section('MetaDescription')

<meta name="description" content="Projeto Primeira Igreja Presbiteriana"/>@stop

@section('MetaKeywords')

<meta name="keywords" content="Reforma de Igreja, Projeto igrejas evangelicas, Projeto de igrejas, Design de interiores liturgicos BH, Decoraçao de Igrejas, Simone Heringer, Design de Interiores BH, Decoraçao BH"/>@stop

@section('cssPagina')

<link rel="stylesheet" href="{{ asset('css/progetto_completo.css') }}" type="text/css"/>
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
        <h1>Ap. Bairro de Lourdes BH<a href="{{route('public.progetto_6')}}" title="vai ao pr&amp;oacute;ximo projeto" class="fa fa-chevron-right"></a><a href="{{route('public.progetto_4')}}" title="volta ao projeto anterior" class="fa fa-chevron-left"></a>
        </h1>
        <h2><i class="fa fa-home">Projetos Residenciais</i><br/>&#35;designDeInterioresBH, &#35;ReformasEmCasas, &#35;ProjetosCasas, &#35;Decora&ccedil;&atilde;oDeInteriores,
        </h2>
        <h3>Breve abstract breve descrizione del progetto Breve abstract 
        </h3>
      </header>
      <div class="filetto"></div>
      <p>O apartamento antigo foi todo reformado para se adaptar às preferências e necessidades dos novos proprietários. Quatro meses de obras e todos os imprevistos valeram a pena: o resultado foi surpreendente! Os revestimentos antigos deram lugar a outros que foram minuciosamente escolhidos para agradar os novos proprietários: desde a sofisticação e sobriedade dos banheiros e pisos à personalidade marcante com um toque de humor da cozinha.
      </p>
    </article>
    <article class="contenuti_concept">
      <header></header>
      <p>AAA
      </p>
    </article>
    <article class="contenuti_dettagli1">
      <header></header>
      <p>BBB
      </p>
    </article>
    <article class="contenuti_dettagli2">
      <header></header>
      <p>CCC
      </p>
    </article>
  </div>
  <ul id="navigazione" class="visible">
    <li id="descrizione" class="cambia_scheda nonselezionato">
      <div class="ruota">Conceito
      </div>
    </li>
    <li id="concept" class="cambia_scheda nonselezionato">
      <div class="ruota">Solu&ccedil;&atilde;o
      </div>
    </li>
    <li id="dettagli1" class="cambia_scheda nonselezionato">
      <div class="ruota">Detalhes
      </div>
    </li>
    <li id="dettagli2" class="cambia_scheda nonselezionato">
      <div class="ruota">Detalhes
      </div>
    </li>
    <li id="apri_chiudi" class="nonselezionato fa"></li>
  </ul>
</section>@stop

@section('jsPagina')

<script src="https://cdnjs.cloudflare.com/ajax/libs/hammer.js/2.0.4/hammer.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/velocity/1.2.2/velocity.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/velocity/1.2.2/velocity.ui.min.js" type="text/javascript"></script>
<script src="{{ asset('js/progetto.min.js')}}" type="text/javascript"></script>@stop

