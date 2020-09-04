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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('elevage', function () {
    return view('elevage');
})->name('elevage');

Route::name('vente_a_la_boutique.')->prefix('vente_a_la_boutique')->group(function () {
    Route::get('/', function () {
        return view('vente_a_la_boutique.index');
    })->name('index');

    Route::get('pates_et_plats_cuisines', 'PatesPlatsCuisinesController@index')
        ->name('pates_et_plats_cuisines');

    Route::get('viande_au_detail', 'ViandeDetailController@index')
        ->name('viande_au_detail');
});

Route::name('admin.')->prefix('admin')->middleware(['auth'])->group(function() {
    Route::get('/', function () {
        return view('admin.index');
    });
});

Route::get('test', 'TestsController@index');

Auth::routes();