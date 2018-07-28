<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('countries', 'CountriesController@index');
Route::get('countries/{id}', 'CountriesController@show');
Route::get('states', 'StatesController@index');
Route::get('states/{id}', 'StatesController@show');
Route::get('cities', 'CitiesController@index');
Route::get('cities/{id}', 'CitiesController@show');
Route::get('shows', 'ShowsController@index');
Route::get('shows/{id}', 'ShowsController@show');
Route::get('categories', 'CategoriesController@index');
Route::get('categories/{id}', 'CategoriesController@show');