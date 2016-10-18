@extends('layout')

@section('content')
  <div class="titre">
    <h3>Editer des Acteurs</h3>
  </div>
@endsection

@section('breadcrumb')
  @parent<li><a href="{{ route('acteurs.editer') }}">Editer un Acteurs</a></li>
@endsection
