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
    return redirect('login');
});

Route::get('registrazione', 'App\Http\Controllers\ControllerRegistrazione@index');
Route::get('registrazione/username/{q}', 'App\Http\Controllers\ControllerRegistrazione@checkUsername');
Route::get('registrazione/email/{q}', 'App\Http\Controllers\ControllerRegistrazione@checkEmail');
Route::post('registrazione', 'App\Http\Controllers\ControllerRegistrazione@createUser');

Route::get('login', 'App\Http\Controllers\ControllerLogin@index');
Route::post('login','App\Http\Controllers\ControllerLogin@checkLogin');
Route::get('login/checkCredenziali/{username}/{password}','App\Http\Controllers\ControllerLogin@checkCredenziali');

Route::get('logout','App\Http\Controllers\ControllerAccount@logout');

Route::get('account', 'App\Http\Controllers\ControllerAccount@index');

Route::get('index', 'App\Http\Controllers\ControllerIndex@index');
Route::get('index/inizializza', 'App\Http\Controllers\ControllerIndex@inizializza');
Route::get('index/inserisci_piano/{piano}','App\Http\Controllers\ControllerIndex@inserisciPiano');

Route::get('scheda', 'App\Http\Controllers\ControllerScheda@index');
Route::get('scheda/inizializza', 'App\Http\Controllers\ControllerScheda@inizializza');
Route::get('scheda/inizializza_esercizi_utente', 'App\Http\Controllers\ControllerScheda@inizializza_esercizi_utente');
Route::get('scheda/aggiungi_esercizio/{esercizio}', 'App\Http\Controllers\ControllerScheda@aggiungiEsercizio');
Route::get('scheda/rimuovi_esercizio/{esercizio}', 'App\Http\Controllers\ControllerScheda@rimuoviEsercizio');

Route::get('ricerca_scheda', 'App\Http\Controllers\ControllerRicercaScheda@index');
Route::get('ricerca_scheda/inizializza', 'App\Http\Controllers\ControllerRicercaScheda@inizializza');
Route::get('ricerca_scheda/utente/{username}', 'App\Http\Controllers\ControllerRicercaScheda@ricerca_scheda_utente');

Route::get('playlists', 'App\Http\Controllers\ControllerPlaylists@index');
Route::get('playlists/{query}', 'App\Http\Controllers\ControllerPlaylists@show_spotify');