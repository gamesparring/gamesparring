<?php

use Illuminate\Support\Facades\Route;
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

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Route::group(['prefix' => LaravelLocalization::setLocale()], function()
{
    Auth::routes();
    /** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
    Route::get('/',                     ['as' => 'index',           'uses' => 'PageController@index']);
    Route::get('/home',                 ['as' => 'home',            'uses' => 'HomeController@index']);
    Route::get('/articles',             ['as' => 'articles',        'uses' => 'PostController@index']);
    Route::get('/articles/{slug}',      ['as' => 'articles.show',   'uses' => 'PostController@show']);
    Route::get('/resultats',            ['as' => 'resultats',       'uses' => 'ResultatsController@index']);
    Route::get('/tournaments',          ['as' => 'tournaments',     'uses' => 'TournamentController@index']);

});

