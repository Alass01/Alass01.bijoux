<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//                     ROUTE POUR LES STOCKS

Route::get('stocks','App\Http\Controllers\Api\StocksController@index');
Route::post('stocks','App\Http\Controllers\Api\StocksController@store');
Route::get('stocks/{id}','App\Http\Controllers\Api\StocksController@show');
Route::put('stocks/{id}','App\Http\Controllers\Api\StocksController@update');
Route::delete('stocks/{id}','App\Http\Controllers\Api\StocksController@destroy');

//                     ROUTE POUR LES COMMANDES

Route::get('commandes','App\Http\Controllers\Api\CommandesController@index');
Route::post('commandes','App\Http\Controllers\Api\CommandesController@store');
Route::get('commandes/{id}','App\Http\Controllers\Api\CommandesController@show');
Route::put('commandes/{id}','App\Http\Controllers\Api\CommandesController@update');
Route::delete('commandes/{id}','App\Http\Controllers\Api\CommandesController@destroy');

//                     ROUTE POUR LES CLIENTS

Route::get('clients','App\Http\Controllers\Api\ClientsController@index');
Route::post('clients','App\Http\Controllers\Api\ClientsController@store');
Route::get('clients/{id}','App\Http\Controllers\Api\ClientsController@show');
Route::put('clients/{id}','App\Http\Controllers\Api\ClientsController@update');
Route::delete('clients/{id}','App\Http\Controllers\Api\ClientsController@destroy');

//                     ROUTE POUR LES PRODUITS CONTENIR  PC

Route::get('contenir_p_cs','App\Http\Controllers\Api\Contenir_p_c_Controller@index');
Route::post('contenir_p_cs','App\Http\Controllers\Api\Contenir_p_c_Controller@store');
Route::get('contenir_p_cs/{id}','App\Http\Controllers\Api\Contenir_p_c_Controller@show');
Route::put('contenir_p_cs/{id}','App\Http\Controllers\Api\Contenir_p_c_Controller@update');
Route::delete('contenir_p_cs/{id}','App\Http\Controllers\Api\Contenir_p_c_Controller@destroy');


//                     ROUTE POUR LES PRODUITS CONTENIR P S

Route::get('contenir_p_ss','App\Http\Controllers\Api\Contenir_p_c_Controller@index');
Route::post('contenir_p_ss','App\Http\Controllers\Api\Contenir_p_c_Controller@store');
Route::get('contenir_p_ss/{id}','App\Http\Controllers\Api\Contenir_p_c_Controller@show');
Route::put('contenir_p_ss/{id}','App\Http\Controllers\Api\Contenir_p_c_Controller@update');
Route::delete('contenir_p_ss/{id}','App\Http\Controllers\Api\Contenir_p_c_Controller@destroy');

//                     ROUTE POUR LES PRODUITS STOCKS

Route::get('contenir_p_ss','App\Http\Controllers\Api\Contenir_p_s_Controller@index');
Route::post('contenir_p_ss','App\Http\Controllers\Api\Contenir_p_s_Controller@store');
Route::get('contenir_p_ss/{id}','App\Http\Controllers\Api\Contenir_p_s_Controller@show');
Route::put('contenir_p_ss/{id}','App\Http\Controllers\Api\Contenir_p_s_Controller@update');
Route::delete('contenir_p_ss/{id}','App\Http\Controllers\Api\Contenir_p_s_Controller@destroy');

//                        ROUTE POUR LES FOURNISSEURS

Route::get('fournisseurs','App\Http\Controllers\Api\FournisseurController@index');
Route::post('fournisseurs','App\Http\Controllers\Api\FournisseurController@store');
Route::get('fournisseurs/{id}','App\Http\Controllers\Api\FournisseurController@show');
Route::put('fournisseurs/{id}','App\Http\Controllers\Api\FournisseurController@update');
Route::delete('fournisseurs/{id}','App\Http\Controllers\Api\FournisseurController@destroy');



//                     ROUTE POUR LES PRODUITS 

Route::get('produits','App\Http\Controllers\Api\ProduitsController@index');
Route::post('produits','App\Http\Controllers\Api\ProduitsController@store');
Route::get('produits/{id}','App\Http\Controllers\Api\ProduitsController@show');
Route::put('produits/{id}','App\Http\Controllers\Api\ProduitsController@update');
Route::delete('produits/{id}','App\Http\Controllers\Api\ProduitsController@destroy');
