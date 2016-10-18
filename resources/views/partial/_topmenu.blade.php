<!-- NAV BAR -->
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><i class="fa fa-power-off fa-1x"></i></a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="active"><a href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a></li>
            <li><a href="{{ url('admin/about-us') }}">A propos</a></li>
            <li><a href="{{ url('admin/faq') }}">FAQ</a></li>
            <li><a href="{{ url('admin/concept') }}">Concept</a></li>
            <li><a href="{{ url('admin/contact') }}">Contact</a></li>
            <li><a href="{{ url('admin/ils-parlent-de-nous') }}">Ils parlent de Nous</a></li>
          </ul>


          {{-- <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <input class="form-control" placeholder="Search" type="text">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
          </form> --}}
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Films <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="{{ route('movies.index')}}">Index</a></li>
                <li><a href="{{ route('movies.creer')}}">Creer</a></li>
                <li><a href="{{ route('movies.editer')}}">Editer</a></li>
                <li><a href="{{ route('movies.voir')}}">Voir</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Catégories <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="{{ route('categories.index')}}">Index</a></li>
                <li><a href="{{ route('categories.creer')}}">Creer</a></li>
                <li><a href="{{ route('categories.editer')}}">Editer</a></li>
                <li><a href="{{ route('categories.voir')}}">Voir</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Acteurs <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="{{ route('acteurs.index')}}">Index</a></li>
                <li><a href="{{ route('acteurs.creer')}}">Creer</a></li>
                <li><a href="{{ route('acteurs.editer')}}">Editer</a></li>
                <li><a href="{{ route('acteurs.voir')}}">Voir</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Réalisateurs <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="{{ route('realisateur.index')}}">Index</a></li>
                <li><a href="{{ route('realisateur.creer')}}">Creer</a></li>
                <li><a href="{{ route('realisateur.editer')}}">Editer</a></li>
                <li><a href="{{ route('realisateur.voir')}}">Voir</a></li>
              </ul>
            </li>
            {{-- <li>Binvenue {{ Auth::user()->name }}</li> --}}
            <li><a href="{{ url('/logout')}}">Deconnexion</a></li>
          </ul>



        </div>
      </div>
</nav>
