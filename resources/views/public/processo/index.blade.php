@extends('./templates/index')

@section('Title')

<title>Processo Criativo da Designer Simone Heringer</title>@stop

@section('MetaDescription')

<meta name="description" content="Por traz de tanta criatividade existe um processo. Qual será? Simone Heringer mostra o seu particular método para desenvolver seus incrèiveis projetos."/>@stop

@section('MetaKeywords')

<meta name="keywords" content="metodo design de interiores, projetos para Igrejas Evangelicas, reformas igrejas evangelicas, reforma casas, decoração de lojas, design de interiores BH, processo criativo decoração, simone heringer, igrejas evangelicas interior de minas, projetos jardins"/>@stop

@section('cssPagina')

<link rel="stylesheet" href="{{ asset('css/processo.css') }}" type="text/css"/>@stop

@section('content')

<article id="processo" role="region">
  <header role="heading">
    <h1>processo<span> criativo</span>
    </h1>
  </header>
  <div class="filetto_titoli"></div>
  <p class="generale">A personalidade, sonhos, valores, idealiza&ccedil;&otilde;es e inclusive excentricidades de cada um, nos tornam únicos. A compreens&atilde;o deste universo particular, familiar ou institucional é o ponto de partida para o processo criativo de Design de Ambientes, que &eacute; antes de tudo um trabalho de traduç&atilde;o criativa. Assim, para criar ambientes lindos, confort&aacute;veis e compatíveis para cada tipo de cliente, usu&aacute;rio, comunidade, e/ou publico-alvo, &eacute;  fundamental captar a essência do que o cliente quer, e muitas vezes n&atilde;o sabe expressar e  até mesmo necessidades que ainda n&atilde;o tenha percebido. O projeto de design de ambientes  é composto das etapas a seguir e pode variar de acordo com os serviços contratados:
  </p>
  <ul>
    <li>
      <h2><span class="numero">01.</span>Estudos preliminares</h2>
    </li>
    <li title="qualcosa">
      <h2><span class="numero">02.</span>Anteprojeto</h2>
    </li>
    <li>
      <h2><span class="numero">03.</span>Projeto executivo</h2>
    </li>
    <li>
      <h2><span class="numero">04.</span>Acompanhamento da execução</h2>
    </li>
  </ul>
</article>@stop

@section('jsPagina')

<script src="{{ asset('js/processo.min.js')}}" type="text/javascript"></script>@stop

