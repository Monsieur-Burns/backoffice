@extends('layout')

@section('titrePage')
  @parent - Ils parlent de nous
@endsection

@section('content')
  <div class="titre">
    <h3>Kit de Presse</h3>
  </div>
@endsection

@section('metadesc')
  Ils ont parlé de nous
@endsection

@section('breadcrumb')
  @parent<li><a href="{{ route('ils-parlent-de-nous') }}">Ils parlent de nous</a></li>
@endsection
