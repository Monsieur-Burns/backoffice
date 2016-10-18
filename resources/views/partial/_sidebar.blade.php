<!-- Menu Sidebar -->

<div class="col-md-2">
  <ul id='sidebar' class="list-group">
    <li class="dropdown">
      <a href="#" class="list-group-item dropdown-toggle" data-toggle="dropdown" role="button">Films <span class="caret"></span>
      <ul class="dropdown-menu" role="menu">
        <li><a href="{{ route('movies.index')}}">Index</a></li>
        <li><a href="{{ route('movies.creer')}}">Creer</a></li>
        <li><a href="{{ route('movies.editer')}}">Editer</a></li>
        <li><a href="{{ route('movies.voir')}}">Voir</a></li>
      </ul>
    </li>
    <li class="dropdown">
      <a href="#" class="list-group-item dropdown-toggle" data-toggle="dropdown" role="button">Catégories <span class="caret"></span>
      <ul class="dropdown-menu" role="menu">
        <li><a href="{{ route('categories.index')}}">Index</a></li>
        <li><a href="{{ route('categories.creer')}}">Creer</a></li>
        <li><a href="{{ route('categories.editer')}}">Editer</a></li>
        <li><a href="{{ route('categories.voir')}}">Voir</a></li>
      </ul>
    </li>
    <li class="dropdown">
      <a href="#" class="list-group-item dropdown-toggle" data-toggle="dropdown" role="button">Acteurs <span class="caret"></span>
      <ul class="dropdown-menu" role="menu">
        <li><a href="{{ route('acteurs.index')}}">Index</a></li>
        <li><a href="{{ route('acteurs.creer')}}">Creer</a></li>
        <li><a href="{{ route('acteurs.editer')}}">Editer</a></li>
        <li><a href="{{ route('acteurs.voir')}}">Voir</a></li>
      </ul>
    </li>
    <li class="dropdown">
      <a href="#" class="list-group-item dropdown-toggle" data-toggle="dropdown" role="button">Réalisateurs <span class="caret"></span>
      <ul class="dropdown-menu" role="menu">
        <li><a href="{{ route('realisateur.index')}}">Index</a></li>
        <li><a href="{{ route('realisateur.creer')}}">Creer</a></li>
        <li><a href="{{ route('realisateur.editer')}}">Editer</a></li>
        <li><a href="{{ route('realisateur.voir')}}">Voir</a></li>
      </ul>
    </li>
    <li class="list-group-item">Recherche avancée</li>
    <li class="list-group-item">Se connecter</li>
  </ul>
</div>
