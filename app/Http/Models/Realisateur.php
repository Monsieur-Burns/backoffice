<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use DB;


/**
 *
 */
class Realisateur extends Model
{


  protected $table = 'directors';




  public static function allRealisateur()
    {
      $resultat = DB::table('directors')->get();

    return $resultat;
    }

  //Methoide qui enregistre en BDD le film issu du formulaire
  public static function storeData(Request $request){

    DB::table('directors')->insert([
      'firstname' => $request->inputPrenom,
      'lastname' => $request->inputNom,
      'dob' => DateTime::createFromFormat('d/m/Y',$request->inputDOB),
      'image' => $request->inputImage,
      'biography'=>$request->inputBio,
    ]);
  }

  // Delete MoviesController
  public static function deleteRealisateur($id){

    DB::table('directors')->where('id', $id)->delete();

  }

















  }




 ?>
