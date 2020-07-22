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
Route::get('/',                 ['as' => 'index',           'uses' => 'PageController@index']);
Route::get('/post/{slug}',                 ['as' => 'post.show',           'uses' => 'PostController@show']);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
