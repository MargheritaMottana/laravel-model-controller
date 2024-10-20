<?php

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

// Models (importato grazie al namespace)
use App\Models\Movie;

Route::get('/', function () {

    // per testare il collegamento con il database, mi salvo i movies
    $movies = Movie::all();
    // e li mostro in pagina
    dd($movies);

    return view('welcome',[]);
    
});

// Route::get(PERCORSO CON CUI ARRIVARE ALLA PAGINA, FUNZIONE DI CALLBACK CHE MI CREA LA RISPOSTA DA DARE ALL UTENTE)
