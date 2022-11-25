<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ConferencesController;
use App\Http\Controllers\LangController;
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


//main page
Route::get('/', [ConferencesController::class, 'index'])->name('conferences.index');

//conferences CRUD
Route::resource('conferences', ConferencesController::class);

//auth
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login.form');
Route::post('login', [LoginController::class, 'login'])->name('login');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

//language
Route::get('lang/change/{lang}', [LangController::class, 'change'])->name('lang.change');
