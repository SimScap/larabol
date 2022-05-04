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


Route::get('/home', function () {
    $data = [
        'day' => '04',
        'month' => 'May',
        'year' => '2022',
        'username' => 'utente55',
        'email' => 'utente55@mailtarocca.com'
    ];

    return view('guest.home', $data);
})->name('guest-home');

Route::get('/products', function () {
    $pastas = config('pastas');
    return view('guest.products', ["pastas" => $pastas]);
})->name('products-page');
