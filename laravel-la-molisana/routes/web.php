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
    return view('guest.home');
})->name('general-homepage');

Route::get('/contacts', function () {
    $pastas = config('pastas');
    return view('guest.contacts');
})->name('guest-contacts');

Route::get('/products/', function () {
    $pastaList = config('pastas');
    return view('guest.products', ["pastas" => $pastaList]); // $pastas
})->name('guest-products');


Route::get('/products/{index}', function ($index) {
    // # Prendo tutti i tipi di pasta
    $pastaList = config('pastas');
    // § se e solo se:
    // § 1 - l'id è un numero 2 - maggiore/uguale di zero 3 - è minore della lunghezza dell'array di pasta
    if( is_numeric($index) && $index >= 0 && $index < count($pastaList)){
        // ? ritornami la view di dettaglio con l'unico tipo di pasta da mostrare
        return view('guest.detail',
        [
            // ? "nomeVariabile" => "valoreVariabile"
            "pasta" => $pastaList[$index],
        ]
    ); // $pasta
    } else {
        // | altrimenti scrivi a schermo l'errore 404 - Not found
        abort(404);
    }
})->name('guest-detail');
