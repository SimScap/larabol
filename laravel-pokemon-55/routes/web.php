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

// Route::get('/pokemons/', "PokemonController@index")->name("pokemons.index");
// Route::get('/pokemons/{id}', "PokemonController@show")->name("pokemons.show");

// Route::resource('pokemons', 'PokemonController');
Route::resource('habitats', 'HabitatsController');

Route::prefix('pokemons')
    ->name("pokemons.")
    ->group(function () {
        Route::get('', "PokemonController@index")->name("index");
        Route::get('/{id}', "PokemonController@show")->name("show");
    });

Route::get('/', "Guest\HomeController@home")->name("guest.home");