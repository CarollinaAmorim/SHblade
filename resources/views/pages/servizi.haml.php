@extends('layout.app')

@section('Title')
%title
 Pacotes e Serviços - Simone Heringer  
@endsection

@section('MetaDescription')
%meta{:name => "description", :content => "Conheças os pacotes de serviços exclusivos e personalizáveis de Simone Heringer"}/
@endsection

@section('MetaKeywords')
%meta{:name => "keywords", :content => "serviços design de interiores, serviços simone heringer, pacotes design, consultoria decoração BH, projetos luminotécnicos, projetos de iluminação, projeto de igrejas, personal shopper decoração, reformas ambientes bh, design de moveis, moveis planejados"}/
@endsection

@section('cssPagina')
%link{:rel => "stylesheet", :href => "{{asset('css/servizi.css')}}", :type => "text/css"}/
@endsection

@section('content')

@include('pages.servizi._partial')

@endsection


@section('jsPagina')
%script{:src => "{{asset('js/servizi.min.js')}}", :type => "text/javascript"}
@endsection