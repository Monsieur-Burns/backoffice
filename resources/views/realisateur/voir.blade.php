@extends('layout')

@section('content')
  <div class="titre">
    <h3>Voir les Réalisateurs</h3>
  </div>
@endsection

@section('breadcrumb')
  @parent<li><a href="{{ route('realisateur.voir') }}">Voir un Réalisateurs</a></li>
@endsection
