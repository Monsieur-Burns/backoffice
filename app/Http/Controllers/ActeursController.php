<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Models\Acteurs;
use Illuminate\Http\Request;


class ActeursController extends Controller{
  public function index(){

    // Je récupère la liste de mes films
    // depuis le Model Movies
    $acteurs = Acteurs::allActeurs();


    // j'appelle ma vue en lui transférant tous mes films
    return view('acteurs/index', ['acteurs'=>$acteurs]);
  }


  public function creer(){

    return view('acteurs/creer');

  }//endFunction

  // methode pour receptionner des donnée formulaire envoyée
  public function store(Request $request){

    Acteurs::storeData($request);
    // dump($request); //var dump des donnée envoyée
    // exit(); //arret du script

    return redirect()->route('acteurs.index');
  }//endFunction


  // Delete MoviesController

    public static function suppActeurs($id){

      Acteurs::deleteActeurs($id);


      return redirect()
      ->route('acteurs.index')
      ->with('success', "L'acteur a été supprimé");

    }






















}



 ?>
