<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
use Illuminate\Http\Request;
use \DateTime;


/**
 *
 */
class Acteurs extends Model
{


  protected $table = 'actors';




  public static function allActeurs()
    {
      $resultat = DB::table('actors')->get();

    return $resultat;
    }


  //Methoide qui enregistre en BDD le film issu du formulaire
  public static function storeData(Request $request){

    DB::table('actors')->insert([
      'firstname' => $request->inputPrenom,
      'lastname' => $request->inputNom,
      'dob' => DateTime::createFromFormat('d/m/Y',$request->inputDOB),
      'city' => $request->inputCity,
      'image' => $request->inputImage,
      'nationality' => $request->inputNationalite,
      'biography'=>$request->inputBio,
      'roles'=>$request->inputRole,
      'recompenses'=>$request->inputRecomp,
    ]);
  }


  // Delete MoviesController
  public static function deleteActeurs($id){

    DB::table('actors')->where('id', $id)->delete();

  }











  }//endClass




 ?>
