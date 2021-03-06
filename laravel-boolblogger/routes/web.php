<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

// Route::get('/home', 'Guest\HomeController@index')->name('home');

Route::middleware('auth') // § intermediario che si assicura che il contenuto sia mostrato solo ad utenti loggati
    ->namespace('Admin') // # aggiunge come prefisso sui controller contenuti nel gruppo Admin come namespace
    ->prefix('admin')  // ? aggiunge come prefisso sui controller contenuti nel gruppo admin come prefisso agli URI
    ->name('admin.')   // § aggiunge come prefisso sui controller contenuti nel gruppo admin come prefisso ai name
    ->group(function(){
        // # inserisco qui le mie rotte riservate agli admin
        Route::get('/', 'HomeController@index')->name('home');   // | Aggiunta facoltativa ->middleware('password.confirm');
        Route::resource('posts', 'PostController');
        Route::resource('categories', 'CategoryController');
    });

Route::get('/test', function(){
    return view('guest.test');
});

Route::get('/contacts', 'Guest\ContactController@contact')->name('guest.contact');
Route::post('/contacts', 'Guest\ContactController@contactMailSender')->name('guest.storeContact');
Route::get('/thanks', 'Guest\ContactController@thanks')->name('guest.thanks');

Route::get('/latest-posts', 'Guest\PostController@index')->name('guest.posts');

// # tutte le altre rotte -> reindirizzale alla home dei guest
Route::get('/{any}', 'Guest\HomeController@index')->where('any','.*');