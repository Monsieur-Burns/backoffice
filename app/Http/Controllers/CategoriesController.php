<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class CategoriesController extends Controller{
  public function index(){

    // Je récupère la liste de mes films
    // depuis le Model Movies
    $categories = Categories::allCategories();


    // j'appelle ma vue en lui transférant tous mes films
    return view('categories/index', ['categories'=>$categories]);
  }

  public function creer(){

    return view('categories/creer');

  }//endFunction

// methode pour receptionner des donnée formulaire envoyée
  public function store(Request $request){

    $validator = Validator::make($request->all(),[
      'inputTitre' => 'required|min:3|max:255|unique:movies,title',
      'inputImage' => 'image',
    ],
    [
      'inputTitre.unique'=>'Le nom du film existe déjà dans la base de donnée',
      'inputTitre.required'=>'Le champs titre est obligatoire',
      'inputTitre.min'=>'Le champs titre doit contenir 3 caractères minimum',
      'inputTitre.max'=>'Le champs titre doit contenir 255 caractères maximum',
      'required'=>'Champs obligatoire',

    ]);

    // si le validation echoue
    if ($validator->fails()) {

      //redirection
      return redirect()->route('categories.creer')
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

        $destinationPath = public_path().'/uploads/coverCategories';
        // public_path -> chemin publique
        // J'iindique ou stocker le fichier dans le serveur

        $file->move($destinationPath, $filename);
      } // attention, rajouter le parametre $filename dans la requete de store et mofdifier la fonction pour inclure le param dans le Model



    Categories::storeData($request, $filename);
    // dump($request); //var dump des donnée envoyée
    // exit(); //arret du script

    return redirect()->route('categories.index');
  }//endFunction



// Delete Categories

    public static function suppCategories($id){

      Categories::deleteCategories($id);


      return redirect()
      ->route('categories.index')
      ->with('success', 'La categorie a été supprimée');

    }





}



 ?>
