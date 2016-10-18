@extends('layout')

@section('content')
  <div class="titre">
    <h3>Editer des Catégories</h3>
  </div>
@endsection

@section('breadcrumb')
  @parent<li><a href="{{ route('categories.editer') }}">Editer une Catégorie</a></li>
@endsection
