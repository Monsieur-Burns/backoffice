@extends('layout')

@section('titrePage')
  @parent - Concept
@endsection

@section('content')
  <div class="titre">
    <h3>Concept</h3>
  </div>
@endsection

@section('css')
  @parent
  <link rel="stylesheet" href="{{ asset('css/concept.css')}}">
@endsection

@section('js')
  @parent
  <script src="{{ asset('js/concept.js')}}"></script>
@endsection

@section('metadesc')
  Description du concept
@endsection

@section('breadcrumb')
  @parent<li><a href="{{ route('concept') }}">Concept</a></li>
@endsection
