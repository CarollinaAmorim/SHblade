<!DOCTYPE html>
<html lang="pt-br" class="no-js">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google" content="notranslate">
    <!--Meta nameTemplate-->@yield('Title', '')
@yield('MetaDescription', '')
@yield('MetaKeywords', '')

    <meta name="author" content="Atemporale Design">
    <meta name="application-name" content="">
    <!--Meta name og-->
    <!--Meta name verify-->
    <meta name="google-site-verification" content="dbhJ1boOI8Eyz29DrSMAuVnpDdLDoI_mnMTHQGqe-G0">
    <!--Favicon.ico-->
    <link rel="shortcut icon" href="{{ asset('/img/favicon/favicon.ico') }}" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('/img/favicon/apple_touch_icon_57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('/img/favicon/apple_touch_icon_60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('/img/favicon/apple_touch_icon_72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('/img/favicon/apple_touch_icon_76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('/img/favicon/apple_touch_icon_114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('/img/favicon/apple_touch_icon_120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('/img/favicon/apple_touch_icon_144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('/img/favicon/apple_touch_icon_152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/img/favicon/apple_touch_icon_180.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('/img/favicon/favicon_16.png')}}" sizes="16x16">
    <link rel="icon" type="image/png" href="{{ asset('/img/favicon/favicon_32.png')}}" sizes="32x32">
    <link rel="icon" type="image/png" href="{{ asset('/img/favicon/favicon_96.png')}}" sizes="96x96">
    <link rel="icon" type="image/png" href="{{ asset('/img/favicon/android_chrome_192.png')}}" sizes="192x192">
    <meta name="msapplication-square70x70logo" content="{{ asset('/img/favicon/smalltile.png') }}">
    <meta name="msapplication-square150x150logo" content="{{ asset('/img/favicon/mediumtile.png') }}">
    <meta name="msapplication-wide310x150logo" content="{{ asset('/img/favicon/widetile.png') }}">
    <meta name="msapplication-square310x310logo" content="{{ asset('/img/favicon/largetile.png') }}">
    <!--Page CSS-->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">@yield('cssPagina', '')

    <!--Librerie js-->
    <script src="{{asset('bower/jquery/dist/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('bower/html5shiv/dist/html5shiv.min.js')}}" type="text/javascript"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
    <!--Script interni per pagina-->@yield('jsPagina', '')

  </head>
  <body itemtype="http://schema.org/HomeAndConstructionBusiness" itemscope>
    <!--contenuto centrale-->
    <section role="main" class="main">@yield('content', '')

    </section>
    <!--bordo superiore bianco-->
    <div id="fascia_logo"><a href="{{ route('public.index') }}" title="#"><img src="{{asset('/img/layout/logo_template_esteso.png')}}" role="logo" alt=""></a></div>
    <!--bordo inferiore bianco-->
    <footer>
      <address>Entre em contato<span class="fa fa-phone"></span>(31) 2510 - 4372
      </address>
    </footer>
    <!--bordo laterale sinistro bianco-->
    <header role="navigation">
      <div id="espandi_menu" role="button"><img src="{{asset('/img/layout/icona_menu_apri.png')}}" alt="" role="icon" whith="100%" height="100%"><img src="{{asset('/img/layout/icona_menu_chiudi.png')}}" alt="" role="icon" whith="100%" height="100%"></div>
      <nav id="menu" role="menu"><img src="{{asset('/img/layout/logo_template_esteso.png')}}" role="logo" alt="">
        <ul role="menubar" class="internal">
          <li role="menuitem"><a href="{{ route('public.index') }}" role="link" title="">home</a></li>
          <li role="menuitem"><a href="{{ route('public.sobre') }}" role="link" title="">sobre mim</a></li>
          <li role="menuitem"><a href="{{ route('public.processo') }}" role="link" title="">processo</a></li>
          <li role="menuitem"><a href="{{ route('public.servizi') }}" role="link" title="">servi&ccedil;os</a></li>
          <li role="menuitem"><a href="{{ route('public.portfolio') }}" role="link" title="">portf&oacute;lio</a></li>
          <li role="menuitem"><a href="{{ route('public.contatti') }}" role="link" title="">contato</a></li>
        </ul>
        <ul role="menubar" class="external">
          <li role="menuitem"><a href="#" role="link" title="" target="_blank" class="fa fa-facebook-square"></a></li>
          <li role="menuitem"><a href="#" role="link" title="" target="_blank" class="fa fa-instagram"></a></li>
        </ul>
      </nav>
    </header>
    <!--bordo laterale destro bianco-->
    <div id="barra_destra">
      <div class="contextual_nav">
        <ul role="navigation">
          <li role="prev" class="vs-prev fa fa-angle-up"></li>
          <li role="button" class="cerchio active"></li>
          <li role="button" class="cerchio"></li>
          <li role="button" class="cerchio"></li>
          <li role="button" class="cerchio"></li>
          <li role="button" class="cerchio"></li>
          <li role="button" class="cerchio"></li>
          <li role="next" class="vs-next fa fa-angle-down"></li>
        </ul>
      </div>
      <!--Google Analytics-->
    </div>
    <script type="text/javascript">
      (function (i, s, o, g, r, a, m) {
          i['GoogleAnalyticsObject'] = r;
          i[r] = i[r] || function () {
                      (i[r].q = i[r].q || []).push(arguments)
                  }, i[r].l = 1 * new Date();
          a = s.createElement(o),
                  m = s.getElementsByTagName(o)[0];
          a.async = 1;
          a.src = g;
          m.parentNode.insertBefore(a, m)
      })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
      
      ga('create', 'UA-71565044-1', 'auto');
      ga('send', 'pageview');
    </script>
  </body>
</html>