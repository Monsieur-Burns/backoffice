<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
use Illuminate\Http\Request;


/**
 *
 */
class Categories extends Model
{


  protected $table = 'categories';




  public static function allCategories()
    {
      $resultat = DB::table('categories')->get();

    return $resultat;
    }

  //Methoide qui enregistre en BDD le film issu du formulaire
  public static function storeData(Request $request, $filename){

    DB::table('categories')->insert([
      'title' => $request->inputTitre,
      'description' => $request->inputDesc,
      'image' => asset('/uploads/coverCategories/'.$filename),

    ]);
  }

  public static function deleteCategories($id){

    DB::table('categories')->where('id', $id)->delete();

  }
















  }





 ?>
