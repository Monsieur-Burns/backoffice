@extends('layout')

@section('content')
  <div class="titre">
    <h3>Liste des Films</h3>
  </div>

  <div class="col-md-5">
    <form class="" action="{{ route('movies.rechercheFilm')}}" method="get">
      <div class="form-inline">
        <input class="form-control" type="search" name="rechercheFilm" placeholder="Rechercher un film">
        <button class="btn btn-default" type="submit"><i class="fa fa-search"></i> Rechercher</button>
      </div>
    </form>
  </div>

  <div class="bouton pull-right">
    <a href="{{ route('movies.creer')}}"><button class="btn btn-default ajout"type="button" name="button">Ajouter un film</button></a>
  </div>


<div class="col-md-10">
  <br>
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
        <th class="tabTitre">Titres</th>
        <th class="tabImage">Images</th>
        <th class="tabSynopsis">Synopsis</th>
        <th class="tabActions">Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($movies as $key => $movie)

      <tr>
        <td class="tabID">{{$movie->id}}</td>
        <td class="tabTitre">{{$movie->title}}</td>
        <td class="tabImages"><img src="{{$movie->image}}"/></td>
        <td class="tabSynopsis">{{ strip_tags($movie->synopsis) }}</td>
        <td class="tabActions">
          <a href="#"><span class="label label-info">Créer</span></a>
          <a href="#"><span class="label label-success">Voir</span></a>
          <a href="{{ route('movies.suppMovies', ['id' => $movie->id]) }} onclick="return confirm ('Voulez-vous vraiment supprimer ce réalisateur ?')><span class="label label-danger">Supprimer</span></a>
          @if($movie->visible == 0)
            <a href="{{ route('movies.setVisible', ['id' => $movie->id, 'visible' => 1]) }}"><span class="label label-warning">Visibilité</span></a>
          @else
            <a href="{{ route('movies.setVisible', ['id' => $movie->id, 'visible' => 0]) }}"><span class="label label-info">Visibilité</span></a>
          @endif
          @if($movie->cover == 0)
            <a href="{{ route('movies.setCover', ['id' => $movie->id, 'cover' => 1]) }}"><span class="label label-warning">Cover</span></a>
          @else
            <a href="{{ route('movies.setCover', ['id' => $movie->id, 'cover' => 0]) }}"><span class="label label-info">Cover</span></a>
          @endif

        </td>
      </tr>

    @endforeach


    </tbody>
  </table>
</div>

@endsection

@section('breadcrumb')
  @parent<li><a href="{{ route('movies.index') }}">Liste des films</a></li>
@endsection
