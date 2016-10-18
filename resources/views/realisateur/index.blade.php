@extends('layout')

@section('content')
  <div class="titre">
    <h3>Liste des Réalisateurs</h3>
  </div>

  <div class="col-md-10">

    <table class="table table-striped table-hover ">
      <thead>
        <tr class="active">
          <th class="tabID">ID</th>
          <th class="tabNameAct">Nom complet</th>
          <th class="tabImageAct">Image</th>
          <th class="tabDobAct">Date de naissance</th>
          <th class="tabBioAct">Biographie</th>

          <th class="tabActionsCat">Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($realisateur as $key => $realisateurs)
        <tr>
          <td class="tabID">{{$realisateurs->id}}</td>
          <td class="tabNameAct">{{$realisateurs->firstname}} {{$realisateurs->lastname}}</td>
          <td class="tabImageAct"> <img src="{{$realisateurs->image}}" /></td>
          <td class="tabDobAct">{{$realisateurs->dob}}</td>
          <td class="tabBioAct">{{ str_limit(strip_tags($realisateurs->biography), 500) }}</td>

          <td class="tabActionsCat">
            <a href="#"><span class="label label-info">Créer</span></a>
            <a href="#"><span class="label label-success">Voir</span></a>
            <a href="{{ route('realisateur.suppRealisateur', ['id' => $realisateurs->id]) }}" onclick="return confirm ('Voulez-vous vraiment supprimer ce réalisateur ?')"><span class="label label-danger">Supprimer</span></a>
          </td>
        </tr>
      @endforeach
    </table>
  </div>






@endsection

@section('breadcrumb')
  @parent<li><a href="{{ route('realisateur.index') }}">Liste des Réalisateurs</a></li>
@endsection
