@extends('layout')

@section('content')
  <div class="titre">
    <h3>Voir les Acteurs</h3>
  </div>
@endsection

@section('breadcrumb')
  @parent<li><a href="{{ route('acteurs.voir') }}">Voir un Acteur</a></li>
@endsection
