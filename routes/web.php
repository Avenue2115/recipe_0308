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
   //return redirect('/food');
   return redirect('/RecipeSummary');
});

Route::resource('food', 'FoodController');
Route::resource("MasterFoodGroup", 'MasterFoodGroupController');
Route::get('RecipeSummary','RecipeListController@index');
Route::get('RecipeSummary/{id}','RecipeListController@search');

/*
 Route::get('/', function () {
    return view('welcome');
 });
 */
