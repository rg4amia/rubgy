<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

    Route::get('/login', 'SessionController@create')->name('login');
    Route::get('/logout', 'SessionController@destroy');
    Route::get('/forgot-password', 'SessionController@recovery');
    Route::post('/login', 'SessionController@store');
    Route::resource('versement', 'VersementController');
    Route::resource('categorie', 'CategorieController');
    Route::resource('eleve', 'EleveController');
    Route::resource('compte', 'CompteController');
    Route::post('/getmontant/', 'AjaxController@compte_montant')->name('get.montant');
    Route::post('/setacedemic/', 'AnneescolaireController@SetAcademic')->name('set.acedemic');

