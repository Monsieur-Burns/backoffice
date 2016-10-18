@extends('layout')

@section('content')
  <div class="titre">
    <h3>Voir les Catégories</h3>
  </div>
@endsection

@section('breadcrumb')
  @parent<li><a href="{{ route('categories.voir') }}">Voir une Catégorie</a></li>
@endsection
