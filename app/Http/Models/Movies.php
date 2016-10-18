<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
use Illuminate\Http\Request;


/**
 *
 */
class Movies extends Model
{


  protected $table = 'movies';




  public static function allMovies()
    {
      $resultat = DB::table('movies')->get();

    return $resultat;
    }


//Methoide qui enregistre en BDD le film issu du formulaire
public static function storeData(Request $request, $filename){

  DB::table('movies')->insert([
    'title' => $request->inputTitre,
    'synopsis' => $request->inputSynopsis,
    'description' => $request->inputDesc,
    'image' => asset('/uploads/coverMovies/'.$filename),
    // asset() permet de générer une url à partir du dossier plublic
    'trailer' => $request->inputTrailer,
    'languages'=>$request->inputLang,
    'bo'=>$request->inputBo,
    'annee'=>$request->inputAnnee,
    'duree'=>$request->inputDuree,
    'visible'=>$request->inputVisible,
    'budget'=>$request->inputBudget,
    'date_release'=>$request->inputRelease,
  ]);
}

  public static function setMoviesVisibility($id, $visible){

    DB::table('movies')
    ->where('id', $id)
    ->update(['visible' => $visible]);



}// end setMovies

  public static function setMoviesCover($id, $cover){

    DB::table('movies')
    ->where('id', $id)
    ->update(['cover' => $cover]);

}// end setMovies


  public static function deleteMovies($id){

    DB::table('movies')->where('id', $id)->delete();

  }


  public static function searchMovies($keywordSearch){

    $resultat = DB::table('movies')
      ->where('title', 'like', '%'.$keywordSearch.'%')
      ->orWhere('synopsis', 'like', '%'.$keywordSearch.'%')
      ->orWhere('description', 'like', '%'.$keywordSearch.'%')

      ->get();

      return $resultat;
  }


}
 ?>
