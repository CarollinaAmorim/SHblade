@extends('./templates/index')

@section('Title')

<title>Portfólio de Simone Heringer</title>@stop

@section('MetaDescription')

<meta name="description" content="Meu Portfólio - Conheça alguns dos meus trabalhos"/>@stop

@section('MetaKeywords')

<meta name="keywords" content="Portfolio Simone Heringer, Projetos de Igrejas, Primeira Igreja presbiteriana, Projetos residenciais, Projetos de casas, reformas de casas, decoração de casas, inspiração para reformar a casa, Design de lojas, Ambientação, Paisagismo, Mobiliando a casa"/>@stop

@section('cssPagina')

<link rel="stylesheet" href="{{ asset('css/portfolio.css') }}" type="text/css"/>@stop

@section('content')

<article class="portfolio">
  <header>
    <h1>portf&oacute;lio <span>dos projetos</span>
    </h1>
  </header>
  <div class="filetto_titoli"></div>
  <p class="generale">Oferecemos uma ampla gama de soluções de Design de Interiores e paisagismo. Seja para espaços residenciais, comerciais, coorporativos, institucionais e o nosso grande diferencial: Design de Interiores para Igrejas Evangélicas. Abaixo alguns dos nosmelhores trabalhos que j&aacute; realizei. Escolha a categoria e conheça os projeto. Se quiser um orçamento, entre em contato para maiores detalhes.
  </p>
  <ul>
    <li><a href="#chiese" title=""><img src="#" alt=""/>
        <h2><span>categoria 01</span>Projetos para Igrejas Evang&eacute;licas
        </h2></a></li>
    <li><a href="#case" title=""><img src="#" alt=""/>
        <h2><span>categoria 02</span>Projetos para residencias
        </h2></a></li>
    <li><a href="#altro" title=""><img src="#" alt=""/>
        <h2><span>categoria 03</span>Outros projetos
        </h2></a></li>
    <li><a href="{{route('public.progetto_1')}}" title=""><img src="#" alt=""/>
        <h2><span>primeiro projeto</span>Accedi subito al primo progetto
        </h2></a></li>
  </ul>
  <article class="chiese">
    <header>
      <h2>Projetos para Igrejas Evang&eacute;licas
      </h2>
    </header>
    <div class="filetto_titoli"></div>
    <p class="specifico">Projetar igrejas é contemplar soluções que expressem a identidade cultural e doutrinária.
    </p>
    <div class="gruppo_immagini"><a href="{{route('public.progetto_1')}}" title="">
        <figure><img src="{{asset('img/progetto_a/min/min_ig_evangelica_primeira_presbiteriana_bh.jpg')}}" alt=""/>
          <figcaption>Nome del progetto
            <div class="pulsante">scopri
            </div>
          </figcaption>
        </figure></a><a href="{{route('public.progetto_2')}}" title="">
        <figure><img src="{{asset('img/progetto_a/min/min_ig_evangelica_melo_viana.jpg')}}" alt=""/>
          <figcaption>Nome del progetto
            <div class="pulsante">scopri
            </div>
          </figcaption>
        </figure></a><a href="{{route('public.progetto_3')}}" title="">
        <figure><img src="{{asset('img/progetto_a/min/min_ig_evangelica_monte_sinai.jpg')}}" alt=""/>
          <figcaption>Nome del progetto
            <div class="pulsante">scopri
            </div>
          </figcaption>
        </figure></a><a href="{{route('public.progetto_4')}}" title="">
        <figure><img src="{{asset('img/progetto_a/min/min_ig_evangelica_lajinha.jpg')}}" alt=""/>
          <figcaption>Nome del progetto
            <div class="pulsante">scopri
            </div>
          </figcaption>
        </figure></a></div>
  </article>
  <article class="case">
    <header>
      <h2>Projetos para residencias
      </h2>
    </header>
    <div class="filetto_titoli"></div>
  </article>
  <p class="specifico">Projetar residencias é atuar em modo decisivo no bem-estar de uma familia.
  </p>
  <div class="gruppo_immagini"><a href="{{route('public.progetto_5')}}" title="">
      <figure><img src="{{asset('img/progetto_a/min/min_res_bairro_lourdes.jpg')}}" alt=""/>
        <figcaption>Nome del progetto
          <div class="pulsante">scopri
          </div>
        </figcaption>
      </figure></a><a href="{{route('public.progetto_6')}}" title="">
      <figure><img src="{{asset('img/progetto_a/min/min_res_bairro_buritis2.jpg')}}" alt=""/>
        <figcaption>Nome del progetto
          <div class="pulsante">scopri
          </div>
        </figcaption>
      </figure></a><a href="{{route('public.progetto_7')}}" title="">
      <figure><img src="{{asset('img/progetto_a/min/min_res_madre_gertrudes.jpg')}}" alt=""/>
        <figcaption>Nome del progetto
          <div class="pulsante">scopri
          </div>
        </figcaption>
      </figure></a><a href="{{route('public.progetto_8')}}" title="">
      <figure><img src="{{asset('img/progetto_a/min/min_res_casa_do_musico.jpg')}}" alt=""/>
        <figcaption>Nome del progetto
          <div class="pulsante">scopri
          </div>
        </figcaption>
      </figure></a><a href="{{route('public.progetto_9')}}" title="">
      <figure><img src="{{asset('img/progetto_a/min/min_res_eldorado.jpg')}}" alt=""/>
        <figcaption>Nome del progetto
          <div class="pulsante">scopri
          </div>
        </figcaption>
      </figure></a><a href="{{route('public.progetto_10')}}" title="">
      <figure><img src="{{asset('img/progetto_a/min/min_res_bairro_buritis3.jpg')}}" alt=""/>
        <figcaption>Nome del progetto
          <div class="pulsante">scopri
          </div>
        </figcaption>
      </figure></a></div>
  <article class="altro">
    <header>
      <h2>Outros projetos
      </h2>
    </header>
    <div class="filetto_titoli"></div>
    <p class="specifico">Projetos coorporativos, institucionais.
    </p>
    <div class="gruppo_immagini"><a href="{{route('public.progetto_11')}}" title="">
        <figure><img src="{{asset('img/progetto_a/min/min_coorporativo_oab.jpg')}}" alt=""/>
          <figcaption>Nome del progetto
            <div class="pulsante">scopri
            </div>
          </figcaption>
        </figure></a><a href="{{route('public.progetto_12')}}" title="">
        <figure><img src="{{asset('img/progetto_a/min/min_loja_duia_adornos.jpg')}}" alt=""/>
          <figcaption>Nome del progetto
            <div class="pulsante">scopri
            </div>
          </figcaption>
        </figure></a><a href="{{route('public.progetto_13')}}" title="">
        <figure><img src="{{asset('img/progetto_a/min/min_escritorio_contabilidade.jpg')}}" alt=""/>
          <figcaption>Nome del progetto
            <div class="pulsante">scopri
            </div>
          </figcaption>
        </figure></a><a href="{{route('public.progetto_14')}}" title="">
        <figure><img src="{{asset('img/progetto_a/min/min_hall_cond_apora.jpg')}}" alt=""/>
          <figcaption>Nome del progetto
            <div class="pulsante">scopri
            </div>
          </figcaption>
        </figure></a></div>
  </article>
</article>@stop

@section('jsPagina')

<script src="{{ asset('js/portfolio.min.js')}}" type="text/javascript"></script>@stop

