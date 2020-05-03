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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'recipes'], function()
{ 
    Route::get('/list',         'RecipeController@list_get')->name('recipe-list');
    Route::get('/edit/{id?}',   'RecipeController@edit_get')->name('recipe-edit');
    Route::get('/view/{id}',    'RecipeController@view_get')->name('recipe-view');
    Route::post('/edit/{id?}',  'RecipeController@edit_post');
    Route::get('/',             'RecipeController@browse_get')->name('browse-get');

});
