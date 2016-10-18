@extends('layout')

@section('content')
  <div class="titre">
    <h3>Editer des Films</h3>
  </div>
@endsection

@section('breadcrumb')
  @parent<li><a href="{{ route('movies.editer') }}">Editer un film</a></li>
@endsection
