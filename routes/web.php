<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\AccueilController;


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

Route::get('/', [App\Http\Controllers\AccueilController::class, 'index' ])->name('accueil');

Route::resource('Commande',App\Http\Controllers\CommandeController::class);

Route::get('description/{id}',[App\Http\Controllers\DescriptionController::class, 'show' ])->name('description');

Route::resource('description',App\Http\Controllers\DescriptionController::class);

Route::resource('accueil',App\Http\Controllers\AccueilController::class);
Route::resource('produit',App\Http\Controllers\ProduitController::class);
Route::resource('event',App\Http\Controllers\EventController::class);


// ici nous avons les routes des API

Route::resource('stocks',App\Http\Controllers\Api\StocksController::class);
