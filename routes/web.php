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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', function() {
    return 'Welcome to the Home Page';
})->name('home.index');

Route::get('/contact', function() {
    return 'Contact';
})->name('home.contact');

//Route::get('/articles/{id}/{token}', function($id, $token) {
////    return "Article $id, $token";
////})->name('articles.show');
////
//////days? reiskia, kad gali netureti parametro, bet tada per parametra funkcijos reikia default reiksmes
////Route::get('/articles/recent/{days?}', function($days=25) {
////    return "Articles from $days days ago";
////})->name('articles.recent');


Route::get('/conference', function() {
    return view('home.conference');
})->name('home.conference');

Route::resource('articles', \App\Http\Controllers\ArticlesController::class);