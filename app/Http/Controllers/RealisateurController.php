<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Models\Realisateur;
use Illuminate\Http\Request;



class RealisateurController extends Controller{
  public function index(){

    // Je récupère la liste de mes films
    // depuis le Model Movies
    $realisateur = Realisateur::allRealisateur();


    // j'appelle ma vue en lui transférant tous mes films
    return view('realisateur/index', ['realisateur'=>$realisateur]);
  }


  public function creer(){

    return view('realisateur/creer');

  }//endFunction

  // methode pour receptionner des donnée formulaire envoyée
  public function store(Request $request){

    Realisateur::storeData($request);
    // dump($request); //var dump des donnée envoyée
    // exit(); //arret du script

    return redirect()->route('realisateur.index');
  }//endFunction

  // Delete MoviesController

    public static function suppRealisateur($id){

      Realisateur::deleteRealisateur($id);


      return redirect()
      ->route('realisateur.index')
      ->with('success', "Le realisateur a été supprimé");

    }
















}



 ?>
