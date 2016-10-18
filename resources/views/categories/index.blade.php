@extends('layout')

@section('content')
  <div class="titre">
    <h3>Liste des Catégories</h3>
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
          <th class="tabTitreCat">Titres</th>
          <th class="tabDescCat">Description</th>
          <th class="tabImageCat">Images</th>
          <th class="tabActionsCat">Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($categories as $key => $categorie)
        <tr>
          <td class="tabID">{{$categorie->id}}</td>
          <td class="tabTitreCat">{{$categorie->title}}</td>
          <td class="tabDescCat">{{$categorie->description}}</td>
          <td class="tabImageCat"><img src="{{$categorie->image}}"/></td>
          <td class="tabActionsCat">
            <a href="#"><span class="label label-info">Créer</span></a>
            <a href="#"><span class="label label-success">Voir</span></a>
            <a href="{{ route('categories.suppCategories', ['id' => $categorie->id]) }}" onclick="return confirm ('Voulez-vous vraiment supprimer la categorie ?')"><span class="label label-danger">Supprimer</span></a>
          </td>
        </tr>

      @endforeach


      </tbody>
    </table>
  </div>




@endsection

@section('breadcrumb')
  @parent<li><a href="{{ route('categories.index') }}">Liste des Catégories</a></li>
@endsection
