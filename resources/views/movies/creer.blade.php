@extends('layout')

@section('content')


  <div class="FormulaireCreer col-md-8">
    <form enctype="multipart/form-data" class="form-horizontal" action=' {{ route('movies.store') }} ' method='post'>
{{-- enctype="multipart/form-data" => attribut obligatoire pour pouvoir uploader autre chose que des données, image, fichier, etc... --}}

{{-- Générer un div Alert avec toute les erreurs --}}

      {{-- foreche pour récuperer les erreur liées à la validation --}}
      @foreach ($errors->all() as $error)

        <div class="alert alert-warning alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <strong>Erreur!</strong> {{ $error }}
        </div>

      @endforeach

{{-- Fin Générer un div Alert avec toute les erreurs --}}


      {{ csrf_field() }} <!-- Jetton de sécurité Laravel -->
      <fieldset>
        <legend>Créer un film</legend>
        <div class="form-group">
          <label for="inputTitre" class="col-lg-2 control-label">Titre</label>
          <div class="col-lg-10">
            <input name='inputTitre' class="form-control" id="inputTitre" placeholder="Titre du film" type="text">



{{-- Fin Générer un div Alert avec un eerreur sous le champs concerné --}}
            @if ($errors->has('inputTitre'))

              <div class="alert alert-warning alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>Erreur!</strong> {{ $errors->first('inputTitre') }}
              </div>

            @endif
          </div>
        </div>

        <div class="form-group">
          <label for="inputDesc" class="col-lg-2 control-label">Description</label>
          <div class="col-lg-10">
            <input name='inputDesc' class="form-control" id="inputDesc" placeholder="Description du film" type="text">
          </div>
        </div>

        <div class="form-group">
          <label for="textArea" class="col-lg-2 control-label">Synopsis</label>
          <div class="col-lg-10">
            <textarea name='inputSynopsis' class="form-control" rows="3" id="textArea" placeholder="Synopsis du film"></textarea>
          </div>
        </div>

        <div class="form-group">
          <label for="inputImage" class="col-lg-2 control-label">Affiche du film</label>
          <div class="col-lg-10">
            <input  accept="image/*" name='inputImage' class="form-control" id="inputImage" type="file">
            {{-- accept => renseigner avec MIME Type --}}
          </div>
        </div>

        <div class="form-group">
          <label for="textArea" class="col-lg-2 control-label">Bande Annonce</label>
          <div class="col-lg-10">
            <textarea name='inputTrailer' class="form-control" rows="3" id="textArea" placeholder="<iframe>"></textarea>
          </div>
        </div>

        <div class="form-group">
          <label for="inputLang" class="col-lg-2 control-label">Langue du film</label>
          <div class="col-lg-10">
            <input name='inputLang' class="form-control" id="inputLang" placeholder="Langue du film" type="text">
          </div>
        </div>
        <div class="form-group">
          <label for="select" class="col-lg-2 control-label">BO</label>
          <div class="col-lg-10">
            <select name='inputBO'class="form-control" id="select">
              <option value="fr">Français</option>
              <option value="vo">Version Originale</option>
              <option value="vosta">Version originale sous-titré anglais</option>
              <option value="vostfr">Version originale sous-titré français</option>
            </select>
          </div>
        </div>

        <div class="form-group">
          <label for="inputRelease" class="col-lg-2 control-label">Date de sortie</label>
          <div class="col-lg-10">
            <input name='inputRelease' class="form-control" id="inputRelease" placeholder="dd/mm/YYYY" type="text">
          </div>
        </div>


        <div class="form-group">
          <label for="inputDuree" class="col-lg-2 control-label">Durée film</label>
          <div class="col-lg-10">
            <input name='inputDuree' class="form-control" id="inputDuree" placeholder="hh:mm" type="text">
          </div>
        </div>

        <div class="form-group">
          <label for="inputAnnee" class="col-lg-2 control-label">Annee de production</label>
          <div class="col-lg-10">
            <input name='inputAnnee' class="form-control" id="inputAnnee" placeholder="Année de production du film" type="text">
          </div>
        </div>

        <div class="form-group">
          <label for="inputBudget" class="col-lg-2 control-label">Budget du film</label>
          <div class="col-lg-10">
            <input name='inputBudget' class="form-control" id="inputBudget" placeholder="Budget de production en dollar" type="text">
          </div>
        </div>


        <div class="form-group">
          <label class="col-lg-2 control-label">Visibilité DB</label>
          <div class="col-lg-10">
            <div class="radio">
              <label>
                <input name="inputVisible" id="optionsRadios1" value="1" checked="" type="radio">
                Visible
              </label>
              <label>
                <input name="inputVisible" id="optionsRadios2" value="0" type="radio">
                Non Visible
              </label>
            </div>
          </div>
        </div>

        <div class="form-group">
          <div class="col-lg-10 col-lg-offset-2">
            <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-save"></i>  Ajouter</button>
          </div>
        </div>
      </fieldset>
    </form>

  </div>




















@endsection

@section('breadcrumb')
  @parent<li><a href="{{ route('movies.creer') }}">Creer un film</a></li>
@endsection
