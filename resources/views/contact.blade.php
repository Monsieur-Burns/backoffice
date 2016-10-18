@extends('layout')

@section('content')
  <div class="titre">
    <h3>Contact</h3>
  </div>
@endsection

@section('breadcrumb')
  @parent<li><a href="{{ route('contact') }}">Contact</a></li>
@endsection
