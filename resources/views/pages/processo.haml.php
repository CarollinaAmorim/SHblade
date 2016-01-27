@extends('layout.app')

@section('Title')
%title
 Processo Criativo da Designer Simone Heringer
@endsection

@section('MetaDescription')
%meta{:name => "description", :content => "Por traz de tanta criatividade existe um processo. Qual será? Simone Heringer mostra o seu particular método para desenvolver seus incrèiveis projetos."}/
@endsection

@section('MetaKeywords')
%meta{:name => "keywords", :content => "metodo design de interiores, projetos para Igrejas Evangelicas, reformas igrejas evangelicas, reforma casas, decoração de lojas, design de interiores BH, processo criativo decoração, simone heringer, igrejas evangelicas interior de minas, projetos jardins"}/
@endsection

@section('cssPagina')
%link{:rel => "stylesheet", :href => "{{asset('css/processo.css')}}", :type => "text/css"}/
@endsection

@section('content')

@include('pages.processo._partial')

@endsection


@section('jsPagina')
%script{:src => "{{asset('js/processo.min.js')}}", :type => "text/javascript"}
@endsection