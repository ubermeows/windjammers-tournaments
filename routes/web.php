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
Route::prefix(LaravelLocalization::setLocale())->group(function () {
    Route::get('/', 'TournamentController@index')->name('index');
    Route::get('rules', 'TournamentController@rules')->name('rules');
    Route::get('{tournament_slug}', 'TournamentController@show')->name('show');
});
