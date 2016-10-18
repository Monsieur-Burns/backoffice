<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\MoviesController;
use App\Http\Models\Movies;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class MoviesController extends Controller{


  public function index(){

    // Je récupère la liste de mes films
    // depuis le Model Movies
    $movies = Movies::allMovies();


    // j'appelle ma vue en lui transférant tous mes films
    return view('movies/index', ['movies'=>$movies]);
  }


  public function creer(){

    return view('movies/creer');

  }//endFunction

// methode pour receptionner des donnée formulaire envoyée
  public function store(Request $request){

    $validator = Validator::make($request->all(),[
      'inputTitre' => 'required|min:3|max:255|unique:movies,title',
      'inputSynopsis' => 'min:3|max:255',
      'inputImage' => 'image',
      'inputRelease' => 'date_format:d/m/Y|after:now',
      'inputLang' => 'in:fr,en,it',
      'inputDuree' => 'integer|between:1000,1000000000',
      'inputBo' => 'in:vo, vost, vosta, vostfr',
    ],
    [
      'inputTitre.unique'=>'Le nom du film existe déjà dans la base de donnée',
      'inputTitre.required'=>'Le champs titre est obligatoire',
      'inputTitre.min'=>'Le champs titre doit contenir 3 caractères minimum',
      'inputTitre.max'=>'Le champs titre doit contenir 255 caractères maximum',
      'required'=>'Champs obligatoire',
      'integer'=>'Attention ce champs ne prend que des chiffres',
      'inputLang.in'=>"Le champs Langue n'accepte que les valeures suivantes : vo, vost, vosta, vostfr",
    ]);

    // si le validation echoue
    if ($validator->fails()) {

      //redirection
      return redirect()->route('movies.creer')
        ->withErrors($validator)//avec message d'erreur
        ->withInput();//remplissage de nos champs
    }

/// partie relative à l'upload de fichier a mettre après le validato/fail
    $filename = ''; //fichier vide
      if ($request->hasFile('inputImage')){ // si dans ma requete il un fichier dont le name est 'image' ou le nom de la variable name utilisée dans le formulaire
        $file = $request->file('inputImage');
        // je récupère le fichier image

        $filename = $file->getClientOriginalName();
        // je récupère le nom original di fichier

        $destinationPath = public_path().'/uploads/coverMovies';
        // public_path -> chemin publique
        // J'iindique ou stocker le fichier dans le serveur

        $file->move($destinationPath, $filename);
      } // attention, rajouter le parametre $filename dans la requete de store et mofdifier la fonction pour inclure le param dans le Model

    Movies::storeData($request, $filename);
    // dump($request); //var dump des donnée envoyée
    // exit(); //arret du script

    return redirect()
      ->route('movies.index')//redirection vers index
      ->with('success', 'Votre film a été ajouté avec succès');//ave message flash de succeqs, il faut rajouer un if dans la page de destination (@if (session('susscess')) div... {{ session('success)') }})
  }//endFunction

// Visibilité films
  public function setVisible($id, $visible){

    Movies::setMoviesVisibility($id, $visible);


    return redirect()
    ->route('movies.index')
    ->with('success', 'La visibilité du film a été modifiée');
  }

// Cover
  public function setCover($id, $cover){

    Movies::setMoviesCover($id, $cover);


    return redirect()
    ->route('movies.index')
    ->with('success', 'La cover du film a été modifiée');
  }


// Delete MoviesController

  public function suppMovies($id){

    Movies::deleteMovies($id);


    return redirect()
    ->route('movies.index')
    ->with('success', 'Le film a été supprimé');

  }

public function rechercheFilm(Request $request){
  // dump($request->rechercheFilm);
  // exit();

  $searchMovies = Movies::searchMovies($request->rechercheFilm);

  return view('movies/rechercheFilm',
              ['movies' => $searchMovies]);
              //return view('movies/rechercheFilm',['movies' => $searchMovies]);
              // ['movies' => $searchMovies] est le transporteur de donnée du controlleur à la vue

}





}// endClass
 ?>
