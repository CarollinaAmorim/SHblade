@extends('layout.app')

@section('Title')
%title
 home page
@endsection

@section('MetaDescription')
%meta{:name => "description", :content => "aaaa"}/
@endsection

@section('MetaKeywords')
%meta{:name => "keywords", :content => "a, a, a, a, a, a, a, a, a"}/
@endsection

@section('cssPagina')
%link{:rel => "stylesheet", :href => "{{asset('css/progetto_semplice.css')}}", :type => "text/css"}/
:css
 .vs-section:nth-of-type(1) { background-image: url('{{ asset('img/') }}'); }
 .vs-section:nth-of-type(2) { background-image: url('{{ asset('img/') }}'); }
 .vs-section:nth-of-type(3) { background-image: url('{{ asset('img/') }}'); }
 .vs-section:nth-of-type(4) { background-image: url('{{ asset('img/') }}'); }
 .vs-section:nth-of-type(3) { background-image: url('{{ asset('img/') }}'); }
 .vs-section:nth-of-type(4) { background-image: url('{{ asset('img/') }}'); }
@endsection

@section('content')

@include('pages.progetti._prog4')

@endsection


@section('jsPagina')
%script{:src => "{{asset('js/progetto.min.js')}}", :type => "text/javascript"}
@endsection