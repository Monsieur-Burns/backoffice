<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/




//startRoute Group authentication
Route::group(['prefix'=>'admin', 'middleware' => 'auth'], function(){

    Route::get('/',['as'=>'welcome', function () {
        return view('welcome');
    }]);
    // Route::get permet de créer des routes en GET (existe également en POST)
    // le premier parma est l'URI
    // le deuxieme param est une fonction anonyme
    Route::get('/about-us',['as'=> 'about-us', function () {
      // après l'uri, on retourne une vue à ajouter dans Ressources/views
        return view('about');
    }]);

    Route::get('/contact',['as' => 'contact', function () {
      // après l'uri, on retourne une vue à ajouter dans Ressources/views
        return view('contact');
    }]);

    Route::get('/faq',['as'=>'faq', function () {
      // après l'uri, on retourne une vue à ajouter dans Ressources/views
        return view('faq');
    }]);

    Route::get('/concept',['as'=>'concept', function () {
      // après l'uri, on retourne une vue à ajouter dans Ressources/views
        return view('concept');
    }]);

    Route::get('/ils-parlent-de-nous',['as'=>'ils-parlent-de-nous', function () {
      // après l'uri, on retourne une vue à ajouter dans Ressources/views
        return view('ils-parlent-de-nous');
    }]);



    //// Groupe de route
    /// je créer le groupe de route des le prefix movies en uri
    Route::group(['prefix'=>'movies'], function(){

        //Route en GET
        Route::get('/index',['as' => 'movies.index', 'uses'=>'MoviesController@index']); //end Route::get

        //Route en GET
        Route::get('/creer',['as' => 'movies.creer', 'uses'=>'MoviesController@creer']); //end Route::get

        Route::post('/store' ,['as' => 'movies.store', 'uses'=>'MoviesController@store']); //end Route::get)


    // Visibilité
        //Route en GET
        Route::get('/setVisible/{id}/{action}',['as' => 'movies.setVisible', 'uses'=>'MoviesController@setVisible']); //end Route::get

    // Cover
        //Route en GET
        Route::get('/setCover/{id}/{action}',['as' => 'movies.setCover', 'uses'=>'MoviesController@setCover']); //end Route::get

    //Delete Movies
        //Route en GET
        Route::get('/suppMovies/{id}',['as' => 'movies.suppMovies', 'uses'=>'MoviesController@suppMovies']); //end Route::get

        //Route en GET
        Route::get('/editer',['as' => 'movies.editer', function () {
          // view(dossier/vue)
            return view('movies/editer');
        }]); //end Route::get

        //Route en GET
        Route::get('/voir',['as' => 'movies.voir', function () {
          // view(dossier/vue)
            return view('movies/voir');
        }]); //end Route::get

        //Route en GET
        Route::get('/rechercheFilm',['as' => 'movies.rechercheFilm', 'uses'=>'MoviesController@rechercheFilm']); //end Route::get


      }); //end Route::group Movie


    // Groupe Catégories
      Route::group(['prefix'=>'categories'], function(){

          //Route en GET
            Route::get('/index',['as' => 'categories.index', 'uses'=>'CategoriesController@index']);

    // supprimer
            //Route en GET
            Route::get('/suppCategories/{id}',['as' => 'categories.suppCategories', 'uses'=>'CategoriesController@suppCategories']); //end Route::get


          //Route en GET
          Route::get('/creer',['as' => 'categories.creer', 'uses'=>'CategoriesController@creer']); //end Route::get

          Route::post('/store' ,['as' => 'categories.store', 'uses'=>'CategoriesController@store']); //end Route::get)

          //Route en GET
          Route::get('/editer',['as' => 'categories.editer', function () {
            // view(dossier/vue)
              return view('categories/editer');
          }]); //end Route::get

          //Route en GET
          Route::get('/voir',['as' => 'categories.voir', function () {
            // view(dossier/vue)
              return view('categories/voir');
          }]); //end Route::get

        }); //end Route::group Categories

    //Groupe Acteurs
      Route::group(['prefix'=>'acteurs'], function(){

          //Route en GET
            Route::get('/index',['as' => 'acteurs.index', 'uses'=>'ActeursController@index']);

            //Route en GET
            Route::get('/creer',['as' => 'acteurs.creer', 'uses'=>'ActeursController@creer']); //end Route::get

            Route::post('/store' ,['as' => 'acteurs.store', 'uses'=>'ActeursController@store']); //end Route::get)


    // supprimer
            //Route en GET
            Route::get('/suppActeurs/{id}',['as' => 'acteurs.suppActeurs', 'uses'=>'ActeursController@suppActeurs']); //end Route::get

          //Route en GET
          Route::get('/editer',['as' => 'acteurs.editer', function () {
            // view(dossier/vue)
              return view('acteurs/editer');
          }]); //end Route::get

          //Route en GET
          Route::get('/voir',['as' => 'acteurs.voir', function () {
            // view(dossier/vue)
              return view('acteurs/voir');
          }]); //end Route::get

        }); //end Route::group Acteurs


    //Groupe Réalisateur
      Route::group(['prefix'=>'realisateur'], function(){

          //Route en GET
          Route::get('/index',['as' => 'realisateur.index', 'uses'=>'RealisateurController@index']);

          //Route en GET
          Route::get('/creer',['as' => 'realisateur.creer', 'uses'=>'RealisateurController@creer']); //end Route::get

          Route::post('/store' ,['as' => 'realisateur.store', 'uses'=>'RealisateurController@store']); //end Route::get)

          //Route en GET
          Route::get('/editer',['as' => 'realisateur.editer', function () {
            // view(dossier/vue)
              return view('realisateur/editer');
          }]); //end Route::get

          //Route en GET
          Route::get('/voir',['as' => 'realisateur.voir', function () {
            // view(dossier/vue)
              return view('realisateur/voir');
          }]); //end Route::get


    // supprimer
          //Route en GET
          Route::get('/suppRealisateur/{id}',['as' => 'realisateur.suppRealisateur', 'uses'=>'RealisateurController@suppRealisateur']); //end Route::get

        }); //end Route::group Acteurs


}); //endRoute Group authentication

    /// AUTHENTIFICATION
    /// rajouté par php artisan make:auth
    Route::auth();

    Route::get('/', 'HomeController@index');


    // création d'un groupe de route derriere le prefix admin
