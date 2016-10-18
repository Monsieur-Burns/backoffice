@extends('layout')

@section('content')
  <div class="titre">
    <h3>Liste des Acteurs</h3>
  </div>

  <div class="col-md-10">

    @if(session('success'))
      <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
         {{ session('success') }}
      </div>
    @endif

    <table class="table table-striped table-hover ">
      <thead>
        <tr class="active">
          <th class="tabID">ID</th>
          <th class="tabNameAct">Nom complet</th>
          <th class="tabImageAct">Image</th>
          <th class="tabDobAct">Date de naissance</th>
          <th class="tabCityAct">Lieu de naissance</th>
          <th class="tabBioAct">Biographie</th>

          <th class="tabActionsCat">Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($acteurs as $key => $acteur)
        <tr>
          <td class="tabID">{{$acteur->id}}</td>
          <td class="tabNameAct">{{$acteur->firstname}} {{$acteur->lastname}}</td>
          <td class="tabImageAct"> <img src="{{$acteur->image}}" /></td>
          <td class="tabDobAct">{{$acteur->dob}}</td>
          <td class="tabCityAct">{{$acteur->city}}</td>
          <td class="tabBioAct">{{ str_limit(strip_tags($acteur->biography), 500) }}</td>

          <td class="tabActionsCat">
            <a href="#"><span class="label label-info">Créer</span></a>
            <a href="#"><span class="label label-success">Voir</span></a>
            <a href="{{ route('acteurs.suppActeurs', ['id' => $acteur->id]) }}" onclick="return confirm ('Voulez-vous vraiment supprimer cet acteur ?')"><span class="label label-danger">Supprimer</span></a>
          </td>
        </tr>
      @endforeach
    </table>
  </div>

@endsection

@section('breadcrumb')
  @parent<li><a href="{{ route('acteurs.index') }}">Liste des Acteurs</a></li>
@endsection
