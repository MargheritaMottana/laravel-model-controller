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

// // Models (importato grazie al namespace)
// use App\Models\Movie;

// Controller (importato)
use App\Http\Controllers\Guest\PageController;

// Route::get('/', function () {

    // // per testare il collegamento con il database, mi salvo i movies
    // $movies = Movie::all();
    // // e li mostro in pagina
    // dd($movies);

    // // per poter utilizzare i dati del database
    // return view('welcome', compact('movies'));
    
// });

// rotta per utilizzare le funzioni del controller (che in questo caso, si occuperà di mostrare le cose in pagina)
Route::get('/', [PageController::class, 'index'])->name('guest.welcome');
