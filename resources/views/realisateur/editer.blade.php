@extends('layout')

@section('content')
  <div class="titre">
    <h3>Editer des Réalisateurs</h3>
  </div>
@endsection

@section('breadcrumb')
  @parent<li><a href="{{ route('realisateur.editer') }}">Editer un Réalisateurs</a></li>
@endsection
