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


// # prendo un'oggetto di tipo Route e chiamo su di esso un metodo statico con "::", un po' come . in js
// § e gli fornisco due argomenti: il primo è una stringa, il secondo è una callback function
Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/contacts', function () {
    return view('contacts');
})->name('contatti');

Route::get('/maps', function () {
    return "MAPS ARE OFFLINE";
});

Route::get('/blog', function () {

    $array = [ 'rosso', 'bianco', 'blu'];

    $data = [
        'nome' => 'Luigi',
        'cognome' => 'Micco',
        'ruolo' => 'tutor',
        'collega' => 'Alex',
        'utenti' =>[
            'gianni',
            'giuseppina',
            'giovanna',
            'fernandina',
            'sora lella'
        ],
        "array1" => $array,
    ];

    return view('articles.blog', $data);
});