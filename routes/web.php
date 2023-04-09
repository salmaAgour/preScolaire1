<?php

use App\Http\Controllers\filterController;
use App\Http\Controllers\cont;
use App\Http\Controllers\preScolaireController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::resource('prescolaire', cont::class);
Route::resource('prescolaires', preScolaireController::class);

Route::get('/', function () {
    return view('layout');
});
Route::view('prescolaire/contact','contact')->name('contact');

Route::view('prescolaire/search', 'search');

Route::POST('prescolaire','App\Http\Controllers\preScolaireController@search');

Route::fallback(function () {
    return "<h1>this route doesn't exist</h1>";
});
