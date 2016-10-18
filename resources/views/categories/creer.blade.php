@extends('layout')

@section('content')

  <div class="FormulaireCreer col-md-8">
    <form enctype="multipart/form-data" class="form-horizontal" action=' {{ route('categories.store') }} ' method='post'>


      @foreach ($errors->all() as $error)

        <div class="alert alert-warning alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <strong>Erreur!</strong> {{ $error }}
        </div>

      @endforeach




      {{ csrf_field() }} <!-- Jetton de sécurité Laravel -->
      <fieldset>
        <legend>Créer une catégorie</legend>
        <div class="form-group">
          <label for="inputTitre" class="col-lg-2 control-label">Titre</label>
          <div class="col-lg-10">
            <input name='inputTitre' class="form-control" id="inputTitre" placeholder="Titre du film" type="text">
          </div>
        </div>

        <div class="form-group">
          <label for="inputDesc" class="col-lg-2 control-label">Description</label>
          <div class="col-lg-10">
            <input name='inputDesc' class="form-control" id="inputDesc" placeholder="Description du film" type="text">
          </div>
        </div>

        <div class="form-group">
          <label for="inputImage" class="col-lg-2 control-label">Image</label>
          <div class="col-lg-10">
            <input accept="image/*" name='inputImage' class="form-control" id="inputImage" placeholder="URL de l'affiche du film" type="file">
          </div>
        </div>

        <div class="form-group">
          <div class="col-lg-10 col-lg-offset-2">
            <button type="submit" class="btn btn-primary pull-right cate"><i class="fa fa-save"></i>  Ajouter</button>
          </div>
        </div>

      </fieldset>
    </form>

  </div>























@endsection

@section('breadcrumb')
  @parent<li><a href="{{ route('categories.creer') }}">Creer une Catégorie</a></li>
@endsection
