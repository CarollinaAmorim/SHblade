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
        <h1>Igreja Presb. de Lajinha/MG<a href="{{route('public.progetto_5')}}" title="vai ao pr&amp;oacute;ximo projeto" class="fa fa-chevron-right"></a><a href="{{route('public.progetto_3')}}" title="volta ao projeto anterior" class="fa fa-chevron-left"></a>
        </h1>
        <h2><i class="fa fa-home">Design de Igrejas</i><br/>&#35;ProjetosIgrejasEvang&eacute;licas, &#35;Reformas, &#35;DesignDeIgrejasMG, &#35;Lajinha-MG
        </h2>
        <h3>Igreja de Lajinha-MG: Edificando Vidas.
        </h3>
      </header>
      <div class="filetto"></div>
      <p>O propósito do projeto é fazer uma analogia do processo construtivo com a edificação espiritual da igreja, que é constante. A estrutura e os materiais de construção aparentes são evidenciados para lembrar cotidianamente da obra espiritual de Deus na vida da Igreja.
      </p>
    </article>
    <article class="contenuti_concept">
      <header></header>
      <p>O grande desafio de projetar o novo templo comemorativo dos 100 anos desta igreja foi aceito por nossa equipe com muita satisfação e responsabilidade.<br /><br />Um templo é em primeiro lugar um santuário ao Deus altíssimo e também representa a igreja (comunidade) que se reúne neste recinto. Projetar o templo de uma igreja tradicional e centenária que tem a preocupação de ser atual e contemporânea nos levou a confrontar paradoxos.<br /><br />O resultado foi um paralelo do templo antigo, com influência no estilo clássico,  que representa a história da instituição e o templo novo: um olhar para o futuro, no estilo contemporâneo e muito despojado, se adornando da simplicidade dos mateirias construtivos e apresentando a circulação e confraternização dos usuários no seu inteiror, como o mais importante elemento de composição.
      </p>
    </article>
    <article class="contenuti_dettagli1">
      <header></header>
      <p>A solução em design foi o diálogo entre estilos e épocas, história e visão, respeito e ousadia. Sendo assim, o templo antigo dá lugar a um templo novo, elaborado para atender as demandas atuais e futuras, oferecendo novas tecnologias e parâmetros de conforto. Mas toda a memória de sua história será preservada no prédio antigo, que terá a nova função de salão social e um abrigará um singelo museu.
      </p>
    </article>
    <article class="contenuti_dettagli2">
      <header></header>
      <p>Os jardins no estilo tropical possiblitam a contemplação e o relaxamento, contribuindo para o   papel terapêutico da igreja a vida das pessoas.
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

<script src="{{ asset('js/progetto.min.js')}}" type="text/javascript"></script>@stop

