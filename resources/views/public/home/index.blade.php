@extends('./templates/index')

@section('Title')

<title>Simone Heringer Designer - P&aacute;gina inicial do site</title>@stop

@section('MetaDescription')

<meta name="description" content="Simone Heringer Designer - P&amp;aaccute;gina inicial"/>@stop

@section('MetaKeywords')

<meta name="keywords" content="Simone Heringer, Design de Interiores BH, Decoração BH, Reforma de casas, Escritórios de Design BH, Design de Ambientes, projetos de jardins, Projetos Igrejas Evangélicas, Site Designers de Interiores BH, Belo Horizonte"/>@stop

@section('cssPagina')

<link rel="stylesheet" href="{{ asset('css/home.css') }}" type="text/css"/>@stop

@section('content')

<div class="vs-slider">
  <article role="region" class="vs-section active">
    <header id="id1" role="heading">
      <h1><span class="left"></span><span class="right"></span>Ambientes memor&aacute;veis<br/>
      </h1>
      <h3>para uma vida de qualidade inigualável
      </h3>
      <div class="lineacentrale"></div><br/><a href="{{route('public.portfolio')}}" title="Conhe&amp;ccedil;a mais sobre como podemos melhorar a sua qualidade de vida" class="homelink">Conhe&ccedil;a o nosso portf&oacute;lio</a>
    </header>
  </article>
  <article role="region" class="vs-section">
    <header id="id2" role="heading">
      <h2><span class="left"></span><span class="right"></span>Templos inesquec&iacute;veis
      </h2>
      <h3>para uma completa experiência com Deus
      </h3>
      <div class="lineacentrale"></div><br/><a href="{{route('public.portfolio')}}" title="Clique para conhecer sobre nossos projetos de Igrejas." class="homelink">Descubra o Design de Igrejas</a>
    </header>
  </article>
  <article role="region" class="vs-section">
    <header id="id3" role="heading">
      <h2><span class="left"></span><span class="right"></span>Solu&ccedil;&otilde;es Inteligentes
      </h2>
      <h3>para economizar, stress, tempo e dinheiro
      </h3>
      <div class="lineacentrale"></div><br/><a href="{{route('public.servizi')}}" title="Clique e conhe&amp;ccedil;a nossas op&amp;ccedil;&amp;otilde;es" class="homelink">Encontre a solu&ccedil;&atilde;o certa para voc&ecirc;</a>
    </header>
  </article>
  <article role="region" class="vs-section">
    <header id="id4" role="heading">
      <h2><span class="left"></span><span class="right"></span>Entre em contato
      </h2>
      <h3>seja o seu espaço residencial, liturgico, comercial, coorporativo e/ou institucional
      </h3>
      <div class="lineacentrale"></div><br/><br/><a href="{{route('public.contatti')}}" title="Vamos realizar o seu projeto hoje?Entre em contato!" class="homelink">Vamos fazer acontecer?</a>
    </header>
  </article>
</div>@stop

@section('jsPagina')

<script src="https://cdnjs.cloudflare.com/ajax/libs/hammer.js/2.0.4/hammer.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/velocity/1.2.2/velocity.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/velocity/1.2.2/velocity.ui.min.js" type="text/javascript"></script>
<script src="{{ asset('js/home.min.js')}}" type="text/javascript"></script>@stop

