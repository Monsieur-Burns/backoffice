@extends('layout')

@section('breadcrumb')
  @parent<li><a href="{{ route('welcome') }}">About</a></li>
@endsection

@section('content')
  <div class="titre">
    <h3>A propos</h3>
  </div>
@endsection
