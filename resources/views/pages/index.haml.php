@extends('layout.app')

@section('Title')
%title
 Simone Heringer Designer - P&aacute;gina inicial do site   
@endsection

@section('MetaDescription')
%meta{:name => "description", :content => "Simone Heringer Designer - P&aaccute;gina inicial"}/
@endsection

@section('MetaKeywords')
%meta{:name => "keywords", :content => "Simone Heringer, Design de Interiores BH, Decoração BH, Reforma de casas, Escritórios de Design BH, Design de Ambientes, projetos de jardins, Projetos Igrejas Evangélicas, Site Designers de Interiores BH, Belo Horizonte"}/
@endsection

@section('cssPagina')
%link{:rel => "stylesheet", :href => "{{asset('css/home.css')}}", :type => "text/css"}/
@endsection

@section('content')

@include('pages.home._partial1')


@endsection


@section('jsPagina')
%script{:src => "https://cdnjs.cloudflare.com/ajax/libs/hammer.js/2.0.4/hammer.min.js", :type => "text/javascript"}
%script{:src => "https://cdnjs.cloudflare.com/ajax/libs/velocity/1.2.2/velocity.min.js", :type => "text/javascript"}
%script{:src => "https://cdnjs.cloudflare.com/ajax/libs/velocity/1.2.2/velocity.ui.min.js", :type => "text/javascript"}
%script{:src => "{{asset('js/home.min.js')}}", :type => "text/javascript"}
@endsection