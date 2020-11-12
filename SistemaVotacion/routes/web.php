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



Route::resource('postulantes', 'App\Http\Controllers\PostulantesController');
Route::resource('votantes', 'App\Http\Controllers\VotantesController');
Route::resource('papeletas', 'App\Http\Controllers\PapeletasController');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'updateVotes'])->name('home');
Route::resource('/home', 'App\Http\Controllers\HomeController');
Route::resource('/', 'App\Http\Controllers\HomeController');

