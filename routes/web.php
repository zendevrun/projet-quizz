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

Route::get('facture/{n}', function($n) {
    return view('facture')->with('numero', $n);
});
Route::get('contact', function() {
    return "C'est moi le contact.";
});
Route::get('article/{n}', function($n) {
    return view('article/{n}')->withNumero($n);
})->where('n', '[0-9]+');

Route::get('article/{n}', function($n) {
    return view('article')->with('numero', $n);
})->where('n', '[0-9]+');
Route::get('{n}', function($n) {
    return 'Je suis la page ' . $n . ' !';
})->where('n', '[1-3]');
Route::get('/R', function() {
  return 'Je suis la page d\'accueil !';
})->name('home');
