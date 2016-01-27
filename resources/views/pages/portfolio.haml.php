@extends('layout.app')

@section('Title')
%title
 Portfólio de Simone Heringer 
@endsection

@section('MetaDescription')
%meta{:name => "description", :content => "Meu Portfólio - Conheça alguns dos meus trabalhos"}/
@endsection

@section('MetaKeywords')
%meta{:name => "keywords", :content => "Portfolio Simone Heringer, Projetos de Igrejas, Primeira Igreja presbiteriana, Projetos residenciais, Projetos de casas, reformas de casas, decoração de casas, inspiração para reformar a casa, Design de lojas, Ambientação, Paisagismo, Mobiliando a casa"}/
@endsection

@section('cssPagina')
%link{:rel => "stylesheet", :href => "{{asset('css/portfolio.css')}}", :type => "text/css"}/
@endsection

@section('content')

@include('pages.portfolio._partial')

@endsection


@section('jsPagina')
%script{:src => "{{asset('js/portfolio.min.js')}}", :type => "text/javascript"}
@endsection