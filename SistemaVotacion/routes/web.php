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
Route::resource('postulantes', 'App\Http\Controllers\PapeletasController');
