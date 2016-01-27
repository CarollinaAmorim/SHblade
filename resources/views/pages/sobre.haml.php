@extends('layout.app')

@section('Title')
%title
 Sobre Simone Heringer, Designer de Interiores e Paisagismo 
@endsection

@section('MetaDescription')
%meta{:name => "description", :content => "Sobre Simone Heringer. Conheça mais sobre a Designer de Ambientes que está revolucionando os ambientes das Igrejas Evangélicas."}/
@endsection

@section('MetaKeywords')
%meta{:name => "keywords", :content => "Sobre Simone Heringer, Projetos Igrejas, Design de Igrejas evangélicas, reformas casas, design de interiores BH, design de ambientes, projeto de jardins, Designers Brasil, Designers de interiores BH"}/
@endsection

@section('cssPagina')
%link{:rel => "stylesheet", :href => "{{asset('css/sobre.css')}}", :type => "text/css"}/
@endsection

@section('content')

@include('pages.sobre._partial')

@endsection


@section('jsPagina')
%script{:src => "{{asset('js/sobre.min.js')}}", :type => "text/javascript"}
@endsection