<?php

use App\Http\Controllers\filterController;
use App\Http\Controllers\cont;
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

Route::resource('/', cont::class);

Route::view('/contact','contact')->name('contact');

Route::view('/search', 'search')->name('search');

Route::POST('/',[cont::class,'search'])->name('res');

Route::fallback(function () {
    return "<h1>this route doesn't exist</h1>";
});
