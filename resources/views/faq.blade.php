@extends('layout')

@section('content')
  <div class="titre">
    <h3>FAQ</h3>
  </div>
@endsection

@section('breadcrumb')
  @parent<li><a href="{{ route('faq') }}">F.A.Q</a></li>
@endsection
