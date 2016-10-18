@extends('layout')

@section('content')
  <div class="titre">
    <h3>Voir des Films</h3>
  </div>
@endsection

@section('breadcrumb')
  @parent<li><a href="{{ route('movies.voir') }}">Voir un film</a></li>
@endsection
