@extends('layout.app')

@section('Title')
%title
 Página contato - Simone Heringer Design de Ambientes e Paisagismo 
@endsection

@section('MetaDescription')
%meta{:name => "description", :content => "Informações, contato e orçamentos. Entre em contato com Simone Heringer."}/
@endsection

@section('MetaKeywords')
%meta{:name => "keywords", :content => "Contato, Design de Interiores BH, Decoração BH, orçamento design de interiores, Site Decoração, design de ambientes, projetos de jardins, projetos igrejas evangélicas, arquitetura de interiores igrejas evangelicas, BH, Site Designers BH"}/
@endsection

@section('cssPagina')
%link{:rel => "stylesheet", :href => "{{asset('css/contatti.css')}}", :type => "text/css"}/
@endsection

@section('content')

@include('pages.contatti._partial')

@endsection


@section('jsPagina')
%script{:src => "{{asset('js/contatti.min.js')}}", :type => "text/javascript"}
@endsection