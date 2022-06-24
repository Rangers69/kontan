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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/detail', [App\Http\Controllers\HomeController::class, 'detail'])->name('detail');
Route::get('/debt', [App\Http\Controllers\HomeController::class, 'debt'])->name('debt');
Route::get('/informasi', [App\Http\Controllers\HomeController::class, 'informasi'])->name('informasi');
Route::get('/kredit', [App\Http\Controllers\HomeController::class, 'kredit'])->name('kredit');
Route::get('/fdc', [App\Http\Controllers\HomeController::class, 'fdc'])->name('fdc');
Route::get('/pefindo', [App\Http\Controllers\HomeController::class, 'pefindo'])->name('pefindo');
Route::get('/nak', [App\Http\Controllers\HomeController::class, 'nak'])->name('nak');
Route::get('/bunga', [App\Http\Controllers\HomeController::class, 'bunga'])->name('bunga');
