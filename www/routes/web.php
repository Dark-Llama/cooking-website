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
    Route::get('/list', 'RecipeController@list')->name('recipe-list');
    Route::get('/list/{id?}', 'RecipeController@edit_get')->name('recipe-edit');
    Route::post('/list/{id?}', 'RecipeController@edit_post');

});
