@extends('layout')

@section('content')

  <div class="FormulaireCreer col-md-8">
    <form class="form-horizontal" action=' {{ route('acteurs.store') }} ' method='post'>




      {{ csrf_field() }} <!-- Jetton de sécurité Laravel -->
      <fieldset>
        <legend>Créer un Acteur</legend>
        <div class="form-group">
          <label for="inputPrenom" class="col-lg-2 control-label">Prénom</label>
          <div class="col-lg-10">
            <input name='inputPrenom' class="form-control" id="inputPrenom" placeholder="Prenom de l'acteur" type="text">
          </div>
        </div>

        <div class="form-group">
          <label for="inputNom" class="col-lg-2 control-label">Nom</label>
          <div class="col-lg-10">
            <input name='inputNom' class="form-control" id="inputNom" placeholder="Nom de l'acteur" type="text">
          </div>
        </div>

        <div class="form-group">
          <label for="inputDOB" class="col-lg-2 control-label">Date de naissance</label>
          <div class="col-lg-10">
            <input name='inputDOB' class="form-control" id="inputDOB" placeholder="dd/mm/YYYY" type="text">
          </div>
        </div>

        <div class="form-group">
          <label for="inputCity" class="col-lg-2 control-label">Ville de naissance</label>
          <div class="col-lg-10">
            <input name='inputCity' class="form-control" id="inputCity" placeholder="Ville de naissance" type="text">
          </div>
        </div>

        <div class="form-group">
          <label for="inputImage" class="col-lg-2 control-label">Image</label>
          <div class="col-lg-10">
            <input name='inputImage' class="form-control" id="inputImage" placeholder="URL de l'image" type="text">
          </div>
        </div>

        <div class="form-group">
          <label for="inputNationalite" class="col-lg-2 control-label">Nationalité</label>
          <div class="col-lg-10">
            <input name='inputNationalite' class="form-control" id="inputNationalite" placeholder="Nationalité" type="text">
          </div>
        </div>

        <div class="form-group">
          <label for="textArea" class="col-lg-2 control-label">Biographie</label>
          <div class="col-lg-10">
            <textarea name='inputBio' class="form-control" rows="3" id="textArea" placeholder="Biographie de l'acteur"></textarea>
          </div>
        </div>

        <div class="form-group">
          <label for="inputRole" class="col-lg-2 control-label">Roles</label>
          <div class="col-lg-10">
            <input name='inputRole' class="form-control" id="inputRole" placeholder="Roles" type="text">
          </div>
        </div>

        <div class="form-group">
          <label for="inputRecomp" class="col-lg-2 control-label">Récompenses</label>
          <div class="col-lg-10">
            <input name='inputRecomp' class="form-control" id="inputRecomp" placeholder="Récompenses" type="text">
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
  @parent<li><a href="{{ route('acteurs.creer') }}">Creer un Acteur</a></li>
@endsection
